<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $permissions = Department::paginate();

        return view('admin.configuracoes.permissoes.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        //
        return view('admin.configuracoes.permissoes.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $data = $request->all();
        Department::create($data);

        return to_route('permissions.index')->with('messagesuccess','Registro criado com sucesso');;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        //
        $permission = Department::findOrFail($id);
        $roles = $permission->roles();
        $users = $permission->users();
        return view('admin.configuracoes.permissoes.show', compact('permission','roles','users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        //
        $permission = Department::findOrFail($id);
        return view('admin.configuracoes.permissoes.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) : RedirectResponse
    {
        //
        $data = $request->all();
        $permission = Department::findOrFail($id);
        $permission->update($data);

        return to_route('permissions.index')->with('messagesuccess','Registro criado com sucesso');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $permission = Department::findOrFail($id);
        $permission->delete();
        return to_route('permissions.index')->with('messagesuccess','Registro criado com sucesso');;
    }
}
