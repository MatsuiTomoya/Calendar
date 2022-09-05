<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Schedule;
use App\Models\User;

class ScheduleController extends Controller
{
    //
    /**
     * イベントを登録
     *
     * @param  Request  $request
     */
    public function scheduleAdd(Request $request, User $user)
    {
        logger($request->all());
        // バリデーション
        $request->validate([
            'start_date' => 'required|integer',
            'end_date' => 'required|integer',
            'event_name' => 'required|max:32',
            'body' => 'required|max:100',
        ]);

        // 登録処理
        $schedule = new Schedule;
        // JavaScriptのタイムスタンプはミリ秒なので秒に変換
        $schedule->start_date = $request->input('start_date') / 1000;
        $schedule->end_date = $request->input('end_date') / 1000;
        $schedule->event_name = $request->input('event_name');
        $schedule->body = $request->input('body');
        $schedule->user_id = Auth::id();
        $schedule->save();
        
        return;
    }
    
        /**
     * イベントを取得
     *
     * @param  Request  $request
     */
    public function scheduleGet(Request $request)
    {
        // バリデーション
        $request->validate([
            'start_date' => 'required|integer',
            'end_date' => 'required|integer'
        ]);

        // カレンダー表示期間
        $start_date = date('Y-m-d G:i', $request->input('start_date') / 1000);
        $end_date = date('Y-m-d G:i', $request->input('end_date') / 1000);

        // 登録処理
        return Schedule::query()
            ->select(
                // FullCalendarの形式に合わせる
                'start_date as start',
                'end_date as end',
                'event_name as title',
                'body as body',
                'id as id'
            )
            // FullCalendarの表示範囲のみ表示
            ->where('end_date', '>', $start_date)
            ->where('start_date', '<', $end_date)
            ->get();
    }
    
    //イベント削除処理
     public function scheduleDelete(Schedule $schedule, Request $request)
    {
        $schedule->delete();
        return redirect('/');
    }
}
