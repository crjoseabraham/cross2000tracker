<?php

use App\Charts\GeneralWorkoutsChart;
use App\Http\Controllers\ProfileController;
use App\Models\Athlete;
use App\Models\Workout;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
    // return view('welcome')
});

Route::get('/dashboard', function (GeneralWorkoutsChart $chart) {
    $users = Athlete::select('name', 'dob', DB::raw("count(name) as user_count"))
        ->groupBy('name', 'dob')
        ->get();

    $aths = Workout::select('athlete_id', 'date', 'total')
        ->groupBy('athlete_id', 'date', 'total')
        ->orderByRaw("CAST(total as UNSIGNED) DESC")
        ->get();

    $athletes = $aths->unique('athlete_id');

    $averages = $athletes->map(function ($ath) {
        return [
            'name' => $ath->athlete->name,
            'avg' => number_format($ath->where('athlete_id', $ath->athlete_id)->avg('total'), 1, '.', ',')
        ];
    });

    return view('dashboard', [
        'chart' => $chart->build(),
        'users' => $users,
        'athletes' => $athletes,
        'averages' => $averages
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/athlete/{id}', function ($id) {
    $athlete = Athlete::find($id);
    return view('profile.athlete-profile')->with('athlete', $athlete);
})->middleware(['auth', 'verified'])->name('athlete-profile');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
