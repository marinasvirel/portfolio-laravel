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

  public function mail()
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if (mail('marusenka_83@mail.ru', 'Письмо с сайта портфолио', "Имя отправителя: {$name}\n E-mail отправителя: {$email}\n Сообщение:  {$message}")) {
      return ("Сообщение отправлено </br><a href='main'>На главную</a>");
    } else {
      return ("Ошибка");
    }
  }
}
