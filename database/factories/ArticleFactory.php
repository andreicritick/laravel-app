<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $title  = $this->faker->sentence();
        $slug   = Str::substr(Str::lower(preg_replace('/\s+/', '-', $title)), 0, -1);

        return [
            'title'         => $title,
            'slug'          => $slug,
            'body'          => $this->faker->paragraph(100),
            'img'           => 'https://supersnimki.ru/images/pub/2017/11/20/343708e7-ce20-11e7-9923-90b50f07f13d_original.jpg?556747',
            'created_at'    => $this->faker->dateTimeBetween('-1 years')
        ];
    }
}
