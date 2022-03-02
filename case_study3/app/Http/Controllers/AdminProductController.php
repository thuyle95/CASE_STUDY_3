<?php

namespace App\Http\Controllers;
use \App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('back.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('back.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required',
            'image'         => 'required',
            'category_id'   => 'required',
            'quantity'      => 'required',
            'price'         => 'required',
            'desc'          => 'required',
        ]);
        $product = new Product();
        $product->name = $request->input('name');
        $product->desc = $request->input('desc');
        $product->image = $request->input('image');
        $product->category_id = $request->input('category_id');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');

        if ($request->hasFile('image')) {
            // tao 1 bien tro toi image
            $get_image    = $request->image;
            // tao file dung anh
            $get_name_image      = $get_image->getClientOriginalName();
            $name_image          = current(explode('.', $get_name_image));
            $new_image           = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('image', $new_image);
            $product->image   = $new_image;
        }

        $product->save();
//        Session::flash('success', 'Thêm mới product thành công');
        return redirect('admin')->with('success', 'Success add product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('back.index', compact('product'));
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
        $categories = Category::all();
        return view('back.edit', compact('product', 'categories'));
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
        $request->validate([
            'name'          => 'required',
            'image'         => 'required',
            'category_id'   => 'required',
            'quantity'      => 'required',
            'price'         => 'required',
            'desc'          => 'required',
        ]);

        $product = Product::find($id);
        $product->name = $request->get('name');
        $product->image = $request->get('image');
        if ($request->hasFile('image')) {
            // tao 1 bien tro toi image
            $get_image          = $request->get('image');
            $get_name_image     = $get_image->getClientOriginalName();
            $name_image         = current(explode('.', $get_name_image));
            $new_image          = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
//            'image' là thư mục bên trong public (public/image)
            $get_image->move('image', $new_image);
            $product->image    = $new_image;
        }

        $product->category_id = $request->get('category_id');
        $product->quantity = $request->get('quantity');
        $product->price = $request->get('price');
        $product->desc = $request->get('desc');
        $product->save();
        return redirect('admin')->with('success', 'Success update product infomation!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect('admin')->with('success', 'Success delete product');
    }
}
