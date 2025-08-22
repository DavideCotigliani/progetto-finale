<?php

namespace Database\Seeders;

use App\Models\CasaEditrice;
use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CasaEditriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $caseEditrici = ["Mondadori", "Feltrinelli", "Einaudi"];

        foreach ($caseEditrici as $casaEditrice) {
            $newCasaEditrice = new Publisher();

            $newCasaEditrice->name = $casaEditrice;

            $newCasaEditrice->save();
        }
    }
}
