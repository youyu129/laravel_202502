<?php
use App\Http\Controllers\CarController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect()->route('index');
});

// 取各種名字 可以到同一個view
// food
// Route::get('/', function () {
//     return redirect()->route('foods.index');
// });
Route::get('/food', function () {
    return redirect()->route('foods.index');
});

// car
// Route::get('/', function () {
//     return redirect()->route('cars.index');
// });
Route::get('/car', function () {
    return redirect()->route('cars.index');
});

Route::get('/youyu', function () {
    return redirect()->route('cars.index');
});

// 取路由小名
Route::get('/', function () {
    return view('index');
})->name('index');
// food
Route::get('/foods', function () {
    return view('food.index');
})->name('foods.index');

Route::get('/foods/f1', function () {
    return view('food.f1');
})->name('foods.f1');

Route::get('/foods/f2', function () {
    return view('food.f2');
})->name('foods.f2');

Route::get('/foods/f3', function () {
    return view('food.f3');
})->name('foods.f3');

// car
// Route::get('/cars', function () {
//     return view('car.index');
// })->name('cars.index');

// Route::get('/cars/create', function () {
//     return view('car.create');
// })->name('cars.create');

// Route::get('/cars/update', function () {
//     return view('car.update');
// })->name('cars.update');

// Route::get('/cars/del', function () {
//     return view('car.del');
// })->name('cars.del');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/student', function () {
    return redirect()->route('students.index');
});

Route::get('/students', function () {
    return view('student.index');
})->name('students.index');

Route::get('/students/create', function () {
    return view('student.create');
})->name('students.create');

Route::get('/students/edit', function () {
    return view('student.edit');
})->name('students.edit');

Route::resource('cars', CarController::class);

Route::resource('tests', TestController::class);

Route::resource('students', StudentController::class);
