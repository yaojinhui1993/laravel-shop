<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use App\Services\OrderService;
use App\Http\Requests\OrderRequest;
use App\Exceptions\InvalidRequestException;

class OrdersController extends Controller
{
    public function store(OrderRequest $request, OrderService $orderService)
    {
        $user = $request->user();
        $address = UserAddress::find($request->input('address_id'));

        $order = $orderService->store($user, $address, $request->input('remark'), $request->input('items'));

        return $order;
    }

    public function index(Request $request)
    {
        $orders = Order::query()
            // 使用 with 方法预加载，避免 N+1 问题
            ->with(['items.product', 'items.productSku'])
            ->where('user_id', $request->user()->id)
            ->orderBy('created_at', 'desc')
            ->paginate();

        return view('orders.index', ['orders' => $orders]);
    }

    public function show(Order $order, Request $request)
    {
        $this->authorize('own', $order);

        return view('orders.show', [
            'order' => $order->load(['items.productSku', 'items.product'])
        ]);
    }

    public function received(Order $order, Request $request)
    {
        // 校验权限
        $this->authorize('own', $order);

        // 判断订单的发货状态是否为已发货
        if ($order->ship_status !== Order::SHIP_STATUS_DELIVERED) {
            throw new InvalidRequestException('发货状态不正确');
        }

        // 更新发货状态为已收到
        $order->update([
            'ship_status' => Order::SHIP_STATUS_RECEIVED,
        ]);

        // 返回原页面
        return $order;
    }
}
