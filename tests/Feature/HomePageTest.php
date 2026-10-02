<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    public function test_home_page_is_the_default_page_and_shows_its_content_and_assets(): void
    {
        $response = $this->get(route('home'));

        $response
            ->assertOk()
            ->assertSee('Trusted IT Solutions for Faster Business Operations')
            ->assertSee('Solution for your Business')
            ->assertSee('Our Work')
            ->assertSee('Most Asked Question')
            ->assertSee(route('home'), false)
            ->assertSee(route('product'), false)
            ->assertSee(route('about'), false)
            ->assertSee(route('contact'), false)
            ->assertSee('aria-current="page"', false)
            ->assertSee(asset('images/home-it-inventory.png'), false)
            ->assertSee(asset('images/home-cn-app.png'), false)
            ->assertSee(asset('images/home-basic-app.png'), false)
            ->assertSee(asset('images/home-city.png'), false)
            ->assertSee(asset('images/home-ceisa.png'), false)
            ->assertSee(asset('images/home-team.png'), false)
            ->assertSee(asset('images/home-indonesia.png'), false);
    }

    public function test_product_navigation_opens_the_product_page(): void
    {
        $this->get(route('home'))
            ->assertOk()
            ->assertSee('href="'.route('product').'"', false);

        $this->get(route('product'))
            ->assertOk()
            ->assertSee('Pilihan Solusi Sesuai Kebutuhan Pabrik');
    }
}
