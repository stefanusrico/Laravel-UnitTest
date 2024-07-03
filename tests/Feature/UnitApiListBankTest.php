<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UnitApiListBankTest extends TestCase
{
    public function test_load_list_bank(): void
    {
        $response = $this->get('/api/bank/list');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'code',
                'info',
                'data' => [
                    '*' => [
                        'id',
                        'name',
                        'code'
                    ]
                ]
            ])
            ->assertJson([
                'code' => 0,
                'info' => 'Banks retrieved successfully'
            ]);

        $this->assertCount(98, $response->json('data'));
    }

    public function test_load_list_bank_dengan_filter_3_huruf(): void
    {
        $response = $this->get('/api/bank/list?data[name]=BCA');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'code',
                'info',
                'data' => [
                    '*' => [
                        'id',
                        'name',
                        'code'
                    ]
                ]
            ])
            ->assertJson([
                'code' => 0,
                'info' => 'Banks retrieved successfully'
            ]);

        $this->assertGreaterThan(0, count($response->json('data')));
        $this->assertStringContainsString('BCA', $response->json('data')[0]['name']);
    }

    public function test_load_list_bank_dengan_filter_kurang_dari_3_huruf(): void
    {
        $response = $this->get('/api/bank/list?data[name]=BC');

        $response->assertStatus(200)
            ->assertJson([
                'code' => 3,
                'info' => 'Keyword harus sama dengan atau lebih dari 3 karakter'
            ]);
    }
}