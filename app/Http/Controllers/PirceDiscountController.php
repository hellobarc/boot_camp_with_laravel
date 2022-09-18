<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\discount_order;


class PirceDiscountController extends Controller
{
    public function discountEmail(Request $request)
    {
        $discount_email = new discount_order;
        $discount_email->discount_email = $request->discount_email;
        $discount_email->save();
        return redirect()->route('frontend.promoCode');
    }
}
