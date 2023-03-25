<?php

namespace App\Http\Controllers;

use App\Repository\MainRepository;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index(MainRepository $mainRepository): View
    {
      $main['data'] = $mainRepository->getData();
      return \view('main.index')->with('data', $main);
    }
}
