<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServeErrorController extends Controller
{
    public function wp_gone()
    {
        return response("<h1>410 GONE</h1> <h2>Please go to <a href=".Route("home").">https://odensedansecenter.dk/</a></h2>We no longer use WordPress", 410);
    }
}
