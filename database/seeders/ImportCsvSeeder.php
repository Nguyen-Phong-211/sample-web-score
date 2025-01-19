<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImportCsvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filePath = public_path('csv/diem_thi_thpt_2024.csv');

        if (($handle = fopen($filePath, 'r')) !== false) {
            $header = fgetcsv($handle); 
            
            // 
            $batchSize = 1000;
            $data = [];

            while (($row = fgetcsv($handle)) !== false) {
                $data[] = array_map(function ($value) {
                    return $value === '' ? null : $value;
                }, array_combine($header, $row));

                if (count($data) >= $batchSize) {
                    DB::table('students')->insert($data);
                    $data = [];
                }
            }

            if (!empty($data)) {
                DB::table('students')->insert($data);
            }

            fclose($handle);
        }
    }
}