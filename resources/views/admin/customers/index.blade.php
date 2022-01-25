<x-app-layouts title="Gestión de Clientes">
    {{-- @if (session('info'))
        <x-alert>{{ session('info') }}</x-alert>
    @endif --}}
    <div class="text-right">
        <a href="{{ route('customers.create') }}" type="button" class="px-3 py-2 uppercase text-sm bg-gray-800 hover:bg-gray-700 text-white rounded-md shadow">crear producto</a>
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
                                    ID
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nombre completo
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Email
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Celular
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Products</span>
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($customers as $customer)
                                <tr>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">{{ $customer->id }}</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">{{ $customer->full_name }}</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">{{ $customer->email }}</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">{{ $customer->phone }}</div>
                                    </td>
                                    <td class="px-6 py-4 text-right font-medium">
                                        <a href="{{ route('home', $customer) }}" type="button" class="px-3 py-2 uppercase text-xs bg-gray-800 hover:bg-gray-700 text-white rounded shadow"><i class="fas fa-list"></i> productos</a>
                                    </td>
                                    <td class="px-6 py-4 text-right font-medium">
                                        <div class="flex items-center justify-end space-x-3">
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
