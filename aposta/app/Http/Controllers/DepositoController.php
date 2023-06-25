<?php

namespace App\Http\Controllers;

use App\Models\Deposito;
use App\Models\User;
use App\Http\Requests\StoreDepositoRequest;
use App\Http\Requests\UpdateDepositoRequest;
use Illuminate\Http\Request;

class DepositoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::find(auth()->user()->id);
        return view('/deposito/historicoDeposito', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/deposito/deposito');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Deposito::create([
            'data_deposito' => date('d-m-y h:i:s'),
            'valor' => $request->valor,
            'cpf' => $request->cpf,
            'user_id' => auth()->user()->id
        ]);

        $user = User::find(auth()->user()->id);
        
        $user->update([
            'balance' => $request->valor
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Deposito $deposito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Deposito $deposito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepositoRequest $request, Deposito $deposito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Deposito $deposito)
    {
        //
    }
}
