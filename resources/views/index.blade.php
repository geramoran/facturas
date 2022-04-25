@extends('layouts.root')

@section('content')
@auth
    @if (Auth::user()->tipoUser()->first()->Tipo === 'Administrador')
    <div>
        <livewire:panel-admin>
    </div>
    @elseif (Auth::user()->tipoUser()->first()->Tipo === 'Cliente')
    <div>
        <livewire:listado-productos>
    </div>
    @endif
@endauth
@endsection
