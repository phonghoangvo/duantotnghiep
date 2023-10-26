<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $data = Product::get();
        return view ('list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view('add');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function save(Request $request)
    {
        $name = $request->name;
        $img = $request->img;
        $price = $request->price;
        $price_sale = $request->price_sale;
        $mo_ta = $request->mo_ta;
        $id_category = $request->id_category;

        $data = new Product();
        $data->name = $name;
        $data->img = $_POST['img'];
        $data->price = $price;
        $data->price_sale = $price_sale;
        $data->mo_ta = $mo_ta;
        $data->id_category = $id_category;
        $data->save();
        return redirect()->back() -> with('success','Sản phẩm đã được thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Product::where('id', '=' ,$id)->first();
        return view('edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $img = $request->img;
        $price = $request->price;
        $price_sale = $request->price_sale;
        $mo_ta = $request->mo_ta;
        $id_category = $request->id_category;

        Product::where('id', '=',$id)->update([
            'name' => $name,
            'img' => $_POST['img'],
            'price' => $price,
            'price_sale' => $price_sale,
            'mo_ta' => $mo_ta,
            'id_category' => $id_category
        ]);
        return redirect()->back() -> with('success','Sản phẩm đã được cập nhật thành công');

    }
    public function del($id){
        Product::where('id' , '=' , $id) ->delete();
        return redirect()->back() -> with('success','Sản phẩm đã được xóa thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
