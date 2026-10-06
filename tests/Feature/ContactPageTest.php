<?php

namespace Tests\Feature;

use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;
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
            ->assertSee('href="mailto:ptmitrainovasinggul@yahoo.com"', false)
            ->assertSee('href="tel:+6285814409262"', false)
            ->assertSee('site-footer', false)
            ->assertSee('data-reveal="left"', false)
            ->assertSee('data-reveal="right"', false)
            ->assertSee('contact-hero', false)
            ->assertSee('aria-current="page"', false);
    }

    public function test_valid_contact_form_submission_sends_a_message_and_shows_confirmation(): void
    {
        config()->set('mail.contact_recipient', 'contact@example.com');

        Mail::fake([ContactMessage::class]);

        $response = $this->post(route('contact.send'), [
            'name' => 'Dewi Pratama',
            'email' => 'dewi@example.com',
            'company' => 'MIU',
            'message' => 'Saya ingin berkonsultasi tentang integrasi aplikasi.',
        ]);

        $response
            ->assertRedirect(route('contact'))
            ->assertSessionHas('contact_success', 'Terima kasih, pesan Anda berhasil dikirim.');

        Mail::assertSent(ContactMessage::class, function (ContactMessage $mail): bool {
            return $mail->name === 'Dewi Pratama'
                && $mail->email === 'dewi@example.com'
                && $mail->company === 'MIU'
                && $mail->messageText === 'Saya ingin berkonsultasi tentang integrasi aplikasi.'
                && $mail->hasTo('contact@example.com')
                && $mail->envelope()->replyTo[0]->address === 'dewi@example.com';
        });
    }

    public function test_contact_form_rejects_missing_required_fields_without_sending_email(): void
    {
        Mail::fake([ContactMessage::class]);

        $response = $this->from(route('contact'))->post(route('contact.send'), []);

        $response
            ->assertRedirect(route('contact'))
            ->assertSessionHasErrors([
                'name' => 'Nama wajib diisi.',
                'email' => 'Email wajib diisi.',
                'message' => 'Deskripsi wajib diisi.',
            ]);

        Mail::assertNothingOutgoing();
    }

    public function test_contact_form_rejects_an_invalid_email_and_a_short_message(): void
    {
        Mail::fake([ContactMessage::class]);

        $response = $this->from(route('contact'))->post(route('contact.send'), [
            'name' => 'Dewi Pratama',
            'email' => 'not-an-email',
            'message' => 'Tolong.',
        ]);

        $response
            ->assertRedirect(route('contact'))
            ->assertSessionHasErrors([
                'email' => 'Format email tidak valid.',
                'message' => 'Deskripsi minimal 10 karakter.',
            ]);

        Mail::assertNothingOutgoing();
    }

    public function test_contact_form_escapes_untrusted_content_in_the_email(): void
    {
        $mail = new ContactMessage(
            name: '<script>alert("x")</script>',
            email: 'dewi@example.com',
            company: null,
            messageText: '<script>alert("message")</script>',
        );

        $html = $mail->render();

        $this->assertStringContainsString('&lt;script&gt;', $html);
        $this->assertStringNotContainsString('<script>', $html);
    }

    public function test_contact_form_rejects_submissions_after_the_rate_limit(): void
    {
        Mail::fake([ContactMessage::class]);

        $submission = [
            'name' => 'Dewi Pratama',
            'email' => 'dewi@example.com',
            'message' => 'Saya ingin berkonsultasi tentang integrasi aplikasi.',
        ];

        foreach (range(1, 5) as $attempt) {
            $this->post(route('contact.send'), $submission)
                ->assertRedirect(route('contact'));
        }

        $this->post(route('contact.send'), $submission)
            ->assertTooManyRequests();

        Mail::assertSentTimes(ContactMessage::class, 5);
    }
}
