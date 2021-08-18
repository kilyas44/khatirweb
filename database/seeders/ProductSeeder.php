<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            ['name'=>'casquette lacoste',
            'price'=>'20£',
            'category'=>'Lacoste',
            'description'=>'summer HAT',
            'gallery'=>'https://medias.go-sport.com/media/resized/1300x/catalog/product/ef/dd/22/36/casquette-lacoste-legere-unie_1_v1.jpeg',
        ],
        [
            'name'=>'casquette under armour',
            'price'=>'25£',
            'category'=>'Under Armour',
            'description'=>'summer HAT',
            'gallery'=>'https://medias.go-sport.com/media/resized/1300x/catalog/product/ff/ba/8f/53/casquette-under-armour-blitzing-30---1305036-001_1_v23.jpeg',
        ],
        [
            'name'=>'casquette adidas',
            'price'=>'20£',
            'category'=>'Adidas',
            'description'=>'sport HAT',
            'gallery'=>'https://medias.go-sport.com/media/resized/1300x/catalog/product/e4/e1/b0/85/casquette-adidas-trefoil-baseball---ec3603_m_1_v8.jpeg',
        ],
        [
            'name'=>'casquette champion',
            'price'=>'30£',
            'category'=>'Champion',
            'description'=>'CLASS HAT',
            'gallery'=>'https://imagescdn.simons.ca/images/8279/17101/1/A1_2.jpg?__=32',
        ],
        [
            'name'=>'casquette ralph lauren',
            'price'=>'40£',
            'category'=>'Ralph Lauren',
            'description'=>'class HAT',
            'gallery'=>'https://img01.ztat.net/article/spp-media-p1/f2c1e456b5c230579a95108633c473a6/15c8bc57875c406aabde0a66fc4773ff.jpg?imwidth=762&filter=packshot',
        ]
        ]);
    }
}
