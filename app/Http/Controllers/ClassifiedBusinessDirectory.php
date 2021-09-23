<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Traits\EndPoints;

class ClassifiedBusinessDirectory extends Controller
{
    use EndPoints;

    public $url, $post, $token;

    public function getClassifiedProfessionals()
    {
    }
}
