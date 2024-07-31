<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        // $products = $this->productService->getAllProducts();
        $products = $this->productService->getAllProductsPaginate(5*2); // 5 products per row, 2 rows, 10 products per page
        // dd($products);
        return view('products.index', ['products' => $products]);
    }

    public function show(Product $product){
        $previousUrl = url()->previous();
        return view('products.detail', ['product' => $product, 'previousUrl' => $previousUrl]);
    }

    public function newProduct()
    {
        Product::create(['name' => 'xdxd', 'price' => 12323.41, 'description' => 'ashdhasdh']);
        return "hehe";
    }
}
