<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //Added Start
        $products = [
            [
                'name' => 'Mochi',
                'image' => 'https://i.pinimg.com/236x/8b/ab/5d/8bab5d0a444a62a4a2af4cfc28320dc4.jpg',
                'price' => 110,
                'description' => 'Mochi Banyak Rasa'
            ],    [
                'name' => 'Mochi',
                'image' => 'https://i.pinimg.com/236x/46/6a/f3/466af352bdffc3e6c8ef4cb798ee37b1.jpg',
                'price' => 110,
                'description' => 'Mochi Banyak Rasa'
            ],
            [
                'name' => 'Suah',
                'image' => 'https://i.pinimg.com/236x/a6/cf/fd/a6cffd319753f89eebf062f18b7e5687.jpg',
                'price' => 100,
                'description' => 'Salad Buah Segar!'
            ],   [
                'name' => 'Salad Buah',
                'image' => 'https://i.pinimg.com/236x/ce/f9/8d/cef98d5e3de5fe303d3790f58aa727e6.jpg',
                'price' => 300,
                'description' => 'Salad Buah Segar!'
            ],
            [
                'name' => 'Mochi',
                'image' => 'https://i.pinimg.com/736x/78/25/41/7825412ce32c50e231a151142c6c31b9.jpg',
                'price' => 110,
                'description' => 'Mochi Banyak Rasa'
            ],    [
                'name' => 'Mochi',
                'image' => 'https://i.pinimg.com/236x/fd/37/13/fd371342f08c5503fa65c7cb3ae3fd0f.jpg',
                'price' => 110,
                'description' => 'Mochi Banyak Rasa'
            ],
            [
                'name' => 'Suah',
                'image' => 'https://i.pinimg.com/236x/5b/5e/9e/5b5e9e3c0037347655cdf678cdaf15b5.jpg',
                'price' => 100,
                'description' => 'Salad Buah Segar!'
            ],   [
                'name' => 'Salad Buah',
                'image' => 'https://i.pinimg.com/564x/02/73/7c/02737ced46ba22ab6e21f86aefdbcc28.jpg',
                'price' => 300,
                'description' => 'Salad Buah Segar!'
            ],
            [
                'name' => 'Bubur Ayam',
                'image' => 'https://i.pinimg.com/236x/79/60/ea/7960eab7dd00f7952530c7a4dabbbc85.jpg',
                'price' => 120,
                'description' => 'Bubur ayam Komplit!'
            ],
            [
                'name' => 'Burger salad',
                'image' => 'https://i.pinimg.com/236x/40/ba/c2/40bac283193e7a00c8bfe32859a7ed10.jpg',
                'price' => 220,
                'description' => 'Burger Isi Sayur!'
            ],
            [
                'name' => 'Salad Buah',
                'image' => 'https://i.pinimg.com/236x/76/a7/00/76a7008294c6bb365b63cb2eebc5ebc7.jpg',
                'price' => 300,
                'description' => 'Salad Buah Segar!'
            ],
            [
                'name' => 'Mochi',
                'image' => 'https://i.pinimg.com/236x/a0/a7/eb/a0a7eb2086a4bf32cd59c21acd4ae986.jpg',
                'price' => 110,
                'description' => 'Mochi Banyak Rasa'
            ],
            [
                'name' => 'Bubur Ayam',
                'image' => 'https://i.pinimg.com/236x/60/ec/21/60ec214bd57b9952165f011045fb8909.jpg',
                'price' => 120,
                'description' => 'Bubur ayam Komplit!'
            ],
            [
                'name' => 'Burger salad',
                'image' => 'https://i.pinimg.com/236x/3a/12/3c/3a123c1c3085eb291dfdcf221e3653fc.jpg',
                'price' => 220,
                'description' => 'Burger Isi Sayur!'
            ],
            [
                'name' => 'Salad Buah',
                'image' => 'https://i.pinimg.com/236x/f9/df/5e/f9df5ef9145aeeff9c854170dcbfede3.jpg',
                'price' => 300,
                'description' => 'Salad Buah Segar!'
            ],
            [
                'name' => 'Mochi',
                'image' => 'https://i.pinimg.com/236x/e6/a2/a3/e6a2a36cb3e39fb8367570b35bca3ee5.jpg',
                'price' => 110,
                'description' => 'Mochi Banyak Rasa'
            ],
            
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
        //Added End
    }
}