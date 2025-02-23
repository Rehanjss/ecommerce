<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\History;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    //
    public function show($id): View
    {
      $product = Product::findOrFail($id);
      $grossAmount = $product->price;
      $payments = $this->getpayments($grossAmount);
      return view('checkout', compact('product', 'payments'));
    }

    public function pay($grossamount)
    {
      $history = new History();
      $history->user_id = Auth::user()->id;
      $history->shipping_receiver_name = Auth::user()->name;
      $history->shipping_address = 'Citra Indah, Kec. Jonggol, Kab, Bogor, Jawa Barat, 1630';
      $history->amount = $grossamount;

  		$payments = $this->getpayments($grossamount);
      $history->payment_token = '';
      $history->payment_redirect_url = $payments['redirect_url'];
      $history->payment_id = '';
      $history->save();
        \Cart::clear();
        return redirect($payments['redirect_url']);
    }
	
    function getRandomString($n) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
    
        for ($i = 0; $i < $n; $i++) {
            $index = random_int(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
    
        return $randomString;
    }
    
    private function getpayments($grossAmount) {
        $curl = curl_init();

        curl_setopt_array($curl, [
          CURLOPT_URL => "https://app.sandbox.midtrans.com/snap/v1/transactions",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode([
            'transaction_details' => [
                'order_id' => $this->getRandomString(10),
                'gross_amount' => $grossAmount
            ],
            'credit_card' => [
                'secure' => true
            ]
          ]),
          CURLOPT_HTTPHEADER => [
            "accept: application/json",
            "authorization: Basic U0ItTWlkLXNlcnZlci05S0MyVXBJdU9xdzF3Q3NZWkIzU0tQMGI6SmVsdXNzbzEyMw==",
            "content-type: application/json"
          ],
        ]);
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        $payments = null;
        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          $payments = json_decode($response,1);
        }
        return $payments;
    }	
}
