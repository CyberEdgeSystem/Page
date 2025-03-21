<?php

namespace App\Containers\Page\UI\WEB\Controllers;

use Illuminate\Http\Request;
use App\Containers\User\Models\Role;
use App\Containers\User\Models\Permission;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        dd("test");
    }

    public function show()
    {
        return view('Page::page.show');
    }
}
