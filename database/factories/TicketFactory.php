<?php

namespace Database\Factories;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends Factory<Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $count = User::query()->count();
        $skip = rand(0, $count - 1);
        $id = DB::table('users')->skip($skip)->take(1)
            ->select('id')->first()->id;
        return [
            'user_id' => $id,
            'number' => fake()->unique()->numberBetween(1000000, 9999999),
        ];
    }
}
