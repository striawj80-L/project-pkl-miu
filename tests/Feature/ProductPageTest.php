<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProductPageTest extends TestCase
{
    public function test_product_and_testimonial_page_renders_assets_and_contact_links(): void
    {
        $response = $this->get(route('product'));

        $response
            ->assertOk()
            ->assertSee('Pilihan Solusi Sesuai Kebutuhan Pabrik')
            ->assertSee('Dukungan Nyata dari Para Pemimpin Industri')
            ->assertSee('site-nav__links', false)
            ->assertSee('aria-controls="about-submenu"', false)
            ->assertSee('Our Timeline')
            ->assertSee('Capabilities')
            ->assertSee(route('home').'#faq-title', false)
            ->assertSee('All Product')
            ->assertSee(route('product').'#product-details-cn-app', false)
            ->assertSee(route('about').'#commitment', false)
            ->assertSee('aria-current="page"', false)
            ->assertSee('data-product-select="inventory"', false)
            ->assertSee('data-product-select="cn-app"', false)
            ->assertSee('data-product-select="internal-app"', false)
            ->assertSee('data-reveal="up"', false)
            ->assertSee('product-details-inventory-title', false)
            ->assertSee('product-details-cn-app-title', false)
            ->assertSee('product-details-internal-app-title', false)
            ->assertSee('Optimalkan Operasional Internal dengan Aplikasi yang Terintegrasi dan Efisien')
            ->assertSee('site-footer', false)
            ->assertSee('href="mailto:ptmitrainovasinggul@yahoo.com"', false)
            ->assertSee('Centralized Data Management')
            ->assertSee('Smart Workflow Automation')
            ->assertSee('product-details__inventory-layout', false)
            ->assertSee('class="product-details__video"', false)
            ->assertSee('controls', false)
            ->assertSee('preload="none"', false)
            ->assertSee(route('product.video'), false)
            ->assertSee(asset('images/ant-design_truck-outlined.png'), false)
            ->assertSee(asset('images/fa-solid_warehouse.png'), false)
            ->assertSee(asset('images/fluent-emoji-high-contrast_label.png'), false)
            ->assertSee(asset('images/foto-mr-ck.png'), false)
            ->assertSee(asset('images/foto-snoop-dog.png'), false)
            ->assertSee(asset('images/foto-napoleon.png'), false)
            ->assertSee(route('about'), false)
            ->assertSee(route('contact'), false);
    }

    public function test_inventory_video_supports_byte_range_requests_for_seeking(): void
    {
        $response = $this->get(route('product.video'), [
            'Range' => 'bytes=0-1023',
        ]);

        $response
            ->assertStatus(206)
            ->assertHeader('Content-Type', 'video/mp4')
            ->assertHeader('Accept-Ranges', 'bytes')
            ->assertHeader('Content-Range', 'bytes 0-1023/'.filesize(public_path('Video/Sistem MIU.mp4')))
            ->assertHeader('Content-Length', '1024');
    }
}
