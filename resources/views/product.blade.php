@php
    $arrayProdotti = config('products');
    $prodotto = $arrayProdotti[$id];
    // dd($prodotto);
@endphp

@extends('layouts.layout')

@section('titolo')
    {{$prodotto['titolo']}}
@endsection

@section('mainContent')
    <div class="prodotto">
        <h3>{{$prodotto['titolo']}}</h3>
        <img src="{{$prodotto['src-h']}}" alt="">
        <img src="{{$prodotto['src-p']}}" alt="">
        <p>{{$prodotto['descrizione']}}</p>
    </div>
@endsection
