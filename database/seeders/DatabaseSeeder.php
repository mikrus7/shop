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
		Subcategory::create(['name'=>'HP','category_id'=>1]);
        Subcategory::create(['name'=>'Samsung','category_id'=>2]);
        Subcategory::create(['name'=>'Apple','category_id'=>2]);
		Subcategory::create(['name'=>'Xiaomi','category_id'=>2]);
        Subcategory::create(['name'=>'Sunnto','category_id'=>3]);
        Subcategory::create(['name'=>'Xiaomi','category_id'=>3]);
		Subcategory::create(['name'=>'Honor','category_id'=>3]);

		Product::create([
        	'name'=>'XPS 13',
        	'image'=>'product/XPS.png',
        	'price'=> rand(2500,3000),
        	'description'=>'2in1 7390-4118 13,4"',
        	'additional_info'=>'Intel® Core™ i7-1065G7 - 16GB RAM - 512GB Dysk - Win10',
        	'category_id'=> 1,
            'subcategory_id'=>1
        ]);

		Product::create([
        	'name'=>'Inspiron',
        	'image'=>'product/Inspiron.png',
        	'price'=> rand(1500,2000),
        	'description'=>'7306-5981 13,3"',
        	'additional_info'=>'Intel® Core™ i7-1165G7 - 16GB RAM - 512GB Dysk - Win10 + Active Pen',
        	'category_id'=> 1,
            'subcategory_id'=>1
        ]);

        Product::create([
        	'name'=>'Macbook Pro 13',
        	'image'=>'product/Pro 13.png',
        	'price'=> rand(3000,4000),
        	'description'=>'2020 z Touch Bar 13,3"',
        	'additional_info'=>'Intel® Core™ i7 - 32GB RAM - 1TB SSD Dysk - macOS',
        	'category_id'=> 1,
            'subcategory_id'=>2

        ]);

		Product::create([
        	'name'=>'Macbook Pro 16',
        	'image'=>'product/Pro 16.png',
        	'price'=> rand(3000,4000),
        	'description'=>'2019 z Touch Bar 16"',
        	'additional_info'=>'Intel® Core™ i9 - 16GB RAM - 1TB SSD Dysk - R5500M Grafika - macOS',
        	'category_id'=> 1,
            'subcategory_id'=>2

        ]);

		Product::create([
        	'name'=>'Omen',
        	'image'=>'product/Omen.png',
        	'price'=> rand(2800,3200),
        	'description'=>'15-dh1001nw 15,6"',
        	'additional_info'=>'300Hz Intel® Core™ i7-10750H - 32GB RAM - 512GB Dysk - RTX2080S M-Q Grafika - Win10',
        	'category_id'=> 1,
            'subcategory_id'=>3

        ]);

		Product::create([
        	'name'=>'Spectre',
        	'image'=>'product/Spectre.png',
        	'price'=> rand(2300,3000),
        	'description'=>'x360 14-ea0056nw OLED 13,5"',
        	'additional_info'=>'Intel® Core™ i7-1165G7 - 16GB RAM - 2TB SSD Dysk - Win10',
        	'category_id'=> 1,
            'subcategory_id'=>3

        ]);

        Product::create([
        	'name'=>'Galaxy S21 Ultra 5G',
        	'image'=>'product/S21.png',
        	'price'=> rand(1400,1600),
        	'description'=>'Pamięć: 12 GB / 256 GB, Procesor: 8-rdzeniowy Samsung Exynos 2100, System operacyjny: Android 11',
        	'additional_info'=>'Aparaty tylny/przedni: 108 Mpix + 12 Mpix + 10 Mpix + 10 Mpix / 40 Mpix, Wyświetlacz: 6,8 ", 3200 x 1440 pikseli, Dynamic AMOLED 2X WQHD+, Pojemność baterii: 5000 mAh',
        	'category_id'=> 2,
            'subcategory_id'=>4
        ]);

		Product::create([
        	'name'=>'Galaxy Note20 Ultra 5G',
        	'image'=>'product/Note 20.png',
        	'price'=> rand(1200,1400),
        	'description'=>'Pamięć: 12 GB / 256 GB, Procesor: 8-rdzeniowy Samsung Exynos 990, System operacyjny: Android 10',
        	'additional_info'=>'Aparaty tylny/przedni: 108 Mpix + 12 Mpix + 12 Mpix / 10 Mpix, Wyświetlacz: 6,9 ", 3200 x 1440 pikseli, Dynamic AMOLED 2X WQHD+, Pojemność baterii: 4500 mAh',
        	'category_id'=> 2,
            'subcategory_id'=>4
        ]);

        Product::create([
        	'name'=>'11 Pro Max',
        	'image'=>'product/11 Pro Max.png',
        	'price'=> rand(1800,2000),
        	'description'=>'Pamięć: 4 GB / 512 GB, Procesor: Apple A13 Bionic, System operacyjny: iOS 13',
        	'additional_info'=>'Aparaty tylny/przedni: 12 Mpix + 12 Mpix + 12 Mpix / 12 Mpix, Wyświetlacz: 6,5 ", 2436 x 1125 pikseli, Super Retina XDR, Pojemność baterii: 3969 mAh',
        	'category_id'=> 2,
            'subcategory_id'=>5
        ]);

		Product::create([
        	'name'=>'12‌ Pro',
        	'image'=>'product/12 Pro.png',
        	'price'=> rand(1200,1400),
        	'description'=>'Pamięć: 4 GB / 128 GB, Procesor: Apple A14 Bionic, System operacyjny: iOS 14',
        	'additional_info'=>'Aparaty tylny/przedni: 12 Mpix + 12 Mpix + 12 Mpix / 12 Mpix, Wyświetlacz: 6,1 ", 2532 x 1170 pikseli, Super Retina XDR, Pojemność baterii: 3,687 mAh',
        	'category_id'=> 2,
            'subcategory_id'=>5
        ]);

		Product::create([
        	'name'=>'Mi 11',
        	'image'=>'product/Mi 11.png',
        	'price'=> rand(800,1000),
        	'description'=>'Pamięć: 8 GB / 256 GB, Procesor: 8-rdzeniowy Qualcomm Snapdragon 888, System operacyjny: Android 11',
        	'additional_info'=>'Aparaty tylny/przedni: 108 Mpix + 13 Mpix + 5 Mpix / 20 Mpix, Wyświetlacz: 6,81 ", 3200 x 1440 pikseli, AMOLED, Pojemność baterii: 4600 mAh',
        	'category_id'=> 2,
            'subcategory_id'=>6
        ]);

		Product::create([
        	'name'=>'Mi 10T Pro',
        	'image'=>'product/Mi 10T Pro.png',
        	'price'=> rand(500,700),
        	'description'=>'Pamięć: 8 GB / 256 GB, Procesor: 8-rdzeniowy Qualcomm Snapdragon 865, System operacyjny: Android 10',
        	'additional_info'=>'Aparaty tylny/przedni: 108 Mpix + 13 Mpix + 5 Mpix / 20 Mpix, Wyświetlacz: 6,67 ", 2340 x 1080 pikseli, IPS, Pojemność baterii: 5000 mAh',
        	'category_id'=> 2,
            'subcategory_id'=>6
        ]);

		Product::create([
        	'name'=>'7',
        	'image'=>'product/7.png',
        	'price'=> rand(300,450),
        	'description'=>'Współpracujący system operacyjny: Apple iOS, Google Android, Łączność bezprzewodowa: Bluetooth, Wi-Fi, NFC, Wielkość wyświetlacza: 1,38"',
        	'additional_info'=>'Wykonanie koperty: stal nierdzewna, Waga: 70g',
        	'category_id'=> 3,
            'subcategory_id'=>7
        ]);

		Product::create([
        	'name'=>'9 G1 BARO Titanium',
        	'image'=>'product/9.png',
        	'price'=> rand(600,800),
        	'description'=>'Współpracujący system operacyjny: Apple iOS, Google Android, Łączność bezprzewodowa: Bluetooth, Wi-Fi, Wielkość wyświetlacza: 1,97"',
        	'additional_info'=>'Wykonanie koperty: tytan, Waga: 66g',
        	'category_id'=> 3,
            'subcategory_id'=>7
        ]);

		Product::create([
        	'name'=>'Mi Watch ',
        	'image'=>'product/Mi Watch.png',
        	'price'=> rand(100,200),
        	'description'=>'Współpracujący system operacyjny: Google Android, Łączność bezprzewodowa: Bluetooth 5.0, Wielkość wyświetlacza: 1,39"',
        	'additional_info'=>'Wykonanie koperty: tworzywo sztuczne, Waga: 32g',
        	'category_id'=> 3,
            'subcategory_id'=>8
        ]);

		Product::create([
        	'name'=>'Mi Watch Lite',
        	'image'=>'product/Mi Watch Lite.png',
        	'price'=> rand(50,70),
        	'description'=>'Współpracujący system operacyjny: Google Android, Łączność bezprzewodowa: Bluetooth 5.1, Wielkość wyświetlacza: 1,4"',
        	'additional_info'=>'Wykonanie koperty: tworzywo sztuczne, Waga: 35g',
        	'category_id'=> 3,
            'subcategory_id'=>8
        ]);

		Product::create([
        	'name'=>'Watch GS Pro',
        	'image'=>'product/GS Pro.png',
        	'price'=> rand(250,350),
        	'description'=>'Współpracujący system operacyjny: Apple iOS, Google Android, Łączność bezprzewodowa: Bluetooth 5.1, Wielkość wyświetlacza: 1,39"',
        	'additional_info'=>'Wykonanie koperty: tworzywo sztuczne, Waga: 12g',
        	'category_id'=> 3,
            'subcategory_id'=>9
        ]);


		Product::create([
        	'name'=>'MagicWatch 2',
        	'image'=>'product/MagicWatch 2.png',
        	'price'=> rand(150,250),
        	'description'=>'Współpracujący system operacyjny: Apple iOS, Google Android, Łączność bezprzewodowa: Bluetooth 5.0, Wielkość wyświetlacza: 1,39"',
        	'additional_info'=>'Wykonanie koperty: stal nierdzewna, Waga: 41g',
        	'category_id'=> 3,
            'subcategory_id'=>9
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

