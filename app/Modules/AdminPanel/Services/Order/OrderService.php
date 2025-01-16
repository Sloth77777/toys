<?php

declare(strict_types=1);

namespace App\Modules\AdminPanel\Services\Order;

use App\Models\Order;

class OrderService
{
    public function store(array $data): self
    {
        Order::query()->create($data);
        return $this;
    }

    public function update(int $id, array $data): self
    {
        $product = Order::query()->findOrFail($id);
        $product->update($data);
        return $this;
    }

    public function delete(int $id): self
    {
        $product = Order::query()->find($id);
        $product->delete();
        return $this;
    }
}
