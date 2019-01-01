<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Yajra\Datatables\Datatables;
use App\Etablissement;

class categoriesController extends Controller
{
    public function index(){
        return view('admin.list_categories');
    }
    public function data_etablissement()
    {
        dd('test');
        return Datatables::of(Etablissement::query())->make(true);
    }
}
