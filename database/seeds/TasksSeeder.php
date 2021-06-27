<?php

use App\Task;
use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'name' => 'Buy some milk',
            'completed' => false,
            'expire_at' => null
        ]);
        Task::create([
            'name' => 'Made homework',
            'completed' => false,
            'expire_at' => null
        ]);
        Task::create([
            'name' => 'Buy some eggs',
            'completed' => false,
            'expire_at' => null
        ]);
        Task::create([
            'name' => 'Wash the clothes',
            'completed' => false,
            'expire_at' => null
        ]);
        Task::create([
            'name' => 'Make the dinner',
            'completed' => false,
            'expire_at' => null
        ]);
        Task::create([
            'name' => 'Lunch with my parents',
            'completed' => false,
            'expire_at' => null
        ]);
        Task::create([
            'name' => 'Study about GraphQL',
            'completed' => false,
            'expire_at' => null
        ]);
        Task::create([
            'name' => 'Take dog to the veterinary',
            'completed' => false,
            'expire_at' => null
        ]);
        Task::create([
            'name' => 'My girlfriend\'s birthday',
            'completed' => false,
            'expire_at' => '2021-08-11'
        ]);
        Task::create([
            'name' => 'Aniversary',
            'completed' => false,
            'expire_at' => '2021-10-12'
        ]);
        Task::create([
            'name' => 'Fix the Freezer',
            'completed' => true,
            'expire_at' => null
        ]);
        Task::create([
            'name' => 'Meeting at the university',
            'completed' => false,
            'expire_at' => null
        ]);
        Task::create([
            'name' => 'Buy a new keyboard',
            'completed' => true,
            'expire_at' => null
        ]);
        Task::create([
            'name' => 'Do some exercise',
            'completed' => true,
            'expire_at' => null
        ]);
        Task::create([
            'name' => 'Clean the house',
            'completed' => false,
            'expire_at' => null
        ]);
        Task::create([
            'name' => 'Take cats to the veterinary',
            'completed' => true,
            'expire_at' => null
        ]);
        Task::create([
            'name' => 'Meeting with my school friends',
            'completed' => false,
            'expire_at' => '2021-10-15'
        ]);
        Task::create([
            'name' => 'Read about Django',
            'completed' => true,
            'expire_at' => null
        ]);
        Task::create([
            'name' => 'Buy some books',
            'completed' => false,
            'expire_at' => null
        ]);
        Task::create([
            'name' => 'Buy ingredients to make a cake',
            'completed' => true,
            'expire_at' => null
        ]);
    }
}
