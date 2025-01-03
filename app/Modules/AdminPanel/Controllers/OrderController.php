<?php

declare(strict_types=1);

namespace App\Modules\AdminPanel\Controllers;

use App\Http\Requests\Admin\Order\StoreOrderRequest;
use App\Http\Requests\Admin\Order\UpdateOrderRequest;
use App\Models\Order;
use App\Modules\AdminPanel\Services\Order\OrderService;
use App\Modules\Web\Controllers\Controller;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class OrderController extends Controller
{
    public function __construct(private OrderService $orderService)
    {
    }

    public function index(): View
    {
        $orders = Order::paginate(10);

        return view('admin.orders.orders', [
            'orders' => $orders
        ]);
    }

    public function create(): View
    {
        $orders = Order::all();
        return view('admin.orders.create', ['orders'=> $orders]);

    }

    public function store(StoreOrderRequest $request): RedirectResponse
    {
        $this->orderService->store($request->validated());
        return redirect()->route('admin.orders.index')->with('success', 'Продукт успешно добавлен!');
    }

    public function edit(Order $order): View
    {
        return view('admin.orders.edit', ['order' => $order]);
    }

    public function update(UpdateOrderRequest $request, int $id): RedirectResponse
    {
        $this->orderService->update($id, $request->validated());

        return redirect()->route('admin.orders.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(int $id): RedirectResponse
    {
        $this->orderService->delete($id);

        return redirect()->route('admin.orders.index')->with('success', 'Продукт успешно удалён.');
    }
}
