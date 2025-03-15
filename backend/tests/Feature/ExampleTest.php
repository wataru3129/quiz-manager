<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->artisan('migrate:fresh');

    User::factory()->create([
        'name' => 'test_db',
        'email' => 'test_db@test.com',
        'email_verified_at' => now(),
        'password' => Hash::make('password'),
    ]);
});

it('should create a new User', function () {
    $this->assertDatabaseCount('users', 1);
});
