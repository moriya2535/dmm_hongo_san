<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CompletedTask;
use Illuminate\Pagination\Paginator;

class CompletedTaskController extends Controller
{
    public function list()
    {
        $completedTasks = CompletedTask::paginate(10); // 1ページあたり10件のタスクを表示
    return view('task.completed_list', compact('completedTasks'));
    }
}
