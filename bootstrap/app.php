<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->redirectTo(guests: '/admin/login');
        $middleware->validateCsrfTokens(except: [
            'lead/submit',
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->render(function (\Illuminate\Session\TokenMismatchException $e, $request) {
            if ($request->is('admin*')) {
                return redirect()->route('admin.login')->withErrors(['session_expired' => 'Session token expired. Please sign in again.']);
            }
            return redirect()->back()->withErrors(['session_expired' => 'Session expired. Please refresh and try again.']);
        });
    })->create();
