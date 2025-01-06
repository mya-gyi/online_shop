<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentMethodRequest;
use Exception;
use Illuminate\Http\Request;
use App\Models\PaymentMethod;

class PaymentController extends Controller
{

    public function index()
    {
        $payment_methods = PaymentMethod::paginate(10);
        return view('admin.payments.index', ['payment_methods' => $payment_methods]);
    }

    public function create()
    {
        return view('admin.payments.create');
    }

    public function store(PaymentMethodRequest $request)
    {
        $validatedData = $request->validated();

        try{
            $payment_method = new PaymentMethod();
            $payment_method->account = $validatedData['account'];
            $payment_method->account_name = $validatedData['account_name'];
            $payment_method->account_number = $validatedData['account_number'];
            $payment_method->save();

            return redirect()->route('payments.index')->with('status', __('Payment method :account added'));
        }catch(Exception $e){
            return back()->with('error', 'Payment method creation failed');
        }
    }
}
