<?php

namespace Database\Seeders;

use App\Models\Wilaya;
use Illuminate\Database\Seeder;

class WilayaSeeder extends Seeder
{
    private $wilayas = [
        [
            'id' => '1',
            'name' => 'Rabat-Salé-Kénitra',
            'arName' => 'الرباط - سلا - القنيطرة',
        ],
        [
            'id' => '2',
            'name' => 'Tanger-Tétouan-Al Hoceïma',
            'arName' => 'طنجة - تطوان - الحسيمة',
        ],
        [
            'id' => '3',
            'name' => 'Casablanca-Settat',
            'arName' => 'الدار البيضاء - سطات',
        ],
        [
            'id' => '4',
            'name' => 'Marrakech-Safi',
            'arName' => 'مراكش - اسفي',
        ],
        [
            'id' => '5',
            'name' => 'Fès-Meknès',
            'arName' => 'فاس - مكناس',
        ],
        [
            'id' => '6',
            'name' => 'Oriental',
            'arName' => 'الشرق',
        ],
        [
            'id' => '7',
            'name' => 'Souss-Massa',
            'arName' => 'سوس - ماسة',
        ],
        [
            'id' => '8',
            'name' => 'Béni Mellal-Khénifra',
            'arName' => 'بني ملال - خنيفرة',
        ],
        [
            'id' => '9',
            'name' => 'Guelmim-Oued Noun',
            'arName' => 'كلميم - واد نون',
        ],
        [
            'id' => '10',
            'name' => 'Drâa-Tafilalet',
            'arName' => 'درعة - تافيلالت',
        ],
        [
            'id' => '11',
            'name' => 'Laâyoune-Sakia El Hamra',
            'arName' => 'العيون - الساقية الحمراء',
        ],
        [
            'id' => '12',
            'name' => 'Dakhla-Oued Ed-Dahab',
            'arName' => 'الداخلة - وادي الذهب',
        ]
    ];

    public function run()
    {
        array_walk($this->wilayas, function ($wilaya) {
            Wilaya::create($wilaya);
        });
    }
}
