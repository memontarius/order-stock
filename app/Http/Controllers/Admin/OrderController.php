<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function index(Request $request): View
    {
        return view('admin.order.index');
    }

    public function create(Request $request): View
    {
        return view('admin.order.create');
    }
}
