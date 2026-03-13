<?php

namespace Tests\Feature;

use Tests\TestCase;

class AppTest extends TestCase
{

    public function test_main_contains_links(): void
    {
        $response = $this->get('/');
        $response->assertSee('Books');
        $response->assertSee('Authors');
        $response->assertSee('Publishers');
    }

    public function test_named_routes_exist(): void
    {
        $this->assertEquals('/books', route('books', absolute: false));
        $this->assertEquals('/authors', route('authors', absolute: false));
        $this->assertEquals('/publishers', route('publishers', absolute: false));
    }

    public function test_main_page_contains_title(): void
    {
        $response = $this->get('/');
        $response->assertSee('Main');
    }

    public function test_books_page_contains_title(): void
    {
        $response = $this->get('/books');
        $response->assertSee('Books');
    }

    public function test_authors_page_contains_title(): void
    {
        $response = $this->get('/authors');
        $response->assertSee('Authors');
    }

    public function test_publishers_page_contains_title(): void
    {
        $response = $this->get('/publishers');
        $response->assertSee('Publishers');
    }

    public function test_main_page(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_books_page(): void
    {
        $response = $this->get('/books');

        $response->assertStatus(200);
    }

    public function test_authors_page(): void
    {
        $response = $this->get('/authors');

        $response->assertStatus(200);
    }

    public function test_publishers_page(): void
    {
        $response = $this->get('/publishers');

        $response->assertStatus(200);
    }
}
