<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provinces')->delete();
        
        \DB::table('provinces')->insert(array (
            0 => 
            array (
                'uid' => 1,
                'id' => 128,
                'text' => 'ILOCOS NORTE',
            ),
            1 => 
            array (
                'uid' => 2,
                'id' => 129,
                'text' => 'ILOCOS SUR',
            ),
            2 => 
            array (
                'uid' => 3,
                'id' => 133,
                'text' => 'LA UNION',
            ),
            3 => 
            array (
                'uid' => 4,
                'id' => 155,
                'text' => 'PANGASINAN',
            ),
            4 => 
            array (
                'uid' => 5,
                'id' => 209,
                'text' => 'BATANES',
            ),
            5 => 
            array (
                'uid' => 6,
                'id' => 215,
                'text' => 'CAGAYAN',
            ),
            6 => 
            array (
                'uid' => 7,
                'id' => 231,
                'text' => 'ISABELA',
            ),
            7 => 
            array (
                'uid' => 8,
                'id' => 250,
                'text' => 'NUEVA VIZCAYA',
            ),
            8 => 
            array (
                'uid' => 9,
                'id' => 257,
                'text' => 'QUIRINO',
            ),
            9 => 
            array (
                'uid' => 10,
                'id' => 308,
                'text' => 'BATAAN',
            ),
            10 => 
            array (
                'uid' => 11,
                'id' => 314,
                'text' => 'BULACAN',
            ),
            11 => 
            array (
                'uid' => 12,
                'id' => 349,
                'text' => 'NUEVA ECIJA',
            ),
            12 => 
            array (
                'uid' => 13,
                'id' => 354,
                'text' => 'PAMPANGA',
            ),
            13 => 
            array (
                'uid' => 14,
                'id' => 369,
                'text' => 'TARLAC',
            ),
            14 => 
            array (
                'uid' => 15,
                'id' => 371,
                'text' => 'ZAMBALES',
            ),
            15 => 
            array (
                'uid' => 16,
                'id' => 377,
                'text' => 'AURORA',
            ),
            16 => 
            array (
                'uid' => 17,
                'id' => 410,
                'text' => 'BATANGAS',
            ),
            17 => 
            array (
                'uid' => 18,
                'id' => 421,
                'text' => 'CAVITE',
            ),
            18 => 
            array (
                'uid' => 19,
                'id' => 434,
                'text' => 'LAGUNA',
            ),
            19 => 
            array (
                'uid' => 20,
                'id' => 456,
                'text' => 'QUEZON',
            ),
            20 => 
            array (
                'uid' => 21,
                'id' => 458,
                'text' => 'RIZAL',
            ),
            21 => 
            array (
                'uid' => 22,
                'id' => 1740,
                'text' => 'MARINDUQUE',
            ),
            22 => 
            array (
                'uid' => 23,
                'id' => 1751,
                'text' => 'OCCIDENTAL MINDORO',
            ),
            23 => 
            array (
                'uid' => 24,
                'id' => 1752,
                'text' => 'ORIENTAL MINDORO',
            ),
            24 => 
            array (
                'uid' => 25,
                'id' => 1753,
                'text' => 'PALAWAN',
            ),
            25 => 
            array (
                'uid' => 26,
                'id' => 1759,
                'text' => 'ROMBLON',
            ),
            26 => 
            array (
                'uid' => 27,
                'id' => 505,
                'text' => 'ALBAY',
            ),
            27 => 
            array (
                'uid' => 28,
                'id' => 516,
                'text' => 'CAMARINES NORTE',
            ),
            28 => 
            array (
                'uid' => 29,
                'id' => 517,
                'text' => 'CAMARINES SUR',
            ),
            29 => 
            array (
                'uid' => 30,
                'id' => 520,
                'text' => 'CATANDUANES',
            ),
            30 => 
            array (
                'uid' => 31,
                'id' => 541,
                'text' => 'MASBATE',
            ),
            31 => 
            array (
                'uid' => 32,
                'id' => 562,
                'text' => 'SORSOGON',
            ),
            32 => 
            array (
                'uid' => 33,
                'id' => 604,
                'text' => 'AKLAN',
            ),
            33 => 
            array (
                'uid' => 34,
                'id' => 606,
                'text' => 'ANTIQUE',
            ),
            34 => 
            array (
                'uid' => 35,
                'id' => 619,
                'text' => 'CAPIZ',
            ),
            35 => 
            array (
                'uid' => 36,
                'id' => 630,
                'text' => 'ILOILO',
            ),
            36 => 
            array (
                'uid' => 37,
                'id' => 645,
                'text' => 'NEGROS OCCIDENTAL',
            ),
            37 => 
            array (
                'uid' => 38,
                'id' => 679,
                'text' => 'GUIMARAS',
            ),
            38 => 
            array (
                'uid' => 39,
                'id' => 712,
                'text' => 'BOHOL',
            ),
            39 => 
            array (
                'uid' => 40,
                'id' => 722,
                'text' => 'CEBU',
            ),
            40 => 
            array (
                'uid' => 41,
                'id' => 746,
                'text' => 'NEGROS ORIENTAL',
            ),
            41 => 
            array (
                'uid' => 42,
                'id' => 761,
                'text' => 'SIQUIJOR',
            ),
            42 => 
            array (
                'uid' => 43,
                'id' => 826,
                'text' => 'EASTERN SAMAR',
            ),
            43 => 
            array (
                'uid' => 44,
                'id' => 837,
                'text' => 'LEYTE',
            ),
            44 => 
            array (
                'uid' => 45,
                'id' => 848,
                'text' => 'NORTHERN SAMAR',
            ),
            45 => 
            array (
                'uid' => 46,
                'id' => 860,
            'text' => 'SAMAR (WESTERN SAMAR)',
            ),
            46 => 
            array (
                'uid' => 47,
                'id' => 864,
                'text' => 'SOUTHERN LEYTE',
            ),
            47 => 
            array (
                'uid' => 48,
                'id' => 878,
                'text' => 'BILIRAN',
            ),
            48 => 
            array (
                'uid' => 49,
                'id' => 972,
                'text' => 'ZAMBOANGA DEL NORTE',
            ),
            49 => 
            array (
                'uid' => 50,
                'id' => 973,
                'text' => 'ZAMBOANGA DEL SUR',
            ),
            50 => 
            array (
                'uid' => 51,
                'id' => 983,
                'text' => 'ZAMBOANGA SIBUGAY',
            ),
            51 => 
            array (
                'uid' => 52,
                'id' => 997,
                'text' => 'CITY OF ISABELA',
            ),
            52 => 
            array (
                'uid' => 53,
                'id' => 1013,
                'text' => 'BUKIDNON',
            ),
            53 => 
            array (
                'uid' => 54,
                'id' => 1018,
                'text' => 'CAMIGUIN',
            ),
            54 => 
            array (
                'uid' => 55,
                'id' => 1035,
                'text' => 'LANAO DEL NORTE',
            ),
            55 => 
            array (
                'uid' => 56,
                'id' => 1042,
                'text' => 'MISAMIS OCCIDENTAL',
            ),
            56 => 
            array (
                'uid' => 57,
                'id' => 1043,
                'text' => 'MISAMIS ORIENTAL',
            ),
            57 => 
            array (
                'uid' => 58,
                'id' => 1123,
                'text' => 'DAVAO DEL NORTE',
            ),
            58 => 
            array (
                'uid' => 59,
                'id' => 1124,
                'text' => 'DAVAO DEL SUR',
            ),
            59 => 
            array (
                'uid' => 60,
                'id' => 1125,
                'text' => 'DAVAO ORIENTAL',
            ),
            60 => 
            array (
                'uid' => 61,
                'id' => 1182,
                'text' => 'COMPOSTELA VALLEY',
            ),
            61 => 
            array (
                'uid' => 62,
                'id' => 1186,
                'text' => 'DAVAO OCCIDENTAL',
            ),
            62 => 
            array (
                'uid' => 63,
                'id' => 1247,
            'text' => 'COTABATO (NORTH COTABATO)',
            ),
            63 => 
            array (
                'uid' => 64,
                'id' => 1263,
                'text' => 'SOUTH COTABATO',
            ),
            64 => 
            array (
                'uid' => 65,
                'id' => 1265,
                'text' => 'SULTAN KUDARAT',
            ),
            65 => 
            array (
                'uid' => 66,
                'id' => 1280,
                'text' => 'SARANGANI',
            ),
            66 => 
            array (
                'uid' => 67,
                'id' => 1298,
                'text' => 'COTABATO CITY',
            ),
            67 => 
            array (
                'uid' => 68,
                'id' => 1339,
                'text' => 'NCR, CITY OF MANILA, FIRST DISTRICT',
            ),
            68 => 
            array (
                'uid' => 69,
                'id' => 1339,
                'text' => 'CITY OF MANILA',
            ),
            69 => 
            array (
                'uid' => 70,
                'id' => 1374,
                'text' => 'NCR, SECOND DISTRICT',
            ),
            70 => 
            array (
                'uid' => 71,
                'id' => 1375,
                'text' => 'NCR, THIRD DISTRICT',
            ),
            71 => 
            array (
                'uid' => 72,
                'id' => 1376,
                'text' => 'NCR, FOURTH DISTRICT',
            ),
            72 => 
            array (
                'uid' => 73,
                'id' => 1401,
                'text' => 'ABRA',
            ),
            73 => 
            array (
                'uid' => 74,
                'id' => 1411,
                'text' => 'BENGUET',
            ),
            74 => 
            array (
                'uid' => 75,
                'id' => 1427,
                'text' => 'IFUGAO',
            ),
            75 => 
            array (
                'uid' => 76,
                'id' => 1432,
                'text' => 'KALINGA',
            ),
            76 => 
            array (
                'uid' => 77,
                'id' => 1444,
                'text' => 'MOUNTAIN PROVINCE',
            ),
            77 => 
            array (
                'uid' => 78,
                'id' => 1481,
                'text' => 'APAYAO',
            ),
            78 => 
            array (
                'uid' => 79,
                'id' => 1507,
                'text' => 'BASILAN',
            ),
            79 => 
            array (
                'uid' => 80,
                'id' => 1536,
                'text' => 'LANAO DEL SUR',
            ),
            80 => 
            array (
                'uid' => 81,
                'id' => 1538,
                'text' => 'MAGUINDANAO',
            ),
            81 => 
            array (
                'uid' => 82,
                'id' => 1566,
                'text' => 'SULU',
            ),
            82 => 
            array (
                'uid' => 83,
                'id' => 1570,
                'text' => 'TAWI-TAWI',
            ),
            83 => 
            array (
                'uid' => 84,
                'id' => 1602,
                'text' => 'AGUSAN DEL NORTE',
            ),
            84 => 
            array (
                'uid' => 85,
                'id' => 1603,
                'text' => 'AGUSAN DEL SUR',
            ),
            85 => 
            array (
                'uid' => 86,
                'id' => 1667,
                'text' => 'SURIGAO DEL NORTE',
            ),
            86 => 
            array (
                'uid' => 87,
                'id' => 1668,
                'text' => 'SURIGAO DEL SUR',
            ),
            87 => 
            array (
                'uid' => 88,
                'id' => 1685,
                'text' => 'DINAGAT ISLANDS',
            ),
        ));
        
        
    }
}