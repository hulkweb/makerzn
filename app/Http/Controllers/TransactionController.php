<?php

namespace App\Http\Controllers;

use App\Enums\TransactionStatus;
use App\Enums\TransactionType;
use App\Models\Currency;
use App\Models\Transaction;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class TransactionController extends Controller
{

    public function deposit()
    {
        $deposits = Transaction::where("user_id", Auth::user()->id)->where("type", TransactionType::$DEPOSIT)->paginate(10);
        $currencies = Currency::all();
        $last = Transaction::where("user_id", Auth::user()->id)->where("type", TransactionType::$DEPOSIT)->latest()->first();
        return view("pages.user.deposit", compact('deposits', 'currencies', 'last'));
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
        return back()->with('deposit', 'Transaction created successfully');
    }
    public function deposit_post_verify(Request $request)
    {
        $validator = FacadesValidator::make($request->all(), [
            'deposit_id' => "required|exists:transactions,id",
            'file' => 'required'
        ]);

        if ($validator->fails()) {

            return back()->with('error', $validator->errors()->first());
        }

        $transaction = Transaction::find($request->deposit_id);
        if ($request->hasFile("file")) {
            $file = $request->file('file');
            $name = uniqid() . "." . $file->getClientOriginalExtension();
            $file->move("public/uploads", $name);
            $transaction->proof = $name;
        }
        $transaction->save();
        return back()->with('success', 'Uploaded successfully');
    }
    public function withdraw()
    {
        $withdraw = Transaction::where("user_id", Auth::user()->id)->where("type", TransactionType::$WITHDRAW)->paginate(10);
        $currencies = Currency::all();
        $last = Transaction::where("user_id", Auth::user()->id)->where("type", TransactionType::$WITHDRAW)->latest()->first();
        return view("pages.user.withdraw", compact('withdraw', 'currencies', 'last'));
    }

    public function withdraw_post() {}
    public function withdraw_post_verify() {}
}
