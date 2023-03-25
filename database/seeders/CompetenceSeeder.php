<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompetenceSeeder extends Seeder
{
  static array $competencies = [
    ['class' => 'cplus', 'name' => 'C++'],
    ['class' => 'csharp', 'name' => 'CSharp'],
    ['class' => 'css', 'name' => 'HTML/CSS'],
    ['class' => 'figma', 'name' => 'Figma'],
    ['class' => 'java', 'name' => 'Java'],
    ['class' => 'js', 'name' => 'JavaScript'],
    ['class' => 'laravel', 'name' => 'Laravel'],
    ['class' => 'linux', 'name' => 'Linux'],
    ['class' => 'mysql', 'name' => 'MySQL'],
    ['class' => 'photoshop', 'name' => 'Photoshop'],
    ['class' => 'php', 'name' => 'PHP'],
    ['class' => 'phpstorm', 'name' => 'PHP Storm'],
    ['class' => 'postgresql', 'name' => 'Postgresql'],
    ['class' => 'pyton', 'name' => 'Pyton'],
    ['class' => 'react', 'name' => 'React'],
    ['class' => 'sqlite', 'name' => 'SQLite'],
    ['class' => 'ubuntu', 'name' => 'Ubuntu'],
    ['class' => 'vs', 'name' => 'Visual Studio'],
    ['class' => 'vsc', 'name' => 'Visual Studio Code'],
  ];
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(): void
  {
    foreach (self::$competencies as $competence) {
      DB::table('competencies')->insert([
        'class' => $competence['class'],
        'name' => $competence['name']
      ]);
    }
  }
}
