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
        ]);

        foreach ($validated as $key => $value) {
            Setting::set($key, $value);
        }

        return redirect()->route('admin.settings.index')->with('success', 'Website Contact Details & Settings updated successfully!');
    }
}
