<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Merhandes Gunawan',
            'username' => 'Handes',
            'email' => 'merhandes20@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Doddy Ferdiansyah',
        //     'email' => 'doddy@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, odio.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas consequuntur eius ullam rerum nostrum deleniti ipsum, fuga quam sit esse autem voluptatibus quia dolorum voluptatem accusantium quae odio omnis, repudiandae nihil? Sunt quasi, fugit odit eos magnam ratione harum distinctio voluptatibus corporis voluptas totam, voluptates et ut obcaecati aut, iusto vitae! Totam aliquid hic molestias dicta consectetur quod vitae eaque dolorum doloremque quaerat in assumenda, sint provident ex deleniti consequuntur rerum, consequatur unde culpa libero, maxime sunt labore debitis qui? Quos accusamus a quasi accusantium sapiente aut reprehenderit repellendus non voluptatibus cumque hic nostrum rerum, qui ipsum voluptates, veritatis optio minima! Ipsam ad dolores, ullam voluptatum aliquam, sed natus, iusto libero omnis hic necessitatibus earum tempora? Corrupti totam exercitationem eos!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae adipisci fugit, dicta fugiat tempora nulla dolore reiciendis accusamus necessitatibus vel!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit dicta, quos eligendi accusamus natus asperiores?</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto natus neque sint quaerat dignissimos, perspiciatis, id quis modi eius voluptatem illo! Laudantium libero at voluptas maxime pariatur ab nostrum dolores!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, odio.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas consequuntur eius ullam rerum nostrum deleniti ipsum, fuga quam sit esse autem voluptatibus quia dolorum voluptatem accusantium quae odio omnis, repudiandae nihil? Sunt quasi, fugit odit eos magnam ratione harum distinctio voluptatibus corporis voluptas totam, voluptates et ut obcaecati aut, iusto vitae! Totam aliquid hic molestias dicta consectetur quod vitae eaque dolorum doloremque quaerat in assumenda, sint provident ex deleniti consequuntur rerum, consequatur unde culpa libero, maxime sunt labore debitis qui? Quos accusamus a quasi accusantium sapiente aut reprehenderit repellendus non voluptatibus cumque hic nostrum rerum, qui ipsum voluptates, veritatis optio minima! Ipsam ad dolores, ullam voluptatum aliquam, sed natus, iusto libero omnis hic necessitatibus earum tempora? Corrupti totam exercitationem eos!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae adipisci fugit, dicta fugiat tempora nulla dolore reiciendis accusamus necessitatibus vel!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit dicta, quos eligendi accusamus natus asperiores?</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto natus neque sint quaerat dignissimos, perspiciatis, id quis modi eius voluptatem illo! Laudantium libero at voluptas maxime pariatur ab nostrum dolores!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, odio.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas consequuntur eius ullam rerum nostrum deleniti ipsum, fuga quam sit esse autem voluptatibus quia dolorum voluptatem accusantium quae odio omnis, repudiandae nihil? Sunt quasi, fugit odit eos magnam ratione harum distinctio voluptatibus corporis voluptas totam, voluptates et ut obcaecati aut, iusto vitae! Totam aliquid hic molestias dicta consectetur quod vitae eaque dolorum doloremque quaerat in assumenda, sint provident ex deleniti consequuntur rerum, consequatur unde culpa libero, maxime sunt labore debitis qui? Quos accusamus a quasi accusantium sapiente aut reprehenderit repellendus non voluptatibus cumque hic nostrum rerum, qui ipsum voluptates, veritatis optio minima! Ipsam ad dolores, ullam voluptatum aliquam, sed natus, iusto libero omnis hic necessitatibus earum tempora? Corrupti totam exercitationem eos!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae adipisci fugit, dicta fugiat tempora nulla dolore reiciendis accusamus necessitatibus vel!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit dicta, quos eligendi accusamus natus asperiores?</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto natus neque sint quaerat dignissimos, perspiciatis, id quis modi eius voluptatem illo! Laudantium libero at voluptas maxime pariatur ab nostrum dolores!</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, odio.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas consequuntur eius ullam rerum nostrum deleniti ipsum, fuga quam sit esse autem voluptatibus quia dolorum voluptatem accusantium quae odio omnis, repudiandae nihil? Sunt quasi, fugit odit eos magnam ratione harum distinctio voluptatibus corporis voluptas totam, voluptates et ut obcaecati aut, iusto vitae! Totam aliquid hic molestias dicta consectetur quod vitae eaque dolorum doloremque quaerat in assumenda, sint provident ex deleniti consequuntur rerum, consequatur unde culpa libero, maxime sunt labore debitis qui? Quos accusamus a quasi accusantium sapiente aut reprehenderit repellendus non voluptatibus cumque hic nostrum rerum, qui ipsum voluptates, veritatis optio minima! Ipsam ad dolores, ullam voluptatum aliquam, sed natus, iusto libero omnis hic necessitatibus earum tempora? Corrupti totam exercitationem eos!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae adipisci fugit, dicta fugiat tempora nulla dolore reiciendis accusamus necessitatibus vel!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit dicta, quos eligendi accusamus natus asperiores?</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto natus neque sint quaerat dignissimos, perspiciatis, id quis modi eius voluptatem illo! Laudantium libero at voluptas maxime pariatur ab nostrum dolores!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
