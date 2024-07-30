<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductRepository implements ProductRepositoryInterface
{

    protected $product;
    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    public function all()
    {
        return $this->product->with('productAttributes')->get();
    }
    public function allPaginate($productsPerPage) : LengthAwarePaginator
    {
        return $this->product->with('productAttributes')->paginate($productsPerPage);
    }

    public function find($id)
    {
        return $this->product->find($id);
    }

    public function create(array $data)
    {
        return $this->product->create($data);
    }

    public function update($id, array $data)
    {
        $product = $this->find($id);
        $product->update($data);
        return $product;
    }

    public function delete($id)
    {
        $product = $this->find($id);
        return $product->delete();
    }
}