<?php

namespace Database\Seeders;

use App\Models\Daira;
use Illuminate\Database\Seeder;

class DairaSeeder extends Seeder
{
    private $dairas = [
        1 => [
            'arName' => 'الرباط',
            'name' => 'Rabat',
            'wilaya_id' => '01',
        ],
        2 => [
            'arName' => 'سلا',
            'name' => 'Salé',
            'wilaya_id' => '01',
        ],
        3 => [
            'arName' => 'الصخيرات-تمارة',
            'name' => 'Skhirate-Témara',
            'wilaya_id' => '01',
        ],
        5 => [
            'arName' => 'القنيطرة',
            'name' => 'Kenitra',
            'wilaya_id' => '01',
        ],
        7 => [
            'arName' => 'الخميسات',
            'name' => 'Khémisset',
            'wilaya_id' => '01',
        ],
        8 => [
            'arName' => 'سيدي قاسم',
            'name' => 'Sidi Kacem',
            'wilaya_id' => '01',
        ],
        9 => [
            'arName' => 'سيدي سليمان',
            'name' => 'Sidi Slimane',
            'wilaya_id' => '01',
        ],
        10 => [
            'arName' => 'طنجة-اصيلة',
            'name' => 'Tanger-Asilah',
            'wilaya_id' => '02',
        ],
        11 => [
            'arName' => 'المضيق-الفنيدق',
            'name' => 'Madiq-Fnideq',
            'wilaya_id' => '02',
        ],
        12 => [
            'arName' => 'تطوان',
            'name' => 'Tétouan',
            'wilaya_id' => '02',
        ],
        13 => [
            'arName' => 'الفحص-انجرة',
            'name' => 'Fahs Anjra',
            'wilaya_id' => '02',
        ],
        14 => [
            'arName' => 'العرائش',
            'name' => 'Larache',
            'wilaya_id' => '02',
        ],
        15 => [
            'arName' => 'الحسيمة',
            'name' => 'Al Hoceïma',
            'wilaya_id' => '02',
        ],
        16 => [
            'arName' => 'شفشاون',
            'name' => 'Chefchaouen',
            'wilaya_id' => '02',
        ],
        17 => [
            'arName' => 'وزان',
            'name' => 'Ouezzane',
            'wilaya_id' => '02',
        ],
        18 => [
            'arName' => 'الدار البيضاء',
            'name' => 'Casablanca',
            'wilaya_id' => '03',
        ],
        19 => [
            'arName' => 'الجديدة',
            'name' => 'El Jadida',
            'wilaya_id' => '03',
        ],
        20 => [
            'arName' => 'سطات',
            'name' => 'Settat',
            'wilaya_id' => '03',
        ],
        21 => [
            'arName' => 'المحمدية',
            'name' => 'Mohammédia',
            'wilaya_id' => '03',
        ],
        22 => [
            'arName' => 'بنسليمان',
            'name' => 'Benslimane',
            'wilaya_id' => '03',
        ],
        23 => [
            'arName' => 'برشيد',
            'name' => 'Berrechid',
            'wilaya_id' => '03',
        ],
        24 => [
            'arName' => 'النواصر',
            'name' => 'Nouaceur',
            'wilaya_id' => '03',
        ],
        25 => [
            'arName' => 'مديونة',
            'name' => 'Médiouna',
            'wilaya_id' => '03',
        ],
        26 => [
            'arName' => 'سيدي بنور',
            'name' => 'Sidi Bennour',
            'wilaya_id' => '03',
        ],
        27 => [
            'arName' => 'مراكش',
            'name' => 'Marrakech',
            'wilaya_id' => '04',
        ],
        28 => [
            'arName' => 'شيشاوة',
            'name' => 'Chichaoua',
            'wilaya_id' => '04',
        ],
        29 => [
            'arName' => 'الحوز',
            'name' => 'Al Haouz',
            'wilaya_id' => '04',
        ],
        30 => [
            'arName' => 'قلعة السراغنة',
            'name' => 'Kelâat Essraghna',
            'wilaya_id' => '04',
        ],
        31 => [
            'arName' => 'الصويرة',
            'name' => 'Essaouira',
            'wilaya_id' => '04',
        ],
        32 => [
            'arName' => 'الرحامنة',
            'name' => 'Rehamna',
            'wilaya_id' => '04',
        ],
        33 => [
            'arName' => 'اسفي',
            'name' => 'Safi',
            'wilaya_id' => '04',
        ],
        34 => [
            'arName' => 'اليوسفية',
            'name' => 'Youssoufia',
            'wilaya_id' => '04',
        ],
        35 => [
            'arName' => 'فاس',
            'name' => 'Fès',
            'wilaya_id' => '05',
        ],
        36 => [
            'arName' => 'مكناس',
            'name' => 'Meknès',
            'wilaya_id' => '05',
        ],
        37 => [
            'arName' => 'الحاجب',
            'name' => 'Hajeb',
            'wilaya_id' => '05',
        ],
        38 => [
            'arName' => 'افران',
            'name' => 'Ifrane',
            'wilaya_id' => '05',
        ],
        39 => [
            'arName' => 'مولاي يعقوب',
            'name' => 'Moulay Yaâcoub',
            'wilaya_id' => '05',
        ],
        40 => [
            'arName' => 'صفرو',
            'name' => 'Sefrou',
            'wilaya_id' => '05',
        ],
        41 => [
            'arName' => 'بولمان',
            'name' => 'Boulemane',
            'wilaya_id' => '05',
        ],
        42 => [
            'arName' => 'تاونات',
            'name' => 'Taounate',
            'wilaya_id' => '05',
        ],
        43 => [
            'arName' => 'تازة',
            'name' => 'Taza',
            'wilaya_id' => '05',
        ],
        44 => [
            'arName' => 'وجدة-انكاد',
            'name' => 'Oujda-Angad',
            'wilaya_id' => '06',
        ],
        45 => [
            'arName' => 'الناضور',
            'name' => 'Nador',
            'wilaya_id' => '06',
        ],
        46 => [
            'arName' => 'الدريوش',
            'name' => 'Driouch',
            'wilaya_id' => '06',
        ],
        47 => [
            'arName' => 'جرادة',
            'name' => 'Jerada',
            'wilaya_id' => '06',
        ],
        48 => [
            'arName' => 'بركان',
            'name' => 'Berkane',
            'wilaya_id' => '06',
        ],
        49 => [
            'arName' => 'تاوريرت',
            'name' => 'Taourirt',
            'wilaya_id' => '06',
        ],
        50 => [
            'arName' => 'جرسيف',
            'name' => 'Guercif',
            'wilaya_id' => '06',
        ],
        51 => [
            'arName' => 'فجيج',
            'name' => 'Figuig',
            'wilaya_id' => '06',
        ],
        52 => [
            'arName' => 'اكادير اداوتانان',
            'name' => 'Agadir Ida-Outanane',
            'wilaya_id' => '07',
        ],
        53 => [
            'arName' => 'انزكان ايت ملول',
            'name' => 'Inezgane-Aït Melloul',
            'wilaya_id' => '07',
        ],
        54 => [
            'arName' => 'اشتوكة ايت باها',
            'name' => 'Chtouka-Aït Baha',
            'wilaya_id' => '07',
        ],
        55 => [
            'arName' => 'تارودانت',
            'name' => 'Taroudant',
            'wilaya_id' => '07',
        ],
        56 => [
            'arName' => 'تيزنيت',
            'name' => 'Tiznit',
            'wilaya_id' => '07',
        ],
        57 => [
            'arName' => 'طاطا',
            'name' => 'Tata',
            'wilaya_id' => '07',
        ],
        58 => [
            'arName' => 'بني ملال',
            'name' => 'Béni Mellal',
            'wilaya_id' => '08',
        ],
        59 => [
            'arName' => 'خنيفرة',
            'name' => 'Khénifra',
            'wilaya_id' => '08',
        ],
        60 => [
            'arName' => 'خريبكة',
            'name' => 'Khouribga',
            'wilaya_id' => '08',
        ],
        61 => [
            'arName' => 'أزيلال',
            'name' => 'Azilal',
            'wilaya_id' => '08',
        ],
        62 => [
            'arName' => 'الفقيه بن صالح',
            'name' => 'Fquih Ben Salah',
            'wilaya_id' => '08',
        ],
        63 => [
            'arName' => 'كلميم',
            'name' => 'Guelmim',
            'wilaya_id' => '09',
        ],
        64 => [
            'arName' => 'سيدي افني',
            'name' => 'Sidi Ifni',
            'wilaya_id' => '09',
        ],
        65 => [
            'arName' => 'طانطان',
            'name' => 'Tan-Tan',
            'wilaya_id' => '09',
        ],
        66 => [
            'arName' => 'اسا-الزاك',
            'name' => 'Assa-Zag',
            'wilaya_id' => '09',
        ],
        67 => [
            'arName' => 'ورزازات',
            'name' => 'Ouarzazate',
            'wilaya_id' => '10',
        ],
        68 => [
            'arName' => 'تنغير',
            'name' => 'Tinghir',
            'wilaya_id' => '10',
        ],
        69 => [
            'arName' => 'زاكورة',
            'name' => 'Zagora',
            'wilaya_id' => '10',
        ],
        70 => [
            'arName' => 'الرشيدية',
            'name' => 'Errachidia',
            'wilaya_id' => '10',
        ],
        71 => [
            'arName' => 'ميدلت',
            'name' => 'Midelt',
            'wilaya_id' => '10',
        ],
        72 => [
            'arName' => 'العيون',
            'name' => 'Laâyoune',
            'wilaya_id' => '11',
        ],
        73 => [
            'arName' => 'بوجدور',
            'name' => 'Boujdour',
            'wilaya_id' => '11',
        ],
        74 => [
            'arName' => 'طرفاية',
            'name' => 'Tarfaya',
            'wilaya_id' => '11',
        ],
        75 => [
            'arName' => 'السمارة',
            'name' => 'Es-Semara',
            'wilaya_id' => '11',
        ],
        76 => [
            'arName' => 'وادي الذهب',
            'name' => 'Oued Ed-Dahab',
            'wilaya_id' => '12',
        ],
        77 => [
            'arName' => 'اوسرد',
            'name' => 'Aousserd',
            'wilaya_id' => '12',
        ]
    ];

    public function run()
    {
        array_walk($this->dairas, function ($daira, $key) {
            Daira::create(array_merge(['id' => $key], $daira));
        });
    }
}