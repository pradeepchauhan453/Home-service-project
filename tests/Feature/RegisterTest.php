<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

// it('has errors if the details are not provider', function () {
//     $this->post('/register')
//     ->assertSessionHasErrors(['name', 'email', 'password']);
// });

it('register page shows')->get('/auth/register')->assertStatus(200);

it('has errors if the details are not provider')
    ->post('/register')
    ->assertSessionHasErrors(['name', 'email', 'password']);

it('redirects authenticated user', function () {
    expect(User::factory()->create())->toBeRedirectedFor('/auth/register');
});
// it('registers the user', function(){
//     $this->post('/register',[
//         'name' => 'Raju',
//         'email' => 'Raju@gmail.com',
//         'password' => 'password'
//     ])
//     ->assertRedirect('/');

//     $this->assertDatabaseHas('users',[
//             'name' => 'Raju',
//             'email' => 'Raju@gmail.com'
//         ])

//     ->assertAuthenticated();
// });

it('registers the user')
    ->tap(function () {
        $this->post('/register',[
            'name' => 'Raju',
            'email' => 'Raju@gmail.com',
            'password' => 'password'
            ])

            ->assertRedirect('/');
    })

    ->assertDatabaseHas('users',[
        'email' => 'Raju@gmail.com'
    ])

    ->assertAuthenticated();