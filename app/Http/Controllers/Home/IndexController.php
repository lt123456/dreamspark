<?php
namespace App\http\Controllers\Home;

use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    public function index()
    {
        echo 'hello world';
        return redirect()->route('admin');

    }
    public function store()
    {

    }
}


?>