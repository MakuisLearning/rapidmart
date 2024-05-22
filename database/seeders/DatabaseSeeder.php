<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\HumanResource\Employee;
use App\Models\HumanResource\Applicant;
use App\Models\HumanResource\Department;
use App\Models\HumanResource\Position;
use App\Models\PO\Catergory;
use App\Models\PO\QualityReports;
use App\Models\Po\supplier;
use App\Models\Inventory\Product;
use App\Models\PO\PurchaseOrder;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Department::factory()->count(6)->sequence(
            [
                'name' => 'Human Resource Department',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sales Department',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Accounting Department',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Customer Service',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Purchasing Department',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Inventory Department',
                'created_at' => now(),
                'updated_at' => now()
            ]
        )
            ->create();
        Position::factory()->count(19)->sequence(
            [
                'name' => 'HR Manager',
                'department_id' => 1,
                'salary_per_hour' => 35,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Recruitment Officer',
                'department_id' => 1,
                'salary_per_hour' => 20,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Payroll Administrator',
                'department_id' => 1,
                'salary_per_hour' => 25,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Training Coordinator',
                'department_id' => 1,
                'salary_per_hour' => 18,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sales Manager',
                'department_id' => 2,
                'salary_per_hour' => 38,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sales Analyst',
                'department_id' => 2,
                'salary_per_hour' => 33,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Accounting Manager',
                'department_id' => 3,
                'salary_per_hour' => 40,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Payable Accountant',
                'department_id' => 3,
                'salary_per_hour' => 20,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Receivable Accountant',
                'department_id' => 3,
                'salary_per_hour' => 20,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Financial Analyst',
                'department_id' => 3,
                'salary_per_hour' => 34,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Book Keeper',
                'department_id' => 3,
                'salary_per_hour' => 18,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Auditor',
                'department_id' => 3,
                'salary_per_hour' => 34,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Cashier',
                'department_id' => 4,
                'salary_per_hour' => 14,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Store Associate',
                'department_id' => 4,
                'salary_per_hour' => 14,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Store Manager',
                'department_id' => 4,
                'salary_per_hour' => 23,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Shift Supervisor',
                'department_id' => 4,
                'salary_per_hour' => 14,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Purchasing Manager',
                'department_id' => 5,
                'salary_per_hour' => 30,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Inventory Manager',
                'department_id' => 6,
                'salary_per_hour' => 24,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Inventory Clerk',
                'department_id' => 6,
                'salary_per_hour' => 20,
                'created_at' => now(),
                'updated_at' => now()
            ],
        )
            ->create();

        // ? ADD YOUR MANAGER ACCOUNT HERE
        Employee::factory()->create([
            'first_name' => 'Mark',
            'middle_name' => 'G',
            'last_name' => 'Manansala',
            'gender' => 'M',
            'age' => 21,
            'birthday' => '2003-02-24', // '2002-03-15
            'phone' => '09053457036',
            'image' => 'images/avatars/logo.png',
            'position_id' => 17,
            'email' => 'manansalamarkerol@gmail.com',
            'password' => Hash::make('12345678'),
            'employment_status' => 'Full Time',
            'email_verified_at' => now(),
            'salary' => 25000,
            'created_at' => now()->subYear(),
            'updated_at' => null,
            'notes' => 'HATDOG'
        ]);

        Employee::factory(5)->create();
        Applicant::factory(5)->create();

        Supplier::factory()->create([
            'company_name' => 'HighDen ni Erol',
            'address' => 'SkyStreet, Flowers Country, Greenny TExture',
            'email' => 'manansalamarkerol@gmail.com',
            'description' => 'Embracing cannabis, they find joy in its euphoric embrace, sharing laughter and creativity with friends, basking in the moments bliss.',
            'picture' => 'SupplierImg/cana.jpeg'
        ]);

        Catergory::factory(5)->create();
        Supplier::factory(10)->create();

        PurchaseOrder::factory()->create([
            'subject' => 'Hello. dear.',
            'creator_id' => 1001,
            'supplier_id' => 1,
            'pdf_path' => 'PurchaseOrderPDF/default.pdf',
            'status' => 'approved',
            'total_cost' => rand(100, 10000),
        ]);

        PurchaseOrder::factory(10)->create([
            'status' => 'approved',
        ]);




        // QualityReports::factory()->create([
        //     'inspector_id' => 1000,
        //     'po_id' => 1,
        //     'reports_pdf_path' => 'QIR/default.pdf',
        //     'status' => 'passed',
        //     'description' => 'A meaningful Description....',
        //     'isEmailed_status' => 'send',
        //     'created_at' => Carbon::today(),
        // ]);

        // QualityReports::factory(1)->create([
        //     'created_at' => Carbon::yesterday(),
        // ]);

        // QualityReports::factory(1)->create([
        //     'created_at' => Carbon::now()->startOfWeek(),
        // ]);

        // QualityReports::factory(1)->create([
        //     'created_at' => Carbon::now()->subWeek()->startOfWeek(),
        // ]);

        // QualityReports::factory(1)->create([
        //     'created_at' => Carbon::now()->startOfMonth(),
        // ]);

        // QualityReports::factory(1)->create([
        //     'created_at' => Carbon::now()->subMonth()->startOfMonth(),
        // ]);
        // QualityReports::factory(1)->create([
        //     'created_at' => Carbon::now()->startOfMonth(),
        // ]);

        // QualityReports::factory(1)->create([
        //     'created_at' => Carbon::now()->startOfYear(),
        // ]);
        // QualityReports::factory(1)->create([
        //     'created_at' => Carbon::now()->subYear()->startOfYear(),
        // ]);

    }
}