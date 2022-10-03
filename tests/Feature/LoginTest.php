<?php

use App\Models\User;

use Illuminate\Foundation\Testing\RefreshDatabase;

use function Pest\Laravel\get;
use function Pest\Laravel\post;

uses(RefreshDatabase::class);

it('show the login page')
    ->get('/auth/login')
    ->assertOk();

// it('redirects authenticated user', function () {
//     $user = User::factory()->create();

//     $this->actingAs($user)
//     ->get('/auth/login')

//     ->assertStatus(302);
// });

it('redirects authenticated user', function () {
    expect(User::factory()->create())->toBeRedirectedFor('/auth/login');
});


it('show an errors if the details are not provided')

    ->post('/login')
    ->assertSessionHasErrors(['email', 'password']);

// it('logs the user in', function(){
//     $user = User::factory()->create([
//         'password' => bcrypt('password')
//     ]);

//     post('/login', [
//         'email' =>$user->email,
//         'password' => 'password'
//     ])
//     ->assertRedirect('/');

//     $this->assertAuthenticated();
// });

it('logs the user in')->tap(function (){
    $user = User::factory()->create();

    post('/login', [
        'email' =>$user->email,
        'password' => 'password'
    ])
    ->assertRedirect('/');
})
    ->assertAuthenticated();

// 8th video 7min