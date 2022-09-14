<?php

namespace App\Models;

class Post
{
    private static $blog_posts=[
        [
            "judul"=>"Judul Pertamaku",
            "slug"=>"judul-pertama",
            "nama"=>"Rizki",
            "teks"=>"
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi et doloremque non, rerum quibusdam est dicta hic omnis tenetur beatae corporis! Pariatur quia doloribus recusandae mollitia perspiciatis impedit iure iste aut eos laborum. Dolorem sunt quos voluptates, unde atque commodi nostrum omnis? Esse quibusdam veritatis ea in aperiam expedita possimus! Totam temporibus ipsum, ipsa hic iste, nisi tenetur ratione cupiditate inventore atque optio unde at. Veniam est ut eius similique. Obcaecati inventore labore nulla ipsam accusamus iste sapiente eum quas."
        ],
        [
            "judul"=>"Judul Kedua",
            "slug"=>"judul-kedua",
            "nama"=>"Rizal",
            "teks"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus sapiente accusamus labore provident, sit aspernatur nemo est commodi beatae itaque earum amet dolor similique laborum consectetur facere perferendis illum nesciunt doloremque esse et maxime. Voluptatem assumenda, expedita delectus aspernatur ab illum vitae sunt, at pariatur, ut nesciunt dolorum voluptas. Sunt, eligendi culpa alias omnis molestias eum. Cupiditate explicabo tempore ipsum veniam eligendi eaque! Possimus vel nobis nisi pariatur. Illo vel fugiat magni amet, magnam accusantium aspernatur officia, nam architecto voluptates possimus molestias facilis id adipisci eos delectus animi ab sed illum, accusamus repudiandae corrupti sit odit? Consequuntur veritatis doloremque aut."
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts=self::all();

        //Tanpa Collection
        // $post = [];

        // foreach ($posts as $p) {
        //     if($p["slug"] == $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
