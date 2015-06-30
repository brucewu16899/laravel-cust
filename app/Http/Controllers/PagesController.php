<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
  public function index()
  {
    $users = User::all();
    return view('users.home', compact('users'));
  }
}
