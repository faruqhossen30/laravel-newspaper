<?php

namespace Database\Seeders;

use App\Models\Admin\Category\Category;
use App\Models\Admin\Category\SubCategory;
use Illuminate\Database\Seeder;


use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = array(
            array('id' => '1','name' => 'প্রচ্ছদ','slug' => 'prcchd','thumbnail' => NULL,'author_id' => '1','status' => '1','created_at' => '2024-04-30 04:57:48','updated_at' => '2024-04-30 04:57:48'),
            array('id' => '2','name' => 'সারাদেশে','slug' => 'saradese','thumbnail' => NULL,'author_id' => '1','status' => '1','created_at' => '2024-04-30 04:57:48','updated_at' => '2024-04-30 04:57:48'),
            array('id' => '3','name' => 'জাতীয়','slug' => 'jateey','thumbnail' => NULL,'author_id' => '1','status' => '1','created_at' => '2024-04-30 04:57:48','updated_at' => '2024-04-30 04:57:48'),
            array('id' => '4','name' => 'আন্তর্জাতিক','slug' => 'antrjatik','thumbnail' => NULL,'author_id' => '1','status' => '1','created_at' => '2024-04-30 04:57:48','updated_at' => '2024-04-30 04:57:48'),
            array('id' => '5','name' => 'রাজনীতি','slug' => 'rajneeti','thumbnail' => NULL,'author_id' => '1','status' => '1','created_at' => '2024-04-30 04:57:48','updated_at' => '2024-04-30 04:57:48'),
            array('id' => '6','name' => 'অর্থনীতি','slug' => 'orthneeti','thumbnail' => NULL,'author_id' => '1','status' => '1','created_at' => '2024-04-30 04:57:48','updated_at' => '2024-04-30 04:57:48'),
            array('id' => '7','name' => 'খেলাধুলা','slug' => 'kheladhula','thumbnail' => NULL,'author_id' => '1','status' => '1','created_at' => '2024-04-30 04:57:48','updated_at' => '2024-04-30 04:57:48'),
            array('id' => '8','name' => 'শিক্ষা','slug' => 'siksha','thumbnail' => NULL,'author_id' => '1','status' => '1','created_at' => '2024-04-30 04:57:48','updated_at' => '2024-04-30 04:57:48'),
            array('id' => '9','name' => 'অন্যান্য','slug' => 'onzanz','thumbnail' => NULL,'author_id' => '1','status' => '1','created_at' => '2024-04-30 04:57:48','updated_at' => '2024-04-30 04:57:48'),
            array('id' => '10','name' => 'আমাদের পরিবার','slug' => 'amader-pribar','thumbnail' => NULL,'author_id' => '1','status' => '1','created_at' => '2024-04-30 04:57:48','updated_at' => '2024-04-30 04:57:48')
          );

          Category::insert($categories);

          $sub_categories = array(
            array('id' => '1','name' => 'ঢাকা-বিভাগ','slug' => 'dhaka-bivag','description' => 'ঢাকা-বিভাগ','thumbnail' => NULL,'category_id' => '2','author_id' => '1','created_at' => '2024-04-30 05:02:59','updated_at' => '2024-04-30 05:02:59'),
            array('id' => '2','name' => 'সিলেট-বিভাগ','slug' => 'silet-bivag','description' => 'সিলেট-বিভাগ','thumbnail' => NULL,'category_id' => '2','author_id' => '1','created_at' => '2024-04-30 05:03:22','updated_at' => '2024-04-30 05:03:22'),
            array('id' => '3','name' => 'চট্রগ্রাম-বিভাগ','slug' => 'ctrgram-bivag','description' => 'চট্রগ্রাম-বিভাগ','thumbnail' => NULL,'category_id' => '2','author_id' => '1','created_at' => '2024-04-30 05:04:02','updated_at' => '2024-04-30 05:04:02'),
            array('id' => '4','name' => 'খুলনা-বিভাগ','slug' => 'khulna-bivag','description' => 'খুলনা-বিভাগ','thumbnail' => NULL,'category_id' => '2','author_id' => '1','created_at' => '2024-04-30 05:04:25','updated_at' => '2024-04-30 05:04:25'),
            array('id' => '5','name' => 'ময়মনসিংহ-বিভাগ','slug' => 'mymnsingh-bivag','description' => 'ময়মনসিংহ-বিভাগ','thumbnail' => NULL,'category_id' => '2','author_id' => '1','created_at' => '2024-04-30 05:04:50','updated_at' => '2024-04-30 05:04:50'),
            array('id' => '6','name' => 'রংপুর-বিভাগ','slug' => 'rngpur-bivag','description' => 'রংপুর-বিভাগ','thumbnail' => NULL,'category_id' => '2','author_id' => '1','created_at' => '2024-04-30 05:06:12','updated_at' => '2024-04-30 05:06:12'),
            array('id' => '7','name' => 'রাজশাহী-বিভাগ','slug' => 'rajsahee-bivag','description' => 'রাজশাহী-বিভাগ','thumbnail' => NULL,'category_id' => '2','author_id' => '1','created_at' => '2024-04-30 05:06:44','updated_at' => '2024-04-30 05:06:44'),
            array('id' => '8','name' => 'ধর্ম','slug' => 'dhrm','description' => 'ধর্ম','thumbnail' => NULL,'category_id' => '9','author_id' => '1','created_at' => '2024-04-30 05:08:23','updated_at' => '2024-04-30 05:08:23'),
            array('id' => '9','name' => 'এক্সক্লুসিভ','slug' => 'eksklusiv','description' => 'এক্সক্লুসিভ','thumbnail' => NULL,'category_id' => '9','author_id' => '1','created_at' => '2024-04-30 05:09:07','updated_at' => '2024-04-30 05:09:07'),
            array('id' => '10','name' => 'আইন-আদালত','slug' => 'ain-adalt','description' => 'আইন-আদালত','thumbnail' => NULL,'category_id' => '9','author_id' => '1','created_at' => '2024-04-30 05:09:24','updated_at' => '2024-04-30 05:09:24'),
            array('id' => '11','name' => 'ক্যাম্পাস','slug' => 'kzampas','description' => 'ক্যাম্পাস','thumbnail' => NULL,'category_id' => '9','author_id' => '1','created_at' => '2024-04-30 05:09:42','updated_at' => '2024-04-30 05:09:42'),
            array('id' => '12','name' => 'গণমাধ্যম','slug' => 'gnmadhzm','description' => 'গণমাধ্যম','thumbnail' => NULL,'category_id' => '9','author_id' => '1','created_at' => '2024-04-30 05:09:59','updated_at' => '2024-04-30 05:09:59'),
            array('id' => '13','name' => 'চাকরী','slug' => 'cakree','description' => 'চাকরী','thumbnail' => NULL,'category_id' => '9','author_id' => '1','created_at' => '2024-04-30 05:10:17','updated_at' => '2024-04-30 05:10:17'),
            array('id' => '14','name' => 'তথ্যপ্রযুক্তি','slug' => 'tthzprzukti','description' => 'তথ্যপ্রযুক্তি','thumbnail' => NULL,'category_id' => '9','author_id' => '1','created_at' => '2024-04-30 05:10:46','updated_at' => '2024-04-30 05:10:46'),
            array('id' => '15','name' => 'প্রবাস','slug' => 'prbas','description' => 'প্রবাস','thumbnail' => NULL,'category_id' => '9','author_id' => '1','created_at' => '2024-04-30 05:10:58','updated_at' => '2024-04-30 05:10:58'),
            array('id' => '16','name' => 'ফিচার','slug' => 'ficar','description' => 'ফিচার','thumbnail' => NULL,'category_id' => '9','author_id' => '1','created_at' => '2024-04-30 05:11:13','updated_at' => '2024-04-30 05:11:13'),
            array('id' => '17','name' => 'ভ্রমণ','slug' => 'vrmn','description' => 'ভ্রমণ','thumbnail' => NULL,'category_id' => '9','author_id' => '1','created_at' => '2024-04-30 05:11:29','updated_at' => '2024-04-30 05:11:29'),
            array('id' => '18','name' => 'মতামত','slug' => 'mtamt','description' => 'মতামত','thumbnail' => NULL,'category_id' => '9','author_id' => '1','created_at' => '2024-04-30 05:11:44','updated_at' => '2024-04-30 05:11:44'),
            array('id' => '19','name' => 'মুক্তমত','slug' => 'muktmt','description' => 'মুক্তমত','thumbnail' => NULL,'category_id' => '9','author_id' => '1','created_at' => '2024-04-30 05:12:01','updated_at' => '2024-04-30 05:12:01'),
            array('id' => '20','name' => 'লাইফস্টাইল','slug' => 'laifstail','description' => 'লাইফস্টাইল','thumbnail' => NULL,'category_id' => '9','author_id' => '1','created_at' => '2024-04-30 05:12:16','updated_at' => '2024-04-30 05:12:16'),
            array('id' => '21','name' => 'লিড নিউজ','slug' => 'lid-niuj','description' => 'লিড নিউজ','thumbnail' => NULL,'category_id' => '9','author_id' => '1','created_at' => '2024-04-30 05:12:33','updated_at' => '2024-04-30 05:12:33'),
            array('id' => '22','name' => 'সম্পাদকীয়','slug' => 'smpadkeey','description' => 'সম্পাদকীয়','thumbnail' => NULL,'category_id' => '9','author_id' => '1','created_at' => '2024-04-30 05:12:48','updated_at' => '2024-04-30 05:12:48'),
            array('id' => '23','name' => 'সাহিত্য','slug' => 'sahitz','description' => 'সাহিত্য','thumbnail' => NULL,'category_id' => '9','author_id' => '1','created_at' => '2024-04-30 05:13:01','updated_at' => '2024-04-30 05:13:01'),
            array('id' => '24','name' => 'স্বাস্থ্য','slug' => 'swasthz','description' => 'স্বাস্থ্য','thumbnail' => NULL,'category_id' => '9','author_id' => '1','created_at' => '2024-04-30 05:13:15','updated_at' => '2024-04-30 05:13:15')
          );

          SubCategory::insert($sub_categories);


    }
}
