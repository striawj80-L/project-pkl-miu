<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response
            ->assertOk()
            ->assertSee('data-faq-answer', false)
            ->assertSee('id="faq-answer-inventory"', false)
            ->assertSee('Most Asked Question')
            ->assertSee('site-footer', false)
            ->assertSee('href="tel:+6285814409262"', false)
            ->assertSee('href="mailto:ptmitrainovasinggul@yahoo.com"', false);
    }
}
