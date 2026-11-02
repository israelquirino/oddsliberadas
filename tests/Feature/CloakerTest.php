<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CloakerTest extends TestCase
{

    public function test_if_is_not_redirected(): void
    {
//        $ip = '157.240.240.1';
        $ip = '136.121.16.4';
        $this->withServerVariables(['REMOTE_ADDR' => $ip])
            ->get(route('home.show'))
            ->assertStatus(200);
    }

    public function test_if_redirected(): void
    {
        $ip = '186.195.11.23';
        $this->withServerVariables(['REMOTE_ADDR' => $ip])
            ->get(route('home.show'))
            ->assertStatus(302);
    }
}
