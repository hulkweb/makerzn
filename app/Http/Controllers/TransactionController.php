<?php

namespace App\Http\Controllers;

use App\Enums\TransactionStatus;
use App\Enums\TransactionType;
use App\Models\Currency;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{

    public function deposit()
    {
        $deposits = Transaction::where("user_id", Auth::user()->id)->where("type", TransactionType::$DEPOSIT)->paginate(10);
        $currencies = Currency::all();

        return view("pages.user.deposit", compact('deposits', 'currencies'));
    }
    public function deposit_post(Request $request)
    {

        $currency = Currency::find($request->currency_id);

        $new_transaction = new Transaction();
        $new_transaction->type = TransactionType::$DEPOSIT;
        $new_transaction->user_id = Auth::id();
        $new_transaction->usd_value = $request->amount;
        $new_transaction->amount = $request->amount / $currency->usd_value;

        $new_transaction->status = TransactionStatus::$PENDING;

        $new_transaction->currency_id = $request->currency_id;
        $new_transaction->save();
        return back()->with('success', 'Transaction created successfully');
    }
    public function deposit_post_verify() {}
    public function withdraw_post() {}
    public function withdraw_post_verify() {}
}
