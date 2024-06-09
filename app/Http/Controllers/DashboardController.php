<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // метод покажет страницу мониторинга для обычного пользователя
    public function index() {
        return view('dashboard');
    }
}
