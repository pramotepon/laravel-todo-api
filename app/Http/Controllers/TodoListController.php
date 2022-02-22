<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use App\Http\Requests\StoreTodoListRequest;
use App\Http\Requests\UpdateTodoListRequest;
use App\Http\Resources\TodoListResource;

class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = TodoList::latest()->get();
        return TodoListResource::collection($todos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTodoListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTodoListRequest $request)
    {
        $data = $request->all();
        return new TodoListResource(TodoList::create($data));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TodoList  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(TodoList $todo)
    {
        return new TodoListResource($todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTodoListRequest  $request
     * @param  \App\Models\TodoList  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTodoListRequest $request, TodoList $todo)
    {
        $todo->update($request->all());
        return $todo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TodoList  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(TodoList $todo)
    {
        $todo->delete();
        return response('', 204);
    }
}
