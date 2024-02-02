<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Vite;

class LotteryController extends Controller
{
    public function index(Request $request)
    {
        $token = $request->session()->token();
        $lotteryCount = Ticket::query()->where('status', true)->count();
        $userCount = User::query()->count();
        return View::make('lottery.index', [
            'userCount' => $userCount,
            'lotteryCount' => $lotteryCount,
            'csrfToken' => $token,
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function lottery(Request $request)
    {
        $token = $request->session()->token();
        $users = User::query()
            ->join('tickets', 'tickets.user_id', 'users.id')
            ->select('users.*', DB::raw('count(tickets.id) as ticket_count'))
            ->groupBy('users.id')
            ->orderByDesc('ticket_count')
            ->get();
        return View::make('lottery.lottery', [
            'users' => $users,
            'csrfToken' => $token,
        ]);
    }

    /**
     * @return JsonResponse
     */
    public function lotteryStart(): JsonResponse
    {
        $count = Ticket::query()->count();
        $skip = rand(0, $count - 1);
        $firstPrizes = DB::table('tickets')
            ->skip($skip)
            ->take(1)
            ->pluck('number')
            ->toArray();

        $secondPrizes = [];
        for ($i = 0; $i < 3; $i++) {
            $skip = rand(0, $count - 1);
            $secondPrizes[] = DB::table('tickets')
                ->skip($skip)
                ->take(1)
                ->first()->number;
        }

        $thirdPrizes = [];
        for ($i = 0; $i < 5; $i++) {
            $skip = rand(0, $count - 1);
            $thirdPrizes[] = DB::table('tickets')
                ->skip($skip)
                ->take(1)
                ->first()->number;
        }

        $otherPrizes = [];
        for ($i = 0; $i < 20; $i++) {
            $skip = rand(0, $count - 1);
            $otherPrizes[] = DB::table('tickets')
                ->skip($skip)
                ->take(1)
                ->first()->number;
        }

        return response()->json([
            'firstPrizes' => $firstPrizes,
            'secondPrizes' => $secondPrizes,
            'thirdPrizes' => $thirdPrizes,
            'otherPrizes' => $otherPrizes,
        ]);
    }
}
