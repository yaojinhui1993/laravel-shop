<?php

namespace App\Http\Controllers;

use App\Models\CouponCode;

class CouponCodesController extends Controller
{
    public function show($code)
    {
        // 判断优惠券是否存在
        if (! $record = CouponCode::where('code', $code)->first()) {
            abort(404);
        }

        // 如果优惠券没有启用，则等同于优惠券不存在
        if (! $record->enabled) {
            abort(404);
        }

        $record->checkAvailable(request()->user());

        return $record;
    }
}
