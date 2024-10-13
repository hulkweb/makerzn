<?php

namespace App\Http\Controllers;

use App\Enums\TransactionStatus;
use App\Enums\TransactionType;
use App\Models\Currency;
use App\Models\Transaction;
use App\Models\UserPlanDetail;
use Carbon\Carbon;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class TransactionController extends Controller
{

    public function deposit()
    {
        $deposits = Transaction::where("user_id", Auth::user()->id)->where("type", TransactionType::$DEPOSIT)->orderBy("id", "desc")->paginate(10);
        $currencies = Currency::all();
        $last = Transaction::where("user_id", Auth::user()->id)->where("type", TransactionType::$DEPOSIT)->latest()->first();
        return view("pages.user.deposit", compact('deposits', 'currencies', 'last'));
    }
    public function deposit_post(Request $request)
    {

        $currency = Currency::find($request->currency_id);
        if (Carbon::now()->diffInHours($currency->updated_at) > 1) {

            $amount =  getCryptoAmountForCurrency($request->amount, $currency->symbol);
        }
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
            'image' => 'required'
        ]);

        if ($validator->fails()) {

            return back()->with('error', $validator->errors()->first());
        }

        $transaction = Transaction::find($request->deposit_id);
        if ($request->hasFile("image")) {
            $file = $request->file('image');
            $name = uniqid() . "." . $file->getClientOriginalExtension();
            $file->move("public/uploads/proofs", $name);
            $transaction->proof = $name;
        }
        $transaction->save();
        return back()->with('success', 'Uploaded successfully');
    }
    public function withdraw()
    {
        $withdraw = Transaction::where("user_id", Auth::user()->id)->where("type", TransactionType::$WITHDRAW)->orderBy("id", "desc")->paginate(10);
        $currencies = Currency::all();
        $last = Transaction::where("user_id", Auth::user()->id)->where("type", TransactionType::$WITHDRAW)->latest()->first();
        return view("pages.user.withdraw", compact('withdraw', 'currencies', 'last'));
    }

    public function withdraw_post(Request $request)
    {
        $plan_active = UserPlanDetail::where("status", "Active")->count();
        if ($plan_active) {
            return back()->with('error', 'Your plan is active . you can withdraw after completion');
        }

        if (Auth::user()->wallet_balance < $request->usd_value) {
            return back()->with('error', 'Insufficient funds');
        }
        $currency = Currency::find($request->currency_id);

        $new_transaction = new Transaction();
        $new_transaction->type = TransactionType::$WITHDRAW;
        $new_transaction->user_id = Auth::id();
        $new_transaction->usd_value = $request->amount;
        $new_transaction->amount = $request->amount / $currency->usd_value;

        $new_transaction->status = TransactionStatus::$PENDING;

        $new_transaction->currency_id = $request->currency_id;
        $new_transaction->save();
        return back()->with('success', 'Transaction created successfully');
    }
    public function withdraw_post_verify() {}
}
