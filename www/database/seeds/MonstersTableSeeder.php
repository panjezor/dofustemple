<?php

use Illuminate\Database\Seeder;

class MonstersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('monsters')->delete();
        
        \DB::table('monsters')->insert(array (
            0 => 
            array (
                'id' => 1,
                'monster_name' => 'Sponge Mob',
                'type' => 2,
                'associate' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'monster_name' => 'Royal Gobball',
                'type' => 2,
                'associate' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'monster_name' => 'Famished Sunflower',
                'type' => 2,
                'associate' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'monster_name' => 'Royal Blue Jelly',
                'type' => 2,
                'associate' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'monster_name' => 'Shin Larva',
                'type' => 2,
                'associate' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'monster_name' => 'GM Wabbit',
                'type' => 2,
                'associate' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'monster_name' => 'Golden Scarabugly',
                'type' => 2,
                'associate' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'monster_name' => 'Bworkette',
                'type' => 2,
                'associate' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'monster_name' => 'Dragon Pig',
                'type' => 2,
                'associate' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'monster_name' => 'Mumminotor',
                'type' => 2,
                'associate' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'monster_name' => 'Deminoball',
                'type' => 2,
                'associate' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'monster_name' => 'Royal Mint Jelly',
                'type' => 2,
                'associate' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'monster_name' => 'Royal Tofu',
                'type' => 2,
                'associate' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'monster_name' => 'Royal Coco Blop',
                'type' => 2,
                'associate' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'monster_name' => 'Royal Indigo Blop',
                'type' => 2,
                'associate' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'monster_name' => 'Royal Pippin Blop',
                'type' => 2,
                'associate' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'monster_name' => 'Black Rat',
                'type' => 2,
                'associate' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'monster_name' => 'White Rat',
                'type' => 2,
                'associate' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'monster_name' => 'Minotoror',
                'type' => 2,
                'associate' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'monster_name' => 'Hell Mina',
                'type' => 2,
                'associate' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'monster_name' => 'Tanukoui San',
                'type' => 2,
                'associate' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'monster_name' => 'Legendary Crackler',
                'type' => 2,
                'associate' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'monster_name' => 'Sewer Keeper',
                'type' => 2,
                'associate' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'monster_name' => 'Lord Crow',
                'type' => 2,
                'associate' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'monster_name' => 'Royal Rainbow Blop',
                'type' => 2,
                'associate' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'monster_name' => 'Great Coralator',
                'type' => 2,
                'associate' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'monster_name' => 'Gourlo the Terrible',
                'type' => 2,
                'associate' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'monster_name' => 'Moowolf',
                'type' => 2,
                'associate' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'monster_name' => 'Wa Wabbit',
                'type' => 2,
                'associate' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'monster_name' => 'Moon',
                'type' => 2,
                'associate' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'monster_name' => 'Koolich',
                'type' => 2,
                'associate' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'monster_name' => 'Skeunk',
                'type' => 2,
                'associate' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'monster_name' => 'Ancestral Treechnid',
                'type' => 2,
                'associate' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'monster_name' => 'Pandora Master',
                'type' => 2,
                'associate' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'monster_name' => 'Stunned Tynril',
                'type' => 2,
                'associate' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'monster_name' => 'Dismayed Tynril',
                'type' => 2,
                'associate' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'monster_name' => 'Disconcerted Tynril',
                'type' => 2,
                'associate' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'monster_name' => 'Perfidious Tynril',
                'type' => 2,
                'associate' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'monster_name' => 'Royal Lemon Jelly',
                'type' => 2,
                'associate' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'monster_name' => 'Touchparak',
                'type' => 2,
                'associate' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'monster_name' => 'Bworker',
                'type' => 2,
                'associate' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'monster_name' => 'Sphincter Cell',
                'type' => 2,
                'associate' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'monster_name' => 'Minotot',
                'type' => 2,
                'associate' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'monster_name' => 'Crocabulia',
                'type' => 2,
                'associate' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'monster_name' => 'Peki Peki',
                'type' => 2,
                'associate' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'monster_name' => 'Soft Oak',
                'type' => 2,
                'associate' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'monster_name' => 'Ougaa',
                'type' => 2,
                'associate' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'monster_name' => 'Kimbo',
                'type' => 2,
                'associate' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'monster_name' => 'Aboub',
                'type' => 0,
                'associate' => 50,
            ),
            49 => 
            array (
                'id' => 50,
                'monster_name' => 'Abounteous the Gener',
                'type' => 1,
                'associate' => 49,
            ),
            50 => 
            array (
                'id' => 51,
                'monster_name' => 'Ambusher',
                'type' => 0,
                'associate' => 52,
            ),
            51 => 
            array (
                'id' => 52,
                'monster_name' => 'Ambushapens the Unlucky',
                'type' => 1,
                'associate' => 51,
            ),
            52 => 
            array (
                'id' => 53,
                'monster_name' => 'Zoth Sergeant',
                'type' => 0,
                'associate' => 54,
            ),
            53 => 
            array (
                'id' => 54,
                'monster_name' => 'Zouzoth the Cuddly',
                'type' => 1,
                'associate' => 53,
            ),
            54 => 
            array (
                'id' => 55,
                'monster_name' => 'Amlub',
                'type' => 0,
                'associate' => 56,
            ),
            55 => 
            array (
                'id' => 56,
                'monster_name' => 'Amlullabeye the Dreamer',
                'type' => 1,
                'associate' => 55,
            ),
            56 => 
            array (
                'id' => 57,
                'monster_name' => 'Apero Ghost',
                'type' => 0,
                'associate' => 58,
            ),
            57 => 
            array (
                'id' => 58,
                'monster_name' => 'Aperobics the Dynamic',
                'type' => 1,
                'associate' => 57,
            ),
            58 => 
            array (
                'id' => 59,
                'monster_name' => 'Dark Rose',
                'type' => 0,
                'associate' => 60,
            ),
            59 => 
            array (
                'id' => 60,
                'monster_name' => 'Zorrose the Messican',
                'type' => 1,
                'associate' => 59,
            ),
            60 => 
            array (
                'id' => 61,
                'monster_name' => 'Major Arachnee',
                'type' => 0,
                'associate' => 62,
            ),
            61 => 
            array (
                'id' => 62,
                'monster_name' => 'Arachma the Greek',
                'type' => 1,
                'associate' => 61,
            ),
            62 => 
            array (
                'id' => 63,
                'monster_name' => 'Sick Arachnee',
                'type' => 0,
                'associate' => 64,
            ),
            63 => 
            array (
                'id' => 64,
                'monster_name' => 'Arachnangel the Hopeful',
                'type' => 1,
                'associate' => 63,
            ),
            64 => 
            array (
                'id' => 65,
                'monster_name' => 'Zoth Warrior',
                'type' => 0,
                'associate' => 66,
            ),
            65 => 
            array (
                'id' => 66,
                'monster_name' => 'Zigzoth the Indecisive',
                'type' => 1,
                'associate' => 65,
            ),
            66 => 
            array (
                'id' => 67,
                'monster_name' => 'Araknawa',
                'type' => 0,
                'associate' => 68,
            ),
            67 => 
            array (
                'id' => 68,
                'monster_name' => 'Arachnawar the Killinmachin',
                'type' => 1,
                'associate' => 67,
            ),
            68 => 
            array (
                'id' => 69,
                'monster_name' => 'Sewer Arachnee',
                'type' => 0,
                'associate' => 70,
            ),
            69 => 
            array (
                'id' => 70,
                'monster_name' => 'Arachnekros the Aggressive',
                'type' => 1,
                'associate' => 69,
            ),
            70 => 
            array (
                'id' => 71,
                'monster_name' => 'Yokai Firefoux Ghost',
                'type' => 0,
                'associate' => 72,
            ),
            71 => 
            array (
                'id' => 72,
                'monster_name' => 'Yoksai the Spirited',
                'type' => 1,
                'associate' => 71,
            ),
            72 => 
            array (
                'id' => 73,
                'monster_name' => 'Arachnee',
                'type' => 0,
                'associate' => 74,
            ),
            73 => 
            array (
                'id' => 74,
                'monster_name' => 'Arakula the Carpature',
                'type' => 1,
                'associate' => 73,
            ),
            74 => 
            array (
                'id' => 75,
                'monster_name' => 'Yokai Firefoux',
                'type' => 0,
                'associate' => 76,
            ),
            75 => 
            array (
                'id' => 76,
                'monster_name' => 'Yokai the Choral',
                'type' => 1,
                'associate' => 75,
            ),
            76 => 
            array (
                'id' => 77,
                'monster_name' => 'Arepo Ghost',
                'type' => 0,
                'associate' => 78,
            ),
            77 => 
            array (
                'id' => 78,
                'monster_name' => 'Arepotair the Bespectacled',
                'type' => 1,
                'associate' => 77,
            ),
            78 => 
            array (
                'id' => 79,
                'monster_name' => 'Dark Baker',
                'type' => 0,
                'associate' => 80,
            ),
            79 => 
            array (
                'id' => 80,
                'monster_name' => 'Bakeraider the Tomb',
                'type' => 1,
                'associate' => 79,
            ),
            80 => 
            array (
                'id' => 81,
                'monster_name' => 'Holy Bambooto',
                'type' => 0,
                'associate' => 82,
            ),
            81 => 
            array (
                'id' => 82,
                'monster_name' => 'Bambono the Holy',
                'type' => 1,
                'associate' => 81,
            ),
            82 => 
            array (
                'id' => 83,
                'monster_name' => 'Wo Wabbit',
                'type' => 0,
                'associate' => 84,
            ),
            83 => 
            array (
                'id' => 84,
                'monster_name' => 'Wowalker the Egyptian',
                'type' => 1,
                'associate' => 83,
            ),
            84 => 
            array (
                'id' => 85,
                'monster_name' => 'Bambooto',
                'type' => 0,
                'associate' => 86,
            ),
            85 => 
            array (
                'id' => 86,
                'monster_name' => 'Bambottinit the Quiet',
                'type' => 1,
                'associate' => 85,
            ),
            86 => 
            array (
                'id' => 87,
                'monster_name' => 'Rogue Clan Bandit',
                'type' => 0,
                'associate' => 88,
            ),
            87 => 
            array (
                'id' => 88,
                'monster_name' => 'Bandinamit the Explosive',
                'type' => 1,
                'associate' => 87,
            ),
            88 => 
            array (
                'id' => 89,
                'monster_name' => 'One-Armed Bandit',
                'type' => 0,
                'associate' => 90,
            ),
            89 => 
            array (
                'id' => 90,
                'monster_name' => 'Bandirty the Messy',
                'type' => 1,
                'associate' => 89,
            ),
            90 => 
            array (
                'id' => 91,
                'monster_name' => 'Purple Warko',
                'type' => 0,
                'associate' => 92,
            ),
            91 => 
            array (
                'id' => 92,
                'monster_name' => 'Worka the Willful',
                'type' => 1,
                'associate' => 91,
            ),
            92 => 
            array (
                'id' => 93,
                'monster_name' => 'Barbrossa',
                'type' => 0,
                'associate' => 94,
            ),
            93 => 
            array (
                'id' => 94,
                'monster_name' => 'Barbrosskam the Chief',
                'type' => 1,
                'associate' => 93,
            ),
            94 => 
            array (
                'id' => 95,
                'monster_name' => 'Brown Warko',
                'type' => 0,
                'associate' => 96,
            ),
            95 => 
            array (
                'id' => 96,
                'monster_name' => 'Warko the Inky',
                'type' => 1,
                'associate' => 95,
            ),
            96 => 
            array (
                'id' => 97,
                'monster_name' => 'Barkritter',
                'type' => 0,
                'associate' => 98,
            ),
            97 => 
            array (
                'id' => 98,
                'monster_name' => 'Barkricrac the Unsteady',
                'type' => 1,
                'associate' => 97,
            ),
            98 => 
            array (
                'id' => 99,
                'monster_name' => 'Morello Cherry Biblop',
                'type' => 0,
                'associate' => 100,
            ),
            99 => 
            array (
                'id' => 100,
                'monster_name' => 'Biblokajin the Bald',
                'type' => 1,
                'associate' => 99,
            ),
            100 => 
            array (
                'id' => 101,
                'monster_name' => 'Warguerite',
                'type' => 0,
                'associate' => 102,
            ),
            101 => 
            array (
                'id' => 102,
                'monster_name' => 'Warazpacho the Cherrilla',
                'type' => 1,
                'associate' => 101,
            ),
            102 => 
            array (
                'id' => 103,
                'monster_name' => 'Pippin Biblop',
                'type' => 0,
                'associate' => 104,
            ),
            103 => 
            array (
                'id' => 104,
                'monster_name' => 'Bibloponey the Entertainer',
                'type' => 1,
                'associate' => 103,
            ),
            104 => 
            array (
                'id' => 105,
                'monster_name' => 'Skeleton Wabbit',
                'type' => 0,
                'associate' => 106,
            ),
            105 => 
            array (
                'id' => 106,
                'monster_name' => 'Wabbitor the Apt',
                'type' => 1,
                'associate' => 105,
            ),
            106 => 
            array (
                'id' => 107,
                'monster_name' => 'Biblopopo the Organiser',
                'type' => 1,
                'associate' => 110,
            ),
            107 => 
            array (
                'id' => 108,
                'monster_name' => 'Black Wabbit',
                'type' => 0,
                'associate' => 109,
            ),
            108 => 
            array (
                'id' => 109,
                'monster_name' => 'Wabbin the Wich',
                'type' => 1,
                'associate' => 108,
            ),
            109 => 
            array (
                'id' => 110,
                'monster_name' => 'Coco Biblop',
                'type' => 0,
                'associate' => 107,
            ),
            110 => 
            array (
                'id' => 111,
                'monster_name' => 'Vampire',
                'type' => 0,
                'associate' => 112,
            ),
            111 => 
            array (
                'id' => 112,
                'monster_name' => 'Vamp the Impalest',
                'type' => 1,
                'associate' => 111,
            ),
            112 => 
            array (
                'id' => 113,
                'monster_name' => 'Yellow Turtle',
                'type' => 0,
                'associate' => 114,
            ),
            113 => 
            array (
                'id' => 114,
                'monster_name' => 'Turture the Hooded',
                'type' => 1,
                'associate' => 113,
            ),
            114 => 
            array (
                'id' => 115,
                'monster_name' => 'Green Turtle',
                'type' => 0,
                'associate' => 116,
            ),
            115 => 
            array (
                'id' => 116,
                'monster_name' => 'Turtrenalds the Tragic',
                'type' => 1,
                'associate' => 115,
            ),
            116 => 
            array (
                'id' => 117,
                'monster_name' => 'Red Turtle',
                'type' => 0,
                'associate' => 118,
            ),
            117 => 
            array (
                'id' => 118,
                'monster_name' => 'Turticorn the Horned',
                'type' => 1,
                'associate' => 117,
            ),
            118 => 
            array (
                'id' => 119,
                'monster_name' => 'Blue Turtle',
                'type' => 0,
                'associate' => 120,
            ),
            119 => 
            array (
                'id' => 120,
                'monster_name' => 'Turtan\'ernie the Streetwise',
                'type' => 1,
                'associate' => 119,
            ),
            120 => 
            array (
                'id' => 121,
                'monster_name' => 'Trunknid',
                'type' => 0,
                'associate' => 122,
            ),
            121 => 
            array (
                'id' => 122,
                'monster_name' => 'Trunkbeard the Gentle',
                'type' => 1,
                'associate' => 121,
            ),
            122 => 
            array (
                'id' => 123,
                'monster_name' => 'Trumperelle',
                'type' => 0,
                'associate' => 124,
            ),
            123 => 
            array (
                'id' => 124,
                'monster_name' => 'Trumpaynor the Survivor',
                'type' => 1,
                'associate' => 123,
            ),
            124 => 
            array (
                'id' => 125,
                'monster_name' => 'Troolaraj',
                'type' => 0,
                'associate' => 126,
            ),
            125 => 
            array (
                'id' => 126,
                'monster_name' => 'Trooligan the Bulldogg',
                'type' => 1,
                'associate' => 125,
            ),
            126 => 
            array (
                'id' => 127,
                'monster_name' => 'Venerable Treechnid',
                'type' => 0,
                'associate' => 128,
            ),
            127 => 
            array (
                'id' => 128,
                'monster_name' => 'Treektamak the Loud',
                'type' => 1,
                'associate' => 127,
            ),
            128 => 
            array (
                'id' => 129,
                'monster_name' => 'Light Treeckler',
                'type' => 0,
                'associate' => 130,
            ),
            129 => 
            array (
                'id' => 130,
                'monster_name' => 'Treekstalbal the Psychic',
                'type' => 1,
                'associate' => 129,
            ),
            130 => 
            array (
                'id' => 131,
                'monster_name' => 'Dark Treechnid',
                'type' => 0,
                'associate' => 132,
            ),
            131 => 
            array (
                'id' => 132,
                'monster_name' => 'Treekonk the Stunned',
                'type' => 1,
                'associate' => 131,
            ),
            132 => 
            array (
                'id' => 133,
                'monster_name' => 'Treechnee',
                'type' => 0,
                'associate' => 134,
            ),
            133 => 
            array (
                'id' => 134,
                'monster_name' => 'Treeknidylus',
                'type' => 1,
                'associate' => 133,
            ),
            134 => 
            array (
                'id' => 135,
                'monster_name' => 'Treechnid',
                'type' => 0,
                'associate' => 136,
            ),
            135 => 
            array (
                'id' => 136,
                'monster_name' => 'Treekniddioo the Needy',
                'type' => 1,
                'associate' => 135,
            ),
            136 => 
            array (
                'id' => 137,
                'monster_name' => 'Dark Treeckler',
                'type' => 0,
                'associate' => 138,
            ),
            137 => 
            array (
                'id' => 138,
                'monster_name' => 'Treekness the Dark',
                'type' => 1,
                'associate' => 137,
            ),
            138 => 
            array (
                'id' => 139,
                'monster_name' => 'Dark Treechnee',
                'type' => 0,
                'associate' => 140,
            ),
            139 => 
            array (
                'id' => 140,
                'monster_name' => 'Treekalack the Sad',
                'type' => 1,
                'associate' => 139,
            ),
            140 => 
            array (
                'id' => 141,
                'monster_name' => 'Evil Tofu',
                'type' => 0,
                'associate' => 142,
            ),
            141 => 
            array (
                'id' => 142,
                'monster_name' => 'Tofulsom the Jailer',
                'type' => 1,
                'associate' => 141,
            ),
            142 => 
            array (
                'id' => 143,
                'monster_name' => 'Sick Tofu',
                'type' => 0,
                'associate' => 144,
            ),
            143 => 
            array (
                'id' => 144,
                'monster_name' => 'Tofull the Optimist',
                'type' => 1,
                'associate' => 143,
            ),
            144 => 
            array (
                'id' => 145,
                'monster_name' => 'Tofu',
                'type' => 0,
                'associate' => 146,
            ),
            145 => 
            array (
                'id' => 146,
                'monster_name' => 'Tofudd the Hunter',
                'type' => 1,
                'associate' => 145,
            ),
            146 => 
            array (
                'id' => 147,
                'monster_name' => 'Tiwabbit Wosungwee',
                'type' => 0,
                'associate' => 148,
            ),
            147 => 
            array (
                'id' => 148,
                'monster_name' => 'Tiwascal the Wapper',
                'type' => 1,
                'associate' => 147,
            ),
            148 => 
            array (
                'id' => 149,
                'monster_name' => 'Black Tiwabbit',
                'type' => 0,
                'associate' => 150,
            ),
            149 => 
            array (
                'id' => 150,
                'monster_name' => 'Tiwana the Tokin\'',
                'type' => 1,
                'associate' => 149,
            ),
            150 => 
            array (
                'id' => 151,
                'monster_name' => 'Tiwabbit',
                'type' => 0,
                'associate' => 152,
            ),
            151 => 
            array (
                'id' => 152,
                'monster_name' => 'Tiwaldo the Hidden',
                'type' => 1,
                'associate' => 151,
            ),
            152 => 
            array (
                'id' => 153,
                'monster_name' => 'Tanukouï San Ghost',
                'type' => 0,
                'associate' => 154,
            ),
            153 => 
            array (
                'id' => 154,
                'monster_name' => 'Tanuktonik the Doofdoof',
                'type' => 1,
                'associate' => 153,
            ),
            154 => 
            array (
                'id' => 155,
                'monster_name' => 'Tanuki Chan Ghost',
                'type' => 0,
                'associate' => NULL,
            ),
            155 => 
            array (
                'id' => 157,
                'monster_name' => 'Susej',
                'type' => 0,
                'associate' => 158,
            ),
            156 => 
            array (
                'id' => 158,
                'monster_name' => 'Suzessman the Enthusiastic',
                'type' => 1,
                'associate' => 157,
            ),
            157 => 
            array (
                'id' => 159,
                'monster_name' => 'Gwass',
                'type' => 0,
                'associate' => 160,
            ),
            158 => 
            array (
                'id' => 160,
                'monster_name' => 'Supergwass the Free',
                'type' => 1,
                'associate' => 159,
            ),
            159 => 
            array (
                'id' => 161,
                'monster_name' => 'Red Spimush',
                'type' => 0,
                'associate' => 162,
            ),
            160 => 
            array (
                'id' => 162,
                'monster_name' => 'Spimushuaia the Traveller',
                'type' => 1,
                'associate' => 161,
            ),
            161 => 
            array (
                'id' => 163,
                'monster_name' => 'Blue Spimush',
                'type' => 0,
                'associate' => 164,
            ),
            162 => 
            array (
                'id' => 164,
                'monster_name' => 'Spimushty the Smelly',
                'type' => 1,
                'associate' => 163,
            ),
            163 => 
            array (
                'id' => 165,
                'monster_name' => 'Green Spimush',
                'type' => 0,
                'associate' => 166,
            ),
            164 => 
            array (
                'id' => 166,
                'monster_name' => 'Spimushtache the Hairy',
                'type' => 1,
                'associate' => 165,
            ),
            165 => 
            array (
                'id' => 167,
                'monster_name' => 'Brown Spimush',
                'type' => 0,
                'associate' => 168,
            ),
            166 => 
            array (
                'id' => 168,
                'monster_name' => 'Speedmush the Racer',
                'type' => 1,
                'associate' => 167,
            ),
            167 => 
            array (
                'id' => 169,
                'monster_name' => 'Sparo',
                'type' => 0,
                'associate' => 170,
            ),
            168 => 
            array (
                'id' => 170,
                'monster_name' => 'Sparodi the Python',
                'type' => 1,
                'associate' => 169,
            ),
            169 => 
            array (
                'id' => 171,
                'monster_name' => 'Whitish Fang',
                'type' => 0,
                'associate' => 172,
            ),
            170 => 
            array (
                'id' => 172,
                'monster_name' => 'Snowhitisha the Pure',
                'type' => 1,
                'associate' => 171,
            ),
            171 => 
            array (
                'id' => 173,
                'monster_name' => 'Green Snapper',
                'type' => 0,
                'associate' => 174,
            ),
            172 => 
            array (
                'id' => 174,
                'monster_name' => 'Snappy the Fishfrier',
                'type' => 1,
                'associate' => 173,
            ),
            173 => 
            array (
                'id' => 175,
                'monster_name' => 'Blue Snapper',
                'type' => 0,
                'associate' => 176,
            ),
            174 => 
            array (
                'id' => 176,
                'monster_name' => 'Snappu the Shopkeep',
                'type' => 1,
                'associate' => 175,
            ),
            175 => 
            array (
                'id' => 177,
                'monster_name' => 'Brown Snapper',
                'type' => 0,
                'associate' => 178,
            ),
            176 => 
            array (
                'id' => 178,
                'monster_name' => 'Snapp the Dragon',
                'type' => 1,
                'associate' => 177,
            ),
            177 => 
            array (
                'id' => 179,
                'monster_name' => 'White Snapper',
                'type' => 0,
                'associate' => 180,
            ),
            178 => 
            array (
                'id' => 180,
                'monster_name' => 'Snapple the Wise',
                'type' => 1,
                'associate' => 179,
            ),
            179 => 
            array (
                'id' => 181,
                'monster_name' => 'Pippin Koalak',
                'type' => 0,
                'associate' => 182,
            ),
            180 => 
            array (
                'id' => 182,
                'monster_name' => 'Snapoalak the Redhead',
                'type' => 1,
                'associate' => 181,
            ),
            181 => 
            array (
                'id' => 183,
                'monster_name' => 'Snailmet',
                'type' => 0,
                'associate' => 184,
            ),
            182 => 
            array (
                'id' => 184,
                'monster_name' => 'Snailmetalika the Garagician',
                'type' => 1,
                'associate' => 183,
            ),
            183 => 
            array (
                'id' => 185,
                'monster_name' => 'Dark Smith',
                'type' => 0,
                'associate' => 186,
            ),
            184 => 
            array (
                'id' => 186,
                'monster_name' => 'Smitherz the Licker',
                'type' => 1,
                'associate' => 185,
            ),
            185 => 
            array (
                'id' => 187,
                'monster_name' => 'Grossewer Raeman',
                'type' => 0,
                'associate' => 188,
            ),
            186 => 
            array (
                'id' => 188,
                'monster_name' => 'Shamassel the Off',
                'type' => 1,
                'associate' => 187,
            ),
            187 => 
            array (
                'id' => 189,
                'monster_name' => 'Plissken',
                'type' => 0,
                'associate' => 190,
            ),
            188 => 
            array (
                'id' => 190,
                'monster_name' => 'Serpico the Honest',
                'type' => 1,
                'associate' => 189,
            ),
            189 => 
            array (
                'id' => 191,
                'monster_name' => 'Indigo Biblop',
                'type' => 0,
                'associate' => 192,
            ),
            190 => 
            array (
                'id' => 192,
                'monster_name' => 'Billbiblop the Great',
                'type' => 1,
                'associate' => 191,
            ),
            191 => 
            array (
                'id' => 193,
                'monster_name' => 'White Scaraleaf',
                'type' => 0,
                'associate' => 194,
            ),
            192 => 
            array (
                'id' => 194,
                'monster_name' => 'Scaratheef the Pincher',
                'type' => 1,
                'associate' => 193,
            ),
            193 => 
            array (
                'id' => 195,
                'monster_name' => 'Pippin Blop',
                'type' => 0,
                'associate' => 196,
            ),
            194 => 
            array (
                'id' => 196,
                'monster_name' => 'Blopal the Precious',
                'type' => 1,
                'associate' => 195,
            ),
            195 => 
            array (
                'id' => 197,
                'monster_name' => 'Indigo Blop',
                'type' => 0,
                'associate' => 198,
            ),
            196 => 
            array (
                'id' => 198,
                'monster_name' => 'Blopium the Delirious',
                'type' => 1,
                'associate' => 197,
            ),
            197 => 
            array (
                'id' => 199,
                'monster_name' => 'Coco Blop',
                'type' => 0,
                'associate' => 200,
            ),
            198 => 
            array (
                'id' => 200,
                'monster_name' => 'Blopulent the Pretentious',
                'type' => 1,
                'associate' => 199,
            ),
            199 => 
            array (
                'id' => 201,
                'monster_name' => 'Green Scaraleaf',
                'type' => 0,
                'associate' => 202,
            ),
            200 => 
            array (
                'id' => 202,
                'monster_name' => 'Scaramel the Melty',
                'type' => 1,
                'associate' => 201,
            ),
            201 => 
            array (
                'id' => 203,
                'monster_name' => 'Morello Cherry Blop',
                'type' => 0,
                'associate' => 204,
            ),
            202 => 
            array (
                'id' => 204,
                'monster_name' => 'Blorchid the Gorgeous',
                'type' => 1,
                'associate' => 203,
            ),
            203 => 
            array (
                'id' => 205,
                'monster_name' => 'Bwork Archer',
                'type' => 0,
                'associate' => 206,
            ),
            204 => 
            array (
                'id' => 206,
                'monster_name' => 'Blorko the Colourful',
                'type' => 1,
                'associate' => 205,
            ),
            205 => 
            array (
                'id' => 207,
                'monster_name' => 'Scaratos',
                'type' => 0,
                'associate' => 208,
            ),
            206 => 
            array (
                'id' => 208,
                'monster_name' => 'Scaraheath the Hanger',
                'type' => 1,
                'associate' => 207,
            ),
            207 => 
            array (
                'id' => 209,
                'monster_name' => 'Plain Boar',
                'type' => 0,
                'associate' => 210,
            ),
            208 => 
            array (
                'id' => 210,
                'monster_name' => 'Boarealis the Bright',
                'type' => 1,
                'associate' => 209,
            ),
            209 => 
            array (
                'id' => 211,
                'monster_name' => 'Boar',
                'type' => 0,
                'associate' => 212,
            ),
            210 => 
            array (
                'id' => 212,
                'monster_name' => 'Boarnigen the Damasker',
                'type' => 1,
                'associate' => 211,
            ),
            211 => 
            array (
                'id' => 213,
                'monster_name' => 'Blue Scaraleaf',
                'type' => 0,
                'associate' => 214,
            ),
            212 => 
            array (
                'id' => 214,
                'monster_name' => 'Scarahazad the Storyteller',
                'type' => 1,
                'associate' => 213,
            ),
            213 => 
            array (
                'id' => 215,
                'monster_name' => 'Red Scaraleaf',
                'type' => 0,
                'associate' => 216,
            ),
            214 => 
            array (
                'id' => 216,
                'monster_name' => 'Scarabreef the Short',
                'type' => 1,
                'associate' => 215,
            ),
            215 => 
            array (
                'id' => 217,
                'monster_name' => 'Soryo Firefoux Ghost',
                'type' => 0,
                'associate' => 218,
            ),
            216 => 
            array (
                'id' => 218,
                'monster_name' => 'Satonuki the Plastikpaddy',
                'type' => 1,
                'associate' => 217,
            ),
            217 => 
            array (
                'id' => 219,
                'monster_name' => 'Manderisha',
                'type' => 0,
                'associate' => 220,
            ),
            218 => 
            array (
                'id' => 220,
                'monster_name' => 'Salamaa the Henpeck',
                'type' => 1,
                'associate' => 219,
            ),
            219 => 
            array (
                'id' => 221,
                'monster_name' => 'Boomba',
                'type' => 0,
                'associate' => 222,
            ),
            220 => 
            array (
                'id' => 222,
                'monster_name' => 'Boombora the Dangerous',
                'type' => 1,
                'associate' => 221,
            ),
            221 => 
            array (
                'id' => 223,
                'monster_name' => 'Boowolf',
                'type' => 0,
                'associate' => 224,
            ),
            222 => 
            array (
                'id' => 224,
                'monster_name' => 'Booty the Beast',
                'type' => 1,
                'associate' => 223,
            ),
            223 => 
            array (
                'id' => 225,
                'monster_name' => 'Bulbamboo',
                'type' => 0,
                'associate' => 226,
            ),
            224 => 
            array (
                'id' => 226,
                'monster_name' => 'Bulbamoon the Trumpeter',
                'type' => 1,
                'associate' => 225,
            ),
            225 => 
            array (
                'id' => 227,
                'monster_name' => 'Reapalak',
                'type' => 0,
                'associate' => 228,
            ),
            226 => 
            array (
                'id' => 228,
                'monster_name' => 'Ryukualak the Bored',
                'type' => 1,
                'associate' => 227,
            ),
            227 => 
            array (
                'id' => 229,
                'monster_name' => 'Bulbig',
                'type' => 0,
                'associate' => 230,
            ),
            228 => 
            array (
                'id' => 230,
                'monster_name' => 'Bulbigroov the Dancer',
                'type' => 1,
                'associate' => 229,
            ),
            229 => 
            array (
                'id' => 231,
                'monster_name' => 'Mopy King',
                'type' => 0,
                'associate' => 232,
            ),
            230 => 
            array (
                'id' => 232,
                'monster_name' => 'Roy the Rover',
                'type' => 1,
                'associate' => 231,
            ),
            231 => 
            array (
                'id' => 233,
                'monster_name' => 'Bulbiflor',
                'type' => 0,
                'associate' => 234,
            ),
            232 => 
            array (
                'id' => 234,
                'monster_name' => 'Bulbisonic the Penetrating',
                'type' => 1,
                'associate' => 233,
            ),
            233 => 
            array (
                'id' => 235,
                'monster_name' => 'Bulbush',
                'type' => 0,
                'associate' => 236,
            ),
            234 => 
            array (
                'id' => 236,
                'monster_name' => 'Bulbushisu the Makisan',
                'type' => 1,
                'associate' => 235,
            ),
            235 => 
            array (
                'id' => 237,
                'monster_name' => 'Demonic Rose',
                'type' => 0,
                'associate' => 238,
            ),
            236 => 
            array (
                'id' => 238,
                'monster_name' => 'Roseanne the Yanker',
                'type' => 1,
                'associate' => 237,
            ),
            237 => 
            array (
                'id' => 239,
                'monster_name' => 'Bwork',
                'type' => 0,
                'associate' => 240,
            ),
            238 => 
            array (
                'id' => 240,
                'monster_name' => 'Bworak the Bohemian',
                'type' => 1,
                'associate' => 239,
            ),
            239 => 
            array (
                'id' => 241,
                'monster_name' => 'Bwork Magus',
                'type' => 0,
                'associate' => 242,
            ),
            240 => 
            array (
                'id' => 242,
                'monster_name' => 'Bworkoder the Mazter',
                'type' => 1,
                'associate' => 241,
            ),
            241 => 
            array (
                'id' => 243,
                'monster_name' => 'Mush Tup',
                'type' => 0,
                'associate' => 244,
            ),
            242 => 
            array (
                'id' => 244,
                'monster_name' => 'Romush the Montecchi',
                'type' => 1,
                'associate' => 243,
            ),
            243 => 
            array (
                'id' => 245,
                'monster_name' => 'Zoth Girl',
                'type' => 0,
                'associate' => 246,
            ),
            244 => 
            array (
                'id' => 246,
                'monster_name' => 'Calipzoth the Icy',
                'type' => 1,
                'associate' => 245,
            ),
            245 => 
            array (
                'id' => 247,
                'monster_name' => 'Invisible Chafer',
                'type' => 0,
                'associate' => 248,
            ),
            246 => 
            array (
                'id' => 248,
                'monster_name' => 'Chafaldrag the Charming',
                'type' => 1,
                'associate' => 247,
            ),
            247 => 
            array (
                'id' => 249,
                'monster_name' => 'Rib',
                'type' => 0,
                'associate' => 250,
            ),
            248 => 
            array (
                'id' => 250,
                'monster_name' => 'Rib the Torn',
                'type' => 1,
                'associate' => 249,
            ),
            249 => 
            array (
                'id' => 251,
                'monster_name' => 'Chafer',
                'type' => 0,
                'associate' => 252,
            ),
            250 => 
            array (
                'id' => 252,
                'monster_name' => 'Chaferanho the Essential',
                'type' => 1,
                'associate' => 251,
            ),
            251 => 
            array (
                'id' => 253,
                'monster_name' => 'Chafer Lancer',
                'type' => 0,
                'associate' => 254,
            ),
            252 => 
            array (
                'id' => 254,
                'monster_name' => 'Chafermented the Drinker',
                'type' => 1,
                'associate' => 253,
            ),
            253 => 
            array (
                'id' => 255,
                'monster_name' => 'Raul Mops',
                'type' => 0,
                'associate' => 256,
            ),
            254 => 
            array (
                'id' => 256,
                'monster_name' => 'Raul Modrid the Chulo',
                'type' => 1,
                'associate' => 255,
            ),
            255 => 
            array (
                'id' => 257,
                'monster_name' => 'Chafer Archer',
                'type' => 0,
                'associate' => 258,
            ),
            256 => 
            array (
                'id' => 258,
                'monster_name' => 'Chaferotix the Sixtininth',
                'type' => 1,
                'associate' => 257,
            ),
            257 => 
            array (
                'id' => 259,
                'monster_name' => 'Grossewer Rat',
                'type' => 0,
                'associate' => 260,
            ),
            258 => 
            array (
                'id' => 260,
                'monster_name' => 'Rattle the Hummer',
                'type' => 1,
                'associate' => 259,
            ),
            259 => 
            array (
                'id' => 261,
                'monster_name' => 'Elite Chafer',
                'type' => 0,
                'associate' => 262,
            ),
            260 => 
            array (
                'id' => 262,
                'monster_name' => 'Chaferuption the Volcanic',
                'type' => 1,
                'associate' => 261,
            ),
            261 => 
            array (
                'id' => 263,
                'monster_name' => 'Chafer Foot Soldier',
                'type' => 0,
                'associate' => 264,
            ),
            262 => 
            array (
                'id' => 264,
                'monster_name' => 'Chafred the Fish',
                'type' => 1,
                'associate' => 263,
            ),
            263 => 
            array (
                'id' => 265,
                'monster_name' => 'Hyoactive Rat',
                'type' => 0,
                'associate' => 266,
            ),
            264 => 
            array (
                'id' => 266,
                'monster_name' => 'Ratilla the Hun',
                'type' => 1,
                'associate' => 265,
            ),
            265 => 
            array (
                'id' => 267,
                'monster_name' => 'Cheeken',
                'type' => 0,
                'associate' => 268,
            ),
            266 => 
            array (
                'id' => 268,
                'monster_name' => 'Cheech the Pussycat',
                'type' => 1,
                'associate' => 267,
            ),
            267 => 
            array (
                'id' => 269,
                'monster_name' => 'Strubian Rat',
                'type' => 0,
                'associate' => 270,
            ),
            268 => 
            array (
                'id' => 270,
                'monster_name' => 'Ratatouille the Stirrer',
                'type' => 1,
                'associate' => 269,
            ),
            269 => 
            array (
                'id' => 271,
                'monster_name' => 'Koalak Warrior',
                'type' => 0,
                'associate' => 272,
            ),
            270 => 
            array (
                'id' => 272,
                'monster_name' => 'Chukoalak the Norris',
                'type' => 1,
                'associate' => 271,
            ),
            271 => 
            array (
                'id' => 273,
                'monster_name' => 'Codem',
                'type' => 0,
                'associate' => 274,
            ),
            272 => 
            array (
                'id' => 274,
                'monster_name' => 'Codemonic the Mean',
                'type' => 1,
                'associate' => 273,
            ),
            273 => 
            array (
                'id' => 275,
                'monster_name' => 'Quetsnakiatl',
                'type' => 0,
                'associate' => 276,
            ),
            274 => 
            array (
                'id' => 276,
                'monster_name' => 'Quetnin the Fictional',
                'type' => 1,
                'associate' => 275,
            ),
            275 => 
            array (
                'id' => 277,
                'monster_name' => 'Mojeeto Craboral',
                'type' => 0,
                'associate' => 278,
            ),
            276 => 
            array (
                'id' => 278,
                'monster_name' => 'Crabaramis the One',
                'type' => 1,
                'associate' => 277,
            ),
            277 => 
            array (
                'id' => 279,
                'monster_name' => 'Lousy Pig Knight',
                'type' => 0,
                'associate' => 280,
            ),
            278 => 
            array (
                'id' => 280,
                'monster_name' => 'Pygknightlion the Lousy',
                'type' => 1,
                'associate' => 279,
            ),
            279 => 
            array (
                'id' => 281,
                'monster_name' => 'Kurasso Craboral',
                'type' => 0,
                'associate' => 282,
            ),
            280 => 
            array (
                'id' => 282,
                'monster_name' => 'Crabartanian the Allforone',
                'type' => 1,
                'associate' => 281,
            ),
            281 => 
            array (
                'id' => 283,
                'monster_name' => 'Passaoh Craboral',
                'type' => 0,
                'associate' => 284,
            ),
            282 => 
            array (
                'id' => 284,
                'monster_name' => 'Crabathos the For',
                'type' => 1,
                'associate' => 283,
            ),
            283 => 
            array (
                'id' => 285,
                'monster_name' => 'Plain Pikoko',
                'type' => 0,
                'associate' => 286,
            ),
            284 => 
            array (
                'id' => 286,
                'monster_name' => 'Prikoko the Witless',
                'type' => 1,
                'associate' => 285,
            ),
            285 => 
            array (
                'id' => 287,
                'monster_name' => 'Mahlibuh Craboral',
                'type' => 0,
                'associate' => 288,
            ),
            286 => 
            array (
                'id' => 288,
                'monster_name' => 'Craborthos the All',
                'type' => 1,
                'associate' => 287,
            ),
            287 => 
            array (
                'id' => 289,
                'monster_name' => 'Prespic',
                'type' => 0,
                'associate' => 290,
            ),
            288 => 
            array (
                'id' => 290,
                'monster_name' => 'Prestreet the Fighter',
                'type' => 1,
                'associate' => 289,
            ),
            289 => 
            array (
                'id' => 291,
                'monster_name' => 'Polished Crackler',
                'type' => 0,
                'associate' => 292,
            ),
            290 => 
            array (
                'id' => 292,
                'monster_name' => 'Crackedral the Majestic',
                'type' => 1,
                'associate' => 291,
            ),
            291 => 
            array (
                'id' => 293,
                'monster_name' => 'Plain Crackler',
                'type' => 0,
                'associate' => 294,
            ),
            292 => 
            array (
                'id' => 294,
                'monster_name' => 'Cracklerod the Old',
                'type' => 1,
                'associate' => 293,
            ),
            293 => 
            array (
                'id' => 295,
                'monster_name' => 'Indigo Koalak',
                'type' => 0,
                'associate' => 296,
            ),
            294 => 
            array (
                'id' => 296,
                'monster_name' => 'Crackoalak the Blonde',
                'type' => 1,
                'associate' => 295,
            ),
            295 => 
            array (
                'id' => 297,
                'monster_name' => 'Koalak Forester',
                'type' => 0,
                'associate' => 298,
            ),
            296 => 
            array (
                'id' => 298,
                'monster_name' => 'Popoalak the Mousibrown',
                'type' => 1,
                'associate' => 297,
            ),
            297 => 
            array (
                'id' => 299,
                'monster_name' => 'Crackrock',
                'type' => 0,
                'associate' => 300,
            ),
            298 => 
            array (
                'id' => 300,
                'monster_name' => 'Crackrockisree the Tiger',
                'type' => 1,
                'associate' => 299,
            ),
            299 => 
            array (
                'id' => 301,
                'monster_name' => 'Polished Crackrock',
                'type' => 0,
                'associate' => 302,
            ),
            300 => 
            array (
                'id' => 302,
                'monster_name' => 'Crackrodilrock the Helltune',
                'type' => 1,
                'associate' => 301,
            ),
            301 => 
            array (
                'id' => 303,
                'monster_name' => 'Plated Ghost',
                'type' => 0,
                'associate' => 304,
            ),
            302 => 
            array (
                'id' => 304,
                'monster_name' => 'Polterghaisk the Stray Soul',
                'type' => 1,
                'associate' => 303,
            ),
            303 => 
            array (
                'id' => 305,
                'monster_name' => 'Poacher',
                'type' => 0,
                'associate' => 306,
            ),
            304 => 
            array (
                'id' => 306,
                'monster_name' => 'Pocher the Kingponger',
                'type' => 1,
                'associate' => 305,
            ),
            305 => 
            array (
                'id' => 307,
                'monster_name' => 'Pink Piwi',
                'type' => 0,
                'associate' => 308,
            ),
            306 => 
            array (
                'id' => 308,
                'monster_name' => 'Piwi the Ermine',
                'type' => 1,
                'associate' => 307,
            ),
            307 => 
            array (
                'id' => 309,
                'monster_name' => 'Purple Piwi',
                'type' => 0,
                'associate' => 310,
            ),
            308 => 
            array (
                'id' => 310,
                'monster_name' => 'Piwinston the Churlish',
                'type' => 1,
                'associate' => 309,
            ),
            309 => 
            array (
                'id' => 311,
                'monster_name' => 'Green Piwi',
                'type' => 0,
                'associate' => 312,
            ),
            310 => 
            array (
                'id' => 312,
                'monster_name' => 'Piwiliam the Brave',
                'type' => 1,
                'associate' => 311,
            ),
            311 => 
            array (
                'id' => 313,
                'monster_name' => 'Red Piwi',
                'type' => 0,
                'associate' => 314,
            ),
            312 => 
            array (
                'id' => 314,
                'monster_name' => 'Piwilde the Bossie',
                'type' => 1,
                'associate' => 313,
            ),
            313 => 
            array (
                'id' => 315,
                'monster_name' => 'Crocodyl',
                'type' => 0,
                'associate' => 316,
            ),
            314 => 
            array (
                'id' => 316,
                'monster_name' => 'Croccyx the Bummer',
                'type' => 1,
                'associate' => 315,
            ),
            315 => 
            array (
                'id' => 317,
                'monster_name' => 'Crocodyl Chief',
                'type' => 0,
                'associate' => 318,
            ),
            316 => 
            array (
                'id' => 318,
                'monster_name' => 'Crokdylann the Rebel',
                'type' => 1,
                'associate' => 317,
            ),
            317 => 
            array (
                'id' => 319,
                'monster_name' => 'Blue Piwi',
                'type' => 0,
                'associate' => 320,
            ),
            318 => 
            array (
                'id' => 320,
                'monster_name' => 'Piwiki the Witty',
                'type' => 1,
                'associate' => 319,
            ),
            319 => 
            array (
                'id' => 321,
                'monster_name' => 'Crobak',
                'type' => 0,
                'associate' => 322,
            ),
            320 => 
            array (
                'id' => 322,
                'monster_name' => 'Crowmanion the Primitive',
                'type' => 1,
                'associate' => 321,
            ),
            321 => 
            array (
                'id' => 323,
                'monster_name' => 'Evil Dandelion',
                'type' => 0,
                'associate' => 324,
            ),
            322 => 
            array (
                'id' => 324,
                'monster_name' => 'Dandel the Roy',
                'type' => 1,
                'associate' => 323,
            ),
            323 => 
            array (
                'id' => 325,
                'monster_name' => 'Yellow Piwi',
                'type' => 0,
                'associate' => 326,
            ),
            324 => 
            array (
                'id' => 326,
                'monster_name' => 'Piwicker the Manly',
                'type' => 1,
                'associate' => 325,
            ),
            325 => 
            array (
                'id' => 327,
                'monster_name' => 'Dok Alako',
                'type' => 0,
                'associate' => 328,
            ),
            326 => 
            array (
                'id' => 328,
                'monster_name' => 'Dokterwho the Tardisporter',
                'type' => 1,
                'associate' => 327,
            ),
            327 => 
            array (
                'id' => 329,
                'monster_name' => 'Piralak',
                'type' => 0,
                'associate' => 330,
            ),
            328 => 
            array (
                'id' => 330,
                'monster_name' => 'Piralhaka the Intimidator',
                'type' => 1,
                'associate' => 329,
            ),
            329 => 
            array (
                'id' => 331,
                'monster_name' => 'Zoth Master',
                'type' => 0,
                'associate' => 332,
            ),
            330 => 
            array (
                'id' => 332,
                'monster_name' => 'Don Quizothe the Stubborn',
                'type' => 1,
                'associate' => 331,
            ),
            331 => 
            array (
                'id' => 333,
                'monster_name' => 'Dark Pikoko',
                'type' => 0,
                'associate' => 334,
            ),
            332 => 
            array (
                'id' => 334,
                'monster_name' => 'Pikhoven the Deaf',
                'type' => 1,
                'associate' => 333,
            ),
            333 => 
            array (
                'id' => 335,
                'monster_name' => 'Limestone Dreggon',
                'type' => 0,
                'associate' => 336,
            ),
            334 => 
            array (
                'id' => 336,
                'monster_name' => 'Dragamemnon the Deadtroyer',
                'type' => 1,
                'associate' => 335,
            ),
            335 => 
            array (
                'id' => 337,
                'monster_name' => 'Dragostess',
                'type' => 0,
                'associate' => 338,
            ),
            336 => 
            array (
                'id' => 338,
                'monster_name' => 'Dragangora the Softy',
                'type' => 1,
                'associate' => 337,
            ),
            337 => 
            array (
                'id' => 339,
                'monster_name' => 'Lousy Pig Shepherd',
                'type' => 0,
                'associate' => 340,
            ),
            338 => 
            array (
                'id' => 340,
                'monster_name' => 'Pigstol the Sexy',
                'type' => 1,
                'associate' => 339,
            ),
            339 => 
            array (
                'id' => 341,
                'monster_name' => 'Pignolia',
                'type' => 0,
                'associate' => 342,
            ),
            340 => 
            array (
                'id' => 342,
                'monster_name' => 'Dragaustin the Power',
                'type' => 1,
                'associate' => 341,
            ),
            341 => 
            array (
                'id' => 343,
                'monster_name' => 'Piglet',
                'type' => 0,
                'associate' => 344,
            ),
            342 => 
            array (
                'id' => 344,
                'monster_name' => 'Pigoblet the Useful',
                'type' => 1,
                'associate' => 343,
            ),
            343 => 
            array (
                'id' => 345,
                'monster_name' => 'Charcoal Dragoss',
                'type' => 0,
                'associate' => 346,
            ),
            344 => 
            array (
                'id' => 346,
                'monster_name' => 'Draghouse the Cynical',
                'type' => 1,
                'associate' => 345,
            ),
            345 => 
            array (
                'id' => 347,
                'monster_name' => 'Fire Kwak',
                'type' => 0,
                'associate' => 348,
            ),
            346 => 
            array (
                'id' => 348,
                'monster_name' => 'Dragoolash the Stewed',
                'type' => 1,
                'associate' => 347,
            ),
            347 => 
            array (
                'id' => 349,
                'monster_name' => 'Farle\'s Pig',
                'type' => 0,
                'associate' => 350,
            ),
            348 => 
            array (
                'id' => 350,
                'monster_name' => 'Pighatchoo the Electrical',
                'type' => 1,
                'associate' => 349,
            ),
            349 => 
            array (
                'id' => 351,
                'monster_name' => 'Limestone Dragoss',
                'type' => 0,
                'associate' => 352,
            ),
            350 => 
            array (
                'id' => 352,
                'monster_name' => 'Dragorse the Wild',
                'type' => 1,
                'associate' => 351,
            ),
            351 => 
            array (
                'id' => 353,
                'monster_name' => 'Dragandrop',
                'type' => 0,
                'associate' => 354,
            ),
            352 => 
            array (
                'id' => 354,
                'monster_name' => 'Dragory the Violent',
                'type' => 1,
                'associate' => 353,
            ),
            353 => 
            array (
                'id' => 355,
                'monster_name' => 'Pandulum Ghost',
                'type' => 0,
                'associate' => 356,
            ),
            354 => 
            array (
                'id' => 356,
                'monster_name' => 'Pandumonium the Joker',
                'type' => 1,
                'associate' => 355,
            ),
            355 => 
            array (
                'id' => 357,
                'monster_name' => 'Dragnnoyed',
                'type' => 0,
                'associate' => 358,
            ),
            356 => 
            array (
                'id' => 358,
                'monster_name' => 'Dragoskovit the Barefoot',
                'type' => 1,
                'associate' => 357,
            ),
            357 => 
            array (
                'id' => 359,
                'monster_name' => 'Mumussel',
                'type' => 0,
                'associate' => 360,
            ),
            358 => 
            array (
                'id' => 360,
                'monster_name' => 'Dragospel the Black',
                'type' => 1,
                'associate' => 359,
            ),
            359 => 
            array (
                'id' => 361,
                'monster_name' => 'Pandora',
                'type' => 0,
                'associate' => 362,
            ),
            360 => 
            array (
                'id' => 362,
                'monster_name' => 'Pandora the Explorer',
                'type' => 1,
                'associate' => 361,
            ),
            361 => 
            array (
                'id' => 363,
                'monster_name' => 'Slate Dragoss',
                'type' => 0,
                'associate' => 364,
            ),
            362 => 
            array (
                'id' => 364,
                'monster_name' => 'Dragossiper the Nag',
                'type' => 1,
                'associate' => 363,
            ),
            363 => 
            array (
                'id' => 365,
                'monster_name' => 'Vetauran',
                'type' => 0,
                'associate' => 366,
            ),
            364 => 
            array (
                'id' => 366,
                'monster_name' => 'Dragostino the Tiny',
                'type' => 1,
                'associate' => 365,
            ),
            365 => 
            array (
                'id' => 367,
                'monster_name' => 'Pandora Ghost',
                'type' => 0,
                'associate' => 368,
            ),
            366 => 
            array (
                'id' => 368,
                'monster_name' => 'Pandoracle the Opposing Force',
                'type' => 1,
                'associate' => 367,
            ),
            367 => 
            array (
                'id' => 369,
                'monster_name' => 'Wild Almond Dragoturkey',
                'type' => 0,
                'associate' => 370,
            ),
            368 => 
            array (
                'id' => 370,
                'monster_name' => 'Dragotitis the Painful',
                'type' => 1,
                'associate' => 369,
            ),
            369 => 
            array (
                'id' => 371,
                'monster_name' => 'Pandikaze Ghost',
                'type' => 0,
                'associate' => 372,
            ),
            370 => 
            array (
                'id' => 372,
                'monster_name' => 'Pandipoopik the Wondrous',
                'type' => 1,
                'associate' => 371,
            ),
            371 => 
            array (
                'id' => 373,
                'monster_name' => 'Clay Dragoss',
                'type' => 0,
                'associate' => 374,
            ),
            372 => 
            array (
                'id' => 374,
                'monster_name' => 'Draigovsky the SocalledSwan',
                'type' => 1,
                'associate' => 373,
            ),
            373 => 
            array (
                'id' => 375,
                'monster_name' => 'Drakoalak',
                'type' => 0,
                'associate' => 376,
            ),
            374 => 
            array (
                'id' => 376,
                'monster_name' => 'Drakoamax the Mad',
                'type' => 1,
                'associate' => 375,
            ),
            375 => 
            array (
                'id' => 377,
                'monster_name' => 'Drunken Pandalette',
                'type' => 0,
                'associate' => 378,
            ),
            376 => 
            array (
                'id' => 378,
                'monster_name' => 'Pandarwin the Naturist',
                'type' => 1,
                'associate' => 377,
            ),
            377 => 
            array (
                'id' => 379,
                'monster_name' => 'Wild Ginger Dragoturkey',
                'type' => 0,
                'associate' => 380,
            ),
            378 => 
            array (
                'id' => 380,
                'monster_name' => 'Drakokidoki the Volunteer',
                'type' => 1,
                'associate' => 379,
            ),
            379 => 
            array (
                'id' => 381,
                'monster_name' => 'Pandit',
                'type' => 0,
                'associate' => 382,
            ),
            380 => 
            array (
                'id' => 382,
                'monster_name' => 'Pandartmoore the Dogged',
                'type' => 1,
                'associate' => 381,
            ),
            381 => 
            array (
                'id' => 383,
                'monster_name' => 'Earth Kwak',
                'type' => 0,
                'associate' => 384,
            ),
            382 => 
            array (
                'id' => 384,
                'monster_name' => 'Drakween the Cross Dresser',
                'type' => 1,
                'associate' => 383,
            ),
            383 => 
            array (
                'id' => 385,
                'monster_name' => 'Slate Dreggon',
                'type' => 0,
                'associate' => 386,
            ),
            384 => 
            array (
                'id' => 386,
                'monster_name' => 'Dreggaton the Latino',
                'type' => 1,
                'associate' => 385,
            ),
            385 => 
            array (
                'id' => 387,
                'monster_name' => 'Water Kwak',
                'type' => 0,
                'associate' => 388,
            ),
            386 => 
            array (
                'id' => 388,
                'monster_name' => 'Dreggershween the Tinpanalley',
                'type' => 1,
                'associate' => 387,
            ),
            387 => 
            array (
                'id' => 389,
                'monster_name' => 'Drunken Pandawa',
                'type' => 0,
                'associate' => 390,
            ),
            388 => 
            array (
                'id' => 390,
                'monster_name' => 'Pandan the Desperate',
                'type' => 1,
                'associate' => 389,
            ),
            389 => 
            array (
                'id' => 391,
                'monster_name' => 'Coal Dreggon',
                'type' => 0,
                'associate' => 392,
            ),
            390 => 
            array (
                'id' => 392,
                'monster_name' => 'Dreggommomm the Chewer',
                'type' => 1,
                'associate' => 391,
            ),
            391 => 
            array (
                'id' => 393,
                'monster_name' => 'Pandikaze',
                'type' => 0,
                'associate' => 394,
            ),
            392 => 
            array (
                'id' => 394,
                'monster_name' => 'Pandaltry the Unknown',
                'type' => 1,
                'associate' => 393,
            ),
            393 => 
            array (
                'id' => 395,
                'monster_name' => 'Wind Bwak',
                'type' => 0,
                'associate' => 396,
            ),
            394 => 
            array (
                'id' => 396,
                'monster_name' => 'Dreggonzola the Cheesy',
                'type' => 1,
                'associate' => 395,
            ),
            395 => 
            array (
                'id' => 397,
                'monster_name' => 'Pandulum',
                'type' => 0,
                'associate' => 398,
            ),
            396 => 
            array (
                'id' => 398,
                'monster_name' => 'Pandali the Surreal',
                'type' => 1,
                'associate' => 397,
            ),
            397 => 
            array (
                'id' => 399,
                'monster_name' => 'Foxfyter',
                'type' => 0,
                'associate' => 400,
            ),
            398 => 
            array (
                'id' => 400,
                'monster_name' => 'Dreggoog the Downunder',
                'type' => 1,
                'associate' => 399,
            ),
            399 => 
            array (
                'id' => 401,
                'monster_name' => 'Plains Larva',
                'type' => 0,
                'associate' => 402,
            ),
            400 => 
            array (
                'id' => 402,
                'monster_name' => 'Dreggooliz the Macho',
                'type' => 1,
                'associate' => 401,
            ),
            401 => 
            array (
                'id' => 403,
                'monster_name' => 'Mahlibuh Palmflower',
                'type' => 0,
                'associate' => 404,
            ),
            402 => 
            array (
                'id' => 404,
                'monster_name' => 'Palmpilot the Yuppie',
                'type' => 1,
                'associate' => 403,
            ),
            403 => 
            array (
                'id' => 405,
                'monster_name' => 'Beaztinga',
                'type' => 0,
                'associate' => 406,
            ),
            404 => 
            array (
                'id' => 406,
                'monster_name' => 'Dreggooniz the Adventurous',
                'type' => 1,
                'associate' => 405,
            ),
            405 => 
            array (
                'id' => 407,
                'monster_name' => 'Mojeeto Palmflower',
                'type' => 0,
                'associate' => 408,
            ),
            406 => 
            array (
                'id' => 408,
                'monster_name' => 'Palmoleaf the Greasy',
                'type' => 1,
                'associate' => 407,
            ),
            407 => 
            array (
                'id' => 409,
                'monster_name' => 'Green Mouse',
                'type' => 0,
                'associate' => 410,
            ),
            408 => 
            array (
                'id' => 410,
                'monster_name' => 'Dreggrieg the Pianist',
                'type' => 1,
                'associate' => 409,
            ),
            409 => 
            array (
                'id' => 411,
                'monster_name' => 'Kurasso Palmflower',
                'type' => 0,
                'associate' => 412,
            ),
            410 => 
            array (
                'id' => 412,
                'monster_name' => 'Palmella the Hefty',
                'type' => 1,
                'associate' => 411,
            ),
            411 => 
            array (
                'id' => 413,
                'monster_name' => 'Dragnarok',
                'type' => 0,
                'associate' => 414,
            ),
            412 => 
            array (
                'id' => 414,
                'monster_name' => 'Dregguantico the Trainer',
                'type' => 1,
                'associate' => 413,
            ),
            413 => 
            array (
                'id' => 415,
                'monster_name' => 'Clay Dreggon',
                'type' => 0,
                'associate' => 416,
            ),
            414 => 
            array (
                'id' => 416,
                'monster_name' => 'Dreggump the Shrimp',
                'type' => 1,
                'associate' => 415,
            ),
            415 => 
            array (
                'id' => 417,
                'monster_name' => 'Ouassingal',
                'type' => 0,
                'associate' => 418,
            ),
            416 => 
            array (
                'id' => 418,
                'monster_name' => 'Ougineemo the Lost',
                'type' => 1,
                'associate' => 417,
            ),
            417 => 
            array (
                'id' => 419,
                'monster_name' => 'Mushmunch',
                'type' => 0,
                'associate' => 420,
            ),
            418 => 
            array (
                'id' => 420,
                'monster_name' => 'Edvushmunch the Screamer',
                'type' => 1,
                'associate' => 419,
            ),
            419 => 
            array (
                'id' => 421,
                'monster_name' => 'Draugur Chafer',
                'type' => 0,
                'associate' => 422,
            ),
            420 => 
            array (
                'id' => 422,
                'monster_name' => 'Ougathard the Fortunate',
                'type' => 1,
                'associate' => 421,
            ),
            421 => 
            array (
                'id' => 423,
                'monster_name' => 'Tikokoko',
                'type' => 0,
                'associate' => 424,
            ),
            422 => 
            array (
                'id' => 424,
                'monster_name' => 'Eskoko the Baron',
                'type' => 1,
                'associate' => 423,
            ),
            423 => 
            array (
                'id' => 425,
                'monster_name' => 'Neye',
                'type' => 0,
                'associate' => 426,
            ),
            424 => 
            array (
                'id' => 426,
                'monster_name' => 'Eyemi the Narcissist',
                'type' => 1,
                'associate' => 425,
            ),
            425 => 
            array (
                'id' => 427,
                'monster_name' => 'Ouassingue',
                'type' => 0,
                'associate' => 428,
            ),
            426 => 
            array (
                'id' => 428,
                'monster_name' => 'Ouassup the Irritating',
                'type' => 1,
                'associate' => 427,
            ),
            427 => 
            array (
                'id' => 429,
                'monster_name' => 'Zoth Disciple',
                'type' => 0,
                'associate' => 430,
            ),
            428 => 
            array (
                'id' => 430,
                'monster_name' => 'Ezothbeitor the Neighbour',
                'type' => 1,
                'associate' => 429,
            ),
            429 => 
            array (
                'id' => 431,
                'monster_name' => 'Grey Mouse',
                'type' => 0,
                'associate' => 432,
            ),
            430 => 
            array (
                'id' => 432,
                'monster_name' => 'Famouse the Little-Known',
                'type' => 1,
                'associate' => 431,
            ),
            431 => 
            array (
                'id' => 433,
                'monster_name' => 'Boggedown Ouassingue',
                'type' => 0,
                'associate' => 434,
            ),
            432 => 
            array (
                'id' => 434,
                'monster_name' => 'Ouassingiam the Tyrant',
                'type' => 1,
                'associate' => 433,
            ),
            433 => 
            array (
                'id' => 435,
                'monster_name' => 'Fisheralak',
                'type' => 0,
                'associate' => 436,
            ),
            434 => 
            array (
                'id' => 436,
                'monster_name' => 'Fisheralf the Stewart',
                'type' => 1,
                'associate' => 435,
            ),
            435 => 
            array (
                'id' => 437,
                'monster_name' => 'Floramor',
                'type' => 0,
                'associate' => 438,
            ),
            436 => 
            array (
                'id' => 438,
                'monster_name' => 'Floramodovar the Stoned',
                'type' => 1,
                'associate' => 437,
            ),
            437 => 
            array (
                'id' => 439,
                'monster_name' => 'Osurc',
                'type' => 0,
                'associate' => 440,
            ),
            438 => 
            array (
                'id' => 440,
                'monster_name' => 'Osurcus the Tamer',
                'type' => 1,
                'associate' => 439,
            ),
            439 => 
            array (
                'id' => 441,
                'monster_name' => 'Rotaflor',
                'type' => 0,
                'associate' => 442,
            ),
            440 => 
            array (
                'id' => 442,
                'monster_name' => 'Floratior the Investigator',
                'type' => 1,
                'associate' => 441,
            ),
            441 => 
            array (
                'id' => 443,
                'monster_name' => 'Oni',
                'type' => 0,
                'associate' => 444,
            ),
            442 => 
            array (
                'id' => 444,
                'monster_name' => 'Oni\'orses the Foolish',
                'type' => 1,
                'associate' => 443,
            ),
            443 => 
            array (
                'id' => 445,
                'monster_name' => 'Air Pikoko',
                'type' => 0,
                'associate' => 446,
            ),
            444 => 
            array (
                'id' => 446,
                'monster_name' => 'Follikoko the Tufted',
                'type' => 1,
                'associate' => 445,
            ),
            445 => 
            array (
                'id' => 447,
                'monster_name' => 'Fungi Master',
                'type' => 0,
                'associate' => 448,
            ),
            446 => 
            array (
                'id' => 448,
                'monster_name' => 'Fung Ku the Master',
                'type' => 1,
                'associate' => 447,
            ),
            447 => 
            array (
                'id' => 449,
                'monster_name' => 'Nipul',
                'type' => 0,
                'associate' => 450,
            ),
            448 => 
            array (
                'id' => 450,
                'monster_name' => 'Niptuk the Plasticynic',
                'type' => 1,
                'associate' => 449,
            ),
            449 => 
            array (
                'id' => 451,
                'monster_name' => 'Cannondorf',
                'type' => 0,
                'associate' => 452,
            ),
            450 => 
            array (
                'id' => 452,
                'monster_name' => 'Ganon the Dwarf',
                'type' => 1,
                'associate' => 451,
            ),
            451 => 
            array (
                'id' => 453,
                'monster_name' => 'Gargoyle',
                'type' => 0,
                'associate' => 454,
            ),
            452 => 
            array (
                'id' => 454,
                'monster_name' => 'Gargoyla the Paranoiac',
                'type' => 1,
                'associate' => 453,
            ),
            453 => 
            array (
                'id' => 455,
                'monster_name' => 'Mushnid',
                'type' => 0,
                'associate' => 456,
            ),
            454 => 
            array (
                'id' => 456,
                'monster_name' => 'Nidsally the Mushtang',
                'type' => 1,
                'associate' => 455,
            ),
            455 => 
            array (
                'id' => 457,
                'monster_name' => 'Ghost Ominjry',
                'type' => 0,
                'associate' => 458,
            ),
            456 => 
            array (
                'id' => 458,
                'monster_name' => 'Ghostabrava the Tourist',
                'type' => 1,
                'associate' => 457,
            ),
            457 => 
            array (
                'id' => 459,
                'monster_name' => 'Nebgib',
                'type' => 0,
                'associate' => 460,
            ),
            458 => 
            array (
                'id' => 460,
                'monster_name' => 'Nebuchadnezzar the Conqueror',
                'type' => 1,
                'associate' => 459,
            ),
            459 => 
            array (
                'id' => 461,
                'monster_name' => 'Gink',
                'type' => 0,
                'associate' => 462,
            ),
            460 => 
            array (
                'id' => 462,
                'monster_name' => 'Ginsync the Hyperactive',
                'type' => 1,
                'associate' => 461,
            ),
            461 => 
            array (
                'id' => 463,
                'monster_name' => 'Glukoko',
                'type' => 0,
                'associate' => 464,
            ),
            462 => 
            array (
                'id' => 464,
                'monster_name' => 'Glukoko the Slow',
                'type' => 1,
                'associate' => 463,
            ),
            463 => 
            array (
                'id' => 465,
                'monster_name' => 'Passaoh Palmflower',
                'type' => 0,
                'associate' => 466,
            ),
            464 => 
            array (
                'id' => 466,
                'monster_name' => 'Naypalm the Herbivorous',
                'type' => 1,
                'associate' => 465,
            ),
            465 => 
            array (
                'id' => 467,
                'monster_name' => 'White Gobbly',
                'type' => 0,
                'associate' => 468,
            ),
            466 => 
            array (
                'id' => 468,
                'monster_name' => 'Gobbach the Contrapuntaler',
                'type' => 1,
                'associate' => 467,
            ),
            467 => 
            array (
                'id' => 469,
                'monster_name' => 'Mush Rhume',
                'type' => 0,
                'associate' => 470,
            ),
            468 => 
            array (
                'id' => 470,
                'monster_name' => 'Mushuliet the Catapulet',
                'type' => 1,
                'associate' => 469,
            ),
            469 => 
            array (
                'id' => 471,
                'monster_name' => 'Mush Mish',
                'type' => 0,
                'associate' => 472,
            ),
            470 => 
            array (
                'id' => 472,
                'monster_name' => 'Mushketeer the Loyal',
                'type' => 1,
                'associate' => 471,
            ),
            471 => 
            array (
                'id' => 473,
                'monster_name' => 'Mushd',
                'type' => 0,
                'associate' => 474,
            ),
            472 => 
            array (
                'id' => 474,
                'monster_name' => 'Mushdrill the Piercer',
                'type' => 1,
                'associate' => 473,
            ),
            473 => 
            array (
                'id' => 475,
                'monster_name' => 'Mufafah',
                'type' => 0,
                'associate' => 476,
            ),
            474 => 
            array (
                'id' => 476,
                'monster_name' => 'Mufavabeenz the Cannibal',
                'type' => 1,
                'associate' => 475,
            ),
            475 => 
            array (
                'id' => 477,
                'monster_name' => 'Moskito',
                'type' => 0,
                'associate' => 478,
            ),
            476 => 
            array (
                'id' => 478,
                'monster_name' => 'Moskoitus the Interruptor',
                'type' => 1,
                'associate' => 477,
            ),
            477 => 
            array (
                'id' => 479,
                'monster_name' => 'Miremop',
                'type' => 0,
                'associate' => 480,
            ),
            478 => 
            array (
                'id' => 480,
                'monster_name' => 'Mopidyk the Mire',
                'type' => 1,
                'associate' => 479,
            ),
            479 => 
            array (
                'id' => 481,
                'monster_name' => 'Mopeat',
                'type' => 0,
                'associate' => 482,
            ),
            480 => 
            array (
                'id' => 482,
                'monster_name' => 'Mopfeet the Circular',
                'type' => 1,
                'associate' => 481,
            ),
            481 => 
            array (
                'id' => 483,
                'monster_name' => 'Moopet',
                'type' => 0,
                'associate' => 484,
            ),
            482 => 
            array (
                'id' => 484,
                'monster_name' => 'Moops the Bubbleboy',
                'type' => 1,
                'associate' => 483,
            ),
            483 => 
            array (
                'id' => 485,
                'monster_name' => 'Gobball War Chief',
                'type' => 0,
                'associate' => 486,
            ),
            484 => 
            array (
                'id' => 486,
                'monster_name' => 'Gobbalky the Stubborn',
                'type' => 1,
                'associate' => 485,
            ),
            485 => 
            array (
                'id' => 487,
                'monster_name' => 'Gobball',
                'type' => 0,
                'associate' => 488,
            ),
            486 => 
            array (
                'id' => 488,
                'monster_name' => 'Gobballad the Romantic',
                'type' => 1,
                'associate' => 487,
            ),
            487 => 
            array (
                'id' => 489,
                'monster_name' => 'Black Gobbly',
                'type' => 0,
                'associate' => 490,
            ),
            488 => 
            array (
                'id' => 490,
                'monster_name' => 'Gobballyhoo the Noisy',
                'type' => 1,
                'associate' => 489,
            ),
            489 => 
            array (
                'id' => 491,
                'monster_name' => 'Goblin',
                'type' => 0,
                'associate' => 492,
            ),
            490 => 
            array (
                'id' => 492,
                'monster_name' => 'Goblimp the Bis Kit',
                'type' => 1,
                'associate' => 491,
            ),
            491 => 
            array (
                'id' => 493,
                'monster_name' => 'Maho Firefoux',
                'type' => 0,
                'associate' => 494,
            ),
            492 => 
            array (
                'id' => 494,
                'monster_name' => 'MoMaho the Modernist',
                'type' => 1,
                'associate' => 493,
            ),
            493 => 
            array (
                'id' => 496,
                'monster_name' => 'Kokoko',
                'type' => 0,
                'associate' => 497,
            ),
            494 => 
            array (
                'id' => 497,
                'monster_name' => 'Misskokoko the Channel',
                'type' => 1,
                'associate' => 496,
            ),
            495 => 
            array (
                'id' => 498,
                'monster_name' => 'Grass Snake',
                'type' => 0,
                'associate' => 499,
            ),
            496 => 
            array (
                'id' => 499,
                'monster_name' => 'Grasnakizanami the Ruler',
                'type' => 1,
                'associate' => 498,
            ),
            497 => 
            array (
                'id' => 500,
                'monster_name' => 'Maho Firefoux Ghost',
                'type' => 0,
                'associate' => 501,
            ),
            498 => 
            array (
                'id' => 501,
                'monster_name' => 'Miomaho the Siciliano',
                'type' => 1,
                'associate' => 500,
            ),
            499 => 
            array (
                'id' => 502,
                'monster_name' => 'Dark Miner',
                'type' => 0,
                'associate' => 503,
            ),
        ));
        \DB::table('monsters')->insert(array (
            0 => 
            array (
                'id' => 503,
                'monster_name' => 'Minoskittle the Coloured',
                'type' => 1,
                'associate' => 502,
            ),
            1 => 
            array (
                'id' => 504,
                'monster_name' => 'Greedovore',
                'type' => 0,
                'associate' => 505,
            ),
            2 => 
            array (
                'id' => 505,
                'monster_name' => 'Greetdoff the Gentleman',
                'type' => 1,
                'associate' => 504,
            ),
            3 => 
            array (
                'id' => 506,
                'monster_name' => 'Gwandpa Wabbit',
                'type' => 0,
                'associate' => 507,
            ),
            4 => 
            array (
                'id' => 507,
                'monster_name' => 'Gwabbit the Wunner',
                'type' => 1,
                'associate' => 506,
            ),
            5 => 
            array (
                'id' => 508,
                'monster_name' => 'Minokid',
                'type' => 0,
                'associate' => 509,
            ),
            6 => 
            array (
                'id' => 509,
                'monster_name' => 'Minoknok the Visitor',
                'type' => 1,
                'associate' => 508,
            ),
            7 => 
            array (
                'id' => 510,
                'monster_name' => 'Hazwonarm',
                'type' => 0,
                'associate' => 511,
            ),
            8 => 
            array (
                'id' => 511,
                'monster_name' => 'Hazwonball the Hickler',
                'type' => 1,
                'associate' => 510,
            ),
            9 => 
            array (
                'id' => 512,
                'monster_name' => 'Wild Sunflower',
                'type' => 0,
                'associate' => 513,
            ),
            10 => 
            array (
                'id' => 513,
                'monster_name' => 'Hunflower the Sinful',
                'type' => 1,
                'associate' => 512,
            ),
            11 => 
            array (
                'id' => 514,
                'monster_name' => 'Miliboowolf',
                'type' => 0,
                'associate' => 515,
            ),
            12 => 
            array (
                'id' => 515,
                'monster_name' => 'Milivanilli the Mime',
                'type' => 1,
                'associate' => 514,
            ),
            13 => 
            array (
                'id' => 516,
                'monster_name' => 'Pumpkwin',
                'type' => 0,
                'associate' => 517,
            ),
            14 => 
            array (
                'id' => 517,
                'monster_name' => 'Jackellington the Lantewn',
                'type' => 1,
                'associate' => 516,
            ),
            15 => 
            array (
                'id' => 518,
                'monster_name' => 'Strubian Milirat',
                'type' => 0,
                'associate' => 519,
            ),
            16 => 
            array (
                'id' => 519,
                'monster_name' => 'Miliopold the Bloomer',
                'type' => 1,
                'associate' => 518,
            ),
            17 => 
            array (
                'id' => 520,
                'monster_name' => 'Minoskito',
                'type' => 0,
                'associate' => 521,
            ),
            18 => 
            array (
                'id' => 521,
                'monster_name' => 'Milikkybum the Informer',
                'type' => 1,
                'associate' => 520,
            ),
            19 => 
            array (
                'id' => 522,
                'monster_name' => 'Wabbit',
                'type' => 0,
                'associate' => 523,
            ),
            20 => 
            array (
                'id' => 523,
                'monster_name' => 'McWhabbit the Diehard',
                'type' => 1,
                'associate' => 522,
            ),
            21 => 
            array (
                'id' => 524,
                'monster_name' => 'Mush Mush',
                'type' => 0,
                'associate' => 525,
            ),
            22 => 
            array (
                'id' => 525,
                'monster_name' => 'Matmushmush the Flasher',
                'type' => 1,
                'associate' => 524,
            ),
            23 => 
            array (
                'id' => 526,
                'monster_name' => 'Mama Koalak',
                'type' => 0,
                'associate' => 527,
            ),
            24 => 
            array (
                'id' => 527,
                'monster_name' => 'Mamankalak the Bibliomaniac',
                'type' => 1,
                'associate' => 526,
            ),
            25 => 
            array (
                'id' => 528,
                'monster_name' => 'Koalak Mummy',
                'type' => 0,
                'associate' => 529,
            ),
            26 => 
            array (
                'id' => 529,
                'monster_name' => 'Jackoalak the Moonwalker',
                'type' => 1,
                'associate' => 528,
            ),
            27 => 
            array (
                'id' => 530,
                'monster_name' => 'Coco Koalak',
                'type' => 0,
                'associate' => 531,
            ),
            28 => 
            array (
                'id' => 531,
                'monster_name' => 'Jackoalak the Ripper',
                'type' => 1,
                'associate' => 530,
            ),
            29 => 
            array (
                'id' => 532,
                'monster_name' => 'Mint Jelly',
                'type' => 0,
                'associate' => 533,
            ),
            30 => 
            array (
                'id' => 533,
                'monster_name' => 'Jelleno the Chinny',
                'type' => 1,
                'associate' => 532,
            ),
            31 => 
            array (
                'id' => 534,
                'monster_name' => 'Blue Jelly',
                'type' => 0,
                'associate' => 535,
            ),
            32 => 
            array (
                'id' => 535,
                'monster_name' => 'Jellvis the King',
                'type' => 1,
                'associate' => 534,
            ),
            33 => 
            array (
                'id' => 536,
                'monster_name' => 'Strawberry Jelly',
                'type' => 0,
                'associate' => 537,
            ),
            34 => 
            array (
                'id' => 537,
                'monster_name' => 'Jellyposukshion the Slim',
                'type' => 1,
                'associate' => 536,
            ),
            35 => 
            array (
                'id' => 538,
                'monster_name' => 'Crovus',
                'type' => 0,
                'associate' => 539,
            ),
            36 => 
            array (
                'id' => 539,
                'monster_name' => 'Lupisnockio the Woodwolf',
                'type' => 1,
                'associate' => 538,
            ),
            37 => 
            array (
                'id' => 540,
                'monster_name' => 'Crackler',
                'type' => 0,
                'associate' => 541,
            ),
            38 => 
            array (
                'id' => 541,
                'monster_name' => 'Jiminicrackler the Conscious',
                'type' => 1,
                'associate' => 540,
            ),
            39 => 
            array (
                'id' => 542,
                'monster_name' => 'Kaniger',
                'type' => 0,
                'associate' => 543,
            ),
            40 => 
            array (
                'id' => 543,
                'monster_name' => 'Kaniedoss the Giggling',
                'type' => 1,
                'associate' => 542,
            ),
            41 => 
            array (
                'id' => 544,
                'monster_name' => 'Kanniball Thierry',
                'type' => 0,
                'associate' => 545,
            ),
            42 => 
            array (
                'id' => 545,
                'monster_name' => 'Kannarrie the Reckless',
                'type' => 1,
                'associate' => 546,
            ),
            43 => 
            array (
                'id' => 546,
                'monster_name' => 'Kanniball Sarbak',
                'type' => 0,
                'associate' => 545,
            ),
            44 => 
            array (
                'id' => 547,
                'monster_name' => 'Kanniballbo',
                'type' => 0,
                'associate' => 548,
            ),
            45 => 
            array (
                'id' => 548,
                'monster_name' => 'Kannimantha the Maneater',
                'type' => 1,
                'associate' => 547,
            ),
            46 => 
            array (
                'id' => 549,
                'monster_name' => 'Kanniball Jav',
                'type' => 0,
                'associate' => 550,
            ),
            47 => 
            array (
                'id' => 550,
                'monster_name' => 'Kanniranda the Maniac',
                'type' => 1,
                'associate' => 549,
            ),
            48 => 
            array (
                'id' => 551,
                'monster_name' => 'Vampire Master',
                'type' => 0,
                'associate' => 552,
            ),
            49 => 
            array (
                'id' => 552,
                'monster_name' => 'Lord Lacedhat the Vampiric',
                'type' => 1,
                'associate' => 551,
            ),
            50 => 
            array (
                'id' => 553,
                'monster_name' => 'Let Emoliug',
                'type' => 0,
                'associate' => 554,
            ),
            51 => 
            array (
                'id' => 554,
                'monster_name' => 'Lert Macraken the Used Emo',
                'type' => 1,
                'associate' => 553,
            ),
            52 => 
            array (
                'id' => 555,
                'monster_name' => 'Karne Rider',
                'type' => 0,
                'associate' => 556,
            ),
            53 => 
            array (
                'id' => 556,
                'monster_name' => 'Karnyona the Rider',
                'type' => 1,
                'associate' => 555,
            ),
            54 => 
            array (
                'id' => 557,
                'monster_name' => 'Khamelerost',
                'type' => 0,
                'associate' => 558,
            ),
            55 => 
            array (
                'id' => 558,
                'monster_name' => 'Khameleltux the Tolerant',
                'type' => 1,
                'associate' => 557,
            ),
            56 => 
            array (
                'id' => 559,
                'monster_name' => 'Leopardo Ghost',
                'type' => 0,
                'associate' => 560,
            ),
            57 => 
            array (
                'id' => 560,
                'monster_name' => 'Leorio the Haunted',
                'type' => 1,
                'associate' => 559,
            ),
            58 => 
            array (
                'id' => 561,
                'monster_name' => 'Kido',
                'type' => 0,
                'associate' => 562,
            ),
            59 => 
            array (
                'id' => 562,
                'monster_name' => 'Kidodo the Extinct',
                'type' => 1,
                'associate' => 561,
            ),
            60 => 
            array (
                'id' => 563,
                'monster_name' => 'Leopardo',
                'type' => 0,
                'associate' => 564,
            ),
            61 => 
            array (
                'id' => 564,
                'monster_name' => 'Leopardon the Sorry',
                'type' => 1,
                'associate' => 563,
            ),
            62 => 
            array (
                'id' => 565,
                'monster_name' => 'Kilibriss',
                'type' => 0,
                'associate' => 566,
            ),
            63 => 
            array (
                'id' => 566,
                'monster_name' => 'Killua the Assassin',
                'type' => 1,
                'associate' => 565,
            ),
            64 => 
            array (
                'id' => 567,
                'monster_name' => 'Kirevam',
                'type' => 0,
                'associate' => 568,
            ),
            65 => 
            array (
                'id' => 568,
                'monster_name' => 'Kirevampiro the Wrestler',
                'type' => 1,
                'associate' => 567,
            ),
            66 => 
            array (
                'id' => 569,
                'monster_name' => 'Kitsou Nae',
                'type' => 0,
                'associate' => 570,
            ),
            67 => 
            array (
                'id' => 570,
                'monster_name' => 'Kitchy the Scratcher',
                'type' => 1,
                'associate' => 569,
            ),
            68 => 
            array (
                'id' => 571,
                'monster_name' => 'Yellow Larva',
                'type' => 0,
                'associate' => 572,
            ),
            69 => 
            array (
                'id' => 572,
                'monster_name' => 'Larvamatic the Pragmatic',
                'type' => 1,
                'associate' => 571,
            ),
            70 => 
            array (
                'id' => 573,
                'monster_name' => 'Kitsou Nakwa',
                'type' => 0,
                'associate' => 574,
            ),
            71 => 
            array (
                'id' => 574,
                'monster_name' => 'Kitsewey the Blue',
                'type' => 1,
                'associate' => 573,
            ),
            72 => 
            array (
                'id' => 575,
                'monster_name' => 'Kitsou Nere',
                'type' => 0,
                'associate' => 576,
            ),
            73 => 
            array (
                'id' => 576,
                'monster_name' => 'Kitsouie the Green',
                'type' => 1,
                'associate' => 575,
            ),
            74 => 
            array (
                'id' => 577,
                'monster_name' => 'Orange Larva',
                'type' => 0,
                'associate' => 578,
            ),
            75 => 
            array (
                'id' => 578,
                'monster_name' => 'Larvalencia the Orange',
                'type' => 1,
                'associate' => 577,
            ),
            76 => 
            array (
                'id' => 579,
                'monster_name' => 'Kitsou Nufeu',
                'type' => 0,
                'associate' => 580,
            ),
            77 => 
            array (
                'id' => 580,
                'monster_name' => 'Kitsuey the Red',
                'type' => 1,
                'associate' => 579,
            ),
            78 => 
            array (
                'id' => 581,
                'monster_name' => 'Koalak Master',
                'type' => 0,
                'associate' => 584,
            ),
            79 => 
            array (
                'id' => 582,
                'monster_name' => 'Blue Larva',
                'type' => 0,
                'associate' => 583,
            ),
            80 => 
            array (
                'id' => 583,
                'monster_name' => 'Larvalaska the Cold',
                'type' => 1,
                'associate' => 582,
            ),
            81 => 
            array (
                'id' => 584,
                'monster_name' => 'Koalakropolis the King of the Hill',
                'type' => 1,
                'associate' => 581,
            ),
            82 => 
            array (
                'id' => 585,
                'monster_name' => 'Green Larva',
                'type' => 0,
                'associate' => 586,
            ),
            83 => 
            array (
                'id' => 586,
                'monster_name' => 'Larvadelaide the Ozie',
                'type' => 1,
                'associate' => 585,
            ),
            84 => 
            array (
                'id' => 587,
                'monster_name' => 'Koalak Gravedigger',
                'type' => 0,
                'associate' => 588,
            ),
            85 => 
            array (
                'id' => 588,
                'monster_name' => 'Koalarchitect the Balancing Force',
                'type' => 1,
                'associate' => 587,
            ),
            86 => 
            array (
                'id' => 589,
                'monster_name' => 'Bloody Koalak',
                'type' => 0,
                'associate' => 590,
            ),
            87 => 
            array (
                'id' => 590,
                'monster_name' => 'Koaldman the Garish',
                'type' => 1,
                'associate' => 589,
            ),
            88 => 
            array (
                'id' => 591,
                'monster_name' => 'Immature Koalak',
                'type' => 0,
                'associate' => 592,
            ),
            89 => 
            array (
                'id' => 592,
                'monster_name' => 'Koaldmen the Grumpy',
                'type' => 1,
                'associate' => 591,
            ),
            90 => 
            array (
                'id' => 593,
                'monster_name' => 'Wild Koalak',
                'type' => 0,
                'associate' => 594,
            ),
            91 => 
            array (
                'id' => 594,
                'monster_name' => 'Koalsen the Similar',
                'type' => 1,
                'associate' => 593,
            ),
            92 => 
            array (
                'id' => 595,
                'monster_name' => 'Morello Cherry Koalak',
                'type' => 0,
                'associate' => 596,
            ),
            93 => 
            array (
                'id' => 596,
                'monster_name' => 'Koaly the Fiddler',
                'type' => 1,
                'associate' => 595,
            ),
            94 => 
            array (
                'id' => 597,
                'monster_name' => 'Koalak Rider',
                'type' => 0,
                'associate' => 598,
            ),
            95 => 
            array (
                'id' => 598,
                'monster_name' => 'Koelloggs the Creator',
                'type' => 1,
                'associate' => 597,
            ),
            96 => 
            array (
                'id' => 599,
                'monster_name' => 'Coralator',
                'type' => 0,
                'associate' => 600,
            ),
            97 => 
            array (
                'id' => 600,
                'monster_name' => 'Kojaklator the Lollipoper',
                'type' => 1,
                'associate' => 599,
            ),
            98 => 
            array (
                'id' => 601,
                'monster_name' => 'Kokonut',
                'type' => 0,
                'associate' => 602,
            ),
            99 => 
            array (
                'id' => 602,
                'monster_name' => 'Kokonan the Talker',
                'type' => 1,
                'associate' => 601,
            ),
            100 => 
            array (
                'id' => 603,
                'monster_name' => 'Kolerat',
                'type' => 0,
                'associate' => 604,
            ),
            101 => 
            array (
                'id' => 604,
                'monster_name' => 'Koleraspootin the Anesthesialogist',
                'type' => 1,
                'associate' => 603,
            ),
            102 => 
            array (
                'id' => 605,
                'monster_name' => 'Crab',
                'type' => 0,
                'associate' => 606,
            ),
            103 => 
            array (
                'id' => 606,
                'monster_name' => 'Krabaoly the Patient',
                'type' => 1,
                'associate' => 605,
            ),
            104 => 
            array (
                'id' => 607,
                'monster_name' => 'Kwoan',
                'type' => 0,
                'associate' => 608,
            ),
            105 => 
            array (
                'id' => 608,
                'monster_name' => 'Kwoanium the Smart',
                'type' => 1,
                'associate' => 607,
            ),
            106 => 
            array (
                'id' => 609,
                'monster_name' => 'Tanaked the Stalker',
                'type' => 1,
                'associate' => 155,
            ),
            107 => 
            array (
                'id' => 610,
                'monster_name' => 'Tanno the Dominator',
                'type' => 1,
                'associate' => 155,
            ),
            108 => 
            array (
                'id' => 611,
                'monster_name' => 'Tanukhiraru the Gifted',
                'type' => 1,
                'associate' => 155,
            ),
            109 => 
            array (
                'id' => 612,
                'monster_name' => 'Tanukhuina the Drawer',
                'type' => 1,
                'associate' => 155,
            ),
            110 => 
            array (
                'id' => 613,
                'monster_name' => 'TanuKiki the Deliveryghost',
                'type' => 1,
                'associate' => 155,
            ),
        ));
        
        
    }
}