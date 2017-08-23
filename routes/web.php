<?php

Route::get('whoops', function() {
    // forget to import Carbon
    return Carbon::now();
});

Route::get('welcome', function () {
    return new App\Mail\UserWelcome;
});


Auth::routes();


// Samples

Route::view('/', 'welcome');

Route::get('home', 'HomeController@index')->name('home');

Route::get('post', 'PostController@index')->name('post.get');

Route::post('post', 'PostController@store')->name('post.post');




// Custom Validation
Route::view('custom', 'custom')->name('custom.get');

Route::post('custom', function() {

    request()->validate([
        'name' => 'required',
        // 'name' => new App\Rules\NoJohns,
    ]);

    return 'POSTED';
})->name('custom.post');




// Collection Dumping
Route::get('collection', function() {

    $users = App\User::all();

    $users = $users
        ->shuffle()
        ->where('id','<',10)
        ->pluck('name');

    dd($users);
});



// Custom Blade
Route::get('directive', function () {

    // auth()->loginUsingId(1);

    return view('directive');
});
