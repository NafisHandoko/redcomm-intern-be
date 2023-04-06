<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetCommentsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $this->visit('/api/comment');
        $this->see('Amie Bashirian');
    }
}
