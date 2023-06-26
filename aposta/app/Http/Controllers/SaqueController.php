<?php

namespace App\Http\Controllers;

use App\Models\Saque;
use App\Http\Requests\StoreSaqueRequest;
use App\Http\Requests\UpdateSaqueRequest;
use Illuminate\Http\Request;
use App\Models\User;

class SaqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::find(auth()->user()->id);
        return view('/saque/historicoSaque', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/saque/saque');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::find(auth()->user()->id);

        if($request->valorSaque > $user->balance)
        {
            return redirect()->back()->with('danger', 'Você não possui saldo suficiente para este saque');
        }

        Saque::create([
            'data_saque' => date('d-m-y h:i:s'),
            'valor' => $request->valorSaque,
            'user_id' => auth()->user()->id,
            'banco' => $request->banco,
            'nomeTitular' => $request->titular,
            'nConta' => $request->nConta,
            'nAgencia' => $request->nAgencia,
            'tipoConta' => $request->tipoConta
        ]);

        $user->balance = $user->balance - $request->valorSaque;
        $user->save();

        return redirect('/')->with('saque', 'Saque realizado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Saque $saque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Saque $saque)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSaqueRequest $request, Saque $saque)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Saque $saque)
    {
        //
    }
}
