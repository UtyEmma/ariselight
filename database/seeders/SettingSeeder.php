<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = config('settings');
        foreach ($settings as $key => $value) {
            if(!Settings::where('slug', $value['slug'])->exists()){
                Settings::create($value);
            }
        }
    }
}
