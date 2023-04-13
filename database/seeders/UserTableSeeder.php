<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Core\Number;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Nette\Utils\Random;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $role = Role::create(['name'=>'head_of_hospital']);
        Role::create(['name'=>'doctor']);
        Role::create(['name'=>'sick']);

        $user = User::create([
            'name' => 'mahmoud',
            'email' => $faker->unique()->safeEmail(),
            'password' => Hash::make(123456),
            'national_id' => random_int(11111111111111, 99999999999999),
            'phone_number' => '011'.$faker->numberBetween(11111111, 99999999)
        ]);

        $user->assignRole($role);


        //create 1 doctor
        $user = User::create([
            'name' => 'khairy',
            'email' => $faker->unique()->safeEmail(),
            'password' => Hash::make(123456),
            'national_id' => random_int(11111111111111, 99999999999999),
            'phone_number' => '011'.$faker->numberBetween(11111111, 99999999),
            'image' => '35600889874836_2023-04-05'
        ]);

        $user->assignRole('doctor');



        //create 20 sick people
        for ($i=0; $i < 20 ; $i++) {
            $user = User::create([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'password' => Hash::make(123456),
                'national_id' => random_int(11111111111111, 99999999999999),
                'phone_number' => '011'.$faker->numberBetween(11111111, 99999999)
            ]);

            $user->assignRole('sick');
        }

    }
}
