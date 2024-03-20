<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Category::factory()->create(['name'=>'Informatica']);
        // \App\Models\Category::factory()->create(['name'=>'Telefoni']);
        // \App\Models\Category::factory()->create(['name'=>'Auto']);
        // \App\Models\Category::factory()->create(['name'=>'Arredamento']);
        // \App\Models\Category::factory()->create(['name'=>'Lavoro']);
        // \App\Models\Category::factory()->create(['name'=>'Immobili']);
        // \App\Models\Category::factory()->create(['name'=>'Elettrodomestici']);
        // \App\Models\Category::factory()->create(['name'=>'Musica']);
        // \App\Models\Category::factory()->create(['name'=>'Accessori']);
        // \App\Models\Category::factory()->create(['name'=>'Giochi']);
        // \App\Models\Category::factory()->create(['name'=>'Sport']);
        // \App\Models\Category::factory()->create(['name'=>'Manga']);

        \App\Models\Announcement::factory()->create([
            'title'=>'PC Desktop Gaming',
            'body'=>'Potente PC desktop adatto per il gaming e la produttività',
            'price'=>'1200',
            'category_id'=>1, 
            'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.barbarhouse.com%2Fpuglia%2Fprovincia-di-lecce%2Fcollepasso%2Fagriturismo-collepasso%2F&psig=AOvVaw1mBXeuLbIY43jMBA5zZm7X&ust=1711043261477000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCLjupoOzg4UDFQAAAAAdAAAAABAE',
        ]);
        
        \App\Models\Announcement::factory()->create([
            'title'=>'iphone 15 pro max',
            'body'=>"Potente, innovativo ad un prezzo competitivo.",
            'price'=>'1349',
            'category_id'=>2,
        ]);

        \App\Models\Announcement::factory()->create([
            'title'=>'Pesi palestra',
            'body'=>'Athlyt - Set di manubri rivestiti in neoprene',
            'price'=>'40',
            'category_id'=>11,
        ]);



        \App\Models\Announcement::factory()->create([
            'title'=>'Orologio uomo',
            'body'=>'Tommy Hilfiger Analogue Quartz Watch for Men, Stainless Steel',
            'price'=>'170',
            'category_id'=>9,
        ]);

        






        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
