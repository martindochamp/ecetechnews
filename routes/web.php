<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('how-turing-contributed-to-computer-science', 'articles.alanturing');
Route::view('how-tech-is-impacting-our-sleep', 'articles.techsleep');

Route::view('nanotechnologies-a-new-perspective-of-evolution', 'articles.nanotech');
Route::view('microfluidics-the-future-of-cancer-screening', 'articles.microfluidics');

Route::view('new-record-broken-by-the-spacex-rocket', 'articles.recordspacex');
Route::view('spacex-crew-dragon-capsule-docks-with-the-international-space-station', 'articles.crewdragon');

Route::view('space-telescope-that-can-look-billions-years-back', 'articles.telescope');
Route::view('can-artificial-intelligence-lead-to-the-end-of-humanity', 'articles.ia');

Route::view('intel-graphics-cards-leak', 'articles.graphiccard');
Route::view('amd-on-the-lead', 'articles.amd');

Route::view('flamanville-the-cradle-of-French-nuclear-energy-has-been-overtaken-by-events', 'articles.flamanville');
Route::view('france-hosts-the-Future-for-electricity-production-project-iter', 'articles.projectiter');

Route::get('/', function () {
    return view('welcome');
});
