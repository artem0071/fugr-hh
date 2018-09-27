<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Comment\{
    Index, Store
};

class CommentController extends Controller
{
    public function index(Index $request)
    {
        return $request->execute();
    }

    public function store(Store $request)
    {
        return $request->execute();
    }
}
