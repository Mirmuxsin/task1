<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use App\Models\WalletsHistory;
use Illuminate\Http\Request;

class WalletController extends Controller
{

    public function index()
    {
        return view('wallet.index');
    }

    public function create()
    {
        return view('wallet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'balance' => 'required'
        ]);

        $wallet = Wallet::find($id);
        $wallet['balance'] = ($wallet['balance'] + $request['balance']);
        $wallet->save();

        $history = new WalletsHistory();
        $history['user_id'] = auth()->user()['id'];
        $history['amount'] = $request['balance'];
        $history->save();


        return view('wallet.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
