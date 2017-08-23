<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('whoops', function() {
    // forget to import Carbon
    return Carbon::now();
});

Route::get('welcome', function () {
    return new App\Mail\UserWelcome;
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('post', 'PostController@index')->name('post.get');

Route::post('post', 'PostController@store')->name('post.post');




// Custom Validation
Route::get('custom', function() {
    return view('custom');
})->name('custom.get');

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
