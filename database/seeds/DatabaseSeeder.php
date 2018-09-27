<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $comments = [
            [
                'name' => 'Артемий',
                'text' => 'Почему такое сложное задание??? Мне кажется, нужно быть первоклассным программистом, чтобы выполнить его :(',
                'created_at' => $date = '2014-07-02 16:10:00',
                'updated_at' => $date
            ],
            [
                'name' => 'Евдоким',
                'text' => 'Если включить мозги, то все элементарно Ватсон!',
                'created_at' => $date = '2014-07-02 17:42:00',
                'updated_at' => $date
            ],
            [
                'name' => 'Савва',
                'text' => 'Спасибо за Ваше тестовое задание. Оно, действительно, изумительное',
                'created_at' => $date = '2014-07-02 18:05:00',
                'updated_at' => $date
            ]
        ];

        \App\Models\Comment::insert($comments);
    }
}
