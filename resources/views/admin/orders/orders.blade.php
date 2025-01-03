@extends('admin.layouts.app')

@section('content')

    <div class="p-5">
        <div class="d-flex flex-column flex-md-row ms-md-auto">
            <a href="{{ route('admin.orders.create') }}"
               class="btn btn-outline-primary text-decoration-none d-flex align-items-center">
                Add New Product
            </a>
        </div>
        <div class="mt-3.5 flex flex-col gap-8">
            <div class="box box--stacked flex flex-col">
                <div class="overflow-auto xl:overflow-visible">
                    <table data-tw-merge="" class="w-full text-left border-b border-slate-200/60">
                        <thead data-tw-merge="" class="">
                        <tr>
                            <th class="px-5 border-b dark:border-darkmode-300 w-20 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                ID продукта
                            </th>
                            <th class="px-5 border-b dark:border-darkmode-300 w-20 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                Имя
                            </th>
                            <th class="px-5 border-b dark:border-darkmode-300 w-20 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                Фамилия
                            </th>
                            <th class="px-5 border-b dark:border-darkmode-300 w-20 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                Телефон
                            </th>
                            <th class="px-5 border-b dark:border-darkmode-300 w-20 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                Email
                            </th>

                            <td data-tw-merge=""
                                class="px-5 border-b dark:border-darkmode-300 w-20 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                Edit
                            </td>
                            <td data-tw-merge=""
                                class="px-5 border-b dark:border-darkmode-300 w-20 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                Delete
                            </td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 py-4 font-medium">{{ $order->product_id }}</td>
                                <td class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 py-4 font-medium">{{ $order->name }}</td>
                                <td class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 py-4 font-medium">{{ $order->surname }}</td>
                                <td class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 py-4 font-medium">{{ $order->phone_number }}</td>
                                <td class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 py-4 font-medium">{{ $order->email }}</td>
                                <td data-tw-merge=""
                                    class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600 w-1/6">
                                    <div class="flex items-center">
                                        <a class="whitespace-nowrap font-medium"
                                           href="{{ route('admin.orders.edit',$order->id) }}">
                                            <i data-tw-merge="" data-lucide="pen-line"
                                               class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                                        </a>
                                    </div>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600 w-1/6">
                                    <form action="{{ route('admin.orders.destroy',$order->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Вы уверены, что хотите удалить этот продукт?');">
                                        @csrf
                                        @method('DELETE')
                                        <div class="flex items-center">
                                            <button type="submit" class="flex items-center">
                                                <i data-tw-merge="" data-lucide="trash"
                                                   class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                                            </button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center p-3">
                    {{ $orders->links() }}
                </div>
            </div>

        </div>

    </div>

@endsection
