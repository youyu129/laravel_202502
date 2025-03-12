<?php
use App\Http\Controllers\CarController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\Test0311Controller;
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

Route::get('/student', function () {
    return redirect()->route('students.index');
});

Route::get('/shop', function () {
    return redirect()->route('shops.index');
});

Route::get('/teacher', function () {
    return redirect()->route('teachers.index');
});

Route::get('/cat', function () {
    return redirect()->route('cats.index');
});

// 小名
Route::get('/students', function () {
    return view('student.index');
})->name('students.index');

Route::get('/test0311s/create', function () {
    return view('test0311.create');
})->name('test0311s.create');

Route::get('/students/edit', function () {
    return view('student.edit');
})->name('students.edit');

Route::get('/teachers', function () {
    return view('teacher.index');
})->name('teachers.index');

Route::get('/test0311s', function () {
    return view('test0311.index');
})->name('test0311s.index');

Route::get('/cats', function () {
    return view('cat.index');
})->name('cats.index');

// teachers
Route::resource('teachers', TeacherController::class);

Route::resource('test0311s', Test0311Controller::class);

Route::resource('cars', CarController::class);

Route::resource('tests', TestController::class);

// students
Route::resource('students', StudentController::class);

Route::resource('shops', ShopController::class);

Route::resource('cats', CatController::class);
