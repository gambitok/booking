<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('users')->insert(
            array(
                [
                    'name' => 'Dmytro Dziubii',
                    'email' => 'gambitokgd@gmail.com',
                    'password' => Hash::make('12345678')
                ],
                [
                    'name' => 'admin',
                    'email' => 'admin@gmail.com',
                    'password' => Hash::make('12345678')
                ]
            )
        );

        DB::table('cities')->insert(
            array(
                ['city_name' => 'Kiev'],
                ['city_name' => 'Moscow'],
                ['city_name' => 'Riga'],
                ['city_name' => 'Rome'],
                ['city_name' => 'Paris'],
                ['city_name' => 'Berlin'],
                ['city_name' => 'London'],
                ['city_name' => 'Amsterdam'],
                ['city_name' => 'Prague'],
                ['city_name' => 'Madrid'],
                ['city_name' => 'Sarajevo']
            )
        );

        DB::table('flights')->insert(
            array(
                [
                    'name' => 'Boeing-737',
                    'airline' => 'France Airlines',
                    'date_from' => '2020-04-11 00:00:00',
                    'date_to' => '2020-04-11 05:00:00',
                    'price' => 200,
                    'city_id_from' => 2,
                    'city_id_to' => 3,
                ],
                [
                    'name' => 'Boeing 747-400',
                    'airline' => 'Ukraine International Airlines',
                    'date_from' => '2020-04-11 01:00:00',
                    'date_to' => '2020-04-11 04:00:00',
                    'price' => 500,
                    'city_id_from' => 1,
                    'city_id_to' => 11,
                ],
                [
                    'name' => 'Airbus A320',
                    'airline' => 'American Airlines',
                    'date_from' => '2020-04-11 00:00:00',
                    'date_to' => '2020-04-11 12:00:00',
                    'price' => 250,
                    'city_id_from' => 4,
                    'city_id_to' => 5,
                ],
                [
                    'name' => 'Airbus A333-300',
                    'airline' => 'Turkish Airlines',
                    'date_from' => '2020-05-10 00:00:00',
                    'date_to' => '2020-05-11 01:00:00',
                    'price' => 400,
                    'city_id_from' => 6,
                    'city_id_to' => 7,
                ],
                [
                    'name' => 'Boeing 777-200',
                    'airline' => 'United Airlines',
                    'date_from' => '2020-06-12 00:00:00',
                    'date_to' => '2020-06-13 04:00:00',
                    'price' => 300,
                    'city_id_from' => 8,
                    'city_id_to' => 9,
                ],
            )
        );

        for($i=1;$i<=24;$i++) {
            $mas[$i] = ['flight_id' => 1, 'seat_number' => $i, 'user_id' => 0, 'booked_status' => 0];
        }

        DB::table('seats')->insert(
            $mas
        );

        DB::table('tickets')->insert(
            array(
                [
                    'flight_id' => 1,
                    'user_id' => 1,
                    'summary' => 800,
                ],
                [
                    'flight_id' => 2,
                    'user_id' => 1,
                    'summary' => 500,
                ],
            )
        );

    }
}

