<?php

test('check if home page is accessible', function () {
    $response = $this->get('/');

    // $response->assertStatus(200);

    expect($response->status())->toBe(200);
});