<?php

namespace Database\Seeders;

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
        \DB::table('cascade_test')->delete();

        \DB::table('cascade_test')->insert(
            [
                [
                    'id' => 1,
                    'pid' => 0,
                    'name' => '河北省',
                ],
                [
                    'id' => 2,
                    'pid' => 0,
                    'name' => '山东省',
                ],
                [
                    'id' => 3,
                    'pid' => 0,
                    'name' => '北京市',
                ],
                [
                    'id' => 4,
                    'pid' => 1,
                    'name' => '保定市',
                ],
                [
                    'id' => 5,
                    'pid' => 1,
                    'name' => '涿州市',
                ],
                [
                    'id' => 6,
                    'pid' => 1,
                    'name' => '廊坊市',
                ],
                [
                    'id' => 7,
                    'pid' => 4,
                    'name' => '徐水区',
                ],
                [
                    'id' => 8,
                    'pid' => 4,
                    'name' => '清苑区',
                ],
                [
                    'id' => 9,
                    'pid' => 4,
                    'name' => '河区',
                ],
                [
                    'id' => 10,
                    'pid' => 2,
                    'name' => '青岛',
                ],
                [
                    'id' => 11,
                    'pid' => 2,
                    'name' => '枣庄',
                ],
                [
                    'id' => 12,
                    'pid' => 11,
                    'name' => '枣庄区',
                ],
                [
                    'id' => 13,
                    'pid' => 11,
                    'name' => '丽水区',
                ],
                [
                    'id' => 14,
                    'pid' => 5,
                    'name' => '安全区',
                ],
                [
                    'id' => 15,
                    'pid' => 5,
                    'name' => '社会县',
                ],
                [
                    'id' => 16,
                    'pid' => 5,
                    'name' => '滚滚县',
                ],
                [
                    'id' => 17,
                    'pid' => 14,
                    'name' => '狗头区',
                ],
                [
                    'id' => 18,
                    'pid' => 15,
                    'name' => '无奈县',
                ],
                [
                    'id' => 19,
                    'pid' => 15,
                    'name' => '123',
                ],
                [
                    'id' => 20,
                    'pid' => 3,
                    'name' => '456',
                ],
            ]
        );
        // \App\Models\User::factory(10)->create();
    }
}
