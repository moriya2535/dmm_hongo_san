<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CompletedShoppingList as CompletedShoppingListModel;
use Illuminate\Pagination\Paginator;

class CompletedShoppingListController extends Controller
{
    public function list()
    {
        $completedTasks = CompletedShoppingListModel::paginate(10); // 1ページあたり10件のタスクを表示
    return view('task.completed_list', compact('completedTasks'));
    }
}
