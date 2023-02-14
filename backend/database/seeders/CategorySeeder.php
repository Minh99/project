<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
                [
                    'ten' => 'Đăng Ký Mới',
                ],
                [
                    'ten' => 'Đăng Ký Thay Đổi',
                ],
                [
                    'ten' => 'Thông Báo Thay Đổi',
                ],
                [
                    'ten' => 'Vi Phạm / Thu Hồi',
                ],
                [
                    'ten' => 'Giải Thể',
                ],
                [
                    'ten' => 'Loại Khác',
                ],
            ]
        );
    }
}
