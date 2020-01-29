<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $students = [
                [
                    'name'          => 'Baktiadi Sudiati',
                    'phone_number'  => '081234485749',
                    'address'       => 'Jl. 1',
                    'gender'        => 'male',
                    'religion'      => 'Islam',
                    'created_at'    => Carbon::now(),
                    'user_id'       => 1,
                ],
                [
                    'name'          => 'Tami Suryatmi',
                    'phone_number'  => '081234485749',
                    'address'       => 'Jl. 1',
                    'gender'        => 'female',
                    'religion'      => 'Islam',
                    'created_at'    => Carbon::now(),
                    'user_id'       => 1,
                ],
                [
                    'name'          => 'Oman Kusumo',
                    'phone_number'  => '081234485749',
                    'address'       => 'Jl. 1',
                    'gender'        => 'male',
                    'religion'      => 'Islam',
                    'created_at'    => Carbon::now(),
                    'user_id'       => 1,
                ],
                [
                    'name'          => 'Violet Aryani',
                    'phone_number'  => '081234485749',
                    'address'       => 'Jl. 1',
                    'gender'        => 'female',
                    'religion'      => 'Islam',
                    'created_at'    => Carbon::now(),
                    'user_id'       => 1,
                ],
                [
                    'name'          => 'Kusuma Mardhiyah',
                    'phone_number'  => '081234485749',
                    'address'       => 'Jl. 1',
                    'gender'        => 'female',
                    'religion'      => 'Islam',
                    'created_at'    => Carbon::now(),
                    'user_id'       => 1,
                ],
                [
                    'name'          => 'Salimah Melani',
                    'phone_number'  => '081234485749',
                    'address'       => 'Jl. 1',
                    'gender'        => 'female',
                    'religion'      => 'Islam',
                    'created_at'    => Carbon::now(),
                    'user_id'       => 2,
                ],
                [
                    'name'          => 'Jessica Kuswandari',
                    'phone_number'  => '081234485749',
                    'address'       => 'Jl. 1',
                    'gender'        => 'female',
                    'religion'      => 'Islam',
                    'created_at'    => Carbon::now(),
                    'user_id'       => 2,
                ],
                [
                    'name'          => 'Wasis Wulandari',
                    'phone_number'  => '081234485749',
                    'address'       => 'Jl. 1',
                    'gender'        => 'female',
                    'religion'      => 'Islam',
                    'created_at'    => Carbon::now(),
                    'user_id'       => 2,
                ],
                [
                    'name'          => 'Eli Purnawati',
                    'phone_number'  => '081234485749',
                    'address'       => 'Jl. 1',
                    'gender'        => 'female',
                    'religion'      => 'Islam',
                    'created_at'    => Carbon::now(),
                    'user_id'       => 2,
                ],
                [
                    'name'          => 'Cornelia Samosir',
                    'phone_number'  => '081234485749',
                    'address'       => 'Jl. 1',
                    'gender'        => 'female',
                    'religion'      => 'Islam',
                    'created_at'    => Carbon::now(),
                    'user_id'       => 2,
                ],
                [
                    'name'          => 'Ade Sudiati',
                    'phone_number'  => '081234485749',
                    'address'       => 'Jl. 1',
                    'gender'        => 'female',
                    'religion'      => 'Islam',
                    'created_at'    => Carbon::now(),
                    'user_id'       => 1,
                ],
                [
                    'name'          => 'Kala Jailani',
                    'phone_number'  => '081234485749',
                    'address'       => 'Jl. 1',
                    'gender'        => 'female',
                    'religion'      => 'Islam',
                    'created_at'    => Carbon::now(),
                    'user_id'       => 1,
                ],
                [
                    'name'          => 'Tania Narpati',
                    'phone_number'  => '081234485749',
                    'address'       => 'Jl. 1',
                    'gender'        => 'female',
                    'religion'      => 'Islam',
                    'created_at'    => Carbon::now(),
                    'user_id'       => 1,
                ],
                [
                    'name'          => 'Malika Pudjiastuti',
                    'phone_number'  => '081234485749',
                    'address'       => 'Jl. 1',
                    'gender'        => 'female',
                    'religion'      => 'Islam',
                    'created_at'    => Carbon::now(),
                    'user_id'       => 1,
                ],
                [
                    'name'          => 'Lala Uyainah',
                    'phone_number'  => '081234485749',
                    'address'       => 'Jl. 1',
                    'gender'        => 'female',
                    'religion'      => 'Islam',
                    'created_at'    => Carbon::now(),
                    'user_id'       => 1,
                ],
                [
                    'name'          => 'Dagel Ardianto',
                    'phone_number'  => '081234485749',
                    'address'       => 'Jl. 1',
                    'gender'        => 'male',
                    'religion'      => 'Islam',
                    'created_at'    => Carbon::now(),
                    'user_id'       => 2,
                ],
                [
                    'name'          => 'Mustika Melani',
                    'phone_number'  => '081234485749',
                    'address'       => 'Jl. 1',
                    'gender'        => 'female',
                    'religion'      => 'Islam',
                    'created_at'    => Carbon::now(),
                    'user_id'       => 2,
                ],
                [
                    'name'          => 'Uli Saputra',
                    'phone_number'  => '081234485749',
                    'address'       => 'Jl. 1',
                    'gender'        => 'male',
                    'religion'      => 'Islam',
                    'created_at'    => Carbon::now(),
                    'user_id'       => 2,
                ],
                [
                    'name'          => 'Gina Rahmawati',
                    'phone_number'  => '081234485749',
                    'address'       => 'Jl. 1',
                    'gender'        => 'female',
                    'religion'      => 'Islam',
                    'created_at'    => Carbon::now(),
                    'user_id'       => 2,
                ],
                [
                    'name'          => 'Devi Megantara',
                    'phone_number'  => '081234485749',
                    'address'       => 'Jl. 1',
                    'gender'        => 'female',
                    'religion'      => 'Islam',
                    'created_at'    => Carbon::now(),
                    'user_id'       => 2,
                ]];
        Student::insert($students);

    }
}
