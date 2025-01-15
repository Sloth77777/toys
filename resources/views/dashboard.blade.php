<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-2xl font-bold mb-4"><?php echo e(__("You're logged in!")); ?></h2>

                    @auth
                        @if(auth()->user()->hasRole('super-admin'))
                            <div class="admin-links mb-4">
                                <h3 class="text-lg font-semibold mb-2">Admin Panel</h3>
                                <ul class="list-disc list-inside space-y-2">
                                    <li>
                                        <a href="{{asset("admin/products")}}"
                                           class="text-blue-500 hover:underline">
                                            Products ADMIN
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{asset("admin/categories")}}"
                                           class="text-blue-500 hover:underline">
                                            Categories ADMIN
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{asset("admin/orders")}}"
                                           class="text-blue-500 hover:underline">
                                            Orders ADMIN
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    @endauth
                    <p>
                        <a href="{{asset("/")}}" class="text-blue-500 hover:underline">
                            Home
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
