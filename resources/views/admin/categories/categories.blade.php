@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="grid grid-cols-12 gap-x-6 gap-y-10">
            <div class="col-span-12">
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium group-[.mode--light]:text-white">
                        Categories
                    </div>
                    <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                        <x-admin.add-button href="{{ route('admin.categories.create') }}">
                            Add New Category
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
                                        class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                        Title
                                    </td>
                                    <td data-tw-merge=""
                                        class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                        SubCategory
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
                                @foreach($categories as $category)
                                    @csrf
                                    <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                        <td data-tw-merge=""
                                            class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                            <input data-tw-merge="" type="checkbox"
                                                   class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50">
                                        </td>
                                        <td data-tw-merge=""
                                            class="px-5 border-b dark:border-darkmode-300 w-80 border-dashed py-4 dark:bg-darkmode-600">
                                            <div class="flex items-center">
                                                <div class="ml-3.5">
                                                    {{ $category->title }}
                                                </div>
                                            </div>
                                        </td>

                                        @if ($category->subcategories->isNotEmpty())
                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 w-80 border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="flex items-center">
                                                    <div class="ml-3.5">
                                                        @foreach ($category->subcategories as $subcategory)
                                                          <li>  {{ $subcategory->title }}</li>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </td>
                                        @else
                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 w-80 border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="flex items-center">
                                                    <div class="ml-3.5">
                                            Нет подкатегорий
                                                    </div>
                                                </div>
                                            </td>
                                        @endif
                                        <td data-tw-merge=""
                                            class="px-5 border-b dark:border-darkmode-300 w-80 border-dashed py-4 dark:bg-darkmode-600">
                                            <div class="flex items-center">
                                                <div class="ml-3.5">
                                                    {{ $category->created_at }}
                                                </div>
                                            </div>
                                        </td>
                                        <td data-tw-merge=""
                                            class="px-5 border-b dark:border-darkmode-300 w-80 border-dashed py-4 dark:bg-darkmode-600">
                                            <div class="flex items-center">
                                                <div class="ml-3.5">
                                                    {{ $category->updeted_at }}
                                                </div>
                                            </div>
                                        </td>
                                        <td data-tw-merge=""
                                            class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600 w-1/6">
                                            <div class="flex items-center">
                                                <a class="whitespace-nowrap font-medium"
                                                   href="{{ route('admin.categories.edit',$category->id) }}">
                                                    <i data-tw-merge="" data-lucide="pen-line"
                                                       class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td data-tw-merge=""
                                            class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600 w-1/6">
                                            <form action="{{ route('admin.categories.destroy', $category->id) }}"
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
                                <div class="d-flex justify-content-center p-3">
                                    {{ $categories->links() }}
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.categories.popup-create-category')
@endsection
@section('scripts')
    <script>
        let storeCategoryUrl = "{{ route('admin.categories.store') }}";

        function storeCategory() {
            $.post(storeCategoryUrl, {
                title: $('#title').val(),
            })
                .done(function () {
                    // window.location.reload();
                });
        }
    </script>
@endsection
