<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Train #1
        $train_1 = new Train();
        $train_1->azienda = 'Ferrovie Italia';
        $train_1->stazione_partenza = 'Roma Termini';
        $train_1->stazione_arrivo = 'Milano Centrale';
        $train_1->orario_partenza = '08:00:00';
        $train_1->orario_arrivo = '12:00:00';
        $train_1->codice_treno = 'TRN123';
        $train_1->numero_carrozze = 5;
        $train_1->save();

        // Train #2
        $train_2 = new Train();
        $train_2->azienda = 'Train IT';
        $train_2->stazione_partenza = 'Torino Porta Nuova';
        $train_2->stazione_arrivo = 'Genova Piazza Principe';
        $train_2->orario_partenza = '10:00:00';
        $train_2->orario_arrivo = '14:00:00';
        $train_2->codice_treno = 'TRN456';
        $train_2->numero_carrozze = 7;
        $train_2->save();
    }
}
