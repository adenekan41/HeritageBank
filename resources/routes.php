Route::get('/about', function()
{
    return View::make('views/mapaccount');
});
Route::get('/login', function()
{
    return View::make('views/login');
});
Route::get('/dashboard', function()
{
    return View::make('views/dashboard');
});
