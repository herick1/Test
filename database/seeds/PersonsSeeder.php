<?php

use Illuminate\Database\Seeder;
use App\Person;

class PersonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Person::class, 50)->create();
    }
}
