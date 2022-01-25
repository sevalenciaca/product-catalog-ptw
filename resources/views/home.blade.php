<x-app-layouts title="Catálogo">
    <div class="bg-white">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($products as $product)
                    <div class="group relative">
                        <div
                            class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                            <img src="@if ($product->image) {{ Storage::url($product->image->url) }} @else https://cdn.pixabay.com/photo/2015/01/21/14/14/apple-606761__340.jpg @endif" alt="Foto del producto"
                                class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700 uppercase">
                                    <a href="{{ route('sale', $customer, $product) }}">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        {{ $product->name }}
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">{{ $product->category->name }}</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">${{ $product->price }}</p>
                        </div>
                        <div class="mt-4 flex justify-between">
                            <p class="text-xs text-justify text-gray-600">{{ $product->description }}</p>
                        </div>
                        <div class="mt-4 flex justify-between">
                            <a href="{{ route('sale', $customer, $product) }}" type="button"
                                class="px-3 py-2 uppercase text-xs bg-gray-800 hover:bg-gray-700 text-white rounded shadow"><i
                                    class="fas fa-shopping-cart"></i> vender</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layouts>
