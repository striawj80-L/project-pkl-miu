<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactPageTest extends TestCase
{
    public function test_contact_page_renders_the_reusable_navigation_and_contact_information(): void
    {
        $response = $this->get('/contact');

        $response
            ->assertOk()
            ->assertSee('Hubungi Kami')
            ->assertSee('Konsultasikan solusi yang Anda butuhkan')
            ->assertSee('ptmitrainovasinggul@yahoo.com')
            ->assertSee('contact-hero', false)
            ->assertSee('aria-current="page"', false);
    }
}
