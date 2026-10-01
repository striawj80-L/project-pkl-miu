<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProductPageTest extends TestCase
{
    public function test_product_and_testimonial_page_renders_assets_and_contact_links(): void
    {
        $response = $this->get(route('home'));

        $response
            ->assertOk()
            ->assertSee('Pilihan Solusi Sesuai Kebutuhan Pabrik')
            ->assertSee('Dukungan Nyata dari Para Pemimpin Industri')
            ->assertSee('site-nav__links', false)
            ->assertSee('aria-current="page"', false)
            ->assertSee('data-product-select="inventory"', false)
            ->assertSee('data-product-select="cn-app"', false)
            ->assertSee('data-product-select="internal-app"', false)
            ->assertSee('data-reveal="up"', false)
            ->assertSee('product-details-inventory-title', false)
            ->assertSee('product-details-cn-app-title', false)
            ->assertSee('product-details-internal-app-title', false)
            ->assertSee(asset('images/ant-design_truck-outlined.png'), false)
            ->assertSee(asset('images/fa-solid_warehouse.png'), false)
            ->assertSee(asset('images/fluent-emoji-high-contrast_label.png'), false)
            ->assertSee(asset('images/foto-mr-ck.png'), false)
            ->assertSee(asset('images/foto-snoop-dog.png'), false)
            ->assertSee(asset('images/foto-napoleon.png'), false)
            ->assertSee(route('about'), false)
            ->assertSee(route('contact'), false);
    }
}
