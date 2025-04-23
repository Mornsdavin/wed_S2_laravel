<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{

    public function list()
    {
        $acc = Account::get();
        
        return response()->json($acc);
    }
    public function create(Request $request)
    {
        $acc = new Account();

        $acc-> username = $request->username;
        $acc-> password = $request->password;
        $acc-> user_type = $request->user_type;

        $acc->save();
        return response()->json('create success');

    }

    public function update(Request $request)
    {
        $acc = Account::findorfail($request->id);

        $acc-> username = $request->username;
        $acc-> password = $request->password;
        $acc-> user_type = $request->user_type;

        $acc->update();
        return response()->json('update success');

    }

     public function destroy(Request $request)
    {
        $acc = Account::findorfail($request->id)->delete();

        return response()->json("delete success");

    }
}
