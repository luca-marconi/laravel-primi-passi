@extends('layouts.admin')

@section('titolo')
    Prodotti
@endsection

@section('main')
    <table>
    <thead>
      <tr>
        <th>Nome Prodotto</th>
        <th>Descrizione</th>
        <th>Tipo</th>
      </tr>
    </thead>
    <tbody>
      @foreach (config('products') as $product)
      <tr>
        <td>{{$product['titolo']}}</td>
        {{-- <td>{{ $product['descrizione'] }}</td> --}}
        <td>{!! $product['descrizione'] !!}</td>
        <td>{{$product['tipo']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
