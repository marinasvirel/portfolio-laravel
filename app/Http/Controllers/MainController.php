<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendRequest;
use App\Mail\FeedbackMailer;
use App\Repository\MainRepository;
use http\Env\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index(MainRepository $mainRepository): View
    {
      $main['data'] = $mainRepository->getData();
      return \view('main.index')->with('data', $main);
    }

//    public function send(SendRequest $request): RedirectResponse
//    {
//      $request->validated();
//
//      $data = new \stdClass();
//      $data->name = $request->name;
//      $data->email = $request->email;
//      $data->message = $request->message;
//      Mail::to($data->email)->send(new FeedbackMailer($data));
//      return redirect()->route('main.index')->with('success', 'Запрос отправлен');
//    }

      public function store(SendRequest $request): void
      {
        $request->validated();
        Mail::to($request->email)->send(new FeedbackMailer($request));
      }
}
