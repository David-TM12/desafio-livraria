<?php

namespace App\Http\Controllers\Restrito;

use App\DataTables\UserDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Services\UserService;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(UserDataTable $userDataTable)
    {
        return $userDataTable->render('restrito.user.index');
    }




    public function create()
    {
        return view('restrito.user.form');
    }



    public function store(UserRequest $request)
    {
        $criar = UserService::store($request->all());
        if ($criar) 
        {
            return redirect()->route('restrito.users.index')
                ->withSucesso('Cadastrado com sucesso');
        }
        return back()->withInput()
            ->with('Erro ao cadastrar');
    }



    public function edit(User $user)
    {
        return view('restrito.user.form', compact('user'));
    }



    public function update(UserRequest $request, User $user)
    {
        $atualizacao = UserService::update($request->all(), $user);
        if ($atualizacao) 
        {
            return redirect()->route('restrito.users.index')
                ->withSucesso('Atualizado com sucesso');
        }
        return back()->withInput()->withFalha('Erro ao atualizar');
    }



    public function destroy(User $user)
    {
        $deleteLivro = UserService::destroy($user);

        if ($deleteLivro) 
        {
            return response('Apagado com sucesso', 200);
        }

        return response('Erro ao apagar', 400);
    }
}
