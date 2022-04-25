<div>
    <button class="mt-1 block px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400">
        <a href="/createFacturas">Generar facturas</a>
    </button>
    <br>
    @if (session('success'))
        <div>
            <p>{{session('success')}}</p>
        </div>
    @endif
    @if (session('error'))
        <div>
            <p>{{session('error')}}</p>
        </div>
    @endif
    @if($facturas != null)
        <table class="table-auto w-full">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">Id</th>
                    <th class="px-4 py-2">Total</th>
                    <th class="px-4 py-2">Impuesto cobrado</th>
                    <th class="px-4 py-2">Detalle</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($facturas as $factura)
                    <tr>
                        <td class="border px-4 py-2">{{ $factura->id }}</td>
                        <td class="border px-4 py-2">{{ $factura->total }}</td>
                        <td class="border px-4 py-2">{{ $factura->impuestoCobrado }}</td>
                        <td class="border px-4 py-2 grid">
                            <a href="/detalle/{{$factura->id}}" class="px-3 py-2 w-200 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400">
                                Ver detalle
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
