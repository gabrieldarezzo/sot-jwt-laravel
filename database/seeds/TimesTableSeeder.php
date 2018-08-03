<?php

use App\Times;
use Illuminate\Database\Seeder;

class TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $url = 'http://10.0.0.110:8000';

        $times = [
            [
                "id" => 1,
                "name" => "Palmeiras",
                "logo" => "$url/assets/times/palmeiras_60x60.png"
            ],
            [
                "id" => 2,
                "name" => "Flamengo",
                "logo" => "$url/assets/times/flamengo_60x60.png"
            ],
            [
                "id" => 3,
                "name" => "Atlético-MG",
                "logo" => "$url/assets/times/atletico_mg_60x60.png"
            ],
            [
                "id" => 4,
                "name" => "Santos",
                "logo" => "$url/assets/times/santos_60x60.png"
            ],
            [
                "id" => 5,
                "name" => "Botafogo",
                "logo" => "$url/assets/times/botafogo_60x60.png"
            ],
            [
                "id" => 6,
                "name" => "Atlético-PR",
                "logo" => "$url/assets/times/atletico-pr_60x60.png"
            ],
            [
                "id" => 7,
                "name" => "Corinthians",
                "logo" => "$url/assets/times/corinthians_60x60.png"
            ],
            [
                "id" => 8,
                "name" => "Grêmio",
                "logo" => "$url/assets/times/gremio_60x60.png"
            ],
            [
                "id" => 9,
                "name" => "Fluminense",
                "logo" => "$url/assets/times/fluminense_60x60.png"
            ],
            [
                "id" => 10,
                "name" => "Ponte Preta",
                "logo" => "$url/assets/times/ponte_preta_60x60.png"
            ],
            [
                "id" => 11,
                "name" => "Chapecoense",
                "logo" => "$url/assets/times/chapecoense_60x60.png"
            ],
            [
                "id" => 12,
                "name" => "São Paulo",
                "logo" => "$url/assets/times/sao_paulo_60x60.png"
            ],
            [
                "id" => 13,
                "name" => "Cruzeiro",
                "logo" => "$url/assets/times/cruzeiro_60x60.png"
            ],
            [
                "id" => 14,
                "name" => "Sport",
                "logo" => "$url/assets/times/sport_60x60.png"
            ],
            [
                "id" => 15,
                "name" => "Coritiba",
                "logo" => "$url/assets/times/coritiba_60x60.png"
            ],
            [
                "id" => 16,
                "name" => "Internacional",
                "logo" => "$url/assets/times/internacional_60x60.png"
            ],
            [
                "id" => 17,
                "name" => "Vitória",
                "logo" => "$url/assets/times/vitoria_60x60.png"
            ],
            [
                "id" => 18,
                "name" => "Figueirense",
                "logo" => "$url/assets/times/figueirense_60x60.png"
            ],
            [
                "id" => 19,
                "name" => "Santa Cruz",
                "logo" => "$url/assets/times/santa_cruz_60x60.png"
            ],
            [
                "id" => 20,
                "name" => "América-MG",
                "logo" => "$url/assets/times/america_mg_60x60.png"
            ]
        ];

        foreach($times as $time) {
            factory(Times::class)->create($time);
        }

    }
}
