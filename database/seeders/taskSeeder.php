<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class taskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table ('matakuliahs')->insert( [
            ['kodeMatakuliah' => 'MK001', 
            'namaMatakuliah' => 'Pemrograman Aplikasi Bisnis' ,
            'sks' => 4],
            ['kodeMatakuliah' => 'MK002', 
            'namaMatakuliah' => 'Audit SI' ,
            'sks' => 4],
            ['kodeMatakuliah' => 'MK003', 
            'namaMatakuliah' => 'Pemrograman Aplikasi Bisnis' ,
            'sks' => 4]
        ]
        );
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 50; $i++) {
            DB::table('mahasiswas')->insert([
                'studentID' => '03000811'&$i,
                'nama' =>$faker->name,
                'tahunMasuk' => '2021',
                'jurusan' => $faker->address
            ]);
        };
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 15; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password123'), // You can set a default password here
            ]);
        };
        DB::table ('khs')->insert( [
            ['kode_khs' => 'khs001', 
            'keterangan' => '2022/2023' ,
            'keterangan_singkat' => '2022/2023'],

            ['kode_khs' => 'khs002', 
            'keterangan' => '2022/2023' ,
            'keterangan_singkat' => '2022/2023'],

            ['kode_khs' => 'khs003', 
            'keterangan' => '2022/2023' ,
            'keterangan_singkat' => '2022/2023'],
        ]
        );
        DB::table ('khs_details')->insert( [
            ['kode_khs_detail' => 'khs001', 
            'kode_khs' => 'khs001' ,
            'nilai' => 90],

            ['kode_khs_detail' => 'khs002', 
            'kode_khs' => 'khs002' ,
            'nilai' => 90],

            ['kode_khs_detail' => 'khs003', 
            'kode_khs' => 'khs003' ,
            'nilai' => 90],
        ]
        );
        DB::table ('programstudis')->insert( [
            ['nama' => 'Sistem Informasi', 'Deskripsi' => 'Program studi tentang ilmu komputer.'],
            ['nama' => 'Bisnis', 'Deskripsi' => 'Program studi yang fokus pada pembelajaran bisnis.'],
            ['nama' => 'Akuntansi', 'Deskripsi' => 'Program studi yang mempelajari aspek ekonomi dan bisnis.'],
            ['nama' => 'Hospitality', 'Deskripsi' => 'Program studi yang mempelajari dunia perhotelan.'],
            ['nama' => 'Management', 'Deskripsi' => 'Program studi tentang mengatur manusia.']
        ]
        );

        DB::table ('pembayarans')->insert( [
            [
                'Student_id' => '03081210029',
                'Amount' => 300000.00,
                'Payment_date' => '2023-03-17',
                'Payment_method' => 'Cash'
            ],
            [
                'Student_id' => '03081210010',
                'Amount' => 5000000.00,
                'Payment_date' => '2023-05-16',
                'Payment_method' => 'Debit'
            ],
            [
                'Student_id' => '03081210016',
                'Amount' => 2000000.00,
                'Payment_date' => '2023-01-15',
                'Payment_method' => 'Credit'
            ],
            [
                'Student_id' => '03081210018',
                'Amount' => 9000000.00,
                'Payment_date' => '2023-02-14',
                'Payment_method' => 'Cash'
            ],
            [
                'Student_id' => '03081210019',
                'Amount' => 1000000.00,
                'Payment_date' => '2023-08-13',
                'Payment_method' => 'Debit'
            ] 
        ]
        );

        DB::table ('transkripakademiks')->insert( [
            [
                'studentID' => '03081210029',
                'Kode_matakuliah' => 101,
                'Kode_term' => '2023A',
                'nilai' => 'A',
                'sks' => 3,
                'gpa' => 4.0
            ],
            [
                'studentID' => '03081210010',
                'Kode_matakuliah' => 202,
                'Kode_term' => '2023B',
                'nilai' => 'B+',
                'sks' => 4,
                'gpa' => 3.33
            ],
            [
                'studentID' => '03081210016',
                'Kode_matakuliah' => 303,
                'Kode_term' => '2023C',
                'nilai' => 'A-',
                'sks' => 3,
                'gpa' => 3.67
            ],
            [
                'studentID' => '03081210018',
                'Kode_matakuliah' => 404,
                'Kode_term' => '2023D',
                'nilai' => 'C',
                'sks' => 2,
                'gpa' => 2.0
            ],
            [
                'studentID' => '03081210019',
                'Kode_matakuliah' => 505,
                'Kode_term' => '2023E',
                'nilai' => 'B',
                'sks' => 4,
                'gpa' => 3.0
            ]
        ]
        );

    }
}
