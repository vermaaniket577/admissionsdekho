<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try {
            if (Schema::hasTable('settings')) {
                View::share('sitePhone', Setting::get('contact_phone', '+91 9643802216'));
                View::share('siteEmail', Setting::get('contact_email', 'info@admissionsdekho.com'));
                View::share('siteAddress', Setting::get('contact_address', 'AdmissionsDekho, India'));
                View::share('siteName', Setting::get('site_name', 'AdmissionsDekho'));
                View::share('siteWhatsapp', Setting::get('whatsapp_number', '+91 9643802216'));
                View::share('siteLinkedin', Setting::get('social_linkedin', 'https://linkedin.com/company/admissionsdekho'));
                View::share('siteFacebook', Setting::get('social_facebook', 'https://facebook.com/admissionsdekho'));
                View::share('siteInstagram', Setting::get('social_instagram', 'https://instagram.com/admissionsdekho'));
                View::share('siteYoutube', Setting::get('social_youtube', 'https://youtube.com/@admissionsdekho'));
                View::share('siteWhatsappLink', Setting::get('social_whatsapp', 'https://wa.me/919643802216'));
            }
        } catch (\Throwable $e) {
            // Silence provider exception during initial migration
        }
    }
}
