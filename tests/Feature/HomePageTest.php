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
            ->assertSee('Kami percaya efisiensi bukan hanya soal angka, tapi tentang bagaimana teknologi mempermudah manusia.')
            ->assertSee('Dengan CN App berbasis CEISA 4.0, kami membantu perusahaan menyatukan data lintas')
            ->assertSee('Mulai dari sistem inventaris IT, aplikasi internal kantor, hingga platform CN App (CEISA 4.0)')
            ->assertSee('Our Work')
            ->assertSee('Dari Pulau Jawa hingga Pulau Sumatera, kami telah berkolaborasi dengan lebih dari 30 perusahaan')
            ->assertSee('Kami turut berkontribusi dalam pengembangan sistem CEISA 4.0')
            ->assertSee('Most Asked Question')
            ->assertSee('Apa itu IT Inventory App dan bagaimana manfaatnya bagi bisnis?')
            ->assertSee('Apa keunggulan CN App (CEISA 4.0)?')
            ->assertSee('Apa itu Basic Internal App dan siapa yang cocok menggunakannya?')
            ->assertSee('Apakah solusi yang ditawarkan bisa disesuaikan (custom) dengan kebutuhan perusahaan kami?')
            ->assertSee('Apakah tersedia layanan after-sales dan maintenance?')
            ->assertSee('Apakah data perusahaan kami akan aman?')
            ->assertSee('Keamanan adalah prioritas utama kami. Setiap sistem yang kami bangun dilengkapi dengan enkripsi, role-based access, dan sistem autentikasi.')
            ->assertSee('Melayani client di seluruh Indonesia')
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
            ->assertSee(asset('images/indonesia-removebg-preview 1.png'), false);
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
