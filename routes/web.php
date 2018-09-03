<?php

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

Route::get('/', function () {
    return view('home.home');
});

Route::get('news', function(){
    return view('pages.news');
});
Route::get('opinion', function(){
    return view('pages.opinion');
});
Route::get('story', function(){
    return view('pages.story');
});
Route::get('datahub', function(){
    return view('pages.datahub');
});
Route::get('datahub-laws', function(){
    return view('pages.datahub-laws');
});
Route::get('datahub-laws-content', function(){
    return view('pages.datahub-laws-content');
});
Route::get('directory', function(){
    return view('pages.directory');
});
Route::get('listing', function(){
    return view('pages.listing');
});
Route::get('listing-details', function(){
    return view('pages.listing-details');
});
Route::get('login', function(){
    return view('pages.login');
});
Route::get('subscription', function(){
    return view('pages.subscription');
});
Route::get('scholarship', function(){
    return view('pages.scholarship');
});
Route::get('scholarship-all', function(){
    return view('pages.scholarship-all');
});
Route::get('scholarship-listing', function(){
    return view('pages.scholarship-listing');
});
Route::get('video', function(){
    return view('pages.video');
});
Route::get('aboutus', function(){
    return view('pages.aboutus');
});
Route::get('team', function(){
    return view('pages.team');
});
Route::get('career', function(){
    return view('pages.career');
});
Route::get('career-details', function(){
    return view('pages.career-details');
});
Route::get('contactus', function(){
    return view('pages.contactus');
});
Route::prefix('backend')->group(function(){

    Route::get('home', function(){
        return view('backend.pages.home');
    });
    Route::get('newsletters', function(){
        return view('backend.pages.newsletters');
    });
    Route::get('profile', function(){
        return view('backend.pages.profile');
    });
    Route::get('billing', function(){
        return view('backend.pages.billing');
    });
    Route::get('history', function(){
        return view('backend.pages.history');
    });

});
Route::prefix('admin')->group(function(){

    Route::get('home', function(){
        return view('admin.pages.home');
    });
    Route::get('posts', function(){
        return view('admin.pages.posts');
    });
    Route::get('category', function(){
        return view('admin.pages.category');
    });
    Route::get('pages', function(){
        return view('admin.pages.pages');
    });
    Route::get('menu', function(){
        return view('admin.pages.menu');
    });
});
