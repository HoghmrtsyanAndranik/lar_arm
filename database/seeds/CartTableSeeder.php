<?php

use Illuminate\Database\Seeder;

class CartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

   //  DB::table('cart')->insert([
   //  ['id'=>1,'user_id'=>2,'product_id'=>5,'count'=>2],
   //  ['id'=>2,'user_id'=>7,'product_id'=>1,'count'=>1],
   //  ['id'=>3,'user_id'=>11,'product_id'=>1,'count'=>1],
   //  ['id'=>4,'user_id'=>11,'product_id'=>5,'count'=>1],
   
   // ]);

     DB::table('orders')->insert([


['id'=>1, 'user_id'=>2, 'total'=>1026,'date'=>'2020-06-10'],
['id'=>2, 'user_id'=>2, 'total'=>1026,'date'=>'2020-06-10'],
['id'=>3, 'user_id'=>2, 'total'=>1026, 'date'=>'2020-06-10'],
['id'=>4, 'user_id'=>2, 'total'=>1026,'date'=> '2020-06-10'],
['id'=>5, 'user_id'=>2, 'total'=>1026, 'date'=>'2020-06-10'],
['id'=>6, 'user_id'=>2, 'total'=>288, 'date'=>'2020-06-10'],
['id'=>7, 'user_id'=>2, 'total'=>288,'date'=>'2020-06-10'],
['id'=>8, 'user_id'=>2, 'total'=>21,'date'=>'2020-06-10'],
['id'=>9, 'user_id'=>2, 'total'=>42,'date'=>'2020-06-10'],
['id'=>10, 'user_id'=>2, 'total'=>42,'date'=>'2020-06-10'],
['id'=>11, 'user_id'=>2, 'total'=>42,'date'=>'2020-06-10'],
['id'=>12, 'user_id'=>7, 'total'=>223,'date'=>'2020-06-17'],
['id'=>13, 'user_id'=>7, 'total'=>223,'date'=>'2020-06-17'],
['id'=>14, 'user_id'=>11, 'total'=>1098,'date'=> '2020-10-07'],
['id'=>15, 'user_id'=>11, 'total'=>1098,'date'=> '2020-10-07'],
['id'=>16, 'user_id'=>11, 'total'=>1098, 'date'=>'2020-10-07'],
['id'=>17, 'user_id'=>11, 'total'=>1098,'date'=> '2020-10-07'],
['id'=>18, 'user_id'=>11, 'total'=>1098,'date'=>'2020-10-07'],
['id'=>19, 'user_id'=>11, 'total'=>0,'date'=>'2020-10-07']

]);

 DB::table('order_details')->insert([


array('id'=>1, 'order_id'=>10, 'product_id'=>5, 'count'=>2, 'stars'=>0, 'feedback'=>'ok'),
array('id'=>2, 'order_id'=>11, 'product_id'=>5, 'count'=>2, 'stars'=>0, 'feedback'=>NULL),
array('id'=>3, 'order_id'=>12, 'product_id'=>2, 'count'=>1, 'stars'=>3, 'feedback'=>'Nice product, thanks'),
array('id'=>4, 'order_id'=>12, 'product_id'=>1, 'count'=>1, 'stars'=>3, 'feedback'=>'Average quality'),
array('id'=>5, 'order_id'=>13, 'product_id'=>2, 'count'=>1, 'stars'=>0, 'feedback'=>NULL),
array('id'=>7, 'order_id'=>15, 'product_id'=>5, 'count'=>23, 'stars'=>0,'feedback'=> NULL),
array('id'=>8, 'order_id'=>15, 'product_id'=>1, 'count'=>5, 'stars'=>0, 'feedback'=>NULL),
array('id'=>9, 'order_id'=>16, 'product_id'=>5, 'count'=>23, 'stars'=>0, 'feedback'=>NULL),
array('id'=>10, 'order_id'=>16, 'product_id'=>1, 'count'=>5, 'stars'=>0, 'feedback'=>NULL),
array('id'=>11, 'order_id'=>17, 'product_id'=>5, 'count'=>23, 'stars'=>0, 'feedback'=>NULL),
array('id'=>12, 'order_id'=>17, 'product_id'=>1, 'count'=>5, 'stars'=>0, 'feedback'=>NULL),
array('id'=>14, 'order_id'=>18, 'product_id'=>1, 'count'=>5, 'stars'=>0,'feedback'=> NULL)

]);


//  DB::table('product_photo')->insert([


// array('id'=>1, 'url'=>'1591183818amazonbasics_520x520._SY304_CB442725065_.jpg', 'product_id'=>1),
// array('id'=>2, 'url'=>'159118575171URNvzoWqL._SL1500_.jpg', 'product_id'=>2),
// array('id'=>3, 'url'=>'159118801361L3sCXt9UL._AC_SL1500_.jpg', 'product_id'=>3),
// array('id'=>7, 'url'=>'159177222891ycTDwF2QL._AC_UX522_.jpg', 'product_id'=>5),
// array('id'=>8, 'url'=>'1601645147aaa.png', 'product_id'=>6),
// array('id'=>9, 'url'=>'1601646724about.jpg', 'product_id'=>7),
// array('id'=>10, 'url'=>'1601886943_featured.jpg', 'product_id'=>8),
// array('id'=>11, 'url'=>'1601886943_flickr.jpg', 'product_id'=>8),
// array('id'=>12, 'url'=>'1601886943_thumb.jpg', 'product_id'=>8),
// array('id'=>13, 'url'=>'16018869433.jpg', 'product_id'=>8),
// array('id'=>14, 'url'=>'16018869434.jpg', 'product_id'=>8),
// array('id'=>15, 'url'=>'16018869435.jpg', 'product_id'=>8)

// ]);

DB::table('products')->insert([



array('id'=>1, 'name'=>'newprod', 'price'=>123, 'count'=>445, 'description'=>'new style product', 'user_id'=>1, 'active'=>0),
array('id'=>2, 'name'=>'Oculus Rift S PC-Powered VR Gaming Headset', 'price'=>100, 'count'=>498, 'description'=>'dkfjsldkfj', 'user_id'=>2, 'active'=>1),
array('id'=>3, 'name'=>'WowWee', 'price'=>8, 'count'=>100, 'description'=>'Produced by WowWee for Pinkfong, official crea', 'user_id'=>2, 'active'=>0),
array('id'=>5, 'name'=>'Face Mask, UPF 50, Cools when Wet', 'price'=>21, 'count'=>-88, 'description'=>'Synthetic,Imported', 'user_id'=>4, 'active'=>0),
array('id'=>6, 'name'=>'user','price'=> 88888, 'count'=>55, 'description'=>'good', 'user_id'=>11, 'active'=>1),
array('id'=>7, 'name'=>'koshik','price'=> 15000, 'count'=>6, 'description'=>'lav koshik', 'user_id'=>11, 'active'=>1),
array('id'=>8, 'name'=>'shoes', 'price'=>15000, 'count'=>100, 'description'=>'man winter shoes', 'user_id'=>11, 'active'=>1)
]);

 DB::table('users')->insert([ 



array('id'=>1, 'name'=>'Armine', 'surname'=>'Simonyan', 'email'=>'armine@gmail.com', 'age'=>25, 'password'=>'$2y$10$bfRz60gYTm6ya8nrq0eZL.IeTvWeBeNaS/rE6AxWlInoypG2TexoW','active'=> 1, 'link'=>'','role'=> 'admin'),
array('id'=>2, 'name'=>'Armine', 'surname'=>'Simonyan', 'email'=>'simonian.armine@gmail.com','age'=> 24, 'password'=>'$2y$10$0SR4.fQRr6TF36Zyojzh4OBexNDGr5VrGneAOL8Bk4dYqS2XMOtlC','active'=> 1, 'link'=>'2028072509', 'role'=>'user'),
array('id'=>3, 'name'=>'Lena', 'surname'=>'Ghazaryan', 'email'=>'lena@gmail.com', 'age'=>20, 'password'=>'$2y$10$/N87BZ9xcy0LvkErbtS11Ohhytd3U1uZsxOA1fXujltbQl4vXobYO', 'active'=>0, 'link'=>'', 'role'=>'user'),
array('id'=>4, 'name'=>'Anna', 'surname'=>'Khachatryan', 'email'=>'anna@gmail.com', 'age'=>25, 'password'=>'$2y$10$lzju.Fom3a5zDIpyPUe7oO3HSKriYdBcb2rA1.C5zk1x5G3D42gI6', 'active'=>0,'link'=> '', 'role'=>'user'),
array('id'=>7, 'name'=>'Armine', 'surname'=>'Simonyan', 'email'=>'armine1996.as@gmail.com','age'=> 23,'password'=> '$2y$10$bTz6tSDRf4CUCjHnGXkyy.t7i.vNWsq0TZ8Fxmw.Q5dHknaepmGxW', 'active'=>1,'link'=> '', 'role'=>'user')
]);





DB::table('wishlist')->insert([ 
array('id'=>1, 'product_id'=>1, 'user_id'=>2),
array('id'=>2, 'product_id'=>5, 'user_id'=>2)

]);

   }


}
