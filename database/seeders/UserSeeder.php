<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();
        for ($i=0;$i < 1000000; $i++) {
            try {
                User::factory()->create();
                if ($i%10000 == 0) {
                    $this->command->info("Generated $i users");
                }
            } catch (\Exception $exception) {
                Log::error($exception->getMessage());
            }
        }
    }
}
