<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Category::create(['name'=>'Laptop','slug'=>'laptop','description'=>'laptop category','image'=>'files/photo1.jpg']);
        Category::create(['name'=>'Mobile phone','slug'=>'mobile-phone','description'=>'mobile phone category','image'=>'files/photo2.jpg']);
        Category::create(['name'=>'Watch','slug'=>'watch','description'=>'watch category','image'=>'files/photo3.jpg']);

        Subcategory::create(['name'=>'Dell','category_id'=>1]);
        Subcategory::create(['name'=>'Apple','category_id'=>1]);
        Subcategory::create(['name'=>'Samsung','category_id'=>2]);
        Subcategory::create(['name'=>'Apple','category_id'=>2]);
        Subcategory::create(['name'=>'Sunnto','category_id'=>3]);
        Subcategory::create(['name'=>'Xiaomi','category_id'=>3]);

        Product::create([
        	'name'=>'Inspiron',
        	'image'=>'product/NIKMbexmKlluztKYH6MdGBjICpzfeEdg2gpJ1DL5.jpg',
        	'price'=> rand(1000,2000),
        	'description'=>'This is the description of a product',
        	'additional_info'=>'This is additional info',
        	'category_id'=> 1,
            'subcategory_id'=>1

        ]);

        Product::create([
        	'name'=>'Mac Book Pro',
        	'image'=>'product/udbWMA80xr37Mjk00xFfMijQNBeXGlrz3NEjepaj.jpg',
        	'price'=> rand(2000,4000),
        	'description'=>'This is the description of a product',
        	'additional_info'=>'This is additional info',
        	'category_id'=> 1,
            'subcategory_id'=>2
        ]);

        Product::create([
        	'name'=>'S10',
        	'image'=>'product/qQXXVroDiviSetTwUXlwb72QuSTGPPz7bvTeXWMH.jpg',
        	'price'=> rand(500,900),
        	'description'=>'This is the description of a product',
        	'additional_info'=>'This is additional info',
        	'category_id'=> 2,
            'subcategory_id'=>3
        ]);

        Product::create([
        	'name'=>'11',
        	'image'=>'product/LPpfTx7MITgHj1yab8goK64GColGCtvVL5FaDkMR.jpg',
        	'price'=> rand(500,1000),
        	'description'=>'This is the description of a product',
        	'additional_info'=>'This is additional info',
        	'category_id'=> 2,
            'subcategory_id'=>4
        ]);

        Product::create([
        	'name'=>'7',
        	'image'=>'product/8Q2ytqYgeJ2OIeRpE1WgTrjlvsAMBbXFoOCJuU3G.jpg',
        	'price'=> rand(300,500),
        	'description'=>'This is the description of a product',
        	'additional_info'=>'This is additional info',
        	'category_id'=> 3,
            'subcategory_id'=>5
        ]);

        Product::create([
        	'name'=>'Mi Watch Lite',
        	'image'=>'product/LloBnY155bFzwryms6Pzg91iAZjHIOun3UIgRvVV.jpg',
        	'price'=> rand(50,150),
        	'description'=>'This is the description of a product',
        	'additional_info'=>'This is additional info',
        	'category_id'=> 3,
            'subcategory_id'=>6
        ]);

        User::create([
        	'name'=>'AdamAdmin',
        	'email'=>'adam@adam.com',
        	'password'=>bcrypt('Adam1234'),
        	'email_verified_at'=>NOW(),
        	'address'=>'Poland',
        	'phone_number'=>'888453261',
        	'is_admin'=>1
        ]);
    }
}

