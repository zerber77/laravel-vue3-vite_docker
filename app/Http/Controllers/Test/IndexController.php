<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;

//use App\Http\Resources\Comments\CommentsResource;
//use App\Models\Test;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(){
        return '200 OK';
    }
}
