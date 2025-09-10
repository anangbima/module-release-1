<?php

namespace Modules\ModuleRelease1\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\ModuleRelease1\Models\LogActivity;

class LogActivitySeeder extends Seeder
{
    public function run(): void
    {
        LogActivity::factory()->count(10)->create();
    }
}
