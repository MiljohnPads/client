<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (!auth()->user()->token)
                        <x-nav-link href="/redirect"> Authorize from Server</x-nav-link>
                    @endif

                    <div class="container mx-auto mt-5 py-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($products as $product)
                                <div class="border rounded-1g p-4 bg-white">
                                    <h2 class="text-lg font-semibold mt-2">{{ $product['name'] }}</h2>
                                    <p class="text-gray-600">{{ $product['description'] }}</p>
                                    <p class="text-xl font-bold mt-2 text-red-600">P{{ $product['price'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
