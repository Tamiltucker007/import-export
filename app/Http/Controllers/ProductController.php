<?php

namespace App\Http\Controllers;

use App\Exports\ProductsExport;
use App\Http\Controllers\Controller;
use App\Imports\ProductsImport;
use App\Models\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        
        return view('products.index')->with('products', $products);
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx'
        ]);

        $file = $request->file('file');

        Excel::import(new ProductsImport, $file);

        return redirect('products')->with('success', 'Product imported successfully.');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new ProductsExport, 'produts.xlsx');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
}
