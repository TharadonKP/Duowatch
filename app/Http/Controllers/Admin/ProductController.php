<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Product;
use Illuminate\Http\Request;
use Log;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        Log::info('This is some useful information.');
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $product = Product::where('productID', 'LIKE', "%$keyword%")
                ->orWhere('productName', 'LIKE', "%$keyword%")
                ->orWhere('price', 'LIKE', "%$keyword%")
                ->orWhere('quantity', 'LIKE', "%$keyword%")
                ->orWhere('imageFileName', 'LIKE', "%$keyword%")
                ->orWhere('productTypeID', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $product = Product::latest()->paginate($perPage);
            
            Log::info($product);
        }

        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'productID'    =>  'required',
            'productName'         =>  'required',
            'price'         =>  'required',
            'quantity'         =>  'required',
            'imageFileName'         =>  'required|image|max:2048',
            
        ]);
       
        $image = $request->file('imageFileName');
  
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('Image'), $new_name);
        $form_data = array(
            'productID'       =>   $request->productID,
            'productName'        =>   $request->productName,
            'price'        =>   $request->price,
            'quantity'        =>   $request->quantity,
            'imageFileName'            =>   $new_name,
         
        );
       
        /*
        $requestData = $request->all();
        $image = $request->file('imageFileName');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $image);
        */
        Product::create($form_data);
       
        return redirect('admin/product')->with('flash_message', 'Product added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'productID'    =>  'required',
            'productName'         =>  'required',
            'price'         =>  'required',
            'quantity'         =>  'required',
            'imageFileName'         =>  'required|image|max:2048',
          
        ]);
       
        $image = $request->file('imageFileName');
  
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('Image'), $new_name);
        $form_data = array(
            'productID'       =>   $request->productID,
            'productName'        =>   $request->productName,
            'price'        =>   $request->price,
            'quantity'        =>   $request->quantity,
            'imageFileName'            =>   $new_name,
        
        );
       
        $product = Product::findOrFail($id);
        $product->update($form_data);

        return redirect('admin/product')->with('flash_message', 'Product updated!');
    }

    
    public function destroy($id)
    {
        Product::destroy($id);

        return redirect('admin/product')->with('flash_message', 'Product deleted!');
    }
    
    /*public function show($id){
    
        $product = product::findOrFail($id);

        return view('admin.product.show', compact('product'));
    }*/
}
