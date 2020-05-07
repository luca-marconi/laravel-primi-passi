@php
    $arrayProdotti = config('products');
    $prodotto = $arrayProdotti[$id];


@endphp

@extends('layouts.layout')

@section('titolo')
    {{$prodotto['titolo']}}
@endsection

@section('mainContent')

    <div class="prodotto">
        @if ($id == 0)
            <a href="{{route('prodotti.show', $id = 11)}}"><i class="fas fa-chevron-left"></i></a>
        @else
            <a href="{{route('prodotti.show', $id - 1)}}"><i class="fas fa-chevron-left"></i></a>
        @endif
        <h3>{{$prodotto['titolo']}}</h3>
        <img src="{{$prodotto['src-h']}}" alt="">
        <img src="{{$prodotto['src-p']}}" alt="">
        <p>{{$prodotto['descrizione']}}</p>
        @if ($id == count($arrayProdotti) -1)
            <a href="{{route('prodotti.show', $id = 0)}}"><i class="fas fa-chevron-right"></i></a>
        @else
            <a href="{{route('prodotti.show', $id + 1)}}"><i class="fas fa-chevron-right"></i></a>
        @endif
    </div>

@endsection
