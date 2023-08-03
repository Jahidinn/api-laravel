<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'email' => 'Jahidin@gmail.com',
            'username' => 'Jahidin',
            'firstname' => 'Jahidin',
            'lastname' => 'n',
            'password' => bcrypt('12345')
        ]);
        Post::create([
            'title' => 'Judul posts Pertama',
            'news_content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore excepturi ab non facere suscipit ducimus tempore, ullam rem officiis eos sed ea in sint animi nisi doloremque repellendus, temporibus, saepe facilis aliquam? Tempora vitae aliquam odio vel nihil, veniam laborum amet deserunt, similique ab dolorem distinctio possimus laudantium quia enim magnam reiciendis suscipit dolores! Fugiat nulla quo molestiae deleniti sed dolor quia quaerat delectus tempora saepe optio reiciendis amet iure, accusantium, cupiditate, perspiciatis id numquam quis pariatur repudiandae magnam nesciunt? Illo dolores aut eos voluptatibus fuga odio asperiores, quam expedita commodi laborum hic minima doloribus ut nostrum harum distinctio, natus porro earum. Delectus voluptatibus minima dolorem debitis, exercitationem necessitatibus minus aliquam, earum harum, soluta odit! Aperiam reiciendis placeat recusandae, quas non numquam ratione reprehenderit optio nemo dolorum quidem a repudiandae tempora, nesciunt molestias cupiditate consectetur sit. Error animi assumenda architecto, temporibus aspernatur neque deserunt consectetur dignissimos iusto voluptatum minus necessitatibus mollitia? Sit sed ducimus animi eaque, odio et magnam consequatur ex recusandae consequuntur hic ea iste cupiditate, provident ipsum nam officiis porro corporis dignissimos nesciunt, architecto aliquid vitae vel beatae? Fugit sunt necessitatibus reprehenderit voluptatum repellat ipsum nesciunt voluptates, est ab tenetur dolore architecto, dignissimos, modi ad nemo sit officia numquam asperiores suscipit laudantium! Odio, officiis quibusdam quos et debitis laudantium eum itaque totam necessitatibus aliquid incidunt, asperiores nam? Sunt voluptates ab minus eius quae ratione iste consectetur quam! Deleniti voluptas deserunt optio nostrum praesentium totam labore. Sint blanditiis vitae porro repellendus, sequi qui repellat vel modi. Alias soluta sed adipisci aliquid omnis saepe repudiandae minima, laborum sapiente quas velit et? Praesentium veniam amet pariatur, repellat enim atque quisquam. Itaque quae magnam ullam soluta. Reiciendis quod harum maiores cumque dolores, architecto molestiae neque veritatis hic. Tenetur quibusdam, laudantium, earum in quasi quas alias dolore harum porro nulla cum libero aut.',
            'author' => 1
        ]);
        Post::create([
            'title' => 'Judul posts Kedua',
            'news_content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore excepturi ab non facere suscipit ducimus tempore, ullam rem officiis eos sed ea in sint animi nisi doloremque repellendus, temporibus, saepe facilis aliquam? Tempora vitae aliquam odio vel nihil, veniam laborum amet deserunt, similique ab dolorem distinctio possimus laudantium quia enim magnam reiciendis suscipit dolores! Fugiat nulla quo molestiae deleniti sed dolor quia quaerat delectus tempora saepe optio reiciendis amet iure, accusantium, cupiditate, perspiciatis id numquam quis pariatur repudiandae magnam nesciunt? Illo dolores aut eos voluptatibus fuga odio asperiores, quam expedita commodi laborum hic minima doloribus ut nostrum harum distinctio, natus porro earum. Delectus voluptatibus minima dolorem debitis, exercitationem necessitatibus minus aliquam, earum harum, soluta odit! Aperiam reiciendis placeat recusandae, quas non numquam ratione reprehenderit optio nemo dolorum quidem a repudiandae tempora, nesciunt molestias cupiditate consectetur sit. Error animi assumenda architecto, temporibus aspernatur neque deserunt consectetur dignissimos iusto voluptatum minus necessitatibus mollitia? Sit sed ducimus animi eaque, odio et magnam consequatur ex recusandae consequuntur hic ea iste cupiditate, provident ipsum nam officiis porro corporis dignissimos nesciunt, architecto aliquid vitae vel beatae? Fugit sunt necessitatibus reprehenderit voluptatum repellat ipsum nesciunt voluptates, est ab tenetur dolore architecto, dignissimos, modi ad nemo sit officia numquam asperiores suscipit laudantium! Odio, officiis quibusdam quos et debitis laudantium eum itaque totam necessitatibus aliquid incidunt, asperiores nam? Sunt voluptates ab minus eius quae ratione iste consectetur quam! Deleniti voluptas deserunt optio nostrum praesentium totam labore. Sint blanditiis vitae porro repellendus, sequi qui repellat vel modi. Alias soluta sed adipisci aliquid omnis saepe repudiandae minima, laborum sapiente quas velit et? Praesentium veniam amet pariatur, repellat enim atque quisquam. Itaque quae magnam ullam soluta. Reiciendis quod harum maiores cumque dolores, architecto molestiae neque veritatis hic. Tenetur quibusdam, laudantium, earum in quasi quas alias dolore harum porro nulla cum libero aut.',
            'author' => 1
        ]);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
