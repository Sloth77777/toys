@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="grid grid-cols-12 gap-x-6 gap-y-10">
            <div class="col-span-12">
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium group-[.mode--light]:text-white">
                        Products
                    </div>
                    <div class="d-flex flex-column flex-md-row ms-md-auto">
                        <x-admin.add-button href="{{ route('admin.products.create') }}">
                            Add New Product
                        </x-admin.add-button>
                    </div>

                </div>
                <div class="mt-3.5 flex flex-col gap-8">
                    <div class="box box--stacked flex flex-col">
                        <div class="overflow-auto xl:overflow-visible">
                            <table data-tw-merge="" class="w-full text-left border-b border-slate-200/60">
                                <thead data-tw-merge="" class="">
                                <tr data-tw-merge="" class="">
                                    <td data-tw-merge=""
                                        class="px-5 border-b dark:border-darkmode-300 w-5 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                        <input data-tw-merge="" type="checkbox"
                                               class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50">
                                    </td>
                                    <td data-tw-merge=""
                                        class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-2 font-medium text-slate-500">
                                        Title
                                    </td>

                                    <td data-tw-merge=""
                                        class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-2 font-medium text-slate-500">
                                        Description
                                    </td>
                                    <td data-tw-merge=""
                                        class="px-5 border-b dark:border-darkmode-300 w-52 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                        Image
                                    </td>
                                    <td data-tw-merge=""
                                        class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                        Price
                                    </td>
                                    <td data-tw-merge=""
                                        class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                        Discount
                                    </td>
                                    <td data-tw-merge=""
                                        class="px-5 border-b dark:border-darkmode-300 w-20 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                        Created_at
                                    </td>
                                    <td data-tw-merge=""
                                        class="px-5 border-b dark:border-darkmode-300 w-20 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                        Updated_at
                                    </td>

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
                                @foreach($products as $product)
                                    <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                        <td data-tw-merge=""
                                            class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                            <input data-tw-merge="" type="checkbox"
                                                   class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50">
                                        </td>

                                        <x-admin.td-product :style="'width: 200px'">
                                            <a class="font-medium text-decoration-none" href="{{ route('main.home.show', $product->id) }}">
                                                {{ $product->title }}
                                            </a>
                                        </x-admin.td-product>

                                        <x-admin.td-product :style="'width: 400px'">
                                            {{ $product->description }}
                                        </x-admin.td-product>

                                        <x-admin.td-product>
                                            <img src="{{ $product->image }}" alt="{{ $product->title }}"
                                                 class="max-w-[80px] max-h-[80px] object-cover"/>
                                        </x-admin.td-product>

                                        <x-admin.td-product>
                                            {{ $product->price }}
                                        </x-admin.td-product>

                                        <x-admin.td-product>
                                            {{ $product->discount }}
                                        </x-admin.td-product>

                                        <x-admin.td-product>
                                            {{ $product->created_at }}
                                        </x-admin.td-product>

                                        <x-admin.td-product>
                                            {{ $product->updated_at }}
                                        </x-admin.td-product>

                                        <td data-tw-merge=""
                                            class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600 w-1/6">
                                            <div class="flex items-center">
                                                <a class="whitespace-nowrap font-medium"
                                                   href="{{ route('admin.products.edit',$product->id) }}">
                                                    <i data-tw-merge="" data-lucide="pen-line"
                                                       class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td data-tw-merge=""
                                            class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600 w-1/6">
                                            <form action="{{ route('admin.products.destroy', $product->id) }}"
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
                        <div class="flex-reverse flex flex-col-reverse flex-wrap items-center gap-y-2 p-5 sm:flex-row">
                            <nav class="mr-auto w-full flex-1 sm:w-auto">
                                {{--                                <ul class="flex w-full mr-0 sm:mr-auto sm:w-auto">--}}
                                {{--                                    <li class="flex-1 sm:flex-initial">--}}
                                {{--                                        <a data-tw-merge=""--}}
                                {{--                                           class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i--}}
                                {{--                                                data-tw-merge="" data-lucide="chevrons-left"--}}
                                {{--                                                class="stroke-[1] h-4 w-4"></i></a>--}}
                                {{--                                    </li>--}}
                                {{--                                    <li class="flex-1 sm:flex-initial">--}}
                                {{--                                        <a data-tw-merge=""--}}
                                {{--                                           class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i--}}
                                {{--                                                data-tw-merge="" data-lucide="chevron-left"--}}
                                {{--                                                class="stroke-[1] h-4 w-4"></i></a>--}}
                                {{--                                    </li>--}}
                                {{--                                    <li class="flex-1 sm:flex-initial">--}}
                                {{--                                        <a data-tw-merge=""--}}
                                {{--                                           class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>--}}
                                {{--                                    </li>--}}
                                {{--                                    <li class="flex-1 sm:flex-initial">--}}
                                {{--                                        <a data-tw-merge=""--}}
                                {{--                                           class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">1</a>--}}
                                {{--                                    </li>--}}
                                {{--                                    <li class="flex-1 sm:flex-initial">--}}
                                {{--                                        <a data-tw-merge=""--}}
                                {{--                                           class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 !box dark:bg-darkmode-400">2</a>--}}
                                {{--                                    </li>--}}
                                {{--                                    <li class="flex-1 sm:flex-initial">--}}
                                {{--                                        <a data-tw-merge=""--}}
                                {{--                                           class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">3</a>--}}
                                {{--                                    </li>--}}
                                {{--                                    <li class="flex-1 sm:flex-initial">--}}
                                {{--                                        <a data-tw-merge=""--}}
                                {{--                                           class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>--}}
                                {{--                                    </li>--}}
                                {{--                                    <li class="flex-1 sm:flex-initial">--}}
                                {{--                                        <a data-tw-merge=""--}}
                                {{--                                           class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i--}}
                                {{--                                                data-tw-merge="" data-lucide="chevron-right"--}}
                                {{--                                                class="stroke-[1] h-4 w-4"></i></a>--}}
                                {{--                                    </li>--}}
                                {{--                                    <li class="flex-1 sm:flex-initial">--}}
                                {{--                                        <a data-tw-merge=""--}}
                                {{--                                           class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i--}}
                                {{--                                                data-tw-merge="" data-lucide="chevrons-right"--}}
                                {{--                                                class="stroke-[1] h-4 w-4"></i></a>--}}
                                {{--                                    </li>--}}
                                {{--                                </ul>--}}
                            </nav>
                            <div class="d-flex justify-content-center p-3">
                                {{ $products->links() }}
                            </div>
                            {{--                            <select data-tw-merge=""--}}
                            {{--                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 rounded-[0.5rem] sm:w-20">--}}
                            {{--                                <option>10</option>--}}
                            {{--                                <option>25</option>--}}
                            {{--                                <option>35</option>--}}
                            {{--                                <option>50</option>--}}
                            {{--                            </select>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
