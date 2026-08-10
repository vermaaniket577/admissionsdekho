<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class AdminSettingController extends Controller
{
    public function index()
    {
        $settings = [
            'contact_phone' => Setting::get('contact_phone', '+91 9643802216'),
            'contact_email' => Setting::get('contact_email', 'info@admissionsdekho.com'),
            'contact_address' => Setting::get('contact_address', 'AdmissionsDekho, India'),
            'site_name' => Setting::get('site_name', 'AdmissionsDekho'),
            'whatsapp_number' => Setting::get('whatsapp_number', '+91 9643802216'),
            'social_linkedin' => Setting::get('social_linkedin', 'https://linkedin.com/company/admissionsdekho'),
            'social_facebook' => Setting::get('social_facebook', 'https://facebook.com/admissionsdekho'),
            'social_instagram' => Setting::get('social_instagram', 'https://instagram.com/admissionsdekho'),
            'social_youtube' => Setting::get('social_youtube', 'https://youtube.com/@admissionsdekho'),
            'social_whatsapp' => Setting::get('social_whatsapp', 'https://wa.me/919643802216'),
        ];

        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'contact_phone' => 'required|string|max:50',
            'contact_email' => 'required|email|max:255',
            'contact_address' => 'required|string|max:500',
            'site_name' => 'required|string|max:100',
            'whatsapp_number' => 'nullable|string|max:50',
            'social_linkedin' => 'nullable|url|max:255',
            'social_facebook' => 'nullable|url|max:255',
            'social_instagram' => 'nullable|url|max:255',
            'social_youtube' => 'nullable|url|max:255',
            'social_whatsapp' => 'nullable|url|max:255',
        ]);

        foreach ($validated as $key => $value) {
            Setting::set($key, $value ?? '');
        }

        return redirect()->route('admin.settings.index')->with('success', 'Website Settings & Social Links updated successfully!');
    }
}
