<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CloakerTest extends TestCase
{

    public function test_if_is_not_redirected(): void
    {
        $ip = '157.240.240.1';
        $this->withServerVariables(['REMOTE_ADDR' => $ip])
            ->get(route('home.show'))
            ->assertStatus(302);
    }

    public function test_if_redirected(): void
    {
        $ip = '8.8.8.8';
        $this->withServerVariables(['REMOTE_ADDR' => $ip])
            ->get(route('home.show'))
            ->assertStatus(302);
    }
}
