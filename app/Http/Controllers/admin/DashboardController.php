<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
        // метод покажет страницу мониторинга для администратора
        public function index() {
            return view('admin.dashboard');
        }
}
