<?php

namespace App\Http\Controllers;


class ListProductController extends Controller
{
    function getData()
    {
        $dataProduct = [
            ["id" => 1, "name" => "Product 1", "price" => 10.99],
            ["id" => 2, "name" => "Product 2", "price" => 15.49],
            ["id" => 3, "name" => "Product 3", "price" => 20.99],
            ["id" => 4, "name" => "Product 4", "price" => 25.99],
            ["id" => 5, "name" => "Product 5", "price" => 30.49]
        ];


        return $dataProduct;
    }

    function show()
    {
        $dataProduct = $this->getData();

        return view('/product/list_product', compact('dataProduct'));
    }
}
