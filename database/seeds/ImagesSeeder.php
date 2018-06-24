<?php

use App\Image;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            [
                'path'     => 'https://d24h4out7wreu3.cloudfront.net/product_images/p/839074.a7.93335S7YyNAAA-480x720-b-p-h.jpg',
            ],
            [
                'path'     => 'https://d24h4out7wreu3.cloudfront.net/product_images/p/11507.a7.dbcb6S7YyNAAA-480x720-b-p-h.jpg',
            ],
            [
                'path'     => 'https://d24h4out7wreu3.cloudfront.net/product_images/p/11507.a7.dbcb6S7YyNAAA-480x720-b-p-h.jpg',
            ],
            [
                'path'     => 'https://d26lpennugtm8s.cloudfront.net/stores/064/520/products/img_0508-a664ce7f92a6421c31197cbdac3dc480-480-0.jpg',
            ],
            [
                'path'     => 'http://1.bp.blogspot.com/_YXnTTso_744/S8L1v8E9RKI/AAAAAAAAAvk/PUS1nqnQ2nM/s1600/24368_393088254342_295221139342_4794728_2879764_n.jpg',
            ],
            [
                'path'     => 'https://d24h4out7wreu3.cloudfront.net/product_images/p/567374.d59.83565S7ayAAA-480x720-b-p-h.jpg',
            ],
            [
                'path'     => 'https://d24h4out7wreu3.cloudfront.net/product_images/p/567374.d59.83565S7ayAAA-480x720-b-p-h.jpg',
            ],
            [
                'path'     => 'https://http2.mlstatic.com/remera-ogum-pintada-a-mano-orixas-umbanda-kimband-D_NQ_NP_14247-MLA20084303990_042014-F.jpg',
            ],
            [
                'path'     => 'http://d26lpennugtm8s.cloudfront.net/stores/319/227/products/dsc_0008-copia1-e8cb843ebfb5fc94c415132944286653-480-0.jpg',
            ]
        ];
        foreach ($images as $image){
            Image::create($image);
        }
        $faker = Faker::create();
        foreach (range(1, 50) as $index) {
            Image::create(
                [
                    'path' => $faker->imageUrl($width = 480, $height = 720)
                ]
            );
        }
    }
}
