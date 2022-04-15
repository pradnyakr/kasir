<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // Products::create([
        //     'name' => 'Watch',
        //     'price' => 250,
        //     'description' => 'Good watch',
        //     'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=989&q=80'
        // ]);

        $data = [
            ['name' => 'Watch',
            'price' => 250,
            'description' => 'Good watch',
            'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=989&q=80'],
        ['name' => 'Bag',
        'price' => 350,
        'description' => 'Good Bag',
        'image' => 'https://images.unsplash.com/photo-1491637639811-60e2756cc1c7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=669&q=80'],
];

        foreach ($data as $d){
            DB::table('products')->insert([
                'name' => $d['name'],
                'price' => $d['price'],
                'description' => $d['description'],
                'image' => $d['image'],
            ]);
        }
        // Products::create([
        // Products::create([
        //     'name' => 'perfume',
        //     'price' => 100,
        //     'description' => 'Good perfume',
        //     'image' => 'https://images.unsplash.com/photo-1528740561666-dc2479dc08ab?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1868&q=80'
        // ]);
    }
}
