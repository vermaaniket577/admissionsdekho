<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminLeadController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| AdmissionsDekho Web Routes
|--------------------------------------------------------------------------
*/

// Dynamic XML Sitemap & Robots.txt Routes (SEO Engine)
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/robots.txt', function () {
    $content = "User-agent: *\nDisallow: /admin/\nDisallow: /login\n\nSitemap: " . url('/sitemap.xml') . "\n";
    return response($content, 200, ['Content-Type' => 'text/plain; charset=UTF-8']);
})->name('robots');

// Admin Panel Routes
Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    Route::middleware('auth')->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/dashboard', [AdminDashboardController::class, 'index']);
        
        // Lead Management Routes
        Route::get('/leads', [AdminLeadController::class, 'index'])->name('admin.leads.index');
        Route::post('/leads/{id}/status', [AdminLeadController::class, 'updateStatus'])->name('admin.leads.status');
        Route::delete('/leads/{id}', [AdminLeadController::class, 'destroy'])->name('admin.leads.destroy');

        // Blog Management Routes
        Route::get('/blogs', [AdminBlogController::class, 'index'])->name('admin.blogs.index');
        Route::get('/blogs/create', [AdminBlogController::class, 'create'])->name('admin.blogs.create');
        Route::post('/blogs', [AdminBlogController::class, 'store'])->name('admin.blogs.store');
        Route::get('/blogs/{id}/edit', [AdminBlogController::class, 'edit'])->name('admin.blogs.edit');
        Route::put('/blogs/{id}', [AdminBlogController::class, 'update'])->name('admin.blogs.update');
        Route::delete('/blogs/{id}', [AdminBlogController::class, 'destroy'])->name('admin.blogs.destroy');

        // Settings Routes
        Route::get('/settings', [AdminSettingController::class, 'index'])->name('admin.settings.index');
        Route::post('/settings', [AdminSettingController::class, 'update'])->name('admin.settings.update');
    });
});

// Lead Form Submission API Endpoint
Route::post('/lead/submit', [LeadController::class, 'submit'])->name('lead.submit');

// Blog Routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// University Routes
Route::get('/universities', [\App\Http\Controllers\UniversityController::class, 'index'])->name('universities.index');
Route::get('/universities/{slug}', [\App\Http\Controllers\UniversityController::class, 'show'])->name('universities.show');
Route::get('/university/{slug}', [\App\Http\Controllers\UniversityController::class, 'show']);

// Home Route
Route::get('/', [PageController::class, 'show'])->name('home');

// Dynamic Page Slug Fallback (handles all mapped URLs like /courses-trusted-education-consultants/, /best-engineering-courses-after-12th/, /get-in-touch/, etc.)
Route::get('/{slug}', [PageController::class, 'show'])
    ->where('slug', '[A-Za-z0-9\-\/]+')
    ->name('page.show');
