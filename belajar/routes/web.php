<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function(){
    return view('about', [
        "title" => "About",
        "name" => "Muhammad Jaya Saputra",
        "email" => "info.jaya@gmail.com",
        "image" => "jaya.jpg"
    ]);
});

Route::get('/blog', function() {

    $blog_post = [
        [
            "judul" => "Belajar laravel 8 sampai menjadi pro",
            "slug" => "belajar-laravel-8-sampai-menjadi-pro",
            "author" => "Muhammad Jaya Saputra",
            "posting" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae ut, dolorem corporis itaque magnam maiores minus placeat facilis dignissimos. Ad reprehenderit a aspernatur nam enim rerum fugiat quae iste earum maxime illum commodi, corporis minus aperiam assumenda consequuntur ea dolore? Architecto iusto numquam laboriosam cupiditate officia, nemo voluptate molestiae, accusantium ipsum culpa laudantium voluptates sint facilis dolore assumenda minus incidunt error aspernatur facere ea et, quibusdam aliquam eveniet? Consectetur iste saepe dolorum eaque, tempora qui neque omnis mollitia ducimus soluta."
        ],
        [
            "judul" => "Belajar Flutter sampai menjadi pro",
            "slug" => "belajar-flutter-sampai-menjadi-pro",
            "author" => "Muhammad Jaya Saputra",
            "posting" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid et praesentium delectus quo dolore libero sequi aspernatur, saepe neque porro voluptatibus atque iste voluptatem assumenda corrupti cupiditate, labore aut consequatur. Eveniet iste minus fugit voluptas? Quas ipsum neque aut doloribus consectetur aperiam commodi dolores temporibus quis incidunt obcaecati voluptatem aspernatur quaerat at, perferendis facilis delectus iste deserunt vel a ipsa tempora nisi quasi! Quasi laudantium dolorum delectus atque perferendis facere dolor impedit voluptatibus iure hic, explicabo est maxime tempore in facilis quibusdam laboriosam suscipit mollitia. Aliquid impedit sed est animi. Consequatur mollitia laboriosam inventore libero quisquam sequi dolorum ipsa a!"
        ]
    ];
    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_post,
    ]);
});

//halaman single post

Route::get('/posts/{slug}', function($slug){
    $blog_post = [
        [
            "judul" => "Belajar laravel 8 sampai menjadi pro",
            "slug" => "belajar-laravel-8-sampai-menjadi-pro",
            "author" => "Muhammad Jaya Saputra",
            "posting" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae ut, dolorem corporis itaque magnam maiores minus placeat facilis dignissimos. Ad reprehenderit a aspernatur nam enim rerum fugiat quae iste earum maxime illum commodi, corporis minus aperiam assumenda consequuntur ea dolore? Architecto iusto numquam laboriosam cupiditate officia, nemo voluptate molestiae, accusantium ipsum culpa laudantium voluptates sint facilis dolore assumenda minus incidunt error aspernatur facere ea et, quibusdam aliquam eveniet? Consectetur iste saepe dolorum eaque, tempora qui neque omnis mollitia ducimus soluta."
        ],
        [
            "judul" => "Belajar Flutter sampai menjadi pro",
            "slug" => "belajar-flutter-sampai-menjadi-pro",
            "author" => "Muhammad Jaya Saputra",
            "posting" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid et praesentium delectus quo dolore libero sequi aspernatur, saepe neque porro voluptatibus atque iste voluptatem assumenda corrupti cupiditate, labore aut consequatur. Eveniet iste minus fugit voluptas? Quas ipsum neque aut doloribus consectetur aperiam commodi dolores temporibus quis incidunt obcaecati voluptatem aspernatur quaerat at, perferendis facilis delectus iste deserunt vel a ipsa tempora nisi quasi! Quasi laudantium dolorum delectus atque perferendis facere dolor impedit voluptatibus iure hic, explicabo est maxime tempore in facilis quibusdam laboriosam suscipit mollitia. Aliquid impedit sed est animi. Consequatur mollitia laboriosam inventore libero quisquam sequi dolorum ipsa a!"
        ]
    ];

    $new_post = [];
    foreach ($blog_post as $post) {
        if ($post["slug"]===$slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Blog",
        "post" =>$new_post
    ]);
});
