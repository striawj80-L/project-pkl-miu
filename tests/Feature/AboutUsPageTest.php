<?php

namespace Tests\Feature;

use Tests\TestCase;

class AboutUsPageTest extends TestCase
{
    public function test_about_us_page_renders_its_sections_assets_and_navigation(): void
    {
        $response = $this->get(route('about'));

        $response
            ->assertOk()
            ->assertSee('PT Mitra Inovasi Unggul')
            ->assertSee('Our Timeline')
            ->assertSee('Development of CEISA 4.0 IT Inventory')
            ->assertSee('Why Us')
            ->assertSee('We Value')
            ->assertSee('Memenuhi Kebutuhan Customer')
            ->assertSee('site-footer', false)
            ->assertSee('href="tel:+6285814409262"', false)
            ->assertSee('data-reveal="left"', false)
            ->assertSee('data-reveal="right"', false)
            ->assertSee('aria-current="page"', false)
            ->assertSee(route('about'), false)
            ->assertSee(route('home'), false)
            ->assertSee(route('contact'), false)
            ->assertSee(asset('images/Logo MIU.png'), false)
            ->assertSee(asset('images/responsibility.jpg'), false)
            ->assertSee(asset('images/integrity.jpg'), false)
            ->assertSee(asset('images/inovation.jpg'), false);
    }
}
