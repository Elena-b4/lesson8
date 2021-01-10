<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['title' => 'горячие блюда'],
            ['title' => 'салаты'],
            ['title' => 'закуски'],
            ['title' => 'супы'],
            ['title' => 'выпечка'],
            ['title' => 'десерты'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
        $categories = Category::all();

//        $users = [
//            [
//                'name' => 'admin',
//                'email' => 'admin@mail.ru',
//                'password' => '123123123'
//            ],
//            [
//                'name' => '321',
//                'email' => '123@mail.ru',
//                'password' => '321321321'
//            ],
//        ];
//        foreach ($users as $user) {
//            User::create($user);
//        }
//        $users = User::all();
        $posts = [
            [
                'title' => 'Отбивные из куриного филе в духовке с помидорами',
                'content' => 'Ингредиенты: Филе грудки  — 600 Грамм Сыр  — 100 Грамм Помидоры  — 2 Штуки Йогурт натуральный  — 200 Грамм Зелень укропа  — 25 Грамм Соль  — 1 По вкусу Перец  — 1 По вкусу',
                'category_id' => $categories->find(1)->id,
//                'user_id' => $users->find(1)->id
            ],
[
                'title' => 'Салат "Цезарь" классический',
                'content' => 'Ингредиенты: Листья салата  — 100 Грамм Куриное филе  — 200 Грамм Крутоны (сухарики)  — 50 Грамм Пармезан  — 50 Грамм Яйца куриные  — 2 Штуки Петрушка  — - По вкусу Соус для цезаря  — 50 Миллилитров',
                'category_id' => $categories->find(2)->id,
//                'user_id' => $users->find(1)->id
            ],
[
                'title' => 'Итальянская брускетта',
                'content' => 'Ингредиенты: Итальянский хлеб  — 1 Штука (Желательно белый.) Сливочное масло  — 100 Грамм Помидоры Черри  — 300 Грамм Чеснок  — 2 Зубчика Свежий базилик  — 1 Ст. ложка Оливковое масло  — 1 Ст. ложка Бальзамический уксус  — 1 Ст. ложка Сыр Моцарелла  — По вкусу Соль  — По вкусу Перец  — По вкусу',
                'category_id' => $categories->find(3)->id,
//                'user_id' => $users->find(1)->id
            ],
[
                'title' => 'Гаспачо с кабачками "Остренький"',
                'content' => 'Ингредиенты: Помидоры  — 3 Штуки Кабачки  — 200 Грамм (молоденькие) Огурец  — 1 Штука Перец болгарский  — 0,5 Штуки Лук  — 0,5 Штуки Чеснок  — 1 Штука (если крупный - 0,5 зубчика) Оливковое масло  — 2 Ст. ложки Бальзамический уксус  — 1 Ст. ложка Перец кайенский  — 1-2 Щепоток (молотый) Базилик  — 2 Щепотки (сушеный) Соль  — 1 Щепотка',
                'category_id' => $categories->find(4)->id,
//                'user_id' => $users->find(1)->id
            ],
[
                'title' => 'Турецкий кекс',
                'content' => 'Ингредиенты: Яйцо  — 2 Штуки Сахар  — 1 Стакан Молоко  — 1 Стакан Мука  — 1 Стакан Растительное масло  — 0,5 Стакана Разрыхлитель теста  — 10 Грамм Ванилин  — 1 Грамм',
                'category_id' => $categories->find(5)->id,
//                'user_id' => $users->find(1)->id
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
