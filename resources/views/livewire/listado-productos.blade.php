
<div class="mx-4">
    <form action="/compra" method="POST">
        @csrf
        @foreach ($productos as $producto)
            <div class="form-check">
                <input type="radio" name={{ $producto->nombre }} value={{ $producto->id }} class="form-check-input" id="rb-{{ $producto->id }}">
                <label class="form-check-label" for="rb-{{ $producto->id }}">{{ $producto->nombre }}</label>
            </div>
        @endforeach
        <br>
        <input type="submit" value="Comprar" class="px-3 py-2 w-200 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400">
        <div>
            <p>{{session('success')}}</p>
        </div>
    </form>
</div>
