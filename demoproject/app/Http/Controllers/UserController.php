<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomFormRequest;

class UserController extends Controller
{
  public function helloWorld() {
    return "hello world";    
  }

  public function multiplyByTwo($id) {
    return $id * 2;
  }

  public function newUser(CustomFormRequest $request) {
    return view('success');
  }
}
