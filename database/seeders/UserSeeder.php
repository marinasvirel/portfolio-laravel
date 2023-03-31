<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('users')->insert([
      'name' => 'Кот',
      'surname' => 'Учёный',
      'profession' => 'Мастер на все лапы',
      'greeting' => 'Далеко-далеко, за словесными горами в стране гласных и согласных живут рыбные тексты. Грамматики океана переписали решила оксмокс, собрал, рыбного дал города последний путь возвращайся своего не переписывается по всей снова буквоград подзаголовок предупредила.',

      'email' => 'mail@mail.ru',
      'avatar' => 'asset/img/context/cat-test.jpg',
      'password' => Hash::make('12345678'),
    ]);
  }
}
