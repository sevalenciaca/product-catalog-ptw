<x-app-layouts title="Gestión de Productos">
    <div class="text-right">
        <a href="{{ route('products.create') }}" type="button" class="px-3 py-2 uppercase text-sm bg-gray-800 hover:bg-gray-700 text-white rounded-md shadow">crear producto</a>
    </div>
    <div class="mt-5 flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nombre
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Estado
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Stock
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Precio
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Descripción
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($products as $product)
                                <tr>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-sm"
                                                    src="{{ Storage::url($product->image->url) }}"
                                                    alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900 uppercase">
                                                    {{ $product->name }}
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    {{ $product->category->name }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        @if ($product->status == true)
                                            <i class="fas fa-check-circle text-green-600"></i>
                                        @else
                                        <i class="fas fa-times-circle text-red-600"></i>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">{{ $product->stock }}</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">${{ $product->price }}</div>
                                    </td>
                                    <td class="px-6 py-4 text-xs text-gray-500">
                                        {{ $product->description }}
                                    </td>
                                    <td class="px-6 py-4 text-right font-medium">
                                        <div class="flex items-center space-x-3">
                                            <a href="#" class="text-yellow-600 hover:text-yellow-900"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="text-red-600 hover:text-red-900"><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layouts>
