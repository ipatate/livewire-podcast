<?php

use App\Livewire\Home;
use App\Livewire\SinglePodcast;
use Illuminate\Support\Facades\Route;

Route::get( '/', Home::class );

Route::get( '/podcast/{podcast}', SinglePodcast::class )->name( 'podcast' );
