<?php

use Illuminate\Database\Seeder;
use App\Models\LabUsers;

class LabTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = factory(LabUsers::class, 10000)->create();
    }
}
