<?php

namespace App\Http\Controllers;


class ListProductController extends Controller
{
    function show($id, $name)
    {
        $data = [
            'id' => $id,
            'name' => $name
        ];

        return view('/product/list_product', $data);
    }
}
