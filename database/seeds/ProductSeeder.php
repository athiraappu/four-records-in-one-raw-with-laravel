<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Samsung Galaxy',
                'description' => 'Samsung Brand',
                'price' => 100
            ],
            [
                'name' => 'Apple iPhone 12',
                'description' => 'Apple Brand',
                'price' => 500
            ],
            [
                'name' => 'Google Pixel 2 XL',
                'description' => 'Google Pixel Brand',
                'price' => 400
            ],
            [
                'name' => 'LG V10 H800',
                'description' => 'LG Brand',
                'price' => 200
            ],
            [
                'name' => 'Vivo',
                'description' => 'VIVo Brand',
                'price' => 700
            ],
            [
                'name' => 'RealMe',
                'description' => 'RealMe Brand',
                'price' => 500
            ],
            [
                'name' => 'RedMe',
                'description' => 'RedMe Brand',
                'price' => 800
            ],
            [
                'name' => 'Nokia',
                'description' => 'Nokia Brand',
                'price' => 600
            ],
            [
                'name' => 'Washing Machine',
                'description' => 'Samsung Brand',
                'price' => 6000
            ],
             [
                'name' => 'TV',
                'description' => 'Samsung Brand',
                'price' => 7000
            ],
             [
                'name' => 'TV',
                'description' => 'Samsung',
                'price' => 6000
            ],
             [
                'name' => 'TV',
                'description' => 'LG',
                'price' => 6000
            ],
             [
                'name' => 'Washing Machine',
                'description' => 'IFB',
                'price' => 6000
            ],
             [
                'name' => 'Washing Machine',
                'description' => 'ONIDA',
                'price' => 6000
            ],
             [
                'name' => 'Washing Machine',
                'description' => 'Godrej',
                'price' => 6000
            ],
             [
                'name' => 'Washing Machine',
                'description' => 'MarQ',
                'price' => 6000
            ],
             [
                'name' => 'Washing Machine',
                'description' => 'Haier',
                'price' => 6000
            ],
             [
                'name' => 'Washing Machine',
                'description' => 'LG',
                'price' => 6000
            ],
             [
                'name' => 'Washing Machine',
                'description' => 'Whirlpool',
                'price' => 6000
            ],
             [
                'name' => 'Washing Machine',
                'description' => 'Thomson',
                'price' => 6000
            ],
             [
                'name' => 'TV',
                'description' => 'Thomson',
                'price' => 6600
            ],
             [
                'name' => 'TV',
                'description' => 'LG',
                'price' => 6500
            ],
             [
                'name' => 'TV',
                'description' => 'Motorola',
                'price' => 6400
            ],
             [
                'name' => 'TV',
                'description' => 'realme',
                'price' => 6300
            ],
             [
                'name' => 'TV',
                'description' => 'Mi',
                'price' => 6200
            ],


        ];
  
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
