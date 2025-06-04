<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use Spatie\Sitemap\SitemapGenerator;

Volt::route('/', 'home')->name('home');

Route::get('/1', function () {
	Artisan::call('migrate:fresh');
	Artisan::call('db:seed');
	return 'done';
});

Route::view('dashboard', 'dashboard')
	->middleware(['auth', 'verified'])
	->name('dashboard');

Route::middleware(['auth'])->group(function () {
	Route::redirect('settings', 'settings/profile');

	Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
	Volt::route('settings/password', 'settings.password')->name('settings.password');
	Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__ . '/auth.php';