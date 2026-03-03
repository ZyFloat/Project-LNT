<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            [
                'name' => 'Budi Santoso',
                'age' => 30,
                'address' => 'Jl. Merdeka No. 10, Jakarta',
                'phone' => '081234567890',
            ],
            [
                'name' => 'Siti Aminah',
                'age' => 25,
                'address' => 'Jl. Sudirman No. 5, Bandung',
                'phone' => '089876543210',
            ],
            [
                'name' => 'Andi Wijaya',
                'age' => 40,
                'address' => 'Jl. Thamrin No. 2, Surabaya',
                'phone' => '08111222333',
            ],
            [
                'name' => 'Rina Melati',
                'age' => 28,
                'address' => 'Jl. Anggrek No. 12, Medan',
                'phone' => '08556677889',
            ],
        ];

        foreach ($employees as $employee) {
            Employee::create($employee);
        }
    }
}
