<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UploadTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUploadPage()
    {
        //$this->assertTrue(true);
        $response = $this->get('/uploadfile');
        $response->assertStatus(302);
    }
}
