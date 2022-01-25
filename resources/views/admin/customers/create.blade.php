<x-app-layouts title="Creación de Producto">
    <div>
        {!! Form::open(['route' => 'products.store', 'method' => 'post', 'autocomplete'=>'off', 'files'=>true, 'class' => 'bg-gray-50 p-5 rounded-sm shadow-md w-1/2 mx-auto']) !!}
        <div>
            <label class="text-sm" for="name">Nombre</label>
            <input
                class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-purple-500 focus:ring-purple-500 block w-full rounded-md sm:text-sm focus:ring-1"
                id="name" name="name" type="text">
        </div>
        <div class="mt-2 w-full flex space-x-4">
            <div class="w-full">
                <label class="text-sm" for="price">Precio</label>
                <input
                    class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-purple-500 focus:ring-purple-500 block w-full rounded-md sm:text-sm focus:ring-1"
                    id="price" name="price" type="text" placeholder="$">
            </div>
            <div class="w-full">
                <label class="text-sm" for="stock">Stock</label>
                <input
                    class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-purple-500 focus:ring-purple-500 block w-full rounded-md sm:text-sm focus:ring-1"
                    min="0" id="stock" name="stock" type="number">
            </div>
        </div>
        <div class="mt-2">
            <label class="text-sm" for="description">Descripción</label>
            <textarea
                class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-purple-500 focus:ring-purple-500 block w-full rounded-md sm:text-sm focus:ring-1"
                id="description" name="description" type="text" rows="3"></textarea>
        </div>
        <div class="mt-2">
            {!! Form::label('category_id', 'Seleccione la categoría', ['class' => 'text-sm']) !!}
            {!! Form::select('category_id', $categories, null, ['id' => 'category_id', 'class' => 'mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-purple-500 focus:ring-purple-500 block w-full rounded-md sm:text-sm focus:ring-1']) !!}
        </div>
        <div class="flex mt-5 space-x-4">
            <div class="flex items-center">
                {!! Form::radio('status', 1, true, ['id' => 'active', 'class' => 'focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300']) !!}
                {!! Form::label('active', 'Activo', ['class' => 'ml-2 block text-sm font-medium text-gray-700']) !!}
            </div>
            <div class="flex items-center">
                {!! Form::radio('status', 0, null, ['id' => 'inactive', 'class' => 'focus:ring-red-500 h-4 w-4 text-red-600 border-gray-300']) !!}
                {!! Form::label('inactive', 'Inactivo', ['class' => 'ml-2 block text-sm font-medium text-gray-700']) !!}
            </div>
        </div>
        <div class="mt-5">
            <label class="block">
                <span class="sr-only">Choose profile photo</span>
                <input name="file" type="file" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100"/>
            </label>
        </div>
        <div class="w-full text-right">
            <button type="submit" class="mt-5 px-3 py-2 uppercase text-sm bg-gray-800 hover:bg-gray-700 text-white rounded-md shadow">agregar producto</button>
        </div>
        {!! Form::close() !!}
    </div>
</x-app-layouts>
