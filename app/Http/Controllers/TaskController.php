<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }


    public function show($id)
    {
        $task = task::find($id);
        return view('tasks.show', ['task' => $task]);
    }

    public function edit($id)
    {
        $task = task::find($id);
        return view('tasks.edit', ['task' => $task]);
    }

    public function store(TaskRequest $request)
    {
        $task = new Task;

        $task->title = $request->title;
        $task->body = $request->body;

        $task->save();
        // 登録したらindexに戻る
        return redirect('/tasks');
    }

    public function update(TaskRequest $request, $id)
    {
        // ここはidで探して持ってくる以外はstoreと同じ
        $task = task::find($id);
        // 値の用意

        $task->title = $request->title;
        $task->body = $request->body;

        // 保存
        $task->save();
        // 登録したらindexに戻る
        return redirect('/tasks');
    }
    public function destroy($id)
    {
        $item = task::find($id);
        $item->delete();
        return redirect('/tasks');
    }
}
