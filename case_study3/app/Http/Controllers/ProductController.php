<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = \App\Models\Product::all();
        return view('front.index', compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        // Kiểm tra xem dữ liệu từ client gửi lên bao gốm những gì
//         dd($request);
        // gán dữ liệu gửi lên
        $product = new Product();
        $product->name = $request->name;
        $product->desc = $request->desc;
        $product->SKU = $request->SKU;
        $product->image = $request->image;
        $product->category_id = $request->category_id;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
//        lưu
        $product->save();
        session()->flash('suscess', 'suscess add product');
//        redirect
        return view('back.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id)->categories;
        $params = [
            'product' => $product
        ];
        return view('front.index', $params);
//            return view('front.index', \App\Models\Product::find(1)->categories);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->desc = $request->input('desc');
        $product->SKU = $request->input('SKU');
        $product->image = $request->input('image');
        $product->category_id = $request->input('category_id');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        $product->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        // Tìm đến đối tượng muốn xóa
        $product = Product::findOrFail($id);

        $product->delete();
        echo"success delete product";
    }

}
