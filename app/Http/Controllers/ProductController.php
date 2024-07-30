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
        // $products = $this->productService->getAllProductsPaginate(10);
        $products = $this->productService->getAllProducts();
        dd($products);
        return view('products.index', ['products' => $products]);
    }
    public function newProduct()
    {
        Product::create(['name' => 'xdxd', 'price' => 12323.41, 'description' => 'ashdhasdh']);
        return "hehe";
    }
}
