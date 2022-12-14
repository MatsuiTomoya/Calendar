<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\{Post, User, Schedule};

class PostController extends Controller
{
    public function top(Schedule $schedule)
    {
        
        return view('top');
    }
    
    public function my_page(User $user)
    {
        $id = Auth::id();
        $user = DB::table('users')->find($id);
        $schedule = Schedule::where('user_id', $id)->get();
   
        
        return view('my_page', ['my_user' => $user], ['my_schedules' => $schedule]);
    }
}
