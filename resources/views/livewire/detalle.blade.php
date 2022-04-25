@extends('layouts.root')

@section('content')
    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <p>Total: {{$total}}</p>
        <p>Impuesto Total: {{$impuestoTotal}}</p>
        <br>
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <table class="table-auto w-full">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2">Usuario</th>
                        <th class="px-4 py-2">Producto</th>
                        <th class="px-4 py-2">Precio</th>
                        <th class="px-4 py-2">Impuesto</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detalle as $det)
                        <tr>
                            <td class="border px-4 py-2">{{ $det['usuario'] }}</td>
                            <td class="border px-4 py-2">{{ $det['producto'] }}</td>
                            <td class="border px-4 py-2">{{ $det['precio'] }}</td>
                            <td class="border px-4 py-2">{{ $det['impuesto'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
        <a href="/" class="px-3 py-2 w-200 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400">
            Cerrar
        </a>
    </div>
@endsection
