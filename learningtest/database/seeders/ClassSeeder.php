<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Level;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //array to create class data
        for($i=1; $i<=10; $i++){
            $class = "Class".$i;
            Level::create([
                'name'=>$class, //error alert--jati choti seed cmd hanyo teti data seed vairaxa
            ]);
        }
    }
}
