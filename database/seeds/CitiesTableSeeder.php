<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 12801,
                'text' => 'ADAMS',
                'province_id' => 128,
            ),
            1 => 
            array (
                'id' => 12802,
                'text' => 'BACARRA',
                'province_id' => 128,
            ),
            2 => 
            array (
                'id' => 12803,
                'text' => 'BADOC',
                'province_id' => 128,
            ),
            3 => 
            array (
                'id' => 12804,
                'text' => 'BANGUI',
                'province_id' => 128,
            ),
            4 => 
            array (
                'id' => 12805,
                'text' => 'CITY OF BATAC',
                'province_id' => 128,
            ),
            5 => 
            array (
                'id' => 12806,
                'text' => 'BURGOS',
                'province_id' => 128,
            ),
            6 => 
            array (
                'id' => 12807,
                'text' => 'CARASI',
                'province_id' => 128,
            ),
            7 => 
            array (
                'id' => 12808,
                'text' => 'CURRIMAO',
                'province_id' => 128,
            ),
            8 => 
            array (
                'id' => 12809,
                'text' => 'DINGRAS',
                'province_id' => 128,
            ),
            9 => 
            array (
                'id' => 12810,
                'text' => 'DUMALNEG',
                'province_id' => 128,
            ),
            10 => 
            array (
                'id' => 12811,
            'text' => 'BANNA (ESPIRITU)',
                'province_id' => 128,
            ),
            11 => 
            array (
                'id' => 12812,
            'text' => 'LAOAG CITY (Capital)',
                'province_id' => 128,
            ),
            12 => 
            array (
                'id' => 12813,
                'text' => 'MARCOS',
                'province_id' => 128,
            ),
            13 => 
            array (
                'id' => 12814,
                'text' => 'NUEVA ERA',
                'province_id' => 128,
            ),
            14 => 
            array (
                'id' => 12815,
                'text' => 'PAGUDPUD',
                'province_id' => 128,
            ),
            15 => 
            array (
                'id' => 12816,
                'text' => 'PAOAY',
                'province_id' => 128,
            ),
            16 => 
            array (
                'id' => 12817,
                'text' => 'PASUQUIN',
                'province_id' => 128,
            ),
            17 => 
            array (
                'id' => 12818,
                'text' => 'PIDDIG',
                'province_id' => 128,
            ),
            18 => 
            array (
                'id' => 12819,
                'text' => 'PINILI',
                'province_id' => 128,
            ),
            19 => 
            array (
                'id' => 12820,
                'text' => 'SAN NICOLAS',
                'province_id' => 128,
            ),
            20 => 
            array (
                'id' => 12821,
                'text' => 'SARRAT',
                'province_id' => 128,
            ),
            21 => 
            array (
                'id' => 12822,
                'text' => 'SOLSONA',
                'province_id' => 128,
            ),
            22 => 
            array (
                'id' => 12823,
                'text' => 'VINTAR',
                'province_id' => 128,
            ),
            23 => 
            array (
                'id' => 12901,
                'text' => 'ALILEM',
                'province_id' => 129,
            ),
            24 => 
            array (
                'id' => 12902,
                'text' => 'BANAYOYO',
                'province_id' => 129,
            ),
            25 => 
            array (
                'id' => 12903,
                'text' => 'BANTAY',
                'province_id' => 129,
            ),
            26 => 
            array (
                'id' => 12904,
                'text' => 'BURGOS',
                'province_id' => 129,
            ),
            27 => 
            array (
                'id' => 12905,
                'text' => 'CABUGAO',
                'province_id' => 129,
            ),
            28 => 
            array (
                'id' => 12906,
                'text' => 'CITY OF CANDON',
                'province_id' => 129,
            ),
            29 => 
            array (
                'id' => 12907,
                'text' => 'CAOAYAN',
                'province_id' => 129,
            ),
            30 => 
            array (
                'id' => 12908,
                'text' => 'CERVANTES',
                'province_id' => 129,
            ),
            31 => 
            array (
                'id' => 12909,
                'text' => 'GALIMUYOD',
                'province_id' => 129,
            ),
            32 => 
            array (
                'id' => 12910,
            'text' => 'GREGORIO DEL PILAR (CONCEPCION)',
                'province_id' => 129,
            ),
            33 => 
            array (
                'id' => 12911,
                'text' => 'LIDLIDDA',
                'province_id' => 129,
            ),
            34 => 
            array (
                'id' => 12912,
                'text' => 'MAGSINGAL',
                'province_id' => 129,
            ),
            35 => 
            array (
                'id' => 12913,
                'text' => 'NAGBUKEL',
                'province_id' => 129,
            ),
            36 => 
            array (
                'id' => 12914,
                'text' => 'NARVACAN',
                'province_id' => 129,
            ),
            37 => 
            array (
                'id' => 12915,
            'text' => 'QUIRINO (ANGKAKI)',
                'province_id' => 129,
            ),
            38 => 
            array (
                'id' => 12916,
            'text' => 'SALCEDO (BAUGEN)',
                'province_id' => 129,
            ),
            39 => 
            array (
                'id' => 12917,
                'text' => 'SAN EMILIO',
                'province_id' => 129,
            ),
            40 => 
            array (
                'id' => 12918,
                'text' => 'SAN ESTEBAN',
                'province_id' => 129,
            ),
            41 => 
            array (
                'id' => 12919,
                'text' => 'SAN ILDEFONSO',
                'province_id' => 129,
            ),
            42 => 
            array (
                'id' => 12920,
            'text' => 'SAN JUAN (LAPOG)',
                'province_id' => 129,
            ),
            43 => 
            array (
                'id' => 12921,
                'text' => 'SAN VICENTE',
                'province_id' => 129,
            ),
            44 => 
            array (
                'id' => 12922,
                'text' => 'SANTA',
                'province_id' => 129,
            ),
            45 => 
            array (
                'id' => 12923,
                'text' => 'SANTA CATALINA',
                'province_id' => 129,
            ),
            46 => 
            array (
                'id' => 12924,
                'text' => 'SANTA CRUZ',
                'province_id' => 129,
            ),
            47 => 
            array (
                'id' => 12925,
                'text' => 'SANTA LUCIA',
                'province_id' => 129,
            ),
            48 => 
            array (
                'id' => 12926,
                'text' => 'SANTA MARIA',
                'province_id' => 129,
            ),
            49 => 
            array (
                'id' => 12927,
                'text' => 'SANTIAGO',
                'province_id' => 129,
            ),
            50 => 
            array (
                'id' => 12928,
                'text' => 'SANTO DOMINGO',
                'province_id' => 129,
            ),
            51 => 
            array (
                'id' => 12929,
                'text' => 'SIGAY',
                'province_id' => 129,
            ),
            52 => 
            array (
                'id' => 12930,
                'text' => 'SINAIT',
                'province_id' => 129,
            ),
            53 => 
            array (
                'id' => 12931,
                'text' => 'SUGPON',
                'province_id' => 129,
            ),
            54 => 
            array (
                'id' => 12932,
                'text' => 'SUYO',
                'province_id' => 129,
            ),
            55 => 
            array (
                'id' => 12933,
                'text' => 'TAGUDIN',
                'province_id' => 129,
            ),
            56 => 
            array (
                'id' => 12934,
            'text' => 'CITY OF VIGAN (Capital)',
                'province_id' => 129,
            ),
            57 => 
            array (
                'id' => 13301,
                'text' => 'AGOO',
                'province_id' => 133,
            ),
            58 => 
            array (
                'id' => 13302,
                'text' => 'ARINGAY',
                'province_id' => 133,
            ),
            59 => 
            array (
                'id' => 13303,
                'text' => 'BACNOTAN',
                'province_id' => 133,
            ),
            60 => 
            array (
                'id' => 13304,
                'text' => 'BAGULIN',
                'province_id' => 133,
            ),
            61 => 
            array (
                'id' => 13305,
                'text' => 'BALAOAN',
                'province_id' => 133,
            ),
            62 => 
            array (
                'id' => 13306,
                'text' => 'BANGAR',
                'province_id' => 133,
            ),
            63 => 
            array (
                'id' => 13307,
                'text' => 'BAUANG',
                'province_id' => 133,
            ),
            64 => 
            array (
                'id' => 13308,
                'text' => 'BURGOS',
                'province_id' => 133,
            ),
            65 => 
            array (
                'id' => 13309,
                'text' => 'CABA',
                'province_id' => 133,
            ),
            66 => 
            array (
                'id' => 13310,
                'text' => 'LUNA',
                'province_id' => 133,
            ),
            67 => 
            array (
                'id' => 13311,
                'text' => 'NAGUILIAN',
                'province_id' => 133,
            ),
            68 => 
            array (
                'id' => 13312,
                'text' => 'PUGO',
                'province_id' => 133,
            ),
            69 => 
            array (
                'id' => 13313,
                'text' => 'ROSARIO',
                'province_id' => 133,
            ),
            70 => 
            array (
                'id' => 13314,
            'text' => 'CITY OF SAN FERNANDO (Capital)',
                'province_id' => 133,
            ),
            71 => 
            array (
                'id' => 13315,
                'text' => 'SAN GABRIEL',
                'province_id' => 133,
            ),
            72 => 
            array (
                'id' => 13316,
                'text' => 'SAN JUAN',
                'province_id' => 133,
            ),
            73 => 
            array (
                'id' => 13317,
                'text' => 'SANTO TOMAS',
                'province_id' => 133,
            ),
            74 => 
            array (
                'id' => 13318,
                'text' => 'SANTOL',
                'province_id' => 133,
            ),
            75 => 
            array (
                'id' => 13319,
                'text' => 'SUDIPEN',
                'province_id' => 133,
            ),
            76 => 
            array (
                'id' => 13320,
                'text' => 'TUBAO',
                'province_id' => 133,
            ),
            77 => 
            array (
                'id' => 15501,
                'text' => 'AGNO',
                'province_id' => 155,
            ),
            78 => 
            array (
                'id' => 15502,
                'text' => 'AGUILAR',
                'province_id' => 155,
            ),
            79 => 
            array (
                'id' => 15503,
                'text' => 'CITY OF ALAMINOS',
                'province_id' => 155,
            ),
            80 => 
            array (
                'id' => 15504,
                'text' => 'ALCALA',
                'province_id' => 155,
            ),
            81 => 
            array (
                'id' => 15505,
                'text' => 'ANDA',
                'province_id' => 155,
            ),
            82 => 
            array (
                'id' => 15506,
                'text' => 'ASINGAN',
                'province_id' => 155,
            ),
            83 => 
            array (
                'id' => 15507,
                'text' => 'BALUNGAO',
                'province_id' => 155,
            ),
            84 => 
            array (
                'id' => 15508,
                'text' => 'BANI',
                'province_id' => 155,
            ),
            85 => 
            array (
                'id' => 15509,
                'text' => 'BASISTA',
                'province_id' => 155,
            ),
            86 => 
            array (
                'id' => 15510,
                'text' => 'BAUTISTA',
                'province_id' => 155,
            ),
            87 => 
            array (
                'id' => 15511,
                'text' => 'BAYAMBANG',
                'province_id' => 155,
            ),
            88 => 
            array (
                'id' => 15512,
                'text' => 'BINALONAN',
                'province_id' => 155,
            ),
            89 => 
            array (
                'id' => 15513,
                'text' => 'BINMALEY',
                'province_id' => 155,
            ),
            90 => 
            array (
                'id' => 15514,
                'text' => 'BOLINAO',
                'province_id' => 155,
            ),
            91 => 
            array (
                'id' => 15515,
                'text' => 'BUGALLON',
                'province_id' => 155,
            ),
            92 => 
            array (
                'id' => 15516,
                'text' => 'BURGOS',
                'province_id' => 155,
            ),
            93 => 
            array (
                'id' => 15517,
                'text' => 'CALASIAO',
                'province_id' => 155,
            ),
            94 => 
            array (
                'id' => 15518,
                'text' => 'DAGUPAN CITY',
                'province_id' => 155,
            ),
            95 => 
            array (
                'id' => 15519,
                'text' => 'DASOL',
                'province_id' => 155,
            ),
            96 => 
            array (
                'id' => 15520,
                'text' => 'INFANTA',
                'province_id' => 155,
            ),
            97 => 
            array (
                'id' => 15521,
                'text' => 'LABRADOR',
                'province_id' => 155,
            ),
            98 => 
            array (
                'id' => 15522,
            'text' => 'LINGAYEN (Capital)',
                'province_id' => 155,
            ),
            99 => 
            array (
                'id' => 15523,
                'text' => 'MABINI',
                'province_id' => 155,
            ),
            100 => 
            array (
                'id' => 15524,
                'text' => 'MALASIQUI',
                'province_id' => 155,
            ),
            101 => 
            array (
                'id' => 15525,
                'text' => 'MANAOAG',
                'province_id' => 155,
            ),
            102 => 
            array (
                'id' => 15526,
                'text' => 'MANGALDAN',
                'province_id' => 155,
            ),
            103 => 
            array (
                'id' => 15527,
                'text' => 'MANGATAREM',
                'province_id' => 155,
            ),
            104 => 
            array (
                'id' => 15528,
                'text' => 'MAPANDAN',
                'province_id' => 155,
            ),
            105 => 
            array (
                'id' => 15529,
                'text' => 'NATIVIDAD',
                'province_id' => 155,
            ),
            106 => 
            array (
                'id' => 15530,
                'text' => 'POZORRUBIO',
                'province_id' => 155,
            ),
            107 => 
            array (
                'id' => 15531,
                'text' => 'ROSALES',
                'province_id' => 155,
            ),
            108 => 
            array (
                'id' => 15532,
                'text' => 'SAN CARLOS CITY',
                'province_id' => 155,
            ),
            109 => 
            array (
                'id' => 15533,
                'text' => 'SAN FABIAN',
                'province_id' => 155,
            ),
            110 => 
            array (
                'id' => 15534,
                'text' => 'SAN JACINTO',
                'province_id' => 155,
            ),
            111 => 
            array (
                'id' => 15535,
                'text' => 'SAN MANUEL',
                'province_id' => 155,
            ),
            112 => 
            array (
                'id' => 15536,
                'text' => 'SAN NICOLAS',
                'province_id' => 155,
            ),
            113 => 
            array (
                'id' => 15537,
                'text' => 'SAN QUINTIN',
                'province_id' => 155,
            ),
            114 => 
            array (
                'id' => 15538,
                'text' => 'SANTA BARBARA',
                'province_id' => 155,
            ),
            115 => 
            array (
                'id' => 15539,
                'text' => 'SANTA MARIA',
                'province_id' => 155,
            ),
            116 => 
            array (
                'id' => 15540,
                'text' => 'SANTO TOMAS',
                'province_id' => 155,
            ),
            117 => 
            array (
                'id' => 15541,
                'text' => 'SISON',
                'province_id' => 155,
            ),
            118 => 
            array (
                'id' => 15542,
                'text' => 'SUAL',
                'province_id' => 155,
            ),
            119 => 
            array (
                'id' => 15543,
                'text' => 'TAYUG',
                'province_id' => 155,
            ),
            120 => 
            array (
                'id' => 15544,
                'text' => 'UMINGAN',
                'province_id' => 155,
            ),
            121 => 
            array (
                'id' => 15545,
                'text' => 'URBIZTONDO',
                'province_id' => 155,
            ),
            122 => 
            array (
                'id' => 15546,
                'text' => 'CITY OF URDANETA',
                'province_id' => 155,
            ),
            123 => 
            array (
                'id' => 15547,
                'text' => 'VILLASIS',
                'province_id' => 155,
            ),
            124 => 
            array (
                'id' => 15548,
                'text' => 'LAOAC',
                'province_id' => 155,
            ),
            125 => 
            array (
                'id' => 20901,
            'text' => 'BASCO (Capital)',
                'province_id' => 209,
            ),
            126 => 
            array (
                'id' => 20902,
                'text' => 'ITBAYAT',
                'province_id' => 209,
            ),
            127 => 
            array (
                'id' => 20903,
                'text' => 'IVANA',
                'province_id' => 209,
            ),
            128 => 
            array (
                'id' => 20904,
                'text' => 'MAHATAO',
                'province_id' => 209,
            ),
            129 => 
            array (
                'id' => 20905,
                'text' => 'SABTANG',
                'province_id' => 209,
            ),
            130 => 
            array (
                'id' => 20906,
                'text' => 'UYUGAN',
                'province_id' => 209,
            ),
            131 => 
            array (
                'id' => 21501,
                'text' => 'ABULUG',
                'province_id' => 215,
            ),
            132 => 
            array (
                'id' => 21502,
                'text' => 'ALCALA',
                'province_id' => 215,
            ),
            133 => 
            array (
                'id' => 21503,
                'text' => 'ALLACAPAN',
                'province_id' => 215,
            ),
            134 => 
            array (
                'id' => 21504,
                'text' => 'AMULUNG',
                'province_id' => 215,
            ),
            135 => 
            array (
                'id' => 21505,
                'text' => 'APARRI',
                'province_id' => 215,
            ),
            136 => 
            array (
                'id' => 21506,
                'text' => 'BAGGAO',
                'province_id' => 215,
            ),
            137 => 
            array (
                'id' => 21507,
                'text' => 'BALLESTEROS',
                'province_id' => 215,
            ),
            138 => 
            array (
                'id' => 21508,
                'text' => 'BUGUEY',
                'province_id' => 215,
            ),
            139 => 
            array (
                'id' => 21509,
                'text' => 'CALAYAN',
                'province_id' => 215,
            ),
            140 => 
            array (
                'id' => 21510,
                'text' => 'CAMALANIUGAN',
                'province_id' => 215,
            ),
            141 => 
            array (
                'id' => 21511,
                'text' => 'CLAVERIA',
                'province_id' => 215,
            ),
            142 => 
            array (
                'id' => 21512,
                'text' => 'ENRILE',
                'province_id' => 215,
            ),
            143 => 
            array (
                'id' => 21513,
                'text' => 'GATTARAN',
                'province_id' => 215,
            ),
            144 => 
            array (
                'id' => 21514,
                'text' => 'GONZAGA',
                'province_id' => 215,
            ),
            145 => 
            array (
                'id' => 21515,
                'text' => 'IGUIG',
                'province_id' => 215,
            ),
            146 => 
            array (
                'id' => 21516,
                'text' => 'LAL-LO',
                'province_id' => 215,
            ),
            147 => 
            array (
                'id' => 21517,
                'text' => 'LASAM',
                'province_id' => 215,
            ),
            148 => 
            array (
                'id' => 21518,
                'text' => 'PAMPLONA',
                'province_id' => 215,
            ),
            149 => 
            array (
                'id' => 21519,
                'text' => 'PEÑABLANCA',
                'province_id' => 215,
            ),
            150 => 
            array (
                'id' => 21520,
                'text' => 'PIAT',
                'province_id' => 215,
            ),
            151 => 
            array (
                'id' => 21521,
                'text' => 'RIZAL',
                'province_id' => 215,
            ),
            152 => 
            array (
                'id' => 21522,
                'text' => 'SANCHEZ-MIRA',
                'province_id' => 215,
            ),
            153 => 
            array (
                'id' => 21523,
                'text' => 'SANTA ANA',
                'province_id' => 215,
            ),
            154 => 
            array (
                'id' => 21524,
                'text' => 'SANTA PRAXEDES',
                'province_id' => 215,
            ),
            155 => 
            array (
                'id' => 21525,
                'text' => 'SANTA TERESITA',
                'province_id' => 215,
            ),
            156 => 
            array (
                'id' => 21526,
            'text' => 'SANTO NIÑO (FAIRE)',
                'province_id' => 215,
            ),
            157 => 
            array (
                'id' => 21527,
                'text' => 'SOLANA',
                'province_id' => 215,
            ),
            158 => 
            array (
                'id' => 21528,
                'text' => 'TUAO',
                'province_id' => 215,
            ),
            159 => 
            array (
                'id' => 21529,
            'text' => 'TUGUEGARAO CITY (Capital)',
                'province_id' => 215,
            ),
            160 => 
            array (
                'id' => 23101,
                'text' => 'ALICIA',
                'province_id' => 231,
            ),
            161 => 
            array (
                'id' => 23102,
                'text' => 'ANGADANAN',
                'province_id' => 231,
            ),
            162 => 
            array (
                'id' => 23103,
                'text' => 'AURORA',
                'province_id' => 231,
            ),
            163 => 
            array (
                'id' => 23104,
                'text' => 'BENITO SOLIVEN',
                'province_id' => 231,
            ),
            164 => 
            array (
                'id' => 23105,
                'text' => 'BURGOS',
                'province_id' => 231,
            ),
            165 => 
            array (
                'id' => 23106,
                'text' => 'CABAGAN',
                'province_id' => 231,
            ),
            166 => 
            array (
                'id' => 23107,
                'text' => 'CABATUAN',
                'province_id' => 231,
            ),
            167 => 
            array (
                'id' => 23108,
                'text' => 'CITY OF CAUAYAN',
                'province_id' => 231,
            ),
            168 => 
            array (
                'id' => 23109,
                'text' => 'CORDON',
                'province_id' => 231,
            ),
            169 => 
            array (
                'id' => 23110,
                'text' => 'DINAPIGUE',
                'province_id' => 231,
            ),
            170 => 
            array (
                'id' => 23111,
                'text' => 'DIVILACAN',
                'province_id' => 231,
            ),
            171 => 
            array (
                'id' => 23112,
                'text' => 'ECHAGUE',
                'province_id' => 231,
            ),
            172 => 
            array (
                'id' => 23113,
                'text' => 'GAMU',
                'province_id' => 231,
            ),
            173 => 
            array (
                'id' => 23114,
            'text' => 'ILAGAN CITY (Capital)',
                'province_id' => 231,
            ),
            174 => 
            array (
                'id' => 23115,
                'text' => 'JONES',
                'province_id' => 231,
            ),
            175 => 
            array (
                'id' => 23116,
                'text' => 'LUNA',
                'province_id' => 231,
            ),
            176 => 
            array (
                'id' => 23117,
                'text' => 'MACONACON',
                'province_id' => 231,
            ),
            177 => 
            array (
                'id' => 23118,
            'text' => 'DELFIN ALBANO (MAGSAYSAY)',
                'province_id' => 231,
            ),
            178 => 
            array (
                'id' => 23119,
                'text' => 'MALLIG',
                'province_id' => 231,
            ),
            179 => 
            array (
                'id' => 23120,
                'text' => 'NAGUILIAN',
                'province_id' => 231,
            ),
            180 => 
            array (
                'id' => 23121,
                'text' => 'PALANAN',
                'province_id' => 231,
            ),
            181 => 
            array (
                'id' => 23122,
                'text' => 'QUEZON',
                'province_id' => 231,
            ),
            182 => 
            array (
                'id' => 23123,
                'text' => 'QUIRINO',
                'province_id' => 231,
            ),
            183 => 
            array (
                'id' => 23124,
                'text' => 'RAMON',
                'province_id' => 231,
            ),
            184 => 
            array (
                'id' => 23125,
                'text' => 'REINA MERCEDES',
                'province_id' => 231,
            ),
            185 => 
            array (
                'id' => 23126,
                'text' => 'ROXAS',
                'province_id' => 231,
            ),
            186 => 
            array (
                'id' => 23127,
                'text' => 'SAN AGUSTIN',
                'province_id' => 231,
            ),
            187 => 
            array (
                'id' => 23128,
                'text' => 'SAN GUILLERMO',
                'province_id' => 231,
            ),
            188 => 
            array (
                'id' => 23129,
                'text' => 'SAN ISIDRO',
                'province_id' => 231,
            ),
            189 => 
            array (
                'id' => 23130,
                'text' => 'SAN MANUEL',
                'province_id' => 231,
            ),
            190 => 
            array (
                'id' => 23131,
                'text' => 'SAN MARIANO',
                'province_id' => 231,
            ),
            191 => 
            array (
                'id' => 23132,
                'text' => 'SAN MATEO',
                'province_id' => 231,
            ),
            192 => 
            array (
                'id' => 23133,
                'text' => 'SAN PABLO',
                'province_id' => 231,
            ),
            193 => 
            array (
                'id' => 23134,
                'text' => 'SANTA MARIA',
                'province_id' => 231,
            ),
            194 => 
            array (
                'id' => 23135,
                'text' => 'CITY OF SANTIAGO',
                'province_id' => 231,
            ),
            195 => 
            array (
                'id' => 23136,
                'text' => 'SANTO TOMAS',
                'province_id' => 231,
            ),
            196 => 
            array (
                'id' => 23137,
                'text' => 'TUMAUINI',
                'province_id' => 231,
            ),
            197 => 
            array (
                'id' => 25001,
                'text' => 'AMBAGUIO',
                'province_id' => 250,
            ),
            198 => 
            array (
                'id' => 25002,
                'text' => 'ARITAO',
                'province_id' => 250,
            ),
            199 => 
            array (
                'id' => 25003,
                'text' => 'BAGABAG',
                'province_id' => 250,
            ),
            200 => 
            array (
                'id' => 25004,
                'text' => 'BAMBANG',
                'province_id' => 250,
            ),
            201 => 
            array (
                'id' => 25005,
            'text' => 'BAYOMBONG (Capital)',
                'province_id' => 250,
            ),
            202 => 
            array (
                'id' => 25006,
                'text' => 'DIADI',
                'province_id' => 250,
            ),
            203 => 
            array (
                'id' => 25007,
                'text' => 'DUPAX DEL NORTE',
                'province_id' => 250,
            ),
            204 => 
            array (
                'id' => 25008,
                'text' => 'DUPAX DEL SUR',
                'province_id' => 250,
            ),
            205 => 
            array (
                'id' => 25009,
                'text' => 'KASIBU',
                'province_id' => 250,
            ),
            206 => 
            array (
                'id' => 25010,
                'text' => 'KAYAPA',
                'province_id' => 250,
            ),
            207 => 
            array (
                'id' => 25011,
                'text' => 'QUEZON',
                'province_id' => 250,
            ),
            208 => 
            array (
                'id' => 25012,
                'text' => 'SANTA FE',
                'province_id' => 250,
            ),
            209 => 
            array (
                'id' => 25013,
                'text' => 'SOLANO',
                'province_id' => 250,
            ),
            210 => 
            array (
                'id' => 25014,
                'text' => 'VILLAVERDE',
                'province_id' => 250,
            ),
            211 => 
            array (
                'id' => 25015,
                'text' => 'ALFONSO CASTANEDA',
                'province_id' => 250,
            ),
            212 => 
            array (
                'id' => 25701,
                'text' => 'AGLIPAY',
                'province_id' => 257,
            ),
            213 => 
            array (
                'id' => 25702,
            'text' => 'CABARROGUIS (Capital)',
                'province_id' => 257,
            ),
            214 => 
            array (
                'id' => 25703,
                'text' => 'DIFFUN',
                'province_id' => 257,
            ),
            215 => 
            array (
                'id' => 25704,
                'text' => 'MADDELA',
                'province_id' => 257,
            ),
            216 => 
            array (
                'id' => 25705,
                'text' => 'SAGUDAY',
                'province_id' => 257,
            ),
            217 => 
            array (
                'id' => 25706,
                'text' => 'NAGTIPUNAN',
                'province_id' => 257,
            ),
            218 => 
            array (
                'id' => 30801,
                'text' => 'ABUCAY',
                'province_id' => 308,
            ),
            219 => 
            array (
                'id' => 30802,
                'text' => 'BAGAC',
                'province_id' => 308,
            ),
            220 => 
            array (
                'id' => 30803,
            'text' => 'CITY OF BALANGA (Capital)',
                'province_id' => 308,
            ),
            221 => 
            array (
                'id' => 30804,
                'text' => 'DINALUPIHAN',
                'province_id' => 308,
            ),
            222 => 
            array (
                'id' => 30805,
                'text' => 'HERMOSA',
                'province_id' => 308,
            ),
            223 => 
            array (
                'id' => 30806,
                'text' => 'LIMAY',
                'province_id' => 308,
            ),
            224 => 
            array (
                'id' => 30807,
                'text' => 'MARIVELES',
                'province_id' => 308,
            ),
            225 => 
            array (
                'id' => 30808,
                'text' => 'MORONG',
                'province_id' => 308,
            ),
            226 => 
            array (
                'id' => 30809,
                'text' => 'ORANI',
                'province_id' => 308,
            ),
            227 => 
            array (
                'id' => 30810,
                'text' => 'ORION',
                'province_id' => 308,
            ),
            228 => 
            array (
                'id' => 30811,
                'text' => 'PILAR',
                'province_id' => 308,
            ),
            229 => 
            array (
                'id' => 30812,
                'text' => 'SAMAL',
                'province_id' => 308,
            ),
            230 => 
            array (
                'id' => 31401,
                'text' => 'ANGAT',
                'province_id' => 314,
            ),
            231 => 
            array (
                'id' => 31402,
            'text' => 'BALAGTAS (BIGAA)',
                'province_id' => 314,
            ),
            232 => 
            array (
                'id' => 31403,
                'text' => 'BALIUAG',
                'province_id' => 314,
            ),
            233 => 
            array (
                'id' => 31404,
                'text' => 'BOCAUE',
                'province_id' => 314,
            ),
            234 => 
            array (
                'id' => 31405,
                'text' => 'BULACAN',
                'province_id' => 314,
            ),
            235 => 
            array (
                'id' => 31406,
                'text' => 'BUSTOS',
                'province_id' => 314,
            ),
            236 => 
            array (
                'id' => 31407,
                'text' => 'CALUMPIT',
                'province_id' => 314,
            ),
            237 => 
            array (
                'id' => 31408,
                'text' => 'GUIGUINTO',
                'province_id' => 314,
            ),
            238 => 
            array (
                'id' => 31409,
                'text' => 'HAGONOY',
                'province_id' => 314,
            ),
            239 => 
            array (
                'id' => 31410,
            'text' => 'CITY OF MALOLOS (Capital)',
                'province_id' => 314,
            ),
            240 => 
            array (
                'id' => 31411,
                'text' => 'MARILAO',
                'province_id' => 314,
            ),
            241 => 
            array (
                'id' => 31412,
                'text' => 'CITY OF MEYCAUAYAN',
                'province_id' => 314,
            ),
            242 => 
            array (
                'id' => 31413,
                'text' => 'NORZAGARAY',
                'province_id' => 314,
            ),
            243 => 
            array (
                'id' => 31414,
                'text' => 'OBANDO',
                'province_id' => 314,
            ),
            244 => 
            array (
                'id' => 31415,
                'text' => 'PANDI',
                'province_id' => 314,
            ),
            245 => 
            array (
                'id' => 31416,
                'text' => 'PAOMBONG',
                'province_id' => 314,
            ),
            246 => 
            array (
                'id' => 31417,
                'text' => 'PLARIDEL',
                'province_id' => 314,
            ),
            247 => 
            array (
                'id' => 31418,
                'text' => 'PULILAN',
                'province_id' => 314,
            ),
            248 => 
            array (
                'id' => 31419,
                'text' => 'SAN ILDEFONSO',
                'province_id' => 314,
            ),
            249 => 
            array (
                'id' => 31420,
                'text' => 'CITY OF SAN JOSE DEL MONTE',
                'province_id' => 314,
            ),
            250 => 
            array (
                'id' => 31421,
                'text' => 'SAN MIGUEL',
                'province_id' => 314,
            ),
            251 => 
            array (
                'id' => 31422,
                'text' => 'SAN RAFAEL',
                'province_id' => 314,
            ),
            252 => 
            array (
                'id' => 31423,
                'text' => 'SANTA MARIA',
                'province_id' => 314,
            ),
            253 => 
            array (
                'id' => 31424,
                'text' => 'DOÑA REMEDIOS TRINIDAD',
                'province_id' => 314,
            ),
            254 => 
            array (
                'id' => 34901,
                'text' => 'ALIAGA',
                'province_id' => 349,
            ),
            255 => 
            array (
                'id' => 34902,
                'text' => 'BONGABON',
                'province_id' => 349,
            ),
            256 => 
            array (
                'id' => 34903,
                'text' => 'CABANATUAN CITY',
                'province_id' => 349,
            ),
            257 => 
            array (
                'id' => 34904,
                'text' => 'CABIAO',
                'province_id' => 349,
            ),
            258 => 
            array (
                'id' => 34905,
                'text' => 'CARRANGLAN',
                'province_id' => 349,
            ),
            259 => 
            array (
                'id' => 34906,
                'text' => 'CUYAPO',
                'province_id' => 349,
            ),
            260 => 
            array (
                'id' => 34907,
            'text' => 'GABALDON (BITULOK & SABANI)',
                'province_id' => 349,
            ),
            261 => 
            array (
                'id' => 34908,
                'text' => 'CITY OF GAPAN',
                'province_id' => 349,
            ),
            262 => 
            array (
                'id' => 34909,
                'text' => 'GENERAL MAMERTO NATIVIDAD',
                'province_id' => 349,
            ),
            263 => 
            array (
                'id' => 34910,
            'text' => 'GENERAL TINIO (PAPAYA)',
                'province_id' => 349,
            ),
            264 => 
            array (
                'id' => 34911,
                'text' => 'GUIMBA',
                'province_id' => 349,
            ),
            265 => 
            array (
                'id' => 34912,
                'text' => 'JAEN',
                'province_id' => 349,
            ),
            266 => 
            array (
                'id' => 34913,
                'text' => 'LAUR',
                'province_id' => 349,
            ),
            267 => 
            array (
                'id' => 34914,
                'text' => 'LICAB',
                'province_id' => 349,
            ),
            268 => 
            array (
                'id' => 34915,
                'text' => 'LLANERA',
                'province_id' => 349,
            ),
            269 => 
            array (
                'id' => 34916,
                'text' => 'LUPAO',
                'province_id' => 349,
            ),
            270 => 
            array (
                'id' => 34917,
                'text' => 'SCIENCE CITY OF MUÑOZ',
                'province_id' => 349,
            ),
            271 => 
            array (
                'id' => 34918,
                'text' => 'NAMPICUAN',
                'province_id' => 349,
            ),
            272 => 
            array (
                'id' => 34919,
            'text' => 'PALAYAN CITY (Capital)',
                'province_id' => 349,
            ),
            273 => 
            array (
                'id' => 34920,
                'text' => 'PANTABANGAN',
                'province_id' => 349,
            ),
            274 => 
            array (
                'id' => 34921,
                'text' => 'PEÑARANDA',
                'province_id' => 349,
            ),
            275 => 
            array (
                'id' => 34922,
                'text' => 'QUEZON',
                'province_id' => 349,
            ),
            276 => 
            array (
                'id' => 34923,
                'text' => 'RIZAL',
                'province_id' => 349,
            ),
            277 => 
            array (
                'id' => 34924,
                'text' => 'SAN ANTONIO',
                'province_id' => 349,
            ),
            278 => 
            array (
                'id' => 34925,
                'text' => 'SAN ISIDRO',
                'province_id' => 349,
            ),
            279 => 
            array (
                'id' => 34926,
                'text' => 'SAN JOSE CITY',
                'province_id' => 349,
            ),
            280 => 
            array (
                'id' => 34927,
                'text' => 'SAN LEONARDO',
                'province_id' => 349,
            ),
            281 => 
            array (
                'id' => 34928,
                'text' => 'SANTA ROSA',
                'province_id' => 349,
            ),
            282 => 
            array (
                'id' => 34929,
                'text' => 'SANTO DOMINGO',
                'province_id' => 349,
            ),
            283 => 
            array (
                'id' => 34930,
                'text' => 'TALAVERA',
                'province_id' => 349,
            ),
            284 => 
            array (
                'id' => 34931,
                'text' => 'TALUGTUG',
                'province_id' => 349,
            ),
            285 => 
            array (
                'id' => 34932,
                'text' => 'ZARAGOZA',
                'province_id' => 349,
            ),
            286 => 
            array (
                'id' => 35401,
                'text' => 'ANGELES CITY',
                'province_id' => 354,
            ),
            287 => 
            array (
                'id' => 35402,
                'text' => 'APALIT',
                'province_id' => 354,
            ),
            288 => 
            array (
                'id' => 35403,
                'text' => 'ARAYAT',
                'province_id' => 354,
            ),
            289 => 
            array (
                'id' => 35404,
                'text' => 'BACOLOR',
                'province_id' => 354,
            ),
            290 => 
            array (
                'id' => 35405,
                'text' => 'CANDABA',
                'province_id' => 354,
            ),
            291 => 
            array (
                'id' => 35406,
                'text' => 'FLORIDABLANCA',
                'province_id' => 354,
            ),
            292 => 
            array (
                'id' => 35407,
                'text' => 'GUAGUA',
                'province_id' => 354,
            ),
            293 => 
            array (
                'id' => 35408,
                'text' => 'LUBAO',
                'province_id' => 354,
            ),
            294 => 
            array (
                'id' => 35409,
                'text' => 'MABALACAT CITY',
                'province_id' => 354,
            ),
            295 => 
            array (
                'id' => 35410,
                'text' => 'MACABEBE',
                'province_id' => 354,
            ),
            296 => 
            array (
                'id' => 35411,
                'text' => 'MAGALANG',
                'province_id' => 354,
            ),
            297 => 
            array (
                'id' => 35412,
                'text' => 'MASANTOL',
                'province_id' => 354,
            ),
            298 => 
            array (
                'id' => 35413,
                'text' => 'MEXICO',
                'province_id' => 354,
            ),
            299 => 
            array (
                'id' => 35414,
                'text' => 'MINALIN',
                'province_id' => 354,
            ),
            300 => 
            array (
                'id' => 35415,
                'text' => 'PORAC',
                'province_id' => 354,
            ),
            301 => 
            array (
                'id' => 35416,
            'text' => 'CITY OF SAN FERNANDO (Capital)',
                'province_id' => 354,
            ),
            302 => 
            array (
                'id' => 35417,
                'text' => 'SAN LUIS',
                'province_id' => 354,
            ),
            303 => 
            array (
                'id' => 35418,
                'text' => 'SAN SIMON',
                'province_id' => 354,
            ),
            304 => 
            array (
                'id' => 35419,
                'text' => 'SANTA ANA',
                'province_id' => 354,
            ),
            305 => 
            array (
                'id' => 35420,
                'text' => 'SANTA RITA',
                'province_id' => 354,
            ),
            306 => 
            array (
                'id' => 35421,
                'text' => 'SANTO TOMAS',
                'province_id' => 354,
            ),
            307 => 
            array (
                'id' => 35422,
            'text' => 'SASMUAN (Sexmoan)',
                'province_id' => 354,
            ),
            308 => 
            array (
                'id' => 36901,
                'text' => 'ANAO',
                'province_id' => 369,
            ),
            309 => 
            array (
                'id' => 36902,
                'text' => 'BAMBAN',
                'province_id' => 369,
            ),
            310 => 
            array (
                'id' => 36903,
                'text' => 'CAMILING',
                'province_id' => 369,
            ),
            311 => 
            array (
                'id' => 36904,
                'text' => 'CAPAS',
                'province_id' => 369,
            ),
            312 => 
            array (
                'id' => 36905,
                'text' => 'CONCEPCION',
                'province_id' => 369,
            ),
            313 => 
            array (
                'id' => 36906,
                'text' => 'GERONA',
                'province_id' => 369,
            ),
            314 => 
            array (
                'id' => 36907,
                'text' => 'LA PAZ',
                'province_id' => 369,
            ),
            315 => 
            array (
                'id' => 36908,
                'text' => 'MAYANTOC',
                'province_id' => 369,
            ),
            316 => 
            array (
                'id' => 36909,
                'text' => 'MONCADA',
                'province_id' => 369,
            ),
            317 => 
            array (
                'id' => 36910,
                'text' => 'PANIQUI',
                'province_id' => 369,
            ),
            318 => 
            array (
                'id' => 36911,
                'text' => 'PURA',
                'province_id' => 369,
            ),
            319 => 
            array (
                'id' => 36912,
                'text' => 'RAMOS',
                'province_id' => 369,
            ),
            320 => 
            array (
                'id' => 36913,
                'text' => 'SAN CLEMENTE',
                'province_id' => 369,
            ),
            321 => 
            array (
                'id' => 36914,
                'text' => 'SAN MANUEL',
                'province_id' => 369,
            ),
            322 => 
            array (
                'id' => 36915,
                'text' => 'SANTA IGNACIA',
                'province_id' => 369,
            ),
            323 => 
            array (
                'id' => 36916,
            'text' => 'CITY OF TARLAC (Capital)',
                'province_id' => 369,
            ),
            324 => 
            array (
                'id' => 36917,
                'text' => 'VICTORIA',
                'province_id' => 369,
            ),
            325 => 
            array (
                'id' => 36918,
                'text' => 'SAN JOSE',
                'province_id' => 369,
            ),
            326 => 
            array (
                'id' => 37101,
                'text' => 'BOTOLAN',
                'province_id' => 371,
            ),
            327 => 
            array (
                'id' => 37102,
                'text' => 'CABANGAN',
                'province_id' => 371,
            ),
            328 => 
            array (
                'id' => 37103,
                'text' => 'CANDELARIA',
                'province_id' => 371,
            ),
            329 => 
            array (
                'id' => 37104,
                'text' => 'CASTILLEJOS',
                'province_id' => 371,
            ),
            330 => 
            array (
                'id' => 37105,
            'text' => 'IBA (Capital)',
                'province_id' => 371,
            ),
            331 => 
            array (
                'id' => 37106,
                'text' => 'MASINLOC',
                'province_id' => 371,
            ),
            332 => 
            array (
                'id' => 37107,
                'text' => 'OLONGAPO CITY',
                'province_id' => 371,
            ),
            333 => 
            array (
                'id' => 37108,
                'text' => 'PALAUIG',
                'province_id' => 371,
            ),
            334 => 
            array (
                'id' => 37109,
                'text' => 'SAN ANTONIO',
                'province_id' => 371,
            ),
            335 => 
            array (
                'id' => 37110,
                'text' => 'SAN FELIPE',
                'province_id' => 371,
            ),
            336 => 
            array (
                'id' => 37111,
                'text' => 'SAN MARCELINO',
                'province_id' => 371,
            ),
            337 => 
            array (
                'id' => 37112,
                'text' => 'SAN NARCISO',
                'province_id' => 371,
            ),
            338 => 
            array (
                'id' => 37113,
                'text' => 'SANTA CRUZ',
                'province_id' => 371,
            ),
            339 => 
            array (
                'id' => 37114,
                'text' => 'SUBIC',
                'province_id' => 371,
            ),
            340 => 
            array (
                'id' => 37701,
            'text' => 'BALER (Capital)',
                'province_id' => 377,
            ),
            341 => 
            array (
                'id' => 37702,
                'text' => 'CASIGURAN',
                'province_id' => 377,
            ),
            342 => 
            array (
                'id' => 37703,
                'text' => 'DILASAG',
                'province_id' => 377,
            ),
            343 => 
            array (
                'id' => 37704,
                'text' => 'DINALUNGAN',
                'province_id' => 377,
            ),
            344 => 
            array (
                'id' => 37705,
                'text' => 'DINGALAN',
                'province_id' => 377,
            ),
            345 => 
            array (
                'id' => 37706,
                'text' => 'DIPACULAO',
                'province_id' => 377,
            ),
            346 => 
            array (
                'id' => 37707,
                'text' => 'MARIA AURORA',
                'province_id' => 377,
            ),
            347 => 
            array (
                'id' => 37708,
                'text' => 'SAN LUIS',
                'province_id' => 377,
            ),
            348 => 
            array (
                'id' => 41001,
                'text' => 'AGONCILLO',
                'province_id' => 410,
            ),
            349 => 
            array (
                'id' => 41002,
                'text' => 'ALITAGTAG',
                'province_id' => 410,
            ),
            350 => 
            array (
                'id' => 41003,
                'text' => 'BALAYAN',
                'province_id' => 410,
            ),
            351 => 
            array (
                'id' => 41004,
                'text' => 'BALETE',
                'province_id' => 410,
            ),
            352 => 
            array (
                'id' => 41005,
            'text' => 'BATANGAS CITY (Capital)',
                'province_id' => 410,
            ),
            353 => 
            array (
                'id' => 41006,
                'text' => 'BAUAN',
                'province_id' => 410,
            ),
            354 => 
            array (
                'id' => 41007,
                'text' => 'CALACA',
                'province_id' => 410,
            ),
            355 => 
            array (
                'id' => 41008,
                'text' => 'CALATAGAN',
                'province_id' => 410,
            ),
            356 => 
            array (
                'id' => 41009,
                'text' => 'CUENCA',
                'province_id' => 410,
            ),
            357 => 
            array (
                'id' => 41010,
                'text' => 'IBAAN',
                'province_id' => 410,
            ),
            358 => 
            array (
                'id' => 41011,
                'text' => 'LAUREL',
                'province_id' => 410,
            ),
            359 => 
            array (
                'id' => 41012,
                'text' => 'LEMERY',
                'province_id' => 410,
            ),
            360 => 
            array (
                'id' => 41013,
                'text' => 'LIAN',
                'province_id' => 410,
            ),
            361 => 
            array (
                'id' => 41014,
                'text' => 'LIPA CITY',
                'province_id' => 410,
            ),
            362 => 
            array (
                'id' => 41015,
                'text' => 'LOBO',
                'province_id' => 410,
            ),
            363 => 
            array (
                'id' => 41016,
                'text' => 'MABINI',
                'province_id' => 410,
            ),
            364 => 
            array (
                'id' => 41017,
                'text' => 'MALVAR',
                'province_id' => 410,
            ),
            365 => 
            array (
                'id' => 41018,
                'text' => 'MATAASNAKAHOY',
                'province_id' => 410,
            ),
            366 => 
            array (
                'id' => 41019,
                'text' => 'NASUGBU',
                'province_id' => 410,
            ),
            367 => 
            array (
                'id' => 41020,
                'text' => 'PADRE GARCIA',
                'province_id' => 410,
            ),
            368 => 
            array (
                'id' => 41021,
                'text' => 'ROSARIO',
                'province_id' => 410,
            ),
            369 => 
            array (
                'id' => 41022,
                'text' => 'SAN JOSE',
                'province_id' => 410,
            ),
            370 => 
            array (
                'id' => 41023,
                'text' => 'SAN JUAN',
                'province_id' => 410,
            ),
            371 => 
            array (
                'id' => 41024,
                'text' => 'SAN LUIS',
                'province_id' => 410,
            ),
            372 => 
            array (
                'id' => 41025,
                'text' => 'SAN NICOLAS',
                'province_id' => 410,
            ),
            373 => 
            array (
                'id' => 41026,
                'text' => 'SAN PASCUAL',
                'province_id' => 410,
            ),
            374 => 
            array (
                'id' => 41027,
                'text' => 'SANTA TERESITA',
                'province_id' => 410,
            ),
            375 => 
            array (
                'id' => 41028,
                'text' => 'SANTO TOMAS',
                'province_id' => 410,
            ),
            376 => 
            array (
                'id' => 41029,
                'text' => 'TAAL',
                'province_id' => 410,
            ),
            377 => 
            array (
                'id' => 41030,
                'text' => 'TALISAY',
                'province_id' => 410,
            ),
            378 => 
            array (
                'id' => 41031,
                'text' => 'CITY OF TANAUAN',
                'province_id' => 410,
            ),
            379 => 
            array (
                'id' => 41032,
                'text' => 'TAYSAN',
                'province_id' => 410,
            ),
            380 => 
            array (
                'id' => 41033,
                'text' => 'TINGLOY',
                'province_id' => 410,
            ),
            381 => 
            array (
                'id' => 41034,
                'text' => 'TUY',
                'province_id' => 410,
            ),
            382 => 
            array (
                'id' => 42101,
                'text' => 'ALFONSO',
                'province_id' => 421,
            ),
            383 => 
            array (
                'id' => 42102,
                'text' => 'AMADEO',
                'province_id' => 421,
            ),
            384 => 
            array (
                'id' => 42103,
                'text' => 'BACOOR CITY',
                'province_id' => 421,
            ),
            385 => 
            array (
                'id' => 42104,
                'text' => 'CARMONA',
                'province_id' => 421,
            ),
            386 => 
            array (
                'id' => 42105,
                'text' => 'CAVITE CITY',
                'province_id' => 421,
            ),
            387 => 
            array (
                'id' => 42106,
                'text' => 'CITY OF DASMARIÑAS',
                'province_id' => 421,
            ),
            388 => 
            array (
                'id' => 42107,
                'text' => 'GENERAL EMILIO AGUINALDO',
                'province_id' => 421,
            ),
            389 => 
            array (
                'id' => 42108,
                'text' => 'GENERAL TRIAS',
                'province_id' => 421,
            ),
            390 => 
            array (
                'id' => 42109,
                'text' => 'IMUS CITY',
                'province_id' => 421,
            ),
            391 => 
            array (
                'id' => 42110,
                'text' => 'INDANG',
                'province_id' => 421,
            ),
            392 => 
            array (
                'id' => 42111,
                'text' => 'KAWIT',
                'province_id' => 421,
            ),
            393 => 
            array (
                'id' => 42112,
                'text' => 'MAGALLANES',
                'province_id' => 421,
            ),
            394 => 
            array (
                'id' => 42113,
                'text' => 'MARAGONDON',
                'province_id' => 421,
            ),
            395 => 
            array (
                'id' => 42114,
            'text' => 'MENDEZ (MENDEZ-NUÑEZ)',
                'province_id' => 421,
            ),
            396 => 
            array (
                'id' => 42115,
                'text' => 'NAIC',
                'province_id' => 421,
            ),
            397 => 
            array (
                'id' => 42116,
                'text' => 'NOVELETA',
                'province_id' => 421,
            ),
            398 => 
            array (
                'id' => 42117,
                'text' => 'ROSARIO',
                'province_id' => 421,
            ),
            399 => 
            array (
                'id' => 42118,
                'text' => 'SILANG',
                'province_id' => 421,
            ),
            400 => 
            array (
                'id' => 42119,
                'text' => 'TAGAYTAY CITY',
                'province_id' => 421,
            ),
            401 => 
            array (
                'id' => 42120,
                'text' => 'TANZA',
                'province_id' => 421,
            ),
            402 => 
            array (
                'id' => 42121,
                'text' => 'TERNATE',
                'province_id' => 421,
            ),
            403 => 
            array (
                'id' => 42122,
            'text' => 'TRECE MARTIRES CITY (Capital)',
                'province_id' => 421,
            ),
            404 => 
            array (
                'id' => 42123,
                'text' => 'GEN. MARIANO ALVAREZ',
                'province_id' => 421,
            ),
            405 => 
            array (
                'id' => 43401,
                'text' => 'ALAMINOS',
                'province_id' => 434,
            ),
            406 => 
            array (
                'id' => 43402,
                'text' => 'BAY',
                'province_id' => 434,
            ),
            407 => 
            array (
                'id' => 43403,
                'text' => 'CITY OF BIÑAN',
                'province_id' => 434,
            ),
            408 => 
            array (
                'id' => 43404,
                'text' => 'CABUYAO CITY',
                'province_id' => 434,
            ),
            409 => 
            array (
                'id' => 43405,
                'text' => 'CITY OF CALAMBA',
                'province_id' => 434,
            ),
            410 => 
            array (
                'id' => 43406,
                'text' => 'CALAUAN',
                'province_id' => 434,
            ),
            411 => 
            array (
                'id' => 43407,
                'text' => 'CAVINTI',
                'province_id' => 434,
            ),
            412 => 
            array (
                'id' => 43408,
                'text' => 'FAMY',
                'province_id' => 434,
            ),
            413 => 
            array (
                'id' => 43409,
                'text' => 'KALAYAAN',
                'province_id' => 434,
            ),
            414 => 
            array (
                'id' => 43410,
                'text' => 'LILIW',
                'province_id' => 434,
            ),
            415 => 
            array (
                'id' => 43411,
                'text' => 'LOS BAÑOS',
                'province_id' => 434,
            ),
            416 => 
            array (
                'id' => 43412,
                'text' => 'LUISIANA',
                'province_id' => 434,
            ),
            417 => 
            array (
                'id' => 43413,
                'text' => 'LUMBAN',
                'province_id' => 434,
            ),
            418 => 
            array (
                'id' => 43414,
                'text' => 'MABITAC',
                'province_id' => 434,
            ),
            419 => 
            array (
                'id' => 43415,
                'text' => 'MAGDALENA',
                'province_id' => 434,
            ),
            420 => 
            array (
                'id' => 43416,
                'text' => 'MAJAYJAY',
                'province_id' => 434,
            ),
            421 => 
            array (
                'id' => 43417,
                'text' => 'NAGCARLAN',
                'province_id' => 434,
            ),
            422 => 
            array (
                'id' => 43418,
                'text' => 'PAETE',
                'province_id' => 434,
            ),
            423 => 
            array (
                'id' => 43419,
                'text' => 'PAGSANJAN',
                'province_id' => 434,
            ),
            424 => 
            array (
                'id' => 43420,
                'text' => 'PAKIL',
                'province_id' => 434,
            ),
            425 => 
            array (
                'id' => 43421,
                'text' => 'PANGIL',
                'province_id' => 434,
            ),
            426 => 
            array (
                'id' => 43422,
                'text' => 'PILA',
                'province_id' => 434,
            ),
            427 => 
            array (
                'id' => 43423,
                'text' => 'RIZAL',
                'province_id' => 434,
            ),
            428 => 
            array (
                'id' => 43424,
                'text' => 'SAN PABLO CITY',
                'province_id' => 434,
            ),
            429 => 
            array (
                'id' => 43425,
                'text' => 'CITY OF SAN PEDRO',
                'province_id' => 434,
            ),
            430 => 
            array (
                'id' => 43426,
            'text' => 'SANTA CRUZ (Capital)',
                'province_id' => 434,
            ),
            431 => 
            array (
                'id' => 43427,
                'text' => 'SANTA MARIA',
                'province_id' => 434,
            ),
            432 => 
            array (
                'id' => 43428,
                'text' => 'CITY OF SANTA ROSA',
                'province_id' => 434,
            ),
            433 => 
            array (
                'id' => 43429,
                'text' => 'SINILOAN',
                'province_id' => 434,
            ),
            434 => 
            array (
                'id' => 43430,
                'text' => 'VICTORIA',
                'province_id' => 434,
            ),
            435 => 
            array (
                'id' => 45601,
                'text' => 'AGDANGAN',
                'province_id' => 456,
            ),
            436 => 
            array (
                'id' => 45602,
                'text' => 'ALABAT',
                'province_id' => 456,
            ),
            437 => 
            array (
                'id' => 45603,
                'text' => 'ATIMONAN',
                'province_id' => 456,
            ),
            438 => 
            array (
                'id' => 45605,
                'text' => 'BUENAVISTA',
                'province_id' => 456,
            ),
            439 => 
            array (
                'id' => 45606,
                'text' => 'BURDEOS',
                'province_id' => 456,
            ),
            440 => 
            array (
                'id' => 45607,
                'text' => 'CALAUAG',
                'province_id' => 456,
            ),
            441 => 
            array (
                'id' => 45608,
                'text' => 'CANDELARIA',
                'province_id' => 456,
            ),
            442 => 
            array (
                'id' => 45610,
                'text' => 'CATANAUAN',
                'province_id' => 456,
            ),
            443 => 
            array (
                'id' => 45615,
                'text' => 'DOLORES',
                'province_id' => 456,
            ),
            444 => 
            array (
                'id' => 45616,
                'text' => 'GENERAL LUNA',
                'province_id' => 456,
            ),
            445 => 
            array (
                'id' => 45617,
                'text' => 'GENERAL NAKAR',
                'province_id' => 456,
            ),
            446 => 
            array (
                'id' => 45618,
                'text' => 'GUINAYANGAN',
                'province_id' => 456,
            ),
            447 => 
            array (
                'id' => 45619,
                'text' => 'GUMACA',
                'province_id' => 456,
            ),
            448 => 
            array (
                'id' => 45620,
                'text' => 'INFANTA',
                'province_id' => 456,
            ),
            449 => 
            array (
                'id' => 45621,
                'text' => 'JOMALIG',
                'province_id' => 456,
            ),
            450 => 
            array (
                'id' => 45622,
                'text' => 'LOPEZ',
                'province_id' => 456,
            ),
            451 => 
            array (
                'id' => 45623,
                'text' => 'LUCBAN',
                'province_id' => 456,
            ),
            452 => 
            array (
                'id' => 45624,
            'text' => 'LUCENA CITY (Capital)',
                'province_id' => 456,
            ),
            453 => 
            array (
                'id' => 45625,
                'text' => 'MACALELON',
                'province_id' => 456,
            ),
            454 => 
            array (
                'id' => 45627,
                'text' => 'MAUBAN',
                'province_id' => 456,
            ),
            455 => 
            array (
                'id' => 45628,
                'text' => 'MULANAY',
                'province_id' => 456,
            ),
            456 => 
            array (
                'id' => 45629,
                'text' => 'PADRE BURGOS',
                'province_id' => 456,
            ),
            457 => 
            array (
                'id' => 45630,
                'text' => 'PAGBILAO',
                'province_id' => 456,
            ),
            458 => 
            array (
                'id' => 45631,
                'text' => 'PANUKULAN',
                'province_id' => 456,
            ),
            459 => 
            array (
                'id' => 45632,
                'text' => 'PATNANUNGAN',
                'province_id' => 456,
            ),
            460 => 
            array (
                'id' => 45633,
                'text' => 'PEREZ',
                'province_id' => 456,
            ),
            461 => 
            array (
                'id' => 45634,
                'text' => 'PITOGO',
                'province_id' => 456,
            ),
            462 => 
            array (
                'id' => 45635,
                'text' => 'PLARIDEL',
                'province_id' => 456,
            ),
            463 => 
            array (
                'id' => 45636,
                'text' => 'POLILLO',
                'province_id' => 456,
            ),
            464 => 
            array (
                'id' => 45637,
                'text' => 'QUEZON',
                'province_id' => 456,
            ),
            465 => 
            array (
                'id' => 45638,
                'text' => 'REAL',
                'province_id' => 456,
            ),
            466 => 
            array (
                'id' => 45639,
                'text' => 'SAMPALOC',
                'province_id' => 456,
            ),
            467 => 
            array (
                'id' => 45640,
                'text' => 'SAN ANDRES',
                'province_id' => 456,
            ),
            468 => 
            array (
                'id' => 45641,
                'text' => 'SAN ANTONIO',
                'province_id' => 456,
            ),
            469 => 
            array (
                'id' => 45642,
            'text' => 'SAN FRANCISCO (AURORA)',
                'province_id' => 456,
            ),
            470 => 
            array (
                'id' => 45644,
                'text' => 'SAN NARCISO',
                'province_id' => 456,
            ),
            471 => 
            array (
                'id' => 45645,
                'text' => 'SARIAYA',
                'province_id' => 456,
            ),
            472 => 
            array (
                'id' => 45646,
                'text' => 'TAGKAWAYAN',
                'province_id' => 456,
            ),
            473 => 
            array (
                'id' => 45647,
                'text' => 'CITY OF TAYABAS',
                'province_id' => 456,
            ),
            474 => 
            array (
                'id' => 45648,
                'text' => 'TIAONG',
                'province_id' => 456,
            ),
            475 => 
            array (
                'id' => 45649,
                'text' => 'UNISAN',
                'province_id' => 456,
            ),
            476 => 
            array (
                'id' => 45801,
                'text' => 'ANGONO',
                'province_id' => 458,
            ),
            477 => 
            array (
                'id' => 45802,
                'text' => 'CITY OF ANTIPOLO',
                'province_id' => 458,
            ),
            478 => 
            array (
                'id' => 45803,
                'text' => 'BARAS',
                'province_id' => 458,
            ),
            479 => 
            array (
                'id' => 45804,
                'text' => 'BINANGONAN',
                'province_id' => 458,
            ),
            480 => 
            array (
                'id' => 45805,
                'text' => 'CAINTA',
                'province_id' => 458,
            ),
            481 => 
            array (
                'id' => 45806,
                'text' => 'CARDONA',
                'province_id' => 458,
            ),
            482 => 
            array (
                'id' => 45807,
                'text' => 'JALA-JALA',
                'province_id' => 458,
            ),
            483 => 
            array (
                'id' => 45808,
            'text' => 'RODRIGUEZ (MONTALBAN)',
                'province_id' => 458,
            ),
            484 => 
            array (
                'id' => 45809,
                'text' => 'MORONG',
                'province_id' => 458,
            ),
            485 => 
            array (
                'id' => 45810,
                'text' => 'PILILLA',
                'province_id' => 458,
            ),
            486 => 
            array (
                'id' => 45811,
                'text' => 'SAN MATEO',
                'province_id' => 458,
            ),
            487 => 
            array (
                'id' => 45812,
                'text' => 'TANAY',
                'province_id' => 458,
            ),
            488 => 
            array (
                'id' => 45813,
                'text' => 'TAYTAY',
                'province_id' => 458,
            ),
            489 => 
            array (
                'id' => 45814,
                'text' => 'TERESA',
                'province_id' => 458,
            ),
            490 => 
            array (
                'id' => 174001,
            'text' => 'BOAC (Capital)',
                'province_id' => 1740,
            ),
            491 => 
            array (
                'id' => 174002,
                'text' => 'BUENAVISTA',
                'province_id' => 1740,
            ),
            492 => 
            array (
                'id' => 174003,
                'text' => 'GASAN',
                'province_id' => 1740,
            ),
            493 => 
            array (
                'id' => 174004,
                'text' => 'MOGPOG',
                'province_id' => 1740,
            ),
            494 => 
            array (
                'id' => 174005,
                'text' => 'SANTA CRUZ',
                'province_id' => 1740,
            ),
            495 => 
            array (
                'id' => 174006,
                'text' => 'TORRIJOS',
                'province_id' => 1740,
            ),
            496 => 
            array (
                'id' => 175101,
                'text' => 'ABRA DE ILOG',
                'province_id' => 1751,
            ),
            497 => 
            array (
                'id' => 175102,
                'text' => 'CALINTAAN',
                'province_id' => 1751,
            ),
            498 => 
            array (
                'id' => 175103,
                'text' => 'LOOC',
                'province_id' => 1751,
            ),
            499 => 
            array (
                'id' => 175104,
                'text' => 'LUBANG',
                'province_id' => 1751,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 175105,
                'text' => 'MAGSAYSAY',
                'province_id' => 1751,
            ),
            1 => 
            array (
                'id' => 175106,
            'text' => 'MAMBURAO (Capital)',
                'province_id' => 1751,
            ),
            2 => 
            array (
                'id' => 175107,
                'text' => 'PALUAN',
                'province_id' => 1751,
            ),
            3 => 
            array (
                'id' => 175108,
                'text' => 'RIZAL',
                'province_id' => 1751,
            ),
            4 => 
            array (
                'id' => 175109,
                'text' => 'SABLAYAN',
                'province_id' => 1751,
            ),
            5 => 
            array (
                'id' => 175110,
                'text' => 'SAN JOSE',
                'province_id' => 1751,
            ),
            6 => 
            array (
                'id' => 175111,
                'text' => 'SANTA CRUZ',
                'province_id' => 1751,
            ),
            7 => 
            array (
                'id' => 175201,
                'text' => 'BACO',
                'province_id' => 1752,
            ),
            8 => 
            array (
                'id' => 175202,
                'text' => 'BANSUD',
                'province_id' => 1752,
            ),
            9 => 
            array (
                'id' => 175203,
                'text' => 'BONGABONG',
                'province_id' => 1752,
            ),
            10 => 
            array (
                'id' => 175204,
            'text' => 'BULALACAO (SAN PEDRO)',
                'province_id' => 1752,
            ),
            11 => 
            array (
                'id' => 175205,
            'text' => 'CITY OF CALAPAN (Capital)',
                'province_id' => 1752,
            ),
            12 => 
            array (
                'id' => 175206,
                'text' => 'GLORIA',
                'province_id' => 1752,
            ),
            13 => 
            array (
                'id' => 175207,
                'text' => 'MANSALAY',
                'province_id' => 1752,
            ),
            14 => 
            array (
                'id' => 175208,
                'text' => 'NAUJAN',
                'province_id' => 1752,
            ),
            15 => 
            array (
                'id' => 175209,
                'text' => 'PINAMALAYAN',
                'province_id' => 1752,
            ),
            16 => 
            array (
                'id' => 175210,
                'text' => 'POLA',
                'province_id' => 1752,
            ),
            17 => 
            array (
                'id' => 175211,
                'text' => 'PUERTO GALERA',
                'province_id' => 1752,
            ),
            18 => 
            array (
                'id' => 175212,
                'text' => 'ROXAS',
                'province_id' => 1752,
            ),
            19 => 
            array (
                'id' => 175213,
                'text' => 'SAN TEODORO',
                'province_id' => 1752,
            ),
            20 => 
            array (
                'id' => 175214,
                'text' => 'SOCORRO',
                'province_id' => 1752,
            ),
            21 => 
            array (
                'id' => 175215,
                'text' => 'VICTORIA',
                'province_id' => 1752,
            ),
            22 => 
            array (
                'id' => 175301,
                'text' => 'ABORLAN',
                'province_id' => 1753,
            ),
            23 => 
            array (
                'id' => 175302,
                'text' => 'AGUTAYA',
                'province_id' => 1753,
            ),
            24 => 
            array (
                'id' => 175303,
                'text' => 'ARACELI',
                'province_id' => 1753,
            ),
            25 => 
            array (
                'id' => 175304,
                'text' => 'BALABAC',
                'province_id' => 1753,
            ),
            26 => 
            array (
                'id' => 175305,
                'text' => 'BATARAZA',
                'province_id' => 1753,
            ),
            27 => 
            array (
                'id' => 175306,
                'text' => 'BROOKE\'S POINT',
                'province_id' => 1753,
            ),
            28 => 
            array (
                'id' => 175307,
                'text' => 'BUSUANGA',
                'province_id' => 1753,
            ),
            29 => 
            array (
                'id' => 175308,
                'text' => 'CAGAYANCILLO',
                'province_id' => 1753,
            ),
            30 => 
            array (
                'id' => 175309,
                'text' => 'CORON',
                'province_id' => 1753,
            ),
            31 => 
            array (
                'id' => 175310,
                'text' => 'CUYO',
                'province_id' => 1753,
            ),
            32 => 
            array (
                'id' => 175311,
                'text' => 'DUMARAN',
                'province_id' => 1753,
            ),
            33 => 
            array (
                'id' => 175312,
            'text' => 'EL NIDO (BACUIT)',
                'province_id' => 1753,
            ),
            34 => 
            array (
                'id' => 175313,
                'text' => 'LINAPACAN',
                'province_id' => 1753,
            ),
            35 => 
            array (
                'id' => 175314,
                'text' => 'MAGSAYSAY',
                'province_id' => 1753,
            ),
            36 => 
            array (
                'id' => 175315,
                'text' => 'NARRA',
                'province_id' => 1753,
            ),
            37 => 
            array (
                'id' => 175316,
            'text' => 'PUERTO PRINCESA CITY (Capital)',
                'province_id' => 1753,
            ),
            38 => 
            array (
                'id' => 175317,
                'text' => 'QUEZON',
                'province_id' => 1753,
            ),
            39 => 
            array (
                'id' => 175318,
                'text' => 'ROXAS',
                'province_id' => 1753,
            ),
            40 => 
            array (
                'id' => 175319,
                'text' => 'SAN VICENTE',
                'province_id' => 1753,
            ),
            41 => 
            array (
                'id' => 175320,
                'text' => 'TAYTAY',
                'province_id' => 1753,
            ),
            42 => 
            array (
                'id' => 175321,
                'text' => 'KALAYAAN',
                'province_id' => 1753,
            ),
            43 => 
            array (
                'id' => 175322,
                'text' => 'CULION',
                'province_id' => 1753,
            ),
            44 => 
            array (
                'id' => 175323,
            'text' => 'RIZAL (MARCOS)',
                'province_id' => 1753,
            ),
            45 => 
            array (
                'id' => 175324,
                'text' => 'SOFRONIO ESPAÑOLA',
                'province_id' => 1753,
            ),
            46 => 
            array (
                'id' => 175901,
                'text' => 'ALCANTARA',
                'province_id' => 1759,
            ),
            47 => 
            array (
                'id' => 175902,
                'text' => 'BANTON',
                'province_id' => 1759,
            ),
            48 => 
            array (
                'id' => 175903,
                'text' => 'CAJIDIOCAN',
                'province_id' => 1759,
            ),
            49 => 
            array (
                'id' => 175904,
                'text' => 'CALATRAVA',
                'province_id' => 1759,
            ),
            50 => 
            array (
                'id' => 175905,
                'text' => 'CONCEPCION',
                'province_id' => 1759,
            ),
            51 => 
            array (
                'id' => 175906,
                'text' => 'CORCUERA',
                'province_id' => 1759,
            ),
            52 => 
            array (
                'id' => 175907,
                'text' => 'LOOC',
                'province_id' => 1759,
            ),
            53 => 
            array (
                'id' => 175908,
                'text' => 'MAGDIWANG',
                'province_id' => 1759,
            ),
            54 => 
            array (
                'id' => 175909,
                'text' => 'ODIONGAN',
                'province_id' => 1759,
            ),
            55 => 
            array (
                'id' => 175910,
            'text' => 'ROMBLON (Capital)',
                'province_id' => 1759,
            ),
            56 => 
            array (
                'id' => 175911,
                'text' => 'SAN AGUSTIN',
                'province_id' => 1759,
            ),
            57 => 
            array (
                'id' => 175912,
                'text' => 'SAN ANDRES',
                'province_id' => 1759,
            ),
            58 => 
            array (
                'id' => 175913,
                'text' => 'SAN FERNANDO',
                'province_id' => 1759,
            ),
            59 => 
            array (
                'id' => 175914,
                'text' => 'SAN JOSE',
                'province_id' => 1759,
            ),
            60 => 
            array (
                'id' => 175915,
                'text' => 'SANTA FE',
                'province_id' => 1759,
            ),
            61 => 
            array (
                'id' => 175916,
                'text' => 'FERROL',
                'province_id' => 1759,
            ),
            62 => 
            array (
                'id' => 175917,
            'text' => 'SANTA MARIA (IMELDA)',
                'province_id' => 1759,
            ),
            63 => 
            array (
                'id' => 50501,
                'text' => 'BACACAY',
                'province_id' => 505,
            ),
            64 => 
            array (
                'id' => 50502,
                'text' => 'CAMALIG',
                'province_id' => 505,
            ),
            65 => 
            array (
                'id' => 50503,
            'text' => 'DARAGA (LOCSIN)',
                'province_id' => 505,
            ),
            66 => 
            array (
                'id' => 50504,
                'text' => 'GUINOBATAN',
                'province_id' => 505,
            ),
            67 => 
            array (
                'id' => 50505,
                'text' => 'JOVELLAR',
                'province_id' => 505,
            ),
            68 => 
            array (
                'id' => 50506,
            'text' => 'LEGAZPI CITY (Capital)',
                'province_id' => 505,
            ),
            69 => 
            array (
                'id' => 50507,
                'text' => 'LIBON',
                'province_id' => 505,
            ),
            70 => 
            array (
                'id' => 50508,
                'text' => 'CITY OF LIGAO',
                'province_id' => 505,
            ),
            71 => 
            array (
                'id' => 50509,
                'text' => 'MALILIPOT',
                'province_id' => 505,
            ),
            72 => 
            array (
                'id' => 50510,
                'text' => 'MALINAO',
                'province_id' => 505,
            ),
            73 => 
            array (
                'id' => 50511,
                'text' => 'MANITO',
                'province_id' => 505,
            ),
            74 => 
            array (
                'id' => 50512,
                'text' => 'OAS',
                'province_id' => 505,
            ),
            75 => 
            array (
                'id' => 50513,
                'text' => 'PIO DURAN',
                'province_id' => 505,
            ),
            76 => 
            array (
                'id' => 50514,
                'text' => 'POLANGUI',
                'province_id' => 505,
            ),
            77 => 
            array (
                'id' => 50515,
                'text' => 'RAPU-RAPU',
                'province_id' => 505,
            ),
            78 => 
            array (
                'id' => 50516,
            'text' => 'SANTO DOMINGO (LIBOG)',
                'province_id' => 505,
            ),
            79 => 
            array (
                'id' => 50517,
                'text' => 'CITY OF TABACO',
                'province_id' => 505,
            ),
            80 => 
            array (
                'id' => 50518,
                'text' => 'TIWI',
                'province_id' => 505,
            ),
            81 => 
            array (
                'id' => 51601,
                'text' => 'BASUD',
                'province_id' => 516,
            ),
            82 => 
            array (
                'id' => 51602,
                'text' => 'CAPALONGA',
                'province_id' => 516,
            ),
            83 => 
            array (
                'id' => 51603,
            'text' => 'DAET (Capital)',
                'province_id' => 516,
            ),
            84 => 
            array (
                'id' => 51604,
            'text' => 'SAN LORENZO RUIZ (IMELDA)',
                'province_id' => 516,
            ),
            85 => 
            array (
                'id' => 51605,
                'text' => 'JOSE PANGANIBAN',
                'province_id' => 516,
            ),
            86 => 
            array (
                'id' => 51606,
                'text' => 'LABO',
                'province_id' => 516,
            ),
            87 => 
            array (
                'id' => 51607,
                'text' => 'MERCEDES',
                'province_id' => 516,
            ),
            88 => 
            array (
                'id' => 51608,
                'text' => 'PARACALE',
                'province_id' => 516,
            ),
            89 => 
            array (
                'id' => 51609,
                'text' => 'SAN VICENTE',
                'province_id' => 516,
            ),
            90 => 
            array (
                'id' => 51610,
                'text' => 'SANTA ELENA',
                'province_id' => 516,
            ),
            91 => 
            array (
                'id' => 51611,
                'text' => 'TALISAY',
                'province_id' => 516,
            ),
            92 => 
            array (
                'id' => 51612,
                'text' => 'VINZONS',
                'province_id' => 516,
            ),
            93 => 
            array (
                'id' => 51701,
                'text' => 'BAAO',
                'province_id' => 517,
            ),
            94 => 
            array (
                'id' => 51702,
                'text' => 'BALATAN',
                'province_id' => 517,
            ),
            95 => 
            array (
                'id' => 51703,
                'text' => 'BATO',
                'province_id' => 517,
            ),
            96 => 
            array (
                'id' => 51704,
                'text' => 'BOMBON',
                'province_id' => 517,
            ),
            97 => 
            array (
                'id' => 51705,
                'text' => 'BUHI',
                'province_id' => 517,
            ),
            98 => 
            array (
                'id' => 51706,
                'text' => 'BULA',
                'province_id' => 517,
            ),
            99 => 
            array (
                'id' => 51707,
                'text' => 'CABUSAO',
                'province_id' => 517,
            ),
            100 => 
            array (
                'id' => 51708,
                'text' => 'CALABANGA',
                'province_id' => 517,
            ),
            101 => 
            array (
                'id' => 51709,
                'text' => 'CAMALIGAN',
                'province_id' => 517,
            ),
            102 => 
            array (
                'id' => 51710,
                'text' => 'CANAMAN',
                'province_id' => 517,
            ),
            103 => 
            array (
                'id' => 51711,
                'text' => 'CARAMOAN',
                'province_id' => 517,
            ),
            104 => 
            array (
                'id' => 51712,
                'text' => 'DEL GALLEGO',
                'province_id' => 517,
            ),
            105 => 
            array (
                'id' => 51713,
                'text' => 'GAINZA',
                'province_id' => 517,
            ),
            106 => 
            array (
                'id' => 51714,
                'text' => 'GARCHITORENA',
                'province_id' => 517,
            ),
            107 => 
            array (
                'id' => 51715,
                'text' => 'GOA',
                'province_id' => 517,
            ),
            108 => 
            array (
                'id' => 51716,
                'text' => 'IRIGA CITY',
                'province_id' => 517,
            ),
            109 => 
            array (
                'id' => 51717,
                'text' => 'LAGONOY',
                'province_id' => 517,
            ),
            110 => 
            array (
                'id' => 51718,
                'text' => 'LIBMANAN',
                'province_id' => 517,
            ),
            111 => 
            array (
                'id' => 51719,
                'text' => 'LUPI',
                'province_id' => 517,
            ),
            112 => 
            array (
                'id' => 51720,
                'text' => 'MAGARAO',
                'province_id' => 517,
            ),
            113 => 
            array (
                'id' => 51721,
                'text' => 'MILAOR',
                'province_id' => 517,
            ),
            114 => 
            array (
                'id' => 51722,
                'text' => 'MINALABAC',
                'province_id' => 517,
            ),
            115 => 
            array (
                'id' => 51723,
                'text' => 'NABUA',
                'province_id' => 517,
            ),
            116 => 
            array (
                'id' => 51724,
                'text' => 'NAGA CITY',
                'province_id' => 517,
            ),
            117 => 
            array (
                'id' => 51725,
                'text' => 'OCAMPO',
                'province_id' => 517,
            ),
            118 => 
            array (
                'id' => 51726,
                'text' => 'PAMPLONA',
                'province_id' => 517,
            ),
            119 => 
            array (
                'id' => 51727,
                'text' => 'PASACAO',
                'province_id' => 517,
            ),
            120 => 
            array (
                'id' => 51728,
            'text' => 'PILI (Capital)',
                'province_id' => 517,
            ),
            121 => 
            array (
                'id' => 51729,
            'text' => 'PRESENTACION (PARUBCAN)',
                'province_id' => 517,
            ),
            122 => 
            array (
                'id' => 51730,
                'text' => 'RAGAY',
                'province_id' => 517,
            ),
            123 => 
            array (
                'id' => 51731,
                'text' => 'SAGÑAY',
                'province_id' => 517,
            ),
            124 => 
            array (
                'id' => 51732,
                'text' => 'SAN FERNANDO',
                'province_id' => 517,
            ),
            125 => 
            array (
                'id' => 51733,
                'text' => 'SAN JOSE',
                'province_id' => 517,
            ),
            126 => 
            array (
                'id' => 51734,
                'text' => 'SIPOCOT',
                'province_id' => 517,
            ),
            127 => 
            array (
                'id' => 51735,
                'text' => 'SIRUMA',
                'province_id' => 517,
            ),
            128 => 
            array (
                'id' => 51736,
                'text' => 'TIGAON',
                'province_id' => 517,
            ),
            129 => 
            array (
                'id' => 51737,
                'text' => 'TINAMBAC',
                'province_id' => 517,
            ),
            130 => 
            array (
                'id' => 52001,
                'text' => 'BAGAMANOC',
                'province_id' => 520,
            ),
            131 => 
            array (
                'id' => 52002,
                'text' => 'BARAS',
                'province_id' => 520,
            ),
            132 => 
            array (
                'id' => 52003,
                'text' => 'BATO',
                'province_id' => 520,
            ),
            133 => 
            array (
                'id' => 52004,
                'text' => 'CARAMORAN',
                'province_id' => 520,
            ),
            134 => 
            array (
                'id' => 52005,
                'text' => 'GIGMOTO',
                'province_id' => 520,
            ),
            135 => 
            array (
                'id' => 52006,
                'text' => 'PANDAN',
                'province_id' => 520,
            ),
            136 => 
            array (
                'id' => 52007,
            'text' => 'PANGANIBAN (PAYO)',
                'province_id' => 520,
            ),
            137 => 
            array (
                'id' => 52008,
            'text' => 'SAN ANDRES (CALOLBON)',
                'province_id' => 520,
            ),
            138 => 
            array (
                'id' => 52009,
                'text' => 'SAN MIGUEL',
                'province_id' => 520,
            ),
            139 => 
            array (
                'id' => 52010,
                'text' => 'VIGA',
                'province_id' => 520,
            ),
            140 => 
            array (
                'id' => 52011,
            'text' => 'VIRAC (Capital)',
                'province_id' => 520,
            ),
            141 => 
            array (
                'id' => 54101,
                'text' => 'AROROY',
                'province_id' => 541,
            ),
            142 => 
            array (
                'id' => 54102,
                'text' => 'BALENO',
                'province_id' => 541,
            ),
            143 => 
            array (
                'id' => 54103,
                'text' => 'BALUD',
                'province_id' => 541,
            ),
            144 => 
            array (
                'id' => 54104,
                'text' => 'BATUAN',
                'province_id' => 541,
            ),
            145 => 
            array (
                'id' => 54105,
                'text' => 'CATAINGAN',
                'province_id' => 541,
            ),
            146 => 
            array (
                'id' => 54106,
                'text' => 'CAWAYAN',
                'province_id' => 541,
            ),
            147 => 
            array (
                'id' => 54107,
                'text' => 'CLAVERIA',
                'province_id' => 541,
            ),
            148 => 
            array (
                'id' => 54108,
                'text' => 'DIMASALANG',
                'province_id' => 541,
            ),
            149 => 
            array (
                'id' => 54109,
                'text' => 'ESPERANZA',
                'province_id' => 541,
            ),
            150 => 
            array (
                'id' => 54110,
                'text' => 'MANDAON',
                'province_id' => 541,
            ),
            151 => 
            array (
                'id' => 54111,
            'text' => 'CITY OF MASBATE (Capital)',
                'province_id' => 541,
            ),
            152 => 
            array (
                'id' => 54112,
                'text' => 'MILAGROS',
                'province_id' => 541,
            ),
            153 => 
            array (
                'id' => 54113,
                'text' => 'MOBO',
                'province_id' => 541,
            ),
            154 => 
            array (
                'id' => 54114,
                'text' => 'MONREAL',
                'province_id' => 541,
            ),
            155 => 
            array (
                'id' => 54115,
                'text' => 'PALANAS',
                'province_id' => 541,
            ),
            156 => 
            array (
                'id' => 54116,
            'text' => 'PIO V. CORPUZ (LIMBUHAN)',
                'province_id' => 541,
            ),
            157 => 
            array (
                'id' => 54117,
                'text' => 'PLACER',
                'province_id' => 541,
            ),
            158 => 
            array (
                'id' => 54118,
                'text' => 'SAN FERNANDO',
                'province_id' => 541,
            ),
            159 => 
            array (
                'id' => 54119,
                'text' => 'SAN JACINTO',
                'province_id' => 541,
            ),
            160 => 
            array (
                'id' => 54120,
                'text' => 'SAN PASCUAL',
                'province_id' => 541,
            ),
            161 => 
            array (
                'id' => 54121,
                'text' => 'USON',
                'province_id' => 541,
            ),
            162 => 
            array (
                'id' => 56202,
                'text' => 'BARCELONA',
                'province_id' => 562,
            ),
            163 => 
            array (
                'id' => 56203,
                'text' => 'BULAN',
                'province_id' => 562,
            ),
            164 => 
            array (
                'id' => 56204,
                'text' => 'BULUSAN',
                'province_id' => 562,
            ),
            165 => 
            array (
                'id' => 56205,
                'text' => 'CASIGURAN',
                'province_id' => 562,
            ),
            166 => 
            array (
                'id' => 56206,
                'text' => 'CASTILLA',
                'province_id' => 562,
            ),
            167 => 
            array (
                'id' => 56207,
                'text' => 'DONSOL',
                'province_id' => 562,
            ),
            168 => 
            array (
                'id' => 56208,
                'text' => 'GUBAT',
                'province_id' => 562,
            ),
            169 => 
            array (
                'id' => 56209,
                'text' => 'IROSIN',
                'province_id' => 562,
            ),
            170 => 
            array (
                'id' => 56210,
                'text' => 'JUBAN',
                'province_id' => 562,
            ),
            171 => 
            array (
                'id' => 56211,
                'text' => 'MAGALLANES',
                'province_id' => 562,
            ),
            172 => 
            array (
                'id' => 56212,
                'text' => 'MATNOG',
                'province_id' => 562,
            ),
            173 => 
            array (
                'id' => 56213,
                'text' => 'PILAR',
                'province_id' => 562,
            ),
            174 => 
            array (
                'id' => 56214,
                'text' => 'PRIETO DIAZ',
                'province_id' => 562,
            ),
            175 => 
            array (
                'id' => 56215,
                'text' => 'SANTA MAGDALENA',
                'province_id' => 562,
            ),
            176 => 
            array (
                'id' => 56216,
            'text' => 'CITY OF SORSOGON (Capital)',
                'province_id' => 562,
            ),
            177 => 
            array (
                'id' => 60401,
                'text' => 'ALTAVAS',
                'province_id' => 604,
            ),
            178 => 
            array (
                'id' => 60402,
                'text' => 'BALETE',
                'province_id' => 604,
            ),
            179 => 
            array (
                'id' => 60403,
                'text' => 'BANGA',
                'province_id' => 604,
            ),
            180 => 
            array (
                'id' => 60404,
                'text' => 'BATAN',
                'province_id' => 604,
            ),
            181 => 
            array (
                'id' => 60405,
                'text' => 'BURUANGA',
                'province_id' => 604,
            ),
            182 => 
            array (
                'id' => 60406,
                'text' => 'IBAJAY',
                'province_id' => 604,
            ),
            183 => 
            array (
                'id' => 60407,
            'text' => 'KALIBO (Capital)',
                'province_id' => 604,
            ),
            184 => 
            array (
                'id' => 60408,
                'text' => 'LEZO',
                'province_id' => 604,
            ),
            185 => 
            array (
                'id' => 60409,
                'text' => 'LIBACAO',
                'province_id' => 604,
            ),
            186 => 
            array (
                'id' => 60410,
                'text' => 'MADALAG',
                'province_id' => 604,
            ),
            187 => 
            array (
                'id' => 60411,
                'text' => 'MAKATO',
                'province_id' => 604,
            ),
            188 => 
            array (
                'id' => 60412,
                'text' => 'MALAY',
                'province_id' => 604,
            ),
            189 => 
            array (
                'id' => 60413,
                'text' => 'MALINAO',
                'province_id' => 604,
            ),
            190 => 
            array (
                'id' => 60414,
                'text' => 'NABAS',
                'province_id' => 604,
            ),
            191 => 
            array (
                'id' => 60415,
                'text' => 'NEW WASHINGTON',
                'province_id' => 604,
            ),
            192 => 
            array (
                'id' => 60416,
                'text' => 'NUMANCIA',
                'province_id' => 604,
            ),
            193 => 
            array (
                'id' => 60417,
                'text' => 'TANGALAN',
                'province_id' => 604,
            ),
            194 => 
            array (
                'id' => 60601,
                'text' => 'ANINI-Y',
                'province_id' => 606,
            ),
            195 => 
            array (
                'id' => 60602,
                'text' => 'BARBAZA',
                'province_id' => 606,
            ),
            196 => 
            array (
                'id' => 60603,
                'text' => 'BELISON',
                'province_id' => 606,
            ),
            197 => 
            array (
                'id' => 60604,
                'text' => 'BUGASONG',
                'province_id' => 606,
            ),
            198 => 
            array (
                'id' => 60605,
                'text' => 'CALUYA',
                'province_id' => 606,
            ),
            199 => 
            array (
                'id' => 60606,
                'text' => 'CULASI',
                'province_id' => 606,
            ),
            200 => 
            array (
                'id' => 60607,
            'text' => 'TOBIAS FORNIER (DAO)',
                'province_id' => 606,
            ),
            201 => 
            array (
                'id' => 60608,
                'text' => 'HAMTIC',
                'province_id' => 606,
            ),
            202 => 
            array (
                'id' => 60609,
                'text' => 'LAUA-AN',
                'province_id' => 606,
            ),
            203 => 
            array (
                'id' => 60610,
                'text' => 'LIBERTAD',
                'province_id' => 606,
            ),
            204 => 
            array (
                'id' => 60611,
                'text' => 'PANDAN',
                'province_id' => 606,
            ),
            205 => 
            array (
                'id' => 60612,
                'text' => 'PATNONGON',
                'province_id' => 606,
            ),
            206 => 
            array (
                'id' => 60613,
            'text' => 'SAN JOSE (Capital)',
                'province_id' => 606,
            ),
            207 => 
            array (
                'id' => 60614,
                'text' => 'SAN REMIGIO',
                'province_id' => 606,
            ),
            208 => 
            array (
                'id' => 60615,
                'text' => 'SEBASTE',
                'province_id' => 606,
            ),
            209 => 
            array (
                'id' => 60616,
                'text' => 'SIBALOM',
                'province_id' => 606,
            ),
            210 => 
            array (
                'id' => 60617,
                'text' => 'TIBIAO',
                'province_id' => 606,
            ),
            211 => 
            array (
                'id' => 60618,
                'text' => 'VALDERRAMA',
                'province_id' => 606,
            ),
            212 => 
            array (
                'id' => 61901,
                'text' => 'CUARTERO',
                'province_id' => 619,
            ),
            213 => 
            array (
                'id' => 61902,
                'text' => 'DAO',
                'province_id' => 619,
            ),
            214 => 
            array (
                'id' => 61903,
                'text' => 'DUMALAG',
                'province_id' => 619,
            ),
            215 => 
            array (
                'id' => 61904,
                'text' => 'DUMARAO',
                'province_id' => 619,
            ),
            216 => 
            array (
                'id' => 61905,
                'text' => 'IVISAN',
                'province_id' => 619,
            ),
            217 => 
            array (
                'id' => 61906,
                'text' => 'JAMINDAN',
                'province_id' => 619,
            ),
            218 => 
            array (
                'id' => 61907,
                'text' => 'MA-AYON',
                'province_id' => 619,
            ),
            219 => 
            array (
                'id' => 61908,
                'text' => 'MAMBUSAO',
                'province_id' => 619,
            ),
            220 => 
            array (
                'id' => 61909,
                'text' => 'PANAY',
                'province_id' => 619,
            ),
            221 => 
            array (
                'id' => 61910,
                'text' => 'PANITAN',
                'province_id' => 619,
            ),
            222 => 
            array (
                'id' => 61911,
                'text' => 'PILAR',
                'province_id' => 619,
            ),
            223 => 
            array (
                'id' => 61912,
                'text' => 'PONTEVEDRA',
                'province_id' => 619,
            ),
            224 => 
            array (
                'id' => 61913,
                'text' => 'PRESIDENT ROXAS',
                'province_id' => 619,
            ),
            225 => 
            array (
                'id' => 61914,
            'text' => 'ROXAS CITY (Capital)',
                'province_id' => 619,
            ),
            226 => 
            array (
                'id' => 61915,
                'text' => 'SAPI-AN',
                'province_id' => 619,
            ),
            227 => 
            array (
                'id' => 61916,
                'text' => 'SIGMA',
                'province_id' => 619,
            ),
            228 => 
            array (
                'id' => 61917,
                'text' => 'TAPAZ',
                'province_id' => 619,
            ),
            229 => 
            array (
                'id' => 63001,
                'text' => 'AJUY',
                'province_id' => 630,
            ),
            230 => 
            array (
                'id' => 63002,
                'text' => 'ALIMODIAN',
                'province_id' => 630,
            ),
            231 => 
            array (
                'id' => 63003,
                'text' => 'ANILAO',
                'province_id' => 630,
            ),
            232 => 
            array (
                'id' => 63004,
                'text' => 'BADIANGAN',
                'province_id' => 630,
            ),
            233 => 
            array (
                'id' => 63005,
                'text' => 'BALASAN',
                'province_id' => 630,
            ),
            234 => 
            array (
                'id' => 63006,
                'text' => 'BANATE',
                'province_id' => 630,
            ),
            235 => 
            array (
                'id' => 63007,
                'text' => 'BAROTAC NUEVO',
                'province_id' => 630,
            ),
            236 => 
            array (
                'id' => 63008,
                'text' => 'BAROTAC VIEJO',
                'province_id' => 630,
            ),
            237 => 
            array (
                'id' => 63009,
                'text' => 'BATAD',
                'province_id' => 630,
            ),
            238 => 
            array (
                'id' => 63010,
                'text' => 'BINGAWAN',
                'province_id' => 630,
            ),
            239 => 
            array (
                'id' => 63012,
                'text' => 'CABATUAN',
                'province_id' => 630,
            ),
            240 => 
            array (
                'id' => 63013,
                'text' => 'CALINOG',
                'province_id' => 630,
            ),
            241 => 
            array (
                'id' => 63014,
                'text' => 'CARLES',
                'province_id' => 630,
            ),
            242 => 
            array (
                'id' => 63015,
                'text' => 'CONCEPCION',
                'province_id' => 630,
            ),
            243 => 
            array (
                'id' => 63016,
                'text' => 'DINGLE',
                'province_id' => 630,
            ),
            244 => 
            array (
                'id' => 63017,
                'text' => 'DUEÑAS',
                'province_id' => 630,
            ),
            245 => 
            array (
                'id' => 63018,
                'text' => 'DUMANGAS',
                'province_id' => 630,
            ),
            246 => 
            array (
                'id' => 63019,
                'text' => 'ESTANCIA',
                'province_id' => 630,
            ),
            247 => 
            array (
                'id' => 63020,
                'text' => 'GUIMBAL',
                'province_id' => 630,
            ),
            248 => 
            array (
                'id' => 63021,
                'text' => 'IGBARAS',
                'province_id' => 630,
            ),
            249 => 
            array (
                'id' => 63022,
            'text' => 'ILOILO CITY (Capital)',
                'province_id' => 630,
            ),
            250 => 
            array (
                'id' => 63023,
                'text' => 'JANIUAY',
                'province_id' => 630,
            ),
            251 => 
            array (
                'id' => 63025,
                'text' => 'LAMBUNAO',
                'province_id' => 630,
            ),
            252 => 
            array (
                'id' => 63026,
                'text' => 'LEGANES',
                'province_id' => 630,
            ),
            253 => 
            array (
                'id' => 63027,
                'text' => 'LEMERY',
                'province_id' => 630,
            ),
            254 => 
            array (
                'id' => 63028,
                'text' => 'LEON',
                'province_id' => 630,
            ),
            255 => 
            array (
                'id' => 63029,
                'text' => 'MAASIN',
                'province_id' => 630,
            ),
            256 => 
            array (
                'id' => 63030,
                'text' => 'MIAGAO',
                'province_id' => 630,
            ),
            257 => 
            array (
                'id' => 63031,
                'text' => 'MINA',
                'province_id' => 630,
            ),
            258 => 
            array (
                'id' => 63032,
                'text' => 'NEW LUCENA',
                'province_id' => 630,
            ),
            259 => 
            array (
                'id' => 63034,
                'text' => 'OTON',
                'province_id' => 630,
            ),
            260 => 
            array (
                'id' => 63035,
                'text' => 'CITY OF PASSI',
                'province_id' => 630,
            ),
            261 => 
            array (
                'id' => 63036,
                'text' => 'PAVIA',
                'province_id' => 630,
            ),
            262 => 
            array (
                'id' => 63037,
                'text' => 'POTOTAN',
                'province_id' => 630,
            ),
            263 => 
            array (
                'id' => 63038,
                'text' => 'SAN DIONISIO',
                'province_id' => 630,
            ),
            264 => 
            array (
                'id' => 63039,
                'text' => 'SAN ENRIQUE',
                'province_id' => 630,
            ),
            265 => 
            array (
                'id' => 63040,
                'text' => 'SAN JOAQUIN',
                'province_id' => 630,
            ),
            266 => 
            array (
                'id' => 63041,
                'text' => 'SAN MIGUEL',
                'province_id' => 630,
            ),
            267 => 
            array (
                'id' => 63042,
                'text' => 'SAN RAFAEL',
                'province_id' => 630,
            ),
            268 => 
            array (
                'id' => 63043,
                'text' => 'SANTA BARBARA',
                'province_id' => 630,
            ),
            269 => 
            array (
                'id' => 63044,
                'text' => 'SARA',
                'province_id' => 630,
            ),
            270 => 
            array (
                'id' => 63045,
                'text' => 'TIGBAUAN',
                'province_id' => 630,
            ),
            271 => 
            array (
                'id' => 63046,
                'text' => 'TUBUNGAN',
                'province_id' => 630,
            ),
            272 => 
            array (
                'id' => 63047,
                'text' => 'ZARRAGA',
                'province_id' => 630,
            ),
            273 => 
            array (
                'id' => 64501,
            'text' => 'BACOLOD CITY (Capital)',
                'province_id' => 645,
            ),
            274 => 
            array (
                'id' => 64502,
                'text' => 'BAGO CITY',
                'province_id' => 645,
            ),
            275 => 
            array (
                'id' => 64503,
                'text' => 'BINALBAGAN',
                'province_id' => 645,
            ),
            276 => 
            array (
                'id' => 64504,
                'text' => 'CADIZ CITY',
                'province_id' => 645,
            ),
            277 => 
            array (
                'id' => 64505,
                'text' => 'CALATRAVA',
                'province_id' => 645,
            ),
            278 => 
            array (
                'id' => 64506,
                'text' => 'CANDONI',
                'province_id' => 645,
            ),
            279 => 
            array (
                'id' => 64507,
                'text' => 'CAUAYAN',
                'province_id' => 645,
            ),
            280 => 
            array (
                'id' => 64508,
            'text' => 'ENRIQUE B. MAGALONA (SARAVIA)',
                'province_id' => 645,
            ),
            281 => 
            array (
                'id' => 64509,
                'text' => 'CITY OF ESCALANTE',
                'province_id' => 645,
            ),
            282 => 
            array (
                'id' => 64510,
                'text' => 'CITY OF HIMAMAYLAN',
                'province_id' => 645,
            ),
            283 => 
            array (
                'id' => 64511,
                'text' => 'HINIGARAN',
                'province_id' => 645,
            ),
            284 => 
            array (
                'id' => 64512,
            'text' => 'HINOBA-AN (ASIA)',
                'province_id' => 645,
            ),
            285 => 
            array (
                'id' => 64513,
                'text' => 'ILOG',
                'province_id' => 645,
            ),
            286 => 
            array (
                'id' => 64514,
                'text' => 'ISABELA',
                'province_id' => 645,
            ),
            287 => 
            array (
                'id' => 64515,
                'text' => 'CITY OF KABANKALAN',
                'province_id' => 645,
            ),
            288 => 
            array (
                'id' => 64516,
                'text' => 'LA CARLOTA CITY',
                'province_id' => 645,
            ),
            289 => 
            array (
                'id' => 64517,
                'text' => 'LA CASTELLANA',
                'province_id' => 645,
            ),
            290 => 
            array (
                'id' => 64518,
                'text' => 'MANAPLA',
                'province_id' => 645,
            ),
            291 => 
            array (
                'id' => 64519,
            'text' => 'MOISES PADILLA (MAGALLON)',
                'province_id' => 645,
            ),
            292 => 
            array (
                'id' => 64520,
                'text' => 'MURCIA',
                'province_id' => 645,
            ),
            293 => 
            array (
                'id' => 64521,
                'text' => 'PONTEVEDRA',
                'province_id' => 645,
            ),
            294 => 
            array (
                'id' => 64522,
                'text' => 'PULUPANDAN',
                'province_id' => 645,
            ),
            295 => 
            array (
                'id' => 64523,
                'text' => 'SAGAY CITY',
                'province_id' => 645,
            ),
            296 => 
            array (
                'id' => 64524,
                'text' => 'SAN CARLOS CITY',
                'province_id' => 645,
            ),
            297 => 
            array (
                'id' => 64525,
                'text' => 'SAN ENRIQUE',
                'province_id' => 645,
            ),
            298 => 
            array (
                'id' => 64526,
                'text' => 'SILAY CITY',
                'province_id' => 645,
            ),
            299 => 
            array (
                'id' => 64527,
                'text' => 'CITY OF SIPALAY',
                'province_id' => 645,
            ),
            300 => 
            array (
                'id' => 64528,
                'text' => 'CITY OF TALISAY',
                'province_id' => 645,
            ),
            301 => 
            array (
                'id' => 64529,
                'text' => 'TOBOSO',
                'province_id' => 645,
            ),
            302 => 
            array (
                'id' => 64530,
                'text' => 'VALLADOLID',
                'province_id' => 645,
            ),
            303 => 
            array (
                'id' => 64531,
                'text' => 'CITY OF VICTORIAS',
                'province_id' => 645,
            ),
            304 => 
            array (
                'id' => 64532,
                'text' => 'SALVADOR BENEDICTO',
                'province_id' => 645,
            ),
            305 => 
            array (
                'id' => 67901,
                'text' => 'BUENAVISTA',
                'province_id' => 679,
            ),
            306 => 
            array (
                'id' => 67902,
            'text' => 'JORDAN (Capital)',
                'province_id' => 679,
            ),
            307 => 
            array (
                'id' => 67903,
                'text' => 'NUEVA VALENCIA',
                'province_id' => 679,
            ),
            308 => 
            array (
                'id' => 67904,
                'text' => 'SAN LORENZO',
                'province_id' => 679,
            ),
            309 => 
            array (
                'id' => 67905,
                'text' => 'SIBUNAG',
                'province_id' => 679,
            ),
            310 => 
            array (
                'id' => 71201,
                'text' => 'ALBURQUERQUE',
                'province_id' => 712,
            ),
            311 => 
            array (
                'id' => 71202,
                'text' => 'ALICIA',
                'province_id' => 712,
            ),
            312 => 
            array (
                'id' => 71203,
                'text' => 'ANDA',
                'province_id' => 712,
            ),
            313 => 
            array (
                'id' => 71204,
                'text' => 'ANTEQUERA',
                'province_id' => 712,
            ),
            314 => 
            array (
                'id' => 71205,
                'text' => 'BACLAYON',
                'province_id' => 712,
            ),
            315 => 
            array (
                'id' => 71206,
                'text' => 'BALILIHAN',
                'province_id' => 712,
            ),
            316 => 
            array (
                'id' => 71207,
                'text' => 'BATUAN',
                'province_id' => 712,
            ),
            317 => 
            array (
                'id' => 71208,
                'text' => 'BILAR',
                'province_id' => 712,
            ),
            318 => 
            array (
                'id' => 71209,
                'text' => 'BUENAVISTA',
                'province_id' => 712,
            ),
            319 => 
            array (
                'id' => 71210,
                'text' => 'CALAPE',
                'province_id' => 712,
            ),
            320 => 
            array (
                'id' => 71211,
                'text' => 'CANDIJAY',
                'province_id' => 712,
            ),
            321 => 
            array (
                'id' => 71212,
                'text' => 'CARMEN',
                'province_id' => 712,
            ),
            322 => 
            array (
                'id' => 71213,
                'text' => 'CATIGBIAN',
                'province_id' => 712,
            ),
            323 => 
            array (
                'id' => 71214,
                'text' => 'CLARIN',
                'province_id' => 712,
            ),
            324 => 
            array (
                'id' => 71215,
                'text' => 'CORELLA',
                'province_id' => 712,
            ),
            325 => 
            array (
                'id' => 71216,
                'text' => 'CORTES',
                'province_id' => 712,
            ),
            326 => 
            array (
                'id' => 71217,
                'text' => 'DAGOHOY',
                'province_id' => 712,
            ),
            327 => 
            array (
                'id' => 71218,
                'text' => 'DANAO',
                'province_id' => 712,
            ),
            328 => 
            array (
                'id' => 71219,
                'text' => 'DAUIS',
                'province_id' => 712,
            ),
            329 => 
            array (
                'id' => 71220,
                'text' => 'DIMIAO',
                'province_id' => 712,
            ),
            330 => 
            array (
                'id' => 71221,
                'text' => 'DUERO',
                'province_id' => 712,
            ),
            331 => 
            array (
                'id' => 71222,
                'text' => 'GARCIA HERNANDEZ',
                'province_id' => 712,
            ),
            332 => 
            array (
                'id' => 71223,
                'text' => 'GUINDULMAN',
                'province_id' => 712,
            ),
            333 => 
            array (
                'id' => 71224,
                'text' => 'INABANGA',
                'province_id' => 712,
            ),
            334 => 
            array (
                'id' => 71225,
                'text' => 'JAGNA',
                'province_id' => 712,
            ),
            335 => 
            array (
                'id' => 71226,
                'text' => 'JETAFE',
                'province_id' => 712,
            ),
            336 => 
            array (
                'id' => 71227,
                'text' => 'LILA',
                'province_id' => 712,
            ),
            337 => 
            array (
                'id' => 71228,
                'text' => 'LOAY',
                'province_id' => 712,
            ),
            338 => 
            array (
                'id' => 71229,
                'text' => 'LOBOC',
                'province_id' => 712,
            ),
            339 => 
            array (
                'id' => 71230,
                'text' => 'LOON',
                'province_id' => 712,
            ),
            340 => 
            array (
                'id' => 71231,
                'text' => 'MABINI',
                'province_id' => 712,
            ),
            341 => 
            array (
                'id' => 71232,
                'text' => 'MARIBOJOC',
                'province_id' => 712,
            ),
            342 => 
            array (
                'id' => 71233,
                'text' => 'PANGLAO',
                'province_id' => 712,
            ),
            343 => 
            array (
                'id' => 71234,
                'text' => 'PILAR',
                'province_id' => 712,
            ),
            344 => 
            array (
                'id' => 71235,
            'text' => 'PRES. CARLOS P. GARCIA (PITOGO)',
                'province_id' => 712,
            ),
            345 => 
            array (
                'id' => 71236,
            'text' => 'SAGBAYAN (BORJA)',
                'province_id' => 712,
            ),
            346 => 
            array (
                'id' => 71237,
                'text' => 'SAN ISIDRO',
                'province_id' => 712,
            ),
            347 => 
            array (
                'id' => 71238,
                'text' => 'SAN MIGUEL',
                'province_id' => 712,
            ),
            348 => 
            array (
                'id' => 71239,
                'text' => 'SEVILLA',
                'province_id' => 712,
            ),
            349 => 
            array (
                'id' => 71240,
                'text' => 'SIERRA BULLONES',
                'province_id' => 712,
            ),
            350 => 
            array (
                'id' => 71241,
                'text' => 'SIKATUNA',
                'province_id' => 712,
            ),
            351 => 
            array (
                'id' => 71242,
            'text' => 'TAGBILARAN CITY (Capital)',
                'province_id' => 712,
            ),
            352 => 
            array (
                'id' => 71243,
                'text' => 'TALIBON',
                'province_id' => 712,
            ),
            353 => 
            array (
                'id' => 71244,
                'text' => 'TRINIDAD',
                'province_id' => 712,
            ),
            354 => 
            array (
                'id' => 71245,
                'text' => 'TUBIGON',
                'province_id' => 712,
            ),
            355 => 
            array (
                'id' => 71246,
                'text' => 'UBAY',
                'province_id' => 712,
            ),
            356 => 
            array (
                'id' => 71247,
                'text' => 'VALENCIA',
                'province_id' => 712,
            ),
            357 => 
            array (
                'id' => 71248,
                'text' => 'BIEN UNIDO',
                'province_id' => 712,
            ),
            358 => 
            array (
                'id' => 72201,
                'text' => 'ALCANTARA',
                'province_id' => 722,
            ),
            359 => 
            array (
                'id' => 72202,
                'text' => 'ALCOY',
                'province_id' => 722,
            ),
            360 => 
            array (
                'id' => 72203,
                'text' => 'ALEGRIA',
                'province_id' => 722,
            ),
            361 => 
            array (
                'id' => 72204,
                'text' => 'ALOGUINSAN',
                'province_id' => 722,
            ),
            362 => 
            array (
                'id' => 72205,
                'text' => 'ARGAO',
                'province_id' => 722,
            ),
            363 => 
            array (
                'id' => 72206,
                'text' => 'ASTURIAS',
                'province_id' => 722,
            ),
            364 => 
            array (
                'id' => 72207,
                'text' => 'BADIAN',
                'province_id' => 722,
            ),
            365 => 
            array (
                'id' => 72208,
                'text' => 'BALAMBAN',
                'province_id' => 722,
            ),
            366 => 
            array (
                'id' => 72209,
                'text' => 'BANTAYAN',
                'province_id' => 722,
            ),
            367 => 
            array (
                'id' => 72210,
                'text' => 'BARILI',
                'province_id' => 722,
            ),
            368 => 
            array (
                'id' => 72211,
                'text' => 'CITY OF BOGO',
                'province_id' => 722,
            ),
            369 => 
            array (
                'id' => 72212,
                'text' => 'BOLJOON',
                'province_id' => 722,
            ),
            370 => 
            array (
                'id' => 72213,
                'text' => 'BORBON',
                'province_id' => 722,
            ),
            371 => 
            array (
                'id' => 72214,
                'text' => 'CITY OF CARCAR',
                'province_id' => 722,
            ),
            372 => 
            array (
                'id' => 72215,
                'text' => 'CARMEN',
                'province_id' => 722,
            ),
            373 => 
            array (
                'id' => 72216,
                'text' => 'CATMON',
                'province_id' => 722,
            ),
            374 => 
            array (
                'id' => 72217,
            'text' => 'CEBU CITY (Capital)',
                'province_id' => 722,
            ),
            375 => 
            array (
                'id' => 72218,
                'text' => 'COMPOSTELA',
                'province_id' => 722,
            ),
            376 => 
            array (
                'id' => 72219,
                'text' => 'CONSOLACION',
                'province_id' => 722,
            ),
            377 => 
            array (
                'id' => 72220,
                'text' => 'CORDOVA',
                'province_id' => 722,
            ),
            378 => 
            array (
                'id' => 72221,
                'text' => 'DAANBANTAYAN',
                'province_id' => 722,
            ),
            379 => 
            array (
                'id' => 72222,
                'text' => 'DALAGUETE',
                'province_id' => 722,
            ),
            380 => 
            array (
                'id' => 72223,
                'text' => 'DANAO CITY',
                'province_id' => 722,
            ),
            381 => 
            array (
                'id' => 72224,
                'text' => 'DUMANJUG',
                'province_id' => 722,
            ),
            382 => 
            array (
                'id' => 72225,
                'text' => 'GINATILAN',
                'province_id' => 722,
            ),
            383 => 
            array (
                'id' => 72226,
            'text' => 'LAPU-LAPU CITY (OPON)',
                'province_id' => 722,
            ),
            384 => 
            array (
                'id' => 72227,
                'text' => 'LILOAN',
                'province_id' => 722,
            ),
            385 => 
            array (
                'id' => 72228,
                'text' => 'MADRIDEJOS',
                'province_id' => 722,
            ),
            386 => 
            array (
                'id' => 72229,
                'text' => 'MALABUYOC',
                'province_id' => 722,
            ),
            387 => 
            array (
                'id' => 72230,
                'text' => 'MANDAUE CITY',
                'province_id' => 722,
            ),
            388 => 
            array (
                'id' => 72231,
                'text' => 'MEDELLIN',
                'province_id' => 722,
            ),
            389 => 
            array (
                'id' => 72232,
                'text' => 'MINGLANILLA',
                'province_id' => 722,
            ),
            390 => 
            array (
                'id' => 72233,
                'text' => 'MOALBOAL',
                'province_id' => 722,
            ),
            391 => 
            array (
                'id' => 72234,
                'text' => 'CITY OF NAGA',
                'province_id' => 722,
            ),
            392 => 
            array (
                'id' => 72235,
                'text' => 'OSLOB',
                'province_id' => 722,
            ),
            393 => 
            array (
                'id' => 72236,
                'text' => 'PILAR',
                'province_id' => 722,
            ),
            394 => 
            array (
                'id' => 72237,
                'text' => 'PINAMUNGAHAN',
                'province_id' => 722,
            ),
            395 => 
            array (
                'id' => 72238,
                'text' => 'PORO',
                'province_id' => 722,
            ),
            396 => 
            array (
                'id' => 72239,
                'text' => 'RONDA',
                'province_id' => 722,
            ),
            397 => 
            array (
                'id' => 72240,
                'text' => 'SAMBOAN',
                'province_id' => 722,
            ),
            398 => 
            array (
                'id' => 72241,
                'text' => 'SAN FERNANDO',
                'province_id' => 722,
            ),
            399 => 
            array (
                'id' => 72242,
                'text' => 'SAN FRANCISCO',
                'province_id' => 722,
            ),
            400 => 
            array (
                'id' => 72243,
                'text' => 'SAN REMIGIO',
                'province_id' => 722,
            ),
            401 => 
            array (
                'id' => 72244,
                'text' => 'SANTA FE',
                'province_id' => 722,
            ),
            402 => 
            array (
                'id' => 72245,
                'text' => 'SANTANDER',
                'province_id' => 722,
            ),
            403 => 
            array (
                'id' => 72246,
                'text' => 'SIBONGA',
                'province_id' => 722,
            ),
            404 => 
            array (
                'id' => 72247,
                'text' => 'SOGOD',
                'province_id' => 722,
            ),
            405 => 
            array (
                'id' => 72248,
                'text' => 'TABOGON',
                'province_id' => 722,
            ),
            406 => 
            array (
                'id' => 72249,
                'text' => 'TABUELAN',
                'province_id' => 722,
            ),
            407 => 
            array (
                'id' => 72250,
                'text' => 'CITY OF TALISAY',
                'province_id' => 722,
            ),
            408 => 
            array (
                'id' => 72251,
                'text' => 'TOLEDO CITY',
                'province_id' => 722,
            ),
            409 => 
            array (
                'id' => 72252,
                'text' => 'TUBURAN',
                'province_id' => 722,
            ),
            410 => 
            array (
                'id' => 72253,
                'text' => 'TUDELA',
                'province_id' => 722,
            ),
            411 => 
            array (
                'id' => 74601,
            'text' => 'AMLAN (AYUQUITAN)',
                'province_id' => 746,
            ),
            412 => 
            array (
                'id' => 74602,
                'text' => 'AYUNGON',
                'province_id' => 746,
            ),
            413 => 
            array (
                'id' => 74603,
                'text' => 'BACONG',
                'province_id' => 746,
            ),
            414 => 
            array (
                'id' => 74604,
                'text' => 'BAIS CITY',
                'province_id' => 746,
            ),
            415 => 
            array (
                'id' => 74605,
                'text' => 'BASAY',
                'province_id' => 746,
            ),
            416 => 
            array (
                'id' => 74606,
            'text' => 'CITY OF BAYAWAN (TULONG)',
                'province_id' => 746,
            ),
            417 => 
            array (
                'id' => 74607,
            'text' => 'BINDOY (PAYABON)',
                'province_id' => 746,
            ),
            418 => 
            array (
                'id' => 74608,
                'text' => 'CANLAON CITY',
                'province_id' => 746,
            ),
            419 => 
            array (
                'id' => 74609,
                'text' => 'DAUIN',
                'province_id' => 746,
            ),
            420 => 
            array (
                'id' => 74610,
            'text' => 'DUMAGUETE CITY (Capital)',
                'province_id' => 746,
            ),
            421 => 
            array (
                'id' => 74611,
                'text' => 'CITY OF GUIHULNGAN',
                'province_id' => 746,
            ),
            422 => 
            array (
                'id' => 74612,
                'text' => 'JIMALALUD',
                'province_id' => 746,
            ),
            423 => 
            array (
                'id' => 74613,
                'text' => 'LA LIBERTAD',
                'province_id' => 746,
            ),
            424 => 
            array (
                'id' => 74614,
                'text' => 'MABINAY',
                'province_id' => 746,
            ),
            425 => 
            array (
                'id' => 74615,
                'text' => 'MANJUYOD',
                'province_id' => 746,
            ),
            426 => 
            array (
                'id' => 74616,
                'text' => 'PAMPLONA',
                'province_id' => 746,
            ),
            427 => 
            array (
                'id' => 74617,
                'text' => 'SAN JOSE',
                'province_id' => 746,
            ),
            428 => 
            array (
                'id' => 74618,
                'text' => 'SANTA CATALINA',
                'province_id' => 746,
            ),
            429 => 
            array (
                'id' => 74619,
                'text' => 'SIATON',
                'province_id' => 746,
            ),
            430 => 
            array (
                'id' => 74620,
                'text' => 'SIBULAN',
                'province_id' => 746,
            ),
            431 => 
            array (
                'id' => 74621,
                'text' => 'CITY OF TANJAY',
                'province_id' => 746,
            ),
            432 => 
            array (
                'id' => 74622,
                'text' => 'TAYASAN',
                'province_id' => 746,
            ),
            433 => 
            array (
                'id' => 74623,
            'text' => 'VALENCIA (LUZURRIAGA)',
                'province_id' => 746,
            ),
            434 => 
            array (
                'id' => 74624,
                'text' => 'VALLEHERMOSO',
                'province_id' => 746,
            ),
            435 => 
            array (
                'id' => 74625,
                'text' => 'ZAMBOANGUITA',
                'province_id' => 746,
            ),
            436 => 
            array (
                'id' => 76101,
                'text' => 'ENRIQUE VILLANUEVA',
                'province_id' => 761,
            ),
            437 => 
            array (
                'id' => 76102,
                'text' => 'LARENA',
                'province_id' => 761,
            ),
            438 => 
            array (
                'id' => 76103,
                'text' => 'LAZI',
                'province_id' => 761,
            ),
            439 => 
            array (
                'id' => 76104,
                'text' => 'MARIA',
                'province_id' => 761,
            ),
            440 => 
            array (
                'id' => 76105,
                'text' => 'SAN JUAN',
                'province_id' => 761,
            ),
            441 => 
            array (
                'id' => 76106,
            'text' => 'SIQUIJOR (Capital)',
                'province_id' => 761,
            ),
            442 => 
            array (
                'id' => 82601,
                'text' => 'ARTECHE',
                'province_id' => 826,
            ),
            443 => 
            array (
                'id' => 82602,
                'text' => 'BALANGIGA',
                'province_id' => 826,
            ),
            444 => 
            array (
                'id' => 82603,
                'text' => 'BALANGKAYAN',
                'province_id' => 826,
            ),
            445 => 
            array (
                'id' => 82604,
            'text' => 'CITY OF BORONGAN (Capital)',
                'province_id' => 826,
            ),
            446 => 
            array (
                'id' => 82605,
                'text' => 'CAN-AVID',
                'province_id' => 826,
            ),
            447 => 
            array (
                'id' => 82606,
                'text' => 'DOLORES',
                'province_id' => 826,
            ),
            448 => 
            array (
                'id' => 82607,
                'text' => 'GENERAL MACARTHUR',
                'province_id' => 826,
            ),
            449 => 
            array (
                'id' => 82608,
                'text' => 'GIPORLOS',
                'province_id' => 826,
            ),
            450 => 
            array (
                'id' => 82609,
                'text' => 'GUIUAN',
                'province_id' => 826,
            ),
            451 => 
            array (
                'id' => 82610,
                'text' => 'HERNANI',
                'province_id' => 826,
            ),
            452 => 
            array (
                'id' => 82611,
                'text' => 'JIPAPAD',
                'province_id' => 826,
            ),
            453 => 
            array (
                'id' => 82612,
                'text' => 'LAWAAN',
                'province_id' => 826,
            ),
            454 => 
            array (
                'id' => 82613,
                'text' => 'LLORENTE',
                'province_id' => 826,
            ),
            455 => 
            array (
                'id' => 82614,
                'text' => 'MASLOG',
                'province_id' => 826,
            ),
            456 => 
            array (
                'id' => 82615,
                'text' => 'MAYDOLONG',
                'province_id' => 826,
            ),
            457 => 
            array (
                'id' => 82616,
                'text' => 'MERCEDES',
                'province_id' => 826,
            ),
            458 => 
            array (
                'id' => 82617,
                'text' => 'ORAS',
                'province_id' => 826,
            ),
            459 => 
            array (
                'id' => 82618,
                'text' => 'QUINAPONDAN',
                'province_id' => 826,
            ),
            460 => 
            array (
                'id' => 82619,
                'text' => 'SALCEDO',
                'province_id' => 826,
            ),
            461 => 
            array (
                'id' => 82620,
                'text' => 'SAN JULIAN',
                'province_id' => 826,
            ),
            462 => 
            array (
                'id' => 82621,
                'text' => 'SAN POLICARPO',
                'province_id' => 826,
            ),
            463 => 
            array (
                'id' => 82622,
                'text' => 'SULAT',
                'province_id' => 826,
            ),
            464 => 
            array (
                'id' => 82623,
                'text' => 'TAFT',
                'province_id' => 826,
            ),
            465 => 
            array (
                'id' => 83701,
                'text' => 'ABUYOG',
                'province_id' => 837,
            ),
            466 => 
            array (
                'id' => 83702,
                'text' => 'ALANGALANG',
                'province_id' => 837,
            ),
            467 => 
            array (
                'id' => 83703,
                'text' => 'ALBUERA',
                'province_id' => 837,
            ),
            468 => 
            array (
                'id' => 83705,
                'text' => 'BABATNGON',
                'province_id' => 837,
            ),
            469 => 
            array (
                'id' => 83706,
                'text' => 'BARUGO',
                'province_id' => 837,
            ),
            470 => 
            array (
                'id' => 83707,
                'text' => 'BATO',
                'province_id' => 837,
            ),
            471 => 
            array (
                'id' => 83708,
                'text' => 'CITY OF BAYBAY',
                'province_id' => 837,
            ),
            472 => 
            array (
                'id' => 83710,
                'text' => 'BURAUEN',
                'province_id' => 837,
            ),
            473 => 
            array (
                'id' => 83713,
                'text' => 'CALUBIAN',
                'province_id' => 837,
            ),
            474 => 
            array (
                'id' => 83714,
                'text' => 'CAPOOCAN',
                'province_id' => 837,
            ),
            475 => 
            array (
                'id' => 83715,
                'text' => 'CARIGARA',
                'province_id' => 837,
            ),
            476 => 
            array (
                'id' => 83717,
                'text' => 'DAGAMI',
                'province_id' => 837,
            ),
            477 => 
            array (
                'id' => 83718,
                'text' => 'DULAG',
                'province_id' => 837,
            ),
            478 => 
            array (
                'id' => 83719,
                'text' => 'HILONGOS',
                'province_id' => 837,
            ),
            479 => 
            array (
                'id' => 83720,
                'text' => 'HINDANG',
                'province_id' => 837,
            ),
            480 => 
            array (
                'id' => 83721,
                'text' => 'INOPACAN',
                'province_id' => 837,
            ),
            481 => 
            array (
                'id' => 83722,
                'text' => 'ISABEL',
                'province_id' => 837,
            ),
            482 => 
            array (
                'id' => 83723,
                'text' => 'JARO',
                'province_id' => 837,
            ),
            483 => 
            array (
                'id' => 83724,
            'text' => 'JAVIER (BUGHO)',
                'province_id' => 837,
            ),
            484 => 
            array (
                'id' => 83725,
                'text' => 'JULITA',
                'province_id' => 837,
            ),
            485 => 
            array (
                'id' => 83726,
                'text' => 'KANANGA',
                'province_id' => 837,
            ),
            486 => 
            array (
                'id' => 83728,
                'text' => 'LA PAZ',
                'province_id' => 837,
            ),
            487 => 
            array (
                'id' => 83729,
                'text' => 'LEYTE',
                'province_id' => 837,
            ),
            488 => 
            array (
                'id' => 83730,
                'text' => 'MACARTHUR',
                'province_id' => 837,
            ),
            489 => 
            array (
                'id' => 83731,
                'text' => 'MAHAPLAG',
                'province_id' => 837,
            ),
            490 => 
            array (
                'id' => 83733,
                'text' => 'MATAG-OB',
                'province_id' => 837,
            ),
            491 => 
            array (
                'id' => 83734,
                'text' => 'MATALOM',
                'province_id' => 837,
            ),
            492 => 
            array (
                'id' => 83735,
                'text' => 'MAYORGA',
                'province_id' => 837,
            ),
            493 => 
            array (
                'id' => 83736,
                'text' => 'MERIDA',
                'province_id' => 837,
            ),
            494 => 
            array (
                'id' => 83738,
                'text' => 'ORMOC CITY',
                'province_id' => 837,
            ),
            495 => 
            array (
                'id' => 83739,
                'text' => 'PALO',
                'province_id' => 837,
            ),
            496 => 
            array (
                'id' => 83740,
                'text' => 'PALOMPON',
                'province_id' => 837,
            ),
            497 => 
            array (
                'id' => 83741,
                'text' => 'PASTRANA',
                'province_id' => 837,
            ),
            498 => 
            array (
                'id' => 83742,
                'text' => 'SAN ISIDRO',
                'province_id' => 837,
            ),
            499 => 
            array (
                'id' => 83743,
                'text' => 'SAN MIGUEL',
                'province_id' => 837,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'text' => 'SANTA FE',
                'province_id' => 837,
            ),
            1 => 
            array (
                'id' => 1002,
                'text' => 'TABANGO',
                'province_id' => 837,
            ),
            2 => 
            array (
                'id' => 1003,
                'text' => 'TABONTABON',
                'province_id' => 837,
            ),
            3 => 
            array (
                'id' => 1004,
            'text' => 'TACLOBAN CITY (Capital)',
                'province_id' => 837,
            ),
            4 => 
            array (
                'id' => 1005,
                'text' => 'TANAUAN',
                'province_id' => 837,
            ),
            5 => 
            array (
                'id' => 1006,
                'text' => 'TOLOSA',
                'province_id' => 837,
            ),
            6 => 
            array (
                'id' => 1007,
                'text' => 'TUNGA',
                'province_id' => 837,
            ),
            7 => 
            array (
                'id' => 1008,
                'text' => 'VILLABA',
                'province_id' => 837,
            ),
            8 => 
            array (
                'id' => 1009,
                'text' => 'ALLEN',
                'province_id' => 848,
            ),
            9 => 
            array (
                'id' => 1010,
                'text' => 'BIRI',
                'province_id' => 848,
            ),
            10 => 
            array (
                'id' => 1011,
                'text' => 'BOBON',
                'province_id' => 848,
            ),
            11 => 
            array (
                'id' => 1012,
                'text' => 'CAPUL',
                'province_id' => 848,
            ),
            12 => 
            array (
                'id' => 1013,
            'text' => 'CATARMAN (Capital)',
                'province_id' => 848,
            ),
            13 => 
            array (
                'id' => 1014,
                'text' => 'CATUBIG',
                'province_id' => 848,
            ),
            14 => 
            array (
                'id' => 1015,
                'text' => 'GAMAY',
                'province_id' => 848,
            ),
            15 => 
            array (
                'id' => 1016,
                'text' => 'LAOANG',
                'province_id' => 848,
            ),
            16 => 
            array (
                'id' => 1017,
                'text' => 'LAPINIG',
                'province_id' => 848,
            ),
            17 => 
            array (
                'id' => 1018,
                'text' => 'LAS NAVAS',
                'province_id' => 848,
            ),
            18 => 
            array (
                'id' => 1019,
                'text' => 'LAVEZARES',
                'province_id' => 848,
            ),
            19 => 
            array (
                'id' => 1020,
                'text' => 'MAPANAS',
                'province_id' => 848,
            ),
            20 => 
            array (
                'id' => 1021,
                'text' => 'MONDRAGON',
                'province_id' => 848,
            ),
            21 => 
            array (
                'id' => 1022,
                'text' => 'PALAPAG',
                'province_id' => 848,
            ),
            22 => 
            array (
                'id' => 1023,
                'text' => 'PAMBUJAN',
                'province_id' => 848,
            ),
            23 => 
            array (
                'id' => 1024,
                'text' => 'ROSARIO',
                'province_id' => 848,
            ),
            24 => 
            array (
                'id' => 1025,
                'text' => 'SAN ANTONIO',
                'province_id' => 848,
            ),
            25 => 
            array (
                'id' => 1026,
                'text' => 'SAN ISIDRO',
                'province_id' => 848,
            ),
            26 => 
            array (
                'id' => 1027,
                'text' => 'SAN JOSE',
                'province_id' => 848,
            ),
            27 => 
            array (
                'id' => 1028,
                'text' => 'SAN ROQUE',
                'province_id' => 848,
            ),
            28 => 
            array (
                'id' => 1029,
                'text' => 'SAN VICENTE',
                'province_id' => 848,
            ),
            29 => 
            array (
                'id' => 1030,
                'text' => 'SILVINO LOBOS',
                'province_id' => 848,
            ),
            30 => 
            array (
                'id' => 1031,
                'text' => 'VICTORIA',
                'province_id' => 848,
            ),
            31 => 
            array (
                'id' => 1032,
                'text' => 'LOPE DE VEGA',
                'province_id' => 848,
            ),
            32 => 
            array (
                'id' => 1033,
                'text' => 'ALMAGRO',
                'province_id' => 860,
            ),
            33 => 
            array (
                'id' => 1034,
                'text' => 'BASEY',
                'province_id' => 860,
            ),
            34 => 
            array (
                'id' => 1035,
                'text' => 'CALBAYOG CITY',
                'province_id' => 860,
            ),
            35 => 
            array (
                'id' => 1036,
                'text' => 'CALBIGA',
                'province_id' => 860,
            ),
            36 => 
            array (
                'id' => 1037,
            'text' => 'CITY OF CATBALOGAN (Capital)',
                'province_id' => 860,
            ),
            37 => 
            array (
                'id' => 1038,
                'text' => 'DARAM',
                'province_id' => 860,
            ),
            38 => 
            array (
                'id' => 1039,
                'text' => 'GANDARA',
                'province_id' => 860,
            ),
            39 => 
            array (
                'id' => 1040,
                'text' => 'HINABANGAN',
                'province_id' => 860,
            ),
            40 => 
            array (
                'id' => 1041,
                'text' => 'JIABONG',
                'province_id' => 860,
            ),
            41 => 
            array (
                'id' => 1042,
                'text' => 'MARABUT',
                'province_id' => 860,
            ),
            42 => 
            array (
                'id' => 1043,
                'text' => 'MATUGUINAO',
                'province_id' => 860,
            ),
            43 => 
            array (
                'id' => 1044,
                'text' => 'MOTIONG',
                'province_id' => 860,
            ),
            44 => 
            array (
                'id' => 1045,
                'text' => 'PINABACDAO',
                'province_id' => 860,
            ),
            45 => 
            array (
                'id' => 1046,
                'text' => 'SAN JOSE DE BUAN',
                'province_id' => 860,
            ),
            46 => 
            array (
                'id' => 1047,
                'text' => 'SAN SEBASTIAN',
                'province_id' => 860,
            ),
            47 => 
            array (
                'id' => 1048,
                'text' => 'SANTA MARGARITA',
                'province_id' => 860,
            ),
            48 => 
            array (
                'id' => 1049,
                'text' => 'SANTA RITA',
                'province_id' => 860,
            ),
            49 => 
            array (
                'id' => 1050,
                'text' => 'SANTO NIÑO',
                'province_id' => 860,
            ),
            50 => 
            array (
                'id' => 1051,
                'text' => 'TALALORA',
                'province_id' => 860,
            ),
            51 => 
            array (
                'id' => 1052,
                'text' => 'TARANGNAN',
                'province_id' => 860,
            ),
            52 => 
            array (
                'id' => 1053,
                'text' => 'VILLAREAL',
                'province_id' => 860,
            ),
            53 => 
            array (
                'id' => 1054,
            'text' => 'PARANAS (WRIGHT)',
                'province_id' => 860,
            ),
            54 => 
            array (
                'id' => 1055,
                'text' => 'ZUMARRAGA',
                'province_id' => 860,
            ),
            55 => 
            array (
                'id' => 1056,
                'text' => 'TAGAPUL-AN',
                'province_id' => 860,
            ),
            56 => 
            array (
                'id' => 1057,
                'text' => 'SAN JORGE',
                'province_id' => 860,
            ),
            57 => 
            array (
                'id' => 1058,
                'text' => 'PAGSANGHAN',
                'province_id' => 860,
            ),
            58 => 
            array (
                'id' => 1059,
                'text' => 'ANAHAWAN',
                'province_id' => 864,
            ),
            59 => 
            array (
                'id' => 1060,
                'text' => 'BONTOC',
                'province_id' => 864,
            ),
            60 => 
            array (
                'id' => 1061,
                'text' => 'HINUNANGAN',
                'province_id' => 864,
            ),
            61 => 
            array (
                'id' => 1062,
                'text' => 'HINUNDAYAN',
                'province_id' => 864,
            ),
            62 => 
            array (
                'id' => 1063,
                'text' => 'LIBAGON',
                'province_id' => 864,
            ),
            63 => 
            array (
                'id' => 1064,
                'text' => 'LILOAN',
                'province_id' => 864,
            ),
            64 => 
            array (
                'id' => 1065,
            'text' => 'CITY OF MAASIN (Capital)',
                'province_id' => 864,
            ),
            65 => 
            array (
                'id' => 1066,
                'text' => 'MACROHON',
                'province_id' => 864,
            ),
            66 => 
            array (
                'id' => 1067,
                'text' => 'MALITBOG',
                'province_id' => 864,
            ),
            67 => 
            array (
                'id' => 1068,
                'text' => 'PADRE BURGOS',
                'province_id' => 864,
            ),
            68 => 
            array (
                'id' => 1069,
                'text' => 'PINTUYAN',
                'province_id' => 864,
            ),
            69 => 
            array (
                'id' => 1070,
                'text' => 'SAINT BERNARD',
                'province_id' => 864,
            ),
            70 => 
            array (
                'id' => 1071,
                'text' => 'SAN FRANCISCO',
                'province_id' => 864,
            ),
            71 => 
            array (
                'id' => 1072,
            'text' => 'SAN JUAN (CABALIAN)',
                'province_id' => 864,
            ),
            72 => 
            array (
                'id' => 1073,
                'text' => 'SAN RICARDO',
                'province_id' => 864,
            ),
            73 => 
            array (
                'id' => 1074,
                'text' => 'SILAGO',
                'province_id' => 864,
            ),
            74 => 
            array (
                'id' => 1075,
                'text' => 'SOGOD',
                'province_id' => 864,
            ),
            75 => 
            array (
                'id' => 1076,
                'text' => 'TOMAS OPPUS',
                'province_id' => 864,
            ),
            76 => 
            array (
                'id' => 1077,
                'text' => 'LIMASAWA',
                'province_id' => 864,
            ),
            77 => 
            array (
                'id' => 1078,
                'text' => 'ALMERIA',
                'province_id' => 878,
            ),
            78 => 
            array (
                'id' => 1079,
                'text' => 'BILIRAN',
                'province_id' => 878,
            ),
            79 => 
            array (
                'id' => 1080,
                'text' => 'CABUCGAYAN',
                'province_id' => 878,
            ),
            80 => 
            array (
                'id' => 1081,
                'text' => 'CAIBIRAN',
                'province_id' => 878,
            ),
            81 => 
            array (
                'id' => 1082,
                'text' => 'CULABA',
                'province_id' => 878,
            ),
            82 => 
            array (
                'id' => 1083,
                'text' => 'KAWAYAN',
                'province_id' => 878,
            ),
            83 => 
            array (
                'id' => 1084,
                'text' => 'MARIPIPI',
                'province_id' => 878,
            ),
            84 => 
            array (
                'id' => 1085,
            'text' => 'NAVAL (Capital)',
                'province_id' => 878,
            ),
            85 => 
            array (
                'id' => 1086,
                'text' => 'DAPITAN CITY',
                'province_id' => 972,
            ),
            86 => 
            array (
                'id' => 1087,
            'text' => 'DIPOLOG CITY (Capital)',
                'province_id' => 972,
            ),
            87 => 
            array (
                'id' => 1088,
                'text' => 'KATIPUNAN',
                'province_id' => 972,
            ),
            88 => 
            array (
                'id' => 1089,
                'text' => 'LA LIBERTAD',
                'province_id' => 972,
            ),
            89 => 
            array (
                'id' => 1090,
                'text' => 'LABASON',
                'province_id' => 972,
            ),
            90 => 
            array (
                'id' => 1091,
                'text' => 'LILOY',
                'province_id' => 972,
            ),
            91 => 
            array (
                'id' => 1092,
                'text' => 'MANUKAN',
                'province_id' => 972,
            ),
            92 => 
            array (
                'id' => 1093,
                'text' => 'MUTIA',
                'province_id' => 972,
            ),
            93 => 
            array (
                'id' => 1094,
            'text' => 'PIÑAN (NEW PIÑAN)',
                'province_id' => 972,
            ),
            94 => 
            array (
                'id' => 1095,
                'text' => 'POLANCO',
                'province_id' => 972,
            ),
            95 => 
            array (
                'id' => 1096,
                'text' => 'PRES. MANUEL A. ROXAS',
                'province_id' => 972,
            ),
            96 => 
            array (
                'id' => 1097,
                'text' => 'RIZAL',
                'province_id' => 972,
            ),
            97 => 
            array (
                'id' => 1098,
                'text' => 'SALUG',
                'province_id' => 972,
            ),
            98 => 
            array (
                'id' => 1099,
                'text' => 'SERGIO OSMEÑA SR.',
                'province_id' => 972,
            ),
            99 => 
            array (
                'id' => 1100,
                'text' => 'SIAYAN',
                'province_id' => 972,
            ),
            100 => 
            array (
                'id' => 1101,
                'text' => 'SIBUCO',
                'province_id' => 972,
            ),
            101 => 
            array (
                'id' => 1102,
                'text' => 'SIBUTAD',
                'province_id' => 972,
            ),
            102 => 
            array (
                'id' => 1103,
                'text' => 'SINDANGAN',
                'province_id' => 972,
            ),
            103 => 
            array (
                'id' => 1104,
                'text' => 'SIOCON',
                'province_id' => 972,
            ),
            104 => 
            array (
                'id' => 1105,
                'text' => 'SIRAWAI',
                'province_id' => 972,
            ),
            105 => 
            array (
                'id' => 1106,
                'text' => 'TAMPILISAN',
                'province_id' => 972,
            ),
            106 => 
            array (
                'id' => 1107,
            'text' => 'JOSE DALMAN (PONOT)',
                'province_id' => 972,
            ),
            107 => 
            array (
                'id' => 1108,
                'text' => 'GUTALAC',
                'province_id' => 972,
            ),
            108 => 
            array (
                'id' => 1109,
                'text' => 'BALIGUIAN',
                'province_id' => 972,
            ),
            109 => 
            array (
                'id' => 1110,
                'text' => 'GODOD',
                'province_id' => 972,
            ),
            110 => 
            array (
                'id' => 1111,
            'text' => 'BACUNGAN (Leon T. Postigo)',
                'province_id' => 972,
            ),
            111 => 
            array (
                'id' => 1112,
                'text' => 'KALAWIT',
                'province_id' => 972,
            ),
            112 => 
            array (
                'id' => 1113,
                'text' => 'AURORA',
                'province_id' => 973,
            ),
            113 => 
            array (
                'id' => 1114,
                'text' => 'BAYOG',
                'province_id' => 973,
            ),
            114 => 
            array (
                'id' => 1115,
                'text' => 'DIMATALING',
                'province_id' => 973,
            ),
            115 => 
            array (
                'id' => 1116,
                'text' => 'DINAS',
                'province_id' => 973,
            ),
            116 => 
            array (
                'id' => 1117,
                'text' => 'DUMALINAO',
                'province_id' => 973,
            ),
            117 => 
            array (
                'id' => 1118,
                'text' => 'DUMINGAG',
                'province_id' => 973,
            ),
            118 => 
            array (
                'id' => 1119,
                'text' => 'KUMALARANG',
                'province_id' => 973,
            ),
            119 => 
            array (
                'id' => 1120,
                'text' => 'LABANGAN',
                'province_id' => 973,
            ),
            120 => 
            array (
                'id' => 1121,
                'text' => 'LAPUYAN',
                'province_id' => 973,
            ),
            121 => 
            array (
                'id' => 1122,
                'text' => 'MAHAYAG',
                'province_id' => 973,
            ),
            122 => 
            array (
                'id' => 1123,
                'text' => 'MARGOSATUBIG',
                'province_id' => 973,
            ),
            123 => 
            array (
                'id' => 1124,
                'text' => 'MIDSALIP',
                'province_id' => 973,
            ),
            124 => 
            array (
                'id' => 1125,
                'text' => 'MOLAVE',
                'province_id' => 973,
            ),
            125 => 
            array (
                'id' => 1126,
            'text' => 'PAGADIAN CITY (Capital)',
                'province_id' => 973,
            ),
            126 => 
            array (
                'id' => 1127,
            'text' => 'RAMON MAGSAYSAY (LIARGO)',
                'province_id' => 973,
            ),
            127 => 
            array (
                'id' => 1128,
                'text' => 'SAN MIGUEL',
                'province_id' => 973,
            ),
            128 => 
            array (
                'id' => 1129,
                'text' => 'SAN PABLO',
                'province_id' => 973,
            ),
            129 => 
            array (
                'id' => 1130,
                'text' => 'TABINA',
                'province_id' => 973,
            ),
            130 => 
            array (
                'id' => 1131,
                'text' => 'TAMBULIG',
                'province_id' => 973,
            ),
            131 => 
            array (
                'id' => 1132,
                'text' => 'TUKURAN',
                'province_id' => 973,
            ),
            132 => 
            array (
                'id' => 1133,
                'text' => 'ZAMBOANGA CITY',
                'province_id' => 973,
            ),
            133 => 
            array (
                'id' => 1134,
                'text' => 'LAKEWOOD',
                'province_id' => 973,
            ),
            134 => 
            array (
                'id' => 1135,
                'text' => 'JOSEFINA',
                'province_id' => 973,
            ),
            135 => 
            array (
                'id' => 1136,
                'text' => 'PITOGO',
                'province_id' => 973,
            ),
            136 => 
            array (
                'id' => 1137,
            'text' => 'SOMINOT (DON MARIANO MARCOS)',
                'province_id' => 973,
            ),
            137 => 
            array (
                'id' => 1138,
                'text' => 'VINCENZO A. SAGUN',
                'province_id' => 973,
            ),
            138 => 
            array (
                'id' => 1139,
                'text' => 'GUIPOS',
                'province_id' => 973,
            ),
            139 => 
            array (
                'id' => 1140,
                'text' => 'TIGBAO',
                'province_id' => 973,
            ),
            140 => 
            array (
                'id' => 1141,
                'text' => 'ALICIA',
                'province_id' => 983,
            ),
            141 => 
            array (
                'id' => 1142,
                'text' => 'BUUG',
                'province_id' => 983,
            ),
            142 => 
            array (
                'id' => 1143,
                'text' => 'DIPLAHAN',
                'province_id' => 983,
            ),
            143 => 
            array (
                'id' => 1144,
                'text' => 'IMELDA',
                'province_id' => 983,
            ),
            144 => 
            array (
                'id' => 1145,
            'text' => 'IPIL (Capital)',
                'province_id' => 983,
            ),
            145 => 
            array (
                'id' => 1146,
                'text' => 'KABASALAN',
                'province_id' => 983,
            ),
            146 => 
            array (
                'id' => 1147,
                'text' => 'MABUHAY',
                'province_id' => 983,
            ),
            147 => 
            array (
                'id' => 1148,
                'text' => 'MALANGAS',
                'province_id' => 983,
            ),
            148 => 
            array (
                'id' => 1149,
                'text' => 'NAGA',
                'province_id' => 983,
            ),
            149 => 
            array (
                'id' => 1150,
                'text' => 'OLUTANGA',
                'province_id' => 983,
            ),
            150 => 
            array (
                'id' => 1151,
                'text' => 'PAYAO',
                'province_id' => 983,
            ),
            151 => 
            array (
                'id' => 1152,
                'text' => 'ROSELLER LIM',
                'province_id' => 983,
            ),
            152 => 
            array (
                'id' => 1153,
                'text' => 'SIAY',
                'province_id' => 983,
            ),
            153 => 
            array (
                'id' => 1154,
                'text' => 'TALUSAN',
                'province_id' => 983,
            ),
            154 => 
            array (
                'id' => 1155,
                'text' => 'TITAY',
                'province_id' => 983,
            ),
            155 => 
            array (
                'id' => 1156,
                'text' => 'TUNGAWAN',
                'province_id' => 983,
            ),
            156 => 
            array (
                'id' => 1157,
                'text' => 'CITY OF ISABELA',
                'province_id' => 997,
            ),
            157 => 
            array (
                'id' => 1158,
                'text' => 'BAUNGON',
                'province_id' => 1013,
            ),
            158 => 
            array (
                'id' => 1159,
                'text' => 'DAMULOG',
                'province_id' => 1013,
            ),
            159 => 
            array (
                'id' => 1160,
                'text' => 'DANGCAGAN',
                'province_id' => 1013,
            ),
            160 => 
            array (
                'id' => 1161,
                'text' => 'DON CARLOS',
                'province_id' => 1013,
            ),
            161 => 
            array (
                'id' => 1162,
                'text' => 'IMPASUG-ONG',
                'province_id' => 1013,
            ),
            162 => 
            array (
                'id' => 1163,
                'text' => 'KADINGILAN',
                'province_id' => 1013,
            ),
            163 => 
            array (
                'id' => 1164,
                'text' => 'KALILANGAN',
                'province_id' => 1013,
            ),
            164 => 
            array (
                'id' => 1165,
                'text' => 'KIBAWE',
                'province_id' => 1013,
            ),
            165 => 
            array (
                'id' => 1166,
                'text' => 'KITAOTAO',
                'province_id' => 1013,
            ),
            166 => 
            array (
                'id' => 1167,
                'text' => 'LANTAPAN',
                'province_id' => 1013,
            ),
            167 => 
            array (
                'id' => 1168,
                'text' => 'LIBONA',
                'province_id' => 1013,
            ),
            168 => 
            array (
                'id' => 1169,
            'text' => 'CITY OF MALAYBALAY (Capital)',
                'province_id' => 1013,
            ),
            169 => 
            array (
                'id' => 1170,
                'text' => 'MALITBOG',
                'province_id' => 1013,
            ),
            170 => 
            array (
                'id' => 1171,
                'text' => 'MANOLO FORTICH',
                'province_id' => 1013,
            ),
            171 => 
            array (
                'id' => 1172,
                'text' => 'MARAMAG',
                'province_id' => 1013,
            ),
            172 => 
            array (
                'id' => 1173,
                'text' => 'PANGANTUCAN',
                'province_id' => 1013,
            ),
            173 => 
            array (
                'id' => 1174,
                'text' => 'QUEZON',
                'province_id' => 1013,
            ),
            174 => 
            array (
                'id' => 1175,
                'text' => 'SAN FERNANDO',
                'province_id' => 1013,
            ),
            175 => 
            array (
                'id' => 1176,
                'text' => 'SUMILAO',
                'province_id' => 1013,
            ),
            176 => 
            array (
                'id' => 1177,
                'text' => 'TALAKAG',
                'province_id' => 1013,
            ),
            177 => 
            array (
                'id' => 1178,
                'text' => 'CITY OF VALENCIA',
                'province_id' => 1013,
            ),
            178 => 
            array (
                'id' => 1179,
                'text' => 'CABANGLASAN',
                'province_id' => 1013,
            ),
            179 => 
            array (
                'id' => 1180,
                'text' => 'CATARMAN',
                'province_id' => 1018,
            ),
            180 => 
            array (
                'id' => 1181,
                'text' => 'GUINSILIBAN',
                'province_id' => 1018,
            ),
            181 => 
            array (
                'id' => 1182,
                'text' => 'MAHINOG',
                'province_id' => 1018,
            ),
            182 => 
            array (
                'id' => 1183,
            'text' => 'MAMBAJAO (Capital)',
                'province_id' => 1018,
            ),
            183 => 
            array (
                'id' => 1184,
                'text' => 'SAGAY',
                'province_id' => 1018,
            ),
            184 => 
            array (
                'id' => 1185,
                'text' => 'BACOLOD',
                'province_id' => 1035,
            ),
            185 => 
            array (
                'id' => 1186,
                'text' => 'BALOI',
                'province_id' => 1035,
            ),
            186 => 
            array (
                'id' => 1187,
                'text' => 'BAROY',
                'province_id' => 1035,
            ),
            187 => 
            array (
                'id' => 1188,
                'text' => 'ILIGAN CITY',
                'province_id' => 1035,
            ),
            188 => 
            array (
                'id' => 1189,
                'text' => 'KAPATAGAN',
                'province_id' => 1035,
            ),
            189 => 
            array (
                'id' => 1190,
            'text' => 'SULTAN NAGA DIMAPORO (KAROMATAN)',
                'province_id' => 1035,
            ),
            190 => 
            array (
                'id' => 1191,
                'text' => 'KAUSWAGAN',
                'province_id' => 1035,
            ),
            191 => 
            array (
                'id' => 1192,
                'text' => 'KOLAMBUGAN',
                'province_id' => 1035,
            ),
            192 => 
            array (
                'id' => 1193,
                'text' => 'LALA',
                'province_id' => 1035,
            ),
            193 => 
            array (
                'id' => 1194,
                'text' => 'LINAMON',
                'province_id' => 1035,
            ),
            194 => 
            array (
                'id' => 1195,
                'text' => 'MAGSAYSAY',
                'province_id' => 1035,
            ),
            195 => 
            array (
                'id' => 1196,
                'text' => 'MAIGO',
                'province_id' => 1035,
            ),
            196 => 
            array (
                'id' => 1197,
                'text' => 'MATUNGAO',
                'province_id' => 1035,
            ),
            197 => 
            array (
                'id' => 1198,
                'text' => 'MUNAI',
                'province_id' => 1035,
            ),
            198 => 
            array (
                'id' => 1199,
                'text' => 'NUNUNGAN',
                'province_id' => 1035,
            ),
            199 => 
            array (
                'id' => 1200,
                'text' => 'PANTAO RAGAT',
                'province_id' => 1035,
            ),
            200 => 
            array (
                'id' => 1201,
                'text' => 'POONA PIAGAPO',
                'province_id' => 1035,
            ),
            201 => 
            array (
                'id' => 1202,
                'text' => 'SALVADOR',
                'province_id' => 1035,
            ),
            202 => 
            array (
                'id' => 1203,
                'text' => 'SAPAD',
                'province_id' => 1035,
            ),
            203 => 
            array (
                'id' => 1204,
                'text' => 'TAGOLOAN',
                'province_id' => 1035,
            ),
            204 => 
            array (
                'id' => 1205,
                'text' => 'TANGCAL',
                'province_id' => 1035,
            ),
            205 => 
            array (
                'id' => 1206,
            'text' => 'TUBOD (Capital)',
                'province_id' => 1035,
            ),
            206 => 
            array (
                'id' => 1207,
                'text' => 'PANTAR',
                'province_id' => 1035,
            ),
            207 => 
            array (
                'id' => 1208,
                'text' => 'ALORAN',
                'province_id' => 1042,
            ),
            208 => 
            array (
                'id' => 1209,
                'text' => 'BALIANGAO',
                'province_id' => 1042,
            ),
            209 => 
            array (
                'id' => 1210,
                'text' => 'BONIFACIO',
                'province_id' => 1042,
            ),
            210 => 
            array (
                'id' => 1211,
                'text' => 'CALAMBA',
                'province_id' => 1042,
            ),
            211 => 
            array (
                'id' => 1212,
                'text' => 'CLARIN',
                'province_id' => 1042,
            ),
            212 => 
            array (
                'id' => 1213,
                'text' => 'CONCEPCION',
                'province_id' => 1042,
            ),
            213 => 
            array (
                'id' => 1214,
                'text' => 'JIMENEZ',
                'province_id' => 1042,
            ),
            214 => 
            array (
                'id' => 1215,
                'text' => 'LOPEZ JAENA',
                'province_id' => 1042,
            ),
            215 => 
            array (
                'id' => 1216,
            'text' => 'OROQUIETA CITY (Capital)',
                'province_id' => 1042,
            ),
            216 => 
            array (
                'id' => 1217,
                'text' => 'OZAMIS CITY',
                'province_id' => 1042,
            ),
            217 => 
            array (
                'id' => 1218,
                'text' => 'PANAON',
                'province_id' => 1042,
            ),
            218 => 
            array (
                'id' => 1219,
                'text' => 'PLARIDEL',
                'province_id' => 1042,
            ),
            219 => 
            array (
                'id' => 1220,
                'text' => 'SAPANG DALAGA',
                'province_id' => 1042,
            ),
            220 => 
            array (
                'id' => 1221,
                'text' => 'SINACABAN',
                'province_id' => 1042,
            ),
            221 => 
            array (
                'id' => 1222,
                'text' => 'TANGUB CITY',
                'province_id' => 1042,
            ),
            222 => 
            array (
                'id' => 1223,
                'text' => 'TUDELA',
                'province_id' => 1042,
            ),
            223 => 
            array (
                'id' => 1224,
            'text' => 'DON VICTORIANO CHIONGBIAN  (DON MARIANO MARCOS)',
                'province_id' => 1042,
            ),
            224 => 
            array (
                'id' => 1225,
                'text' => 'ALUBIJID',
                'province_id' => 1043,
            ),
            225 => 
            array (
                'id' => 1226,
                'text' => 'BALINGASAG',
                'province_id' => 1043,
            ),
            226 => 
            array (
                'id' => 1227,
                'text' => 'BALINGOAN',
                'province_id' => 1043,
            ),
            227 => 
            array (
                'id' => 1228,
                'text' => 'BINUANGAN',
                'province_id' => 1043,
            ),
            228 => 
            array (
                'id' => 1229,
            'text' => 'CAGAYAN DE ORO CITY (Capital)',
                'province_id' => 1043,
            ),
            229 => 
            array (
                'id' => 1230,
                'text' => 'CLAVERIA',
                'province_id' => 1043,
            ),
            230 => 
            array (
                'id' => 1231,
                'text' => 'CITY OF EL SALVADOR',
                'province_id' => 1043,
            ),
            231 => 
            array (
                'id' => 1232,
                'text' => 'GINGOOG CITY',
                'province_id' => 1043,
            ),
            232 => 
            array (
                'id' => 1233,
                'text' => 'GITAGUM',
                'province_id' => 1043,
            ),
            233 => 
            array (
                'id' => 1234,
                'text' => 'INITAO',
                'province_id' => 1043,
            ),
            234 => 
            array (
                'id' => 1235,
                'text' => 'JASAAN',
                'province_id' => 1043,
            ),
            235 => 
            array (
                'id' => 1236,
                'text' => 'KINOGUITAN',
                'province_id' => 1043,
            ),
            236 => 
            array (
                'id' => 1237,
                'text' => 'LAGONGLONG',
                'province_id' => 1043,
            ),
            237 => 
            array (
                'id' => 1238,
                'text' => 'LAGUINDINGAN',
                'province_id' => 1043,
            ),
            238 => 
            array (
                'id' => 1239,
                'text' => 'LIBERTAD',
                'province_id' => 1043,
            ),
            239 => 
            array (
                'id' => 1240,
                'text' => 'LUGAIT',
                'province_id' => 1043,
            ),
            240 => 
            array (
                'id' => 1241,
            'text' => 'MAGSAYSAY (LINUGOS)',
                'province_id' => 1043,
            ),
            241 => 
            array (
                'id' => 1242,
                'text' => 'MANTICAO',
                'province_id' => 1043,
            ),
            242 => 
            array (
                'id' => 1243,
                'text' => 'MEDINA',
                'province_id' => 1043,
            ),
            243 => 
            array (
                'id' => 1244,
                'text' => 'NAAWAN',
                'province_id' => 1043,
            ),
            244 => 
            array (
                'id' => 1245,
                'text' => 'OPOL',
                'province_id' => 1043,
            ),
            245 => 
            array (
                'id' => 1246,
                'text' => 'SALAY',
                'province_id' => 1043,
            ),
            246 => 
            array (
                'id' => 1247,
                'text' => 'SUGBONGCOGON',
                'province_id' => 1043,
            ),
            247 => 
            array (
                'id' => 1248,
                'text' => 'TAGOLOAN',
                'province_id' => 1043,
            ),
            248 => 
            array (
                'id' => 1249,
                'text' => 'TALISAYAN',
                'province_id' => 1043,
            ),
            249 => 
            array (
                'id' => 1250,
                'text' => 'VILLANUEVA',
                'province_id' => 1043,
            ),
            250 => 
            array (
                'id' => 1251,
            'text' => 'ASUNCION (SAUG)',
                'province_id' => 1123,
            ),
            251 => 
            array (
                'id' => 1252,
                'text' => 'CARMEN',
                'province_id' => 1123,
            ),
            252 => 
            array (
                'id' => 1253,
                'text' => 'KAPALONG',
                'province_id' => 1123,
            ),
            253 => 
            array (
                'id' => 1254,
                'text' => 'NEW CORELLA',
                'province_id' => 1123,
            ),
            254 => 
            array (
                'id' => 1255,
                'text' => 'CITY OF PANABO',
                'province_id' => 1123,
            ),
            255 => 
            array (
                'id' => 1256,
                'text' => 'ISLAND GARDEN CITY OF SAMAL',
                'province_id' => 1123,
            ),
            256 => 
            array (
                'id' => 1257,
                'text' => 'SANTO TOMAS',
                'province_id' => 1123,
            ),
            257 => 
            array (
                'id' => 1258,
            'text' => 'CITY OF TAGUM (Capital)',
                'province_id' => 1123,
            ),
            258 => 
            array (
                'id' => 1259,
                'text' => 'TALAINGOD',
                'province_id' => 1123,
            ),
            259 => 
            array (
                'id' => 1260,
                'text' => 'BRAULIO E. DUJALI',
                'province_id' => 1123,
            ),
            260 => 
            array (
                'id' => 1261,
                'text' => 'SAN ISIDRO',
                'province_id' => 1123,
            ),
            261 => 
            array (
                'id' => 1262,
                'text' => 'BANSALAN',
                'province_id' => 1124,
            ),
            262 => 
            array (
                'id' => 1263,
                'text' => 'DAVAO CITY',
                'province_id' => 1124,
            ),
            263 => 
            array (
                'id' => 1264,
            'text' => 'CITY OF DIGOS (Capital)',
                'province_id' => 1124,
            ),
            264 => 
            array (
                'id' => 1265,
                'text' => 'HAGONOY',
                'province_id' => 1124,
            ),
            265 => 
            array (
                'id' => 1266,
                'text' => 'KIBLAWAN',
                'province_id' => 1124,
            ),
            266 => 
            array (
                'id' => 1267,
                'text' => 'MAGSAYSAY',
                'province_id' => 1124,
            ),
            267 => 
            array (
                'id' => 1268,
                'text' => 'MALALAG',
                'province_id' => 1124,
            ),
            268 => 
            array (
                'id' => 1269,
                'text' => 'MATANAO',
                'province_id' => 1124,
            ),
            269 => 
            array (
                'id' => 1270,
                'text' => 'PADADA',
                'province_id' => 1124,
            ),
            270 => 
            array (
                'id' => 1271,
                'text' => 'SANTA CRUZ',
                'province_id' => 1124,
            ),
            271 => 
            array (
                'id' => 1272,
                'text' => 'SULOP',
                'province_id' => 1124,
            ),
            272 => 
            array (
                'id' => 1273,
                'text' => 'BAGANGA',
                'province_id' => 1125,
            ),
            273 => 
            array (
                'id' => 1274,
                'text' => 'BANAYBANAY',
                'province_id' => 1125,
            ),
            274 => 
            array (
                'id' => 1275,
                'text' => 'BOSTON',
                'province_id' => 1125,
            ),
            275 => 
            array (
                'id' => 1276,
                'text' => 'CARAGA',
                'province_id' => 1125,
            ),
            276 => 
            array (
                'id' => 1277,
                'text' => 'CATEEL',
                'province_id' => 1125,
            ),
            277 => 
            array (
                'id' => 1278,
                'text' => 'GOVERNOR GENEROSO',
                'province_id' => 1125,
            ),
            278 => 
            array (
                'id' => 1279,
                'text' => 'LUPON',
                'province_id' => 1125,
            ),
            279 => 
            array (
                'id' => 1280,
                'text' => 'MANAY',
                'province_id' => 1125,
            ),
            280 => 
            array (
                'id' => 1281,
            'text' => 'CITY OF MATI (Capital)',
                'province_id' => 1125,
            ),
            281 => 
            array (
                'id' => 1282,
                'text' => 'SAN ISIDRO',
                'province_id' => 1125,
            ),
            282 => 
            array (
                'id' => 1283,
                'text' => 'TARRAGONA',
                'province_id' => 1125,
            ),
            283 => 
            array (
                'id' => 1284,
                'text' => 'COMPOSTELA',
                'province_id' => 1182,
            ),
            284 => 
            array (
                'id' => 1285,
            'text' => 'LAAK (SAN VICENTE)',
                'province_id' => 1182,
            ),
            285 => 
            array (
                'id' => 1286,
            'text' => 'MABINI (DOÑA ALICIA)',
                'province_id' => 1182,
            ),
            286 => 
            array (
                'id' => 1287,
                'text' => 'MACO',
                'province_id' => 1182,
            ),
            287 => 
            array (
                'id' => 1288,
            'text' => 'MARAGUSAN (SAN MARIANO)',
                'province_id' => 1182,
            ),
            288 => 
            array (
                'id' => 1289,
                'text' => 'MAWAB',
                'province_id' => 1182,
            ),
            289 => 
            array (
                'id' => 1290,
                'text' => 'MONKAYO',
                'province_id' => 1182,
            ),
            290 => 
            array (
                'id' => 1291,
                'text' => 'MONTEVISTA',
                'province_id' => 1182,
            ),
            291 => 
            array (
                'id' => 1292,
            'text' => 'NABUNTURAN (Capital)',
                'province_id' => 1182,
            ),
            292 => 
            array (
                'id' => 1293,
                'text' => 'NEW BATAAN',
                'province_id' => 1182,
            ),
            293 => 
            array (
                'id' => 1294,
                'text' => 'PANTUKAN',
                'province_id' => 1182,
            ),
            294 => 
            array (
                'id' => 1295,
                'text' => 'DON MARCELINO',
                'province_id' => 1186,
            ),
            295 => 
            array (
                'id' => 1296,
            'text' => 'JOSE ABAD SANTOS (TRINIDAD)',
                'province_id' => 1186,
            ),
            296 => 
            array (
                'id' => 1297,
                'text' => 'MALITA',
                'province_id' => 1186,
            ),
            297 => 
            array (
                'id' => 1298,
                'text' => 'SANTA MARIA',
                'province_id' => 1186,
            ),
            298 => 
            array (
                'id' => 1299,
                'text' => 'SARANGANI',
                'province_id' => 1186,
            ),
            299 => 
            array (
                'id' => 1300,
                'text' => 'ALAMADA',
                'province_id' => 1247,
            ),
            300 => 
            array (
                'id' => 1301,
                'text' => 'CARMEN',
                'province_id' => 1247,
            ),
            301 => 
            array (
                'id' => 1302,
                'text' => 'KABACAN',
                'province_id' => 1247,
            ),
            302 => 
            array (
                'id' => 1303,
            'text' => 'CITY OF KIDAPAWAN (Capital)',
                'province_id' => 1247,
            ),
            303 => 
            array (
                'id' => 1304,
                'text' => 'LIBUNGAN',
                'province_id' => 1247,
            ),
            304 => 
            array (
                'id' => 1305,
                'text' => 'MAGPET',
                'province_id' => 1247,
            ),
            305 => 
            array (
                'id' => 1306,
                'text' => 'MAKILALA',
                'province_id' => 1247,
            ),
            306 => 
            array (
                'id' => 1307,
                'text' => 'MATALAM',
                'province_id' => 1247,
            ),
            307 => 
            array (
                'id' => 1308,
                'text' => 'MIDSAYAP',
                'province_id' => 1247,
            ),
            308 => 
            array (
                'id' => 1309,
                'text' => 'M\'LANG',
                'province_id' => 1247,
            ),
            309 => 
            array (
                'id' => 1310,
                'text' => 'PIGKAWAYAN',
                'province_id' => 1247,
            ),
            310 => 
            array (
                'id' => 1311,
                'text' => 'PIKIT',
                'province_id' => 1247,
            ),
            311 => 
            array (
                'id' => 1312,
                'text' => 'PRESIDENT ROXAS',
                'province_id' => 1247,
            ),
            312 => 
            array (
                'id' => 1313,
                'text' => 'TULUNAN',
                'province_id' => 1247,
            ),
            313 => 
            array (
                'id' => 1314,
                'text' => 'ANTIPAS',
                'province_id' => 1247,
            ),
            314 => 
            array (
                'id' => 1315,
                'text' => 'BANISILAN',
                'province_id' => 1247,
            ),
            315 => 
            array (
                'id' => 1316,
                'text' => 'ALEOSAN',
                'province_id' => 1247,
            ),
            316 => 
            array (
                'id' => 1317,
                'text' => 'ARAKAN',
                'province_id' => 1247,
            ),
            317 => 
            array (
                'id' => 1318,
                'text' => 'BANGA',
                'province_id' => 1263,
            ),
            318 => 
            array (
                'id' => 1319,
            'text' => 'GENERAL SANTOS CITY (DADIANGAS)',
                'province_id' => 1263,
            ),
            319 => 
            array (
                'id' => 1320,
            'text' => 'CITY OF KORONADAL (Capital)',
                'province_id' => 1263,
            ),
            320 => 
            array (
                'id' => 1321,
                'text' => 'NORALA',
                'province_id' => 1263,
            ),
            321 => 
            array (
                'id' => 1322,
                'text' => 'POLOMOLOK',
                'province_id' => 1263,
            ),
            322 => 
            array (
                'id' => 1323,
                'text' => 'SURALLAH',
                'province_id' => 1263,
            ),
            323 => 
            array (
                'id' => 1324,
                'text' => 'TAMPAKAN',
                'province_id' => 1263,
            ),
            324 => 
            array (
                'id' => 1325,
                'text' => 'TANTANGAN',
                'province_id' => 1263,
            ),
            325 => 
            array (
                'id' => 1326,
                'text' => 'T\'BOLI',
                'province_id' => 1263,
            ),
            326 => 
            array (
                'id' => 1327,
                'text' => 'TUPI',
                'province_id' => 1263,
            ),
            327 => 
            array (
                'id' => 1328,
                'text' => 'SANTO NIÑO',
                'province_id' => 1263,
            ),
            328 => 
            array (
                'id' => 1329,
                'text' => 'LAKE SEBU',
                'province_id' => 1263,
            ),
            329 => 
            array (
                'id' => 1330,
                'text' => 'BAGUMBAYAN',
                'province_id' => 1265,
            ),
            330 => 
            array (
                'id' => 1331,
                'text' => 'COLUMBIO',
                'province_id' => 1265,
            ),
            331 => 
            array (
                'id' => 1332,
                'text' => 'ESPERANZA',
                'province_id' => 1265,
            ),
            332 => 
            array (
                'id' => 1333,
            'text' => 'ISULAN (Capital)',
                'province_id' => 1265,
            ),
            333 => 
            array (
                'id' => 1334,
                'text' => 'KALAMANSIG',
                'province_id' => 1265,
            ),
            334 => 
            array (
                'id' => 1335,
                'text' => 'LEBAK',
                'province_id' => 1265,
            ),
            335 => 
            array (
                'id' => 1336,
                'text' => 'LUTAYAN',
                'province_id' => 1265,
            ),
            336 => 
            array (
                'id' => 1337,
            'text' => 'LAMBAYONG (MARIANO MARCOS)',
                'province_id' => 1265,
            ),
            337 => 
            array (
                'id' => 1338,
                'text' => 'PALIMBANG',
                'province_id' => 1265,
            ),
            338 => 
            array (
                'id' => 1339,
                'text' => 'PRESIDENT QUIRINO',
                'province_id' => 1265,
            ),
            339 => 
            array (
                'id' => 1340,
                'text' => 'CITY OF TACURONG',
                'province_id' => 1265,
            ),
            340 => 
            array (
                'id' => 1341,
                'text' => 'SEN. NINOY AQUINO',
                'province_id' => 1265,
            ),
            341 => 
            array (
                'id' => 1342,
            'text' => 'ALABEL (Capital)',
                'province_id' => 1280,
            ),
            342 => 
            array (
                'id' => 1343,
                'text' => 'GLAN',
                'province_id' => 1280,
            ),
            343 => 
            array (
                'id' => 1344,
                'text' => 'KIAMBA',
                'province_id' => 1280,
            ),
            344 => 
            array (
                'id' => 1345,
                'text' => 'MAASIM',
                'province_id' => 1280,
            ),
            345 => 
            array (
                'id' => 1346,
                'text' => 'MAITUM',
                'province_id' => 1280,
            ),
            346 => 
            array (
                'id' => 1347,
                'text' => 'MALAPATAN',
                'province_id' => 1280,
            ),
            347 => 
            array (
                'id' => 1348,
                'text' => 'MALUNGON',
                'province_id' => 1280,
            ),
            348 => 
            array (
                'id' => 1349,
                'text' => 'COTABATO CITY',
                'province_id' => 1298,
            ),
            349 => 
            array (
                'id' => 1350,
                'text' => 'TONDO I / II',
                'province_id' => 1339,
            ),
            350 => 
            array (
                'id' => 1351,
                'text' => 'BINONDO',
                'province_id' => 1339,
            ),
            351 => 
            array (
                'id' => 1352,
                'text' => 'QUIAPO',
                'province_id' => 1339,
            ),
            352 => 
            array (
                'id' => 1353,
                'text' => 'SAN NICOLAS',
                'province_id' => 1339,
            ),
            353 => 
            array (
                'id' => 1354,
                'text' => 'SANTA CRUZ',
                'province_id' => 1339,
            ),
            354 => 
            array (
                'id' => 1355,
                'text' => 'SAMPALOC',
                'province_id' => 1339,
            ),
            355 => 
            array (
                'id' => 1356,
                'text' => 'SAN MIGUEL',
                'province_id' => 1339,
            ),
            356 => 
            array (
                'id' => 1357,
                'text' => 'ERMITA',
                'province_id' => 1339,
            ),
            357 => 
            array (
                'id' => 1358,
                'text' => 'INTRAMUROS',
                'province_id' => 1339,
            ),
            358 => 
            array (
                'id' => 1359,
                'text' => 'MALATE',
                'province_id' => 1339,
            ),
            359 => 
            array (
                'id' => 1360,
                'text' => 'PACO',
                'province_id' => 1339,
            ),
            360 => 
            array (
                'id' => 1361,
                'text' => 'PANDACAN',
                'province_id' => 1339,
            ),
            361 => 
            array (
                'id' => 1362,
                'text' => 'PORT AREA',
                'province_id' => 1339,
            ),
            362 => 
            array (
                'id' => 1363,
                'text' => 'SANTA ANA',
                'province_id' => 1339,
            ),
            363 => 
            array (
                'id' => 1364,
                'text' => 'CITY OF MANDALUYONG',
                'province_id' => 1374,
            ),
            364 => 
            array (
                'id' => 1365,
                'text' => 'CITY OF MARIKINA',
                'province_id' => 1374,
            ),
            365 => 
            array (
                'id' => 1366,
                'text' => 'CITY OF PASIG',
                'province_id' => 1374,
            ),
            366 => 
            array (
                'id' => 1367,
                'text' => 'QUEZON CITY',
                'province_id' => 1374,
            ),
            367 => 
            array (
                'id' => 1368,
                'text' => 'CITY OF SAN JUAN',
                'province_id' => 1374,
            ),
            368 => 
            array (
                'id' => 1369,
                'text' => 'CALOOCAN CITY',
                'province_id' => 1375,
            ),
            369 => 
            array (
                'id' => 1370,
                'text' => 'CITY OF MALABON',
                'province_id' => 1375,
            ),
            370 => 
            array (
                'id' => 1371,
                'text' => 'CITY OF NAVOTAS',
                'province_id' => 1375,
            ),
            371 => 
            array (
                'id' => 1372,
                'text' => 'CITY OF VALENZUELA',
                'province_id' => 1375,
            ),
            372 => 
            array (
                'id' => 1373,
                'text' => 'CITY OF LAS PIÑAS',
                'province_id' => 1376,
            ),
            373 => 
            array (
                'id' => 1374,
                'text' => 'CITY OF MAKATI',
                'province_id' => 1376,
            ),
            374 => 
            array (
                'id' => 1375,
                'text' => 'CITY OF MUNTINLUPA',
                'province_id' => 1376,
            ),
            375 => 
            array (
                'id' => 1376,
                'text' => 'CITY OF PARAÑAQUE',
                'province_id' => 1376,
            ),
            376 => 
            array (
                'id' => 1377,
                'text' => 'PASAY CITY',
                'province_id' => 1376,
            ),
            377 => 
            array (
                'id' => 1378,
                'text' => 'PATEROS',
                'province_id' => 1376,
            ),
            378 => 
            array (
                'id' => 1379,
                'text' => 'TAGUIG CITY',
                'province_id' => 1376,
            ),
            379 => 
            array (
                'id' => 1380,
            'text' => 'BANGUED (Capital)',
                'province_id' => 1401,
            ),
            380 => 
            array (
                'id' => 1381,
                'text' => 'BOLINEY',
                'province_id' => 1401,
            ),
            381 => 
            array (
                'id' => 1382,
                'text' => 'BUCAY',
                'province_id' => 1401,
            ),
            382 => 
            array (
                'id' => 1383,
                'text' => 'BUCLOC',
                'province_id' => 1401,
            ),
            383 => 
            array (
                'id' => 1384,
                'text' => 'DAGUIOMAN',
                'province_id' => 1401,
            ),
            384 => 
            array (
                'id' => 1385,
                'text' => 'DANGLAS',
                'province_id' => 1401,
            ),
            385 => 
            array (
                'id' => 1386,
                'text' => 'DOLORES',
                'province_id' => 1401,
            ),
            386 => 
            array (
                'id' => 1387,
                'text' => 'LA PAZ',
                'province_id' => 1401,
            ),
            387 => 
            array (
                'id' => 1388,
                'text' => 'LACUB',
                'province_id' => 1401,
            ),
            388 => 
            array (
                'id' => 1389,
                'text' => 'LAGANGILANG',
                'province_id' => 1401,
            ),
            389 => 
            array (
                'id' => 1390,
                'text' => 'LAGAYAN',
                'province_id' => 1401,
            ),
            390 => 
            array (
                'id' => 1391,
                'text' => 'LANGIDEN',
                'province_id' => 1401,
            ),
            391 => 
            array (
                'id' => 1392,
            'text' => 'LICUAN-BAAY (LICUAN)',
                'province_id' => 1401,
            ),
            392 => 
            array (
                'id' => 1393,
                'text' => 'LUBA',
                'province_id' => 1401,
            ),
            393 => 
            array (
                'id' => 1394,
                'text' => 'MALIBCONG',
                'province_id' => 1401,
            ),
            394 => 
            array (
                'id' => 1395,
                'text' => 'MANABO',
                'province_id' => 1401,
            ),
            395 => 
            array (
                'id' => 1396,
                'text' => 'PEÑARRUBIA',
                'province_id' => 1401,
            ),
            396 => 
            array (
                'id' => 1397,
                'text' => 'PIDIGAN',
                'province_id' => 1401,
            ),
            397 => 
            array (
                'id' => 1398,
                'text' => 'PILAR',
                'province_id' => 1401,
            ),
            398 => 
            array (
                'id' => 1399,
                'text' => 'SALLAPADAN',
                'province_id' => 1401,
            ),
            399 => 
            array (
                'id' => 1400,
                'text' => 'SAN ISIDRO',
                'province_id' => 1401,
            ),
            400 => 
            array (
                'id' => 1401,
                'text' => 'SAN JUAN',
                'province_id' => 1401,
            ),
            401 => 
            array (
                'id' => 1402,
                'text' => 'SAN QUINTIN',
                'province_id' => 1401,
            ),
            402 => 
            array (
                'id' => 1403,
                'text' => 'TAYUM',
                'province_id' => 1401,
            ),
            403 => 
            array (
                'id' => 1404,
                'text' => 'TINEG',
                'province_id' => 1401,
            ),
            404 => 
            array (
                'id' => 1405,
                'text' => 'TUBO',
                'province_id' => 1401,
            ),
            405 => 
            array (
                'id' => 1406,
                'text' => 'VILLAVICIOSA',
                'province_id' => 1401,
            ),
            406 => 
            array (
                'id' => 1407,
                'text' => 'ATOK',
                'province_id' => 1411,
            ),
            407 => 
            array (
                'id' => 1408,
                'text' => 'BAGUIO CITY',
                'province_id' => 1411,
            ),
            408 => 
            array (
                'id' => 1409,
                'text' => 'BAKUN',
                'province_id' => 1411,
            ),
            409 => 
            array (
                'id' => 1410,
                'text' => 'BOKOD',
                'province_id' => 1411,
            ),
            410 => 
            array (
                'id' => 1411,
                'text' => 'BUGUIAS',
                'province_id' => 1411,
            ),
            411 => 
            array (
                'id' => 1412,
                'text' => 'ITOGON',
                'province_id' => 1411,
            ),
            412 => 
            array (
                'id' => 1413,
                'text' => 'KABAYAN',
                'province_id' => 1411,
            ),
            413 => 
            array (
                'id' => 1414,
                'text' => 'KAPANGAN',
                'province_id' => 1411,
            ),
            414 => 
            array (
                'id' => 1415,
                'text' => 'KIBUNGAN',
                'province_id' => 1411,
            ),
            415 => 
            array (
                'id' => 1416,
            'text' => 'LA TRINIDAD (Capital)',
                'province_id' => 1411,
            ),
            416 => 
            array (
                'id' => 1417,
                'text' => 'MANKAYAN',
                'province_id' => 1411,
            ),
            417 => 
            array (
                'id' => 1418,
                'text' => 'SABLAN',
                'province_id' => 1411,
            ),
            418 => 
            array (
                'id' => 1419,
                'text' => 'TUBA',
                'province_id' => 1411,
            ),
            419 => 
            array (
                'id' => 1420,
                'text' => 'TUBLAY',
                'province_id' => 1411,
            ),
            420 => 
            array (
                'id' => 1421,
                'text' => 'BANAUE',
                'province_id' => 1427,
            ),
            421 => 
            array (
                'id' => 1422,
                'text' => 'HUNGDUAN',
                'province_id' => 1427,
            ),
            422 => 
            array (
                'id' => 1423,
                'text' => 'KIANGAN',
                'province_id' => 1427,
            ),
            423 => 
            array (
                'id' => 1424,
            'text' => 'LAGAWE (Capital)',
                'province_id' => 1427,
            ),
            424 => 
            array (
                'id' => 1425,
                'text' => 'LAMUT',
                'province_id' => 1427,
            ),
            425 => 
            array (
                'id' => 1426,
                'text' => 'MAYOYAO',
                'province_id' => 1427,
            ),
            426 => 
            array (
                'id' => 1427,
            'text' => 'ALFONSO LISTA (POTIA)',
                'province_id' => 1427,
            ),
            427 => 
            array (
                'id' => 1428,
                'text' => 'AGUINALDO',
                'province_id' => 1427,
            ),
            428 => 
            array (
                'id' => 1429,
                'text' => 'HINGYON',
                'province_id' => 1427,
            ),
            429 => 
            array (
                'id' => 1430,
                'text' => 'TINOC',
                'province_id' => 1427,
            ),
            430 => 
            array (
                'id' => 1431,
                'text' => 'ASIPULO',
                'province_id' => 1427,
            ),
            431 => 
            array (
                'id' => 1432,
                'text' => 'BALBALAN',
                'province_id' => 1432,
            ),
            432 => 
            array (
                'id' => 1433,
                'text' => 'LUBUAGAN',
                'province_id' => 1432,
            ),
            433 => 
            array (
                'id' => 1434,
                'text' => 'PASIL',
                'province_id' => 1432,
            ),
            434 => 
            array (
                'id' => 1435,
                'text' => 'PINUKPUK',
                'province_id' => 1432,
            ),
            435 => 
            array (
                'id' => 1436,
            'text' => 'RIZAL (LIWAN)',
                'province_id' => 1432,
            ),
            436 => 
            array (
                'id' => 1437,
            'text' => 'CITY OF TABUK (Capital)',
                'province_id' => 1432,
            ),
            437 => 
            array (
                'id' => 1438,
                'text' => 'TANUDAN',
                'province_id' => 1432,
            ),
            438 => 
            array (
                'id' => 1439,
                'text' => 'TINGLAYAN',
                'province_id' => 1432,
            ),
            439 => 
            array (
                'id' => 1440,
                'text' => 'BARLIG',
                'province_id' => 1444,
            ),
            440 => 
            array (
                'id' => 1441,
                'text' => 'BAUKO',
                'province_id' => 1444,
            ),
            441 => 
            array (
                'id' => 1442,
                'text' => 'BESAO',
                'province_id' => 1444,
            ),
            442 => 
            array (
                'id' => 1443,
            'text' => 'BONTOC (Capital)',
                'province_id' => 1444,
            ),
            443 => 
            array (
                'id' => 1444,
                'text' => 'NATONIN',
                'province_id' => 1444,
            ),
            444 => 
            array (
                'id' => 1445,
                'text' => 'PARACELIS',
                'province_id' => 1444,
            ),
            445 => 
            array (
                'id' => 1446,
                'text' => 'SABANGAN',
                'province_id' => 1444,
            ),
            446 => 
            array (
                'id' => 1447,
                'text' => 'SADANGA',
                'province_id' => 1444,
            ),
            447 => 
            array (
                'id' => 1448,
                'text' => 'SAGADA',
                'province_id' => 1444,
            ),
            448 => 
            array (
                'id' => 1449,
                'text' => 'TADIAN',
                'province_id' => 1444,
            ),
            449 => 
            array (
                'id' => 1450,
            'text' => 'CALANASAN (BAYAG)',
                'province_id' => 1481,
            ),
            450 => 
            array (
                'id' => 1451,
                'text' => 'CONNER',
                'province_id' => 1481,
            ),
            451 => 
            array (
                'id' => 1452,
                'text' => 'FLORA',
                'province_id' => 1481,
            ),
            452 => 
            array (
                'id' => 1453,
            'text' => 'KABUGAO (Capital)',
                'province_id' => 1481,
            ),
            453 => 
            array (
                'id' => 1454,
                'text' => 'LUNA',
                'province_id' => 1481,
            ),
            454 => 
            array (
                'id' => 1455,
                'text' => 'PUDTOL',
                'province_id' => 1481,
            ),
            455 => 
            array (
                'id' => 1456,
                'text' => 'SANTA MARCELA',
                'province_id' => 1481,
            ),
            456 => 
            array (
                'id' => 1457,
                'text' => 'CITY OF LAMITAN',
                'province_id' => 1507,
            ),
            457 => 
            array (
                'id' => 1458,
                'text' => 'LANTAWAN',
                'province_id' => 1507,
            ),
            458 => 
            array (
                'id' => 1459,
                'text' => 'MALUSO',
                'province_id' => 1507,
            ),
            459 => 
            array (
                'id' => 1460,
                'text' => 'SUMISIP',
                'province_id' => 1507,
            ),
            460 => 
            array (
                'id' => 1461,
                'text' => 'TIPO-TIPO',
                'province_id' => 1507,
            ),
            461 => 
            array (
                'id' => 1462,
                'text' => 'TUBURAN',
                'province_id' => 1507,
            ),
            462 => 
            array (
                'id' => 1463,
                'text' => 'AKBAR',
                'province_id' => 1507,
            ),
            463 => 
            array (
                'id' => 1464,
                'text' => 'AL-BARKA',
                'province_id' => 1507,
            ),
            464 => 
            array (
                'id' => 1465,
                'text' => 'HADJI MOHAMMAD AJUL',
                'province_id' => 1507,
            ),
            465 => 
            array (
                'id' => 1466,
                'text' => 'UNGKAYA PUKAN',
                'province_id' => 1507,
            ),
            466 => 
            array (
                'id' => 1467,
                'text' => 'HADJI MUHTAMAD',
                'province_id' => 1507,
            ),
            467 => 
            array (
                'id' => 1468,
                'text' => 'TABUAN-LASA',
                'province_id' => 1507,
            ),
            468 => 
            array (
                'id' => 1469,
            'text' => 'BACOLOD-KALAWI (BACOLOD GRANDE)',
                'province_id' => 1536,
            ),
            469 => 
            array (
                'id' => 1470,
                'text' => 'BALABAGAN',
                'province_id' => 1536,
            ),
            470 => 
            array (
                'id' => 1471,
            'text' => 'BALINDONG (WATU)',
                'province_id' => 1536,
            ),
            471 => 
            array (
                'id' => 1472,
                'text' => 'BAYANG',
                'province_id' => 1536,
            ),
            472 => 
            array (
                'id' => 1473,
                'text' => 'BINIDAYAN',
                'province_id' => 1536,
            ),
            473 => 
            array (
                'id' => 1474,
                'text' => 'BUBONG',
                'province_id' => 1536,
            ),
            474 => 
            array (
                'id' => 1475,
                'text' => 'BUTIG',
                'province_id' => 1536,
            ),
            475 => 
            array (
                'id' => 1476,
                'text' => 'GANASSI',
                'province_id' => 1536,
            ),
            476 => 
            array (
                'id' => 1477,
                'text' => 'KAPAI',
                'province_id' => 1536,
            ),
            477 => 
            array (
                'id' => 1478,
            'text' => 'LUMBA-BAYABAO (MAGUING)',
                'province_id' => 1536,
            ),
            478 => 
            array (
                'id' => 1479,
                'text' => 'LUMBATAN',
                'province_id' => 1536,
            ),
            479 => 
            array (
                'id' => 1480,
                'text' => 'MADALUM',
                'province_id' => 1536,
            ),
            480 => 
            array (
                'id' => 1481,
                'text' => 'MADAMBA',
                'province_id' => 1536,
            ),
            481 => 
            array (
                'id' => 1482,
                'text' => 'MALABANG',
                'province_id' => 1536,
            ),
            482 => 
            array (
                'id' => 1483,
                'text' => 'MARANTAO',
                'province_id' => 1536,
            ),
            483 => 
            array (
                'id' => 1484,
            'text' => 'MARAWI CITY (Capital)',
                'province_id' => 1536,
            ),
            484 => 
            array (
                'id' => 1485,
                'text' => 'MASIU',
                'province_id' => 1536,
            ),
            485 => 
            array (
                'id' => 1486,
                'text' => 'MULONDO',
                'province_id' => 1536,
            ),
            486 => 
            array (
                'id' => 1487,
            'text' => 'PAGAYAWAN (TATARIKAN)',
                'province_id' => 1536,
            ),
            487 => 
            array (
                'id' => 1488,
                'text' => 'PIAGAPO',
                'province_id' => 1536,
            ),
            488 => 
            array (
                'id' => 1489,
            'text' => 'POONA BAYABAO (GATA)',
                'province_id' => 1536,
            ),
            489 => 
            array (
                'id' => 1490,
                'text' => 'PUALAS',
                'province_id' => 1536,
            ),
            490 => 
            array (
                'id' => 1491,
                'text' => 'DITSAAN-RAMAIN',
                'province_id' => 1536,
            ),
            491 => 
            array (
                'id' => 1492,
                'text' => 'SAGUIARAN',
                'province_id' => 1536,
            ),
            492 => 
            array (
                'id' => 1493,
                'text' => 'TAMPARAN',
                'province_id' => 1536,
            ),
            493 => 
            array (
                'id' => 1494,
                'text' => 'TARAKA',
                'province_id' => 1536,
            ),
            494 => 
            array (
                'id' => 1495,
                'text' => 'TUBARAN',
                'province_id' => 1536,
            ),
            495 => 
            array (
                'id' => 1496,
                'text' => 'TUGAYA',
                'province_id' => 1536,
            ),
            496 => 
            array (
                'id' => 1497,
                'text' => 'WAO',
                'province_id' => 1536,
            ),
            497 => 
            array (
                'id' => 1498,
                'text' => 'MAROGONG',
                'province_id' => 1536,
            ),
            498 => 
            array (
                'id' => 1499,
                'text' => 'CALANOGAS',
                'province_id' => 1536,
            ),
            499 => 
            array (
                'id' => 1500,
                'text' => 'BUADIPOSO-BUNTONG',
                'province_id' => 1536,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'text' => 'MAGUING',
                'province_id' => 1536,
            ),
            1 => 
            array (
                'id' => 1502,
            'text' => 'PICONG (SULTAN GUMANDER)',
                'province_id' => 1536,
            ),
            2 => 
            array (
                'id' => 1503,
                'text' => 'LUMBAYANAGUE',
                'province_id' => 1536,
            ),
            3 => 
            array (
                'id' => 1504,
                'text' => 'BUMBARAN',
                'province_id' => 1536,
            ),
            4 => 
            array (
                'id' => 1505,
                'text' => 'TAGOLOAN II',
                'province_id' => 1536,
            ),
            5 => 
            array (
                'id' => 1506,
                'text' => 'KAPATAGAN',
                'province_id' => 1536,
            ),
            6 => 
            array (
                'id' => 1507,
                'text' => 'SULTAN DUMALONDONG',
                'province_id' => 1536,
            ),
            7 => 
            array (
                'id' => 1508,
                'text' => 'LUMBACA-UNAYAN',
                'province_id' => 1536,
            ),
            8 => 
            array (
                'id' => 1509,
                'text' => 'AMPATUAN',
                'province_id' => 1538,
            ),
            9 => 
            array (
                'id' => 1510,
                'text' => 'BULDON',
                'province_id' => 1538,
            ),
            10 => 
            array (
                'id' => 1511,
                'text' => 'BULUAN',
                'province_id' => 1538,
            ),
            11 => 
            array (
                'id' => 1512,
                'text' => 'DATU PAGLAS',
                'province_id' => 1538,
            ),
            12 => 
            array (
                'id' => 1513,
                'text' => 'DATU PIANG',
                'province_id' => 1538,
            ),
            13 => 
            array (
                'id' => 1514,
            'text' => 'DATU ODIN SINSUAT (DINAIG)',
                'province_id' => 1538,
            ),
            14 => 
            array (
                'id' => 1515,
            'text' => 'SHARIFF AGUAK (MAGANOY) (Capital)',
                'province_id' => 1538,
            ),
            15 => 
            array (
                'id' => 1516,
                'text' => 'MATANOG',
                'province_id' => 1538,
            ),
            16 => 
            array (
                'id' => 1517,
                'text' => 'PAGALUNGAN',
                'province_id' => 1538,
            ),
            17 => 
            array (
                'id' => 1518,
                'text' => 'PARANG',
                'province_id' => 1538,
            ),
            18 => 
            array (
                'id' => 1519,
            'text' => 'SULTAN KUDARAT (NULING)',
                'province_id' => 1538,
            ),
            19 => 
            array (
                'id' => 1520,
            'text' => 'SULTAN SA BARONGIS (LAMBAYONG)',
                'province_id' => 1538,
            ),
            20 => 
            array (
                'id' => 1521,
            'text' => 'KABUNTALAN (TUMBAO)',
                'province_id' => 1538,
            ),
            21 => 
            array (
                'id' => 1522,
                'text' => 'UPI',
                'province_id' => 1538,
            ),
            22 => 
            array (
                'id' => 1523,
                'text' => 'TALAYAN',
                'province_id' => 1538,
            ),
            23 => 
            array (
                'id' => 1524,
                'text' => 'SOUTH UPI',
                'province_id' => 1538,
            ),
            24 => 
            array (
                'id' => 1525,
                'text' => 'BARIRA',
                'province_id' => 1538,
            ),
            25 => 
            array (
                'id' => 1526,
                'text' => 'GEN. S. K. PENDATUN',
                'province_id' => 1538,
            ),
            26 => 
            array (
                'id' => 1527,
                'text' => 'MAMASAPANO',
                'province_id' => 1538,
            ),
            27 => 
            array (
                'id' => 1528,
                'text' => 'TALITAY',
                'province_id' => 1538,
            ),
            28 => 
            array (
                'id' => 1529,
                'text' => 'PAGAGAWAN',
                'province_id' => 1538,
            ),
            29 => 
            array (
                'id' => 1530,
                'text' => 'PAGLAT',
                'province_id' => 1538,
            ),
            30 => 
            array (
                'id' => 1531,
                'text' => 'SULTAN MASTURA',
                'province_id' => 1538,
            ),
            31 => 
            array (
                'id' => 1532,
                'text' => 'GUINDULUNGAN',
                'province_id' => 1538,
            ),
            32 => 
            array (
                'id' => 1533,
                'text' => 'DATU SAUDI-AMPATUAN',
                'province_id' => 1538,
            ),
            33 => 
            array (
                'id' => 1534,
                'text' => 'DATU UNSAY',
                'province_id' => 1538,
            ),
            34 => 
            array (
                'id' => 1535,
                'text' => 'DATU ABDULLAH SANGKI',
                'province_id' => 1538,
            ),
            35 => 
            array (
                'id' => 1536,
                'text' => 'RAJAH BUAYAN',
                'province_id' => 1538,
            ),
            36 => 
            array (
                'id' => 1537,
                'text' => 'DATU BLAH T. SINSUAT',
                'province_id' => 1538,
            ),
            37 => 
            array (
                'id' => 1538,
                'text' => 'DATU ANGGAL MIDTIMBANG',
                'province_id' => 1538,
            ),
            38 => 
            array (
                'id' => 1539,
                'text' => 'MANGUDADATU',
                'province_id' => 1538,
            ),
            39 => 
            array (
                'id' => 1540,
                'text' => 'PANDAG',
                'province_id' => 1538,
            ),
            40 => 
            array (
                'id' => 1541,
                'text' => 'NORTHERN KABUNTALAN',
                'province_id' => 1538,
            ),
            41 => 
            array (
                'id' => 1542,
                'text' => 'DATU HOFFER AMPATUAN',
                'province_id' => 1538,
            ),
            42 => 
            array (
                'id' => 1543,
                'text' => 'DATU SALIBO',
                'province_id' => 1538,
            ),
            43 => 
            array (
                'id' => 1544,
                'text' => 'SHARIFF SAYDONA MUSTAPHA',
                'province_id' => 1538,
            ),
            44 => 
            array (
                'id' => 1545,
                'text' => 'INDANAN',
                'province_id' => 1566,
            ),
            45 => 
            array (
                'id' => 1546,
            'text' => 'JOLO (Capital)',
                'province_id' => 1566,
            ),
            46 => 
            array (
                'id' => 1547,
                'text' => 'KALINGALAN CALUANG',
                'province_id' => 1566,
            ),
            47 => 
            array (
                'id' => 1548,
                'text' => 'LUUK',
                'province_id' => 1566,
            ),
            48 => 
            array (
                'id' => 1549,
                'text' => 'MAIMBUNG',
                'province_id' => 1566,
            ),
            49 => 
            array (
                'id' => 1550,
            'text' => 'HADJI PANGLIMA TAHIL (MARUNGGAS)',
                'province_id' => 1566,
            ),
            50 => 
            array (
                'id' => 1551,
                'text' => 'OLD PANAMAO',
                'province_id' => 1566,
            ),
            51 => 
            array (
                'id' => 1552,
                'text' => 'PANGUTARAN',
                'province_id' => 1566,
            ),
            52 => 
            array (
                'id' => 1553,
                'text' => 'PARANG',
                'province_id' => 1566,
            ),
            53 => 
            array (
                'id' => 1554,
                'text' => 'PATA',
                'province_id' => 1566,
            ),
            54 => 
            array (
                'id' => 1555,
                'text' => 'PATIKUL',
                'province_id' => 1566,
            ),
            55 => 
            array (
                'id' => 1556,
                'text' => 'SIASI',
                'province_id' => 1566,
            ),
            56 => 
            array (
                'id' => 1557,
                'text' => 'TALIPAO',
                'province_id' => 1566,
            ),
            57 => 
            array (
                'id' => 1558,
                'text' => 'TAPUL',
                'province_id' => 1566,
            ),
            58 => 
            array (
                'id' => 1559,
                'text' => 'TONGKIL',
                'province_id' => 1566,
            ),
            59 => 
            array (
                'id' => 1560,
            'text' => 'PANGLIMA ESTINO (NEW PANAMAO)',
                'province_id' => 1566,
            ),
            60 => 
            array (
                'id' => 1561,
                'text' => 'LUGUS',
                'province_id' => 1566,
            ),
            61 => 
            array (
                'id' => 1562,
                'text' => 'PANDAMI',
                'province_id' => 1566,
            ),
            62 => 
            array (
                'id' => 1563,
                'text' => 'OMAR',
                'province_id' => 1566,
            ),
            63 => 
            array (
                'id' => 1564,
            'text' => 'PANGLIMA SUGALA (BALIMBING)',
                'province_id' => 1570,
            ),
            64 => 
            array (
                'id' => 1565,
            'text' => 'BONGAO (Capital)',
                'province_id' => 1570,
            ),
            65 => 
            array (
                'id' => 1566,
            'text' => 'MAPUN (CAGAYAN DE TAWI-TAWI)',
                'province_id' => 1570,
            ),
            66 => 
            array (
                'id' => 1567,
                'text' => 'SIMUNUL',
                'province_id' => 1570,
            ),
            67 => 
            array (
                'id' => 1568,
                'text' => 'SITANGKAI',
                'province_id' => 1570,
            ),
            68 => 
            array (
                'id' => 1569,
                'text' => 'SOUTH UBIAN',
                'province_id' => 1570,
            ),
            69 => 
            array (
                'id' => 1570,
                'text' => 'TANDUBAS',
                'province_id' => 1570,
            ),
            70 => 
            array (
                'id' => 1571,
                'text' => 'TURTLE ISLANDS',
                'province_id' => 1570,
            ),
            71 => 
            array (
                'id' => 1572,
                'text' => 'LANGUYAN',
                'province_id' => 1570,
            ),
            72 => 
            array (
                'id' => 1573,
                'text' => 'SAPA-SAPA',
                'province_id' => 1570,
            ),
            73 => 
            array (
                'id' => 1574,
                'text' => 'SIBUTU',
                'province_id' => 1570,
            ),
            74 => 
            array (
                'id' => 1575,
                'text' => 'BUENAVISTA',
                'province_id' => 1602,
            ),
            75 => 
            array (
                'id' => 1576,
            'text' => 'BUTUAN CITY (Capital)',
                'province_id' => 1602,
            ),
            76 => 
            array (
                'id' => 1577,
                'text' => 'CITY OF CABADBARAN',
                'province_id' => 1602,
            ),
            77 => 
            array (
                'id' => 1578,
                'text' => 'CARMEN',
                'province_id' => 1602,
            ),
            78 => 
            array (
                'id' => 1579,
                'text' => 'JABONGA',
                'province_id' => 1602,
            ),
            79 => 
            array (
                'id' => 1580,
                'text' => 'KITCHARAO',
                'province_id' => 1602,
            ),
            80 => 
            array (
                'id' => 1581,
                'text' => 'LAS NIEVES',
                'province_id' => 1602,
            ),
            81 => 
            array (
                'id' => 1582,
                'text' => 'MAGALLANES',
                'province_id' => 1602,
            ),
            82 => 
            array (
                'id' => 1583,
                'text' => 'NASIPIT',
                'province_id' => 1602,
            ),
            83 => 
            array (
                'id' => 1584,
                'text' => 'SANTIAGO',
                'province_id' => 1602,
            ),
            84 => 
            array (
                'id' => 1585,
                'text' => 'TUBAY',
                'province_id' => 1602,
            ),
            85 => 
            array (
                'id' => 1586,
                'text' => 'REMEDIOS T. ROMUALDEZ',
                'province_id' => 1602,
            ),
            86 => 
            array (
                'id' => 1587,
                'text' => 'CITY OF BAYUGAN',
                'province_id' => 1603,
            ),
            87 => 
            array (
                'id' => 1588,
                'text' => 'BUNAWAN',
                'province_id' => 1603,
            ),
            88 => 
            array (
                'id' => 1589,
                'text' => 'ESPERANZA',
                'province_id' => 1603,
            ),
            89 => 
            array (
                'id' => 1590,
                'text' => 'LA PAZ',
                'province_id' => 1603,
            ),
            90 => 
            array (
                'id' => 1591,
                'text' => 'LORETO',
                'province_id' => 1603,
            ),
            91 => 
            array (
                'id' => 1592,
            'text' => 'PROSPERIDAD (Capital)',
                'province_id' => 1603,
            ),
            92 => 
            array (
                'id' => 1593,
                'text' => 'ROSARIO',
                'province_id' => 1603,
            ),
            93 => 
            array (
                'id' => 1594,
                'text' => 'SAN FRANCISCO',
                'province_id' => 1603,
            ),
            94 => 
            array (
                'id' => 1595,
                'text' => 'SAN LUIS',
                'province_id' => 1603,
            ),
            95 => 
            array (
                'id' => 1596,
                'text' => 'SANTA JOSEFA',
                'province_id' => 1603,
            ),
            96 => 
            array (
                'id' => 1597,
                'text' => 'TALACOGON',
                'province_id' => 1603,
            ),
            97 => 
            array (
                'id' => 1598,
                'text' => 'TRENTO',
                'province_id' => 1603,
            ),
            98 => 
            array (
                'id' => 1599,
                'text' => 'VERUELA',
                'province_id' => 1603,
            ),
            99 => 
            array (
                'id' => 1600,
                'text' => 'SIBAGAT',
                'province_id' => 1603,
            ),
            100 => 
            array (
                'id' => 1601,
                'text' => 'ALEGRIA',
                'province_id' => 1667,
            ),
            101 => 
            array (
                'id' => 1602,
                'text' => 'BACUAG',
                'province_id' => 1667,
            ),
            102 => 
            array (
                'id' => 1603,
                'text' => 'BURGOS',
                'province_id' => 1667,
            ),
            103 => 
            array (
                'id' => 1604,
                'text' => 'CLAVER',
                'province_id' => 1667,
            ),
            104 => 
            array (
                'id' => 1605,
                'text' => 'DAPA',
                'province_id' => 1667,
            ),
            105 => 
            array (
                'id' => 1606,
                'text' => 'DEL CARMEN',
                'province_id' => 1667,
            ),
            106 => 
            array (
                'id' => 1607,
                'text' => 'GENERAL LUNA',
                'province_id' => 1667,
            ),
            107 => 
            array (
                'id' => 1608,
                'text' => 'GIGAQUIT',
                'province_id' => 1667,
            ),
            108 => 
            array (
                'id' => 1609,
                'text' => 'MAINIT',
                'province_id' => 1667,
            ),
            109 => 
            array (
                'id' => 1610,
                'text' => 'MALIMONO',
                'province_id' => 1667,
            ),
            110 => 
            array (
                'id' => 1611,
                'text' => 'PILAR',
                'province_id' => 1667,
            ),
            111 => 
            array (
                'id' => 1612,
                'text' => 'PLACER',
                'province_id' => 1667,
            ),
            112 => 
            array (
                'id' => 1613,
                'text' => 'SAN BENITO',
                'province_id' => 1667,
            ),
            113 => 
            array (
                'id' => 1614,
            'text' => 'SAN FRANCISCO (ANAO-AON)',
                'province_id' => 1667,
            ),
            114 => 
            array (
                'id' => 1615,
                'text' => 'SAN ISIDRO',
                'province_id' => 1667,
            ),
            115 => 
            array (
                'id' => 1616,
            'text' => 'SANTA MONICA (SAPAO)',
                'province_id' => 1667,
            ),
            116 => 
            array (
                'id' => 1617,
                'text' => 'SISON',
                'province_id' => 1667,
            ),
            117 => 
            array (
                'id' => 1618,
                'text' => 'SOCORRO',
                'province_id' => 1667,
            ),
            118 => 
            array (
                'id' => 1619,
            'text' => 'SURIGAO CITY (Capital)',
                'province_id' => 1667,
            ),
            119 => 
            array (
                'id' => 1620,
                'text' => 'TAGANA-AN',
                'province_id' => 1667,
            ),
            120 => 
            array (
                'id' => 1621,
                'text' => 'TUBOD',
                'province_id' => 1667,
            ),
            121 => 
            array (
                'id' => 1622,
                'text' => 'BAROBO',
                'province_id' => 1668,
            ),
            122 => 
            array (
                'id' => 1623,
                'text' => 'BAYABAS',
                'province_id' => 1668,
            ),
            123 => 
            array (
                'id' => 1624,
                'text' => 'CITY OF BISLIG',
                'province_id' => 1668,
            ),
            124 => 
            array (
                'id' => 1625,
                'text' => 'CAGWAIT',
                'province_id' => 1668,
            ),
            125 => 
            array (
                'id' => 1626,
                'text' => 'CANTILAN',
                'province_id' => 1668,
            ),
            126 => 
            array (
                'id' => 1627,
                'text' => 'CARMEN',
                'province_id' => 1668,
            ),
            127 => 
            array (
                'id' => 1628,
                'text' => 'CARRASCAL',
                'province_id' => 1668,
            ),
            128 => 
            array (
                'id' => 1629,
                'text' => 'CORTES',
                'province_id' => 1668,
            ),
            129 => 
            array (
                'id' => 1630,
                'text' => 'HINATUAN',
                'province_id' => 1668,
            ),
            130 => 
            array (
                'id' => 1631,
                'text' => 'LANUZA',
                'province_id' => 1668,
            ),
            131 => 
            array (
                'id' => 1632,
                'text' => 'LIANGA',
                'province_id' => 1668,
            ),
            132 => 
            array (
                'id' => 1633,
                'text' => 'LINGIG',
                'province_id' => 1668,
            ),
            133 => 
            array (
                'id' => 1634,
                'text' => 'MADRID',
                'province_id' => 1668,
            ),
            134 => 
            array (
                'id' => 1635,
                'text' => 'MARIHATAG',
                'province_id' => 1668,
            ),
            135 => 
            array (
                'id' => 1636,
                'text' => 'SAN AGUSTIN',
                'province_id' => 1668,
            ),
            136 => 
            array (
                'id' => 1637,
                'text' => 'SAN MIGUEL',
                'province_id' => 1668,
            ),
            137 => 
            array (
                'id' => 1638,
                'text' => 'TAGBINA',
                'province_id' => 1668,
            ),
            138 => 
            array (
                'id' => 1639,
                'text' => 'TAGO',
                'province_id' => 1668,
            ),
            139 => 
            array (
                'id' => 1640,
            'text' => 'CITY OF TANDAG (Capital)',
                'province_id' => 1668,
            ),
            140 => 
            array (
                'id' => 1641,
            'text' => 'BASILISA (RIZAL)',
                'province_id' => 1685,
            ),
            141 => 
            array (
                'id' => 1642,
                'text' => 'CAGDIANAO',
                'province_id' => 1685,
            ),
            142 => 
            array (
                'id' => 1643,
                'text' => 'DINAGAT',
                'province_id' => 1685,
            ),
            143 => 
            array (
                'id' => 1644,
            'text' => 'LIBJO (ALBOR)',
                'province_id' => 1685,
            ),
            144 => 
            array (
                'id' => 1645,
                'text' => 'LORETO',
                'province_id' => 1685,
            ),
            145 => 
            array (
                'id' => 1646,
            'text' => 'SAN JOSE (Capital)',
                'province_id' => 1685,
            ),
            146 => 
            array (
                'id' => 1647,
                'text' => 'TUBAJON',
                'province_id' => 1685,
            ),
        ));
        
        
    }
}