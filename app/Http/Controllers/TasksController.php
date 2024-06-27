<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use App\Models\User;
use App\Http\Requests\StoreTasksRequest;
use App\Http\Requests\UpdateTasksRequest;
use Illuminate\View\View;
//use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            //$id = Auth::user()->id;
           
           // $tasks = Tasks::where('user_id', Auth::user()->id)->get()->paginate(25);

        return view('tasks.index', [
            'tasks' => Tasks::where('user_id', Auth::user()->id)->paginate(25)
        ]);
    }
    
    return redirect("login")->withSuccess('الرجاء تسجيل الدخول');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        if (Auth::check()) {
        return view('tasks.create');
        }
        return redirect("login")->withSuccess('الرجاء تسجيل الدخول');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTasksRequest $request)
    {
        Tasks::create($request->validated());

        return redirect()->route('tasks.index')->withSuccess('تم اضافة المهمة الجديدة بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tasks $task) : View
    {
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tasks $task) : View
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTasksRequest $request, Tasks $task)
    {
        $task->update($request->validated());

        return redirect()->back()
                ->withSuccess('تم تعديل المهمة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tasks $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')
                ->withSuccess('تم حذف المهمة بنجاح');
    }
}
