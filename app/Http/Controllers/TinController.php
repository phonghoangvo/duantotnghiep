<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
Paginator::useBootstrap();


class TinController extends Controller
{
    function index(){
        return view("index");
    }
    function sanpham(){
        $page=24;
        $data = \App\Models\SanPham::all()
        ->paginate($page)->withQueryString();
        return view("sanpham",['data'=>$data]);
    }
}
