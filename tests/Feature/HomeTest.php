<?php

it('greets the user if they are signed out', function () {
    $this->get('/')
    ->assertSee('Home')
    ->assertSee('Sign up to get started.');
});

it('show authenticated menu items if the user is signed in', function(){
    // sign in

    // acting as

    // check if we can see the correct navigation items

    // Up and running with pest (youtube) 4th video time 4:29pm
});
