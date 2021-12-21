<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transactions;
use Coinremitter\Coinremitter;

class PaymentController extends Controller
{
    /**
     * Save transactions
     * 
     * @param Request $request
     * 
     * @return void
     */
    public function payout(Request $request)
    {

        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
        ]);

        $total = 0;
        foreach (session('cart') as $product) {
            $total += $product['price'];
        }

        $transactions = new Transactions();
        $transactions->fname = $request->fname;
        $transactions->lname = $request->lname;
        $transactions->email = $request->email;
        $transactions->phone = $request->phone;
        $transactions->amount = $total;
        if ($transactions->save()) {
            return $this->createInvoice($request->fname.' '.$request->lname, $total, $transactions->id);
        } else {
            session()->flash('success-msg', 'Something went wrong, please try again.');
            return back();
        }
    }

    /**
     * Create payment invoice
     * 
     * @param string $name customer name
     * @param float $amount total worth of products purchased
     * @param int $id transaction id
     * 
     * @return bool
     */
    public function createInvoice($name, $amount, $id)
    {
        $btc_wallet = new Coinremitter('USDTERC20');

        $param = [
            'amount'=>$amount,      //required.
            'name'=> $name,//optional,
            'currency'=>'usd',//optional,
            'expire_time'=>'20',//optional, invoice will expire in 20 minutes.
            'description'=>'Payment for materials', //optional.
            'fail_url' => route('payment.success', ['id'=>$id]), //optional,url on which user will be redirect if user cancel invoice,
            'suceess_url' => route('payment.failed', ['id'=>$id]), //optional,url on which user will be redirect when invoice paid,
        ];
        
        $invoice  = $btc_wallet->create_invoice($param);

        $transactions = Transactions::find($id);
        $transactions->transaction_id = $invoice['data']['invoice_id'];
        $transactions->save;

        return redirect()->away($invoice['data']['url']);
    }

    /**
     * Payment successfull
     * 
     * @param int $id transaction id
     * 
     * @return void
     */
    public function paymentSuccessful($id)
    {
        $transactions = Transactions::find($id);
        $transactions->status = 1;
        $transactions->save;

        session()->flash('success-msg', 'Thank you, your payment has been confirmed.');
        return redirect()->route('home');
    }

    /**
     * Payment successfull
     * 
     * @param int $id transaction id
     * 
     * @return void
     */
    public function paymentFailed($id)
    {
        $transactions = Transactions::find($id);
        $transactions->status = -1;
        $transactions->save;

        session()->flash('success-msg', 'Your payment has been cancelled.');
        return redirect()->route('home');
    }
}
