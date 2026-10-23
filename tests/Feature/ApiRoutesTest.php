<?php

namespace Tests\Feature;

use Tests\TestCase;

class ApiRoutesTest extends TestCase
{
    public function test_profil_endpoint_returns_profile_and_hobbies_as_an_array(): void
    {
        $this->getJson('/api/profil')
            ->assertOk()
            ->assertExactJson([
                'nama' => 'Faiz Nafil',
                'nim' => '225443032',
                'kelas' => '2AEC2',
                'hobi' => ['Doomscrolling'],
            ]);
    }

    public function test_tambah_endpoint_returns_numbers_and_their_sum(): void
    {
        $this->getJson('/api/tambah/7/5')
            ->assertOk()
            ->assertExactJson([
                'a' => 7,
                'b' => 5,
                'hasil' => 12,
            ]);
    }
}
