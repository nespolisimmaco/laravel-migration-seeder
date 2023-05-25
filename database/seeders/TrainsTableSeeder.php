<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 12; $i++) { 
            $train = new Train();
            $train->azienda = $faker->company();
            $train->stazione_di_partenza = $faker->randomElement(['Napoli Centrale', 'Roma Termini', 'Firenze Santa Maria Novella', 'Bologna Centrale', 'Milano Centrale']);
            $train->stazione_di_arrivo = $faker->randomElement(['Napoli Centrale', 'Roma Termini', 'Firenze Santa Maria Novella', 'Bologna Centrale', 'Milano Centrale']);
            $train->data_di_partenza = $faker->randomElement(['2023/05/22', '2023/05/23', '2023/05/24', '2023/05/25']);
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->bothify('???#?#');
            $train->numero_carrozze = $faker->numberBetween(5, 15);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->save();
        }
    }
}
