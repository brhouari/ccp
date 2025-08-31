<?php
use App\Http\Controllers\CdController;
use App\Http\Controllers\DashboardController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\LigneCds\Create;
use App\Livewire\LigneCds\Index;
use App\Livewire\TestSelect;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {

    Route::resource('admin/dashboard', DashboardController::class);

    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

    Route::get('cds', \App\Livewire\Cds\Index::class)->name('cds.index');
    Route::get('cds/create', \App\Livewire\Cds\Create::class)->name('cds.create');
    Route::get('cds/edit/{cd}', \App\Livewire\Cds\Edit::class)->name('cds.edit');

    Route::get('personnes', \App\Livewire\Personnes\Index::class)->name('personnes.index');
     Route::get('personnes/create', \App\Livewire\Personnes\Create::class)->name('personnes.create');
     Route::get('personnes/edit/{personne}', \App\Livewire\Personnes\Edit::class)->name('personnes.edit');

     Route::get('ligne-cds/{cd}', \App\Livewire\LigneCds\Index::class)->name('ligne-cds.index');
     Route::get('ligne-cds/create/{cd}', \App\Livewire\LigneCds\Create::class)->name('ligne-cds.create');
     Route::get('ligne-cds/edit/{lignecd}', \App\Livewire\LigneCds\Edit::class)->name('ligne-cds.edit');
     //Route::get('/test-select', TestSelect::class);
    

    //Route::view('about', 'about')->name('about');

});

require __DIR__.'/auth.php';
