<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class Post extends Seeder
{
    public function run()
    {
        $faker = Factory::create('es_VE');
        $faker->addProvider(new \Bluemmb\Faker\PicsumPhotosProvider($faker));
        for ($i=1; $i <= 100 ; $i++) { 
            $title = $faker->sentence(5);
            $data = [
                'user_id' => $faker->numberBetween(1,100),
                'category_id' => $faker->numberBetween(1,100),
                'title' => $title,
                'slug' => strtolower(str_replace(' ','-',$title)),
                'image' => $faker->imageUrl(),
                'description' => $faker->paragraph(5),
            ];
            $this->db->table('posts')->insert($data);
        }
    }
}
