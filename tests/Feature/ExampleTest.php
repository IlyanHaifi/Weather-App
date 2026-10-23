<?php

test('the application returns a successful response', function () {
    $response = $this->get('/');

    $response
        ->assertStatus(200)
        ->assertSee('Bienvenue sur votre application météo')
        ->assertSee('Fonctionnalités prévues');
});
