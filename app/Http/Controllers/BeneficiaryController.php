<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Beneficiary;

class BeneficiaryController extends Controller
{
    public function add(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'interval'=> 'required',
            'amount'=> 'required|numeric|min:1000',
            'account'=>'required|numeric|digits:10'
        ]);
        
        $name = $request->input('name');
        $interval = $request->input('interval');
        $amount = $request->input('amount');
        $account = $request->input('account');
        $status = 'active';
        $description = $request->input('description');
        $random = str_random(10);

        $ben = new Beneficiary;

        $ben->name = $name;
        $ben->interval = $interval;
        $ben->account = $account;
        $ben->amount = $amount;
        $ben->status = $status;
        $ben->description = $description;
        $ben->random = $random;
            
        $ses = $request->session()->get('sessionDetails');
        $email =strstr($ses['email'], '@', true);
        $email = strtolower($email);
        
        if($ben->save()):
            return redirect()->route('dashboard',['auth'=>$email ]);
        else:
            'Database error';
        endif;

    }
}
