<?php
// Route::get('storage/{filename}', function ($filename)
// {
//     $path = storage_path('app\public\\' . $filename);

//     if (!File::exists($path)) {
//         abort(404);
//     }

//     $file = File::get($path);
//     $type = File::mimeType($path);

//     $response = Response::make($file, 200);
//     $response->header("Content-Type", $type);

//     return $response;
// });

Route::get('/foo', function () {
// Artisan::call('storage:link');
Artisan::call('cache:clear');
Artisan::call('route:clear');
Artisan::call('config:clear');
Artisan::call('view:clear');
echo "done";
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('setlocale/{locale}', function ($locale) {
  if (in_array($locale, \Config::get('app.locales'))) {
    // Session::put('locale', $locale);
  }
  return redirect()->back()->withCookie(cookie()->forever('language', $locale));
})->name('lang.switch');


// Route::post('/search', 'LiveSearchController@search')->name('');


Route::post('/send', 'CareerController@store');
Route::get('/search', 'LiveSearchController@search');
Route::get('/acomplete', 'LiveSearchController@acomplete');



Route::get('/', 'BannerController@show');

Route::get('projects', 'ProjectCategoryController@allCategories');
Route::get('/show-all-projects', 'ProjectController@showallprojects');

Route::get('projects/{slug}','ProjectController@categoryProjects');
Route::get('studio/projects/{slug}','ProjectController@nocat');
Route::get('projects/{catSlug}/{slug}','ProjectController@thisProject');
Route::get('show-all-projects/{slug}','ProjectController@nocat');


Route::get('this-project', function () {
    return view('this-project');
});


Route::get('form', function () {
    return view('form');
});

Route::get('studio', 'StudioController@showtostudio');
Route::get('studio/{slug}', 'StudioController@memberinfo');

Route::get('category-definition', function () {
    return view('category-definition');
});

Route::get('expertise', 'ExpertiseController@allCategories');
Route::get('expertise/{slug}', 'ExpertiseController@categorydef');

Route::get('news/{slug}', 'PostController@readArticle');

Route::get('careers', 'CareerController@showcareers');

Route::get('contact', 'ContactController@contacts');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



Route::get('welcome/{locale}', function ($locale) {
    App::setLocale($locale);

    //
});
Route::get('news', 'PostController@show');

