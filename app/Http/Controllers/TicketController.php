<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\JsonResponse;

class TicketController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function ticketGenerate(): JsonResponse
    {
        Ticket::factory(100)->create();
        return response()
            ->json(['count' => Ticket::query()->where('status', true)->count()]);
    }
}
