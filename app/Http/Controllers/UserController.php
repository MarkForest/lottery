<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function getByTickets(Request $request): JsonResponse
    {
        $ticketNumbers = $request->get('tickets');
        $users = User::query()
            ->join('tickets', 'tickets.user_id', 'users.id')
            ->select(['users.name', 'users.email', 'tickets.number'])
            ->whereIn('tickets.number', $ticketNumbers)
            ->get()
            ->toArray();
        return response()->json(['users' => $users]);
    }
}
