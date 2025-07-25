@extends('layout')

@section('title', 'Stock des produits')
@section('header', 'Liste des produits')

@section('content')
    @foreach($produits as $produit) 
        <h2>{{ $produit['nom'] }}</h2>

        @if($produit['stock'] > 10)
            <p style="color: green;">En stock (plus de 10 disponibles)</p>
        @elseif($produit['stock'] > 0)
            <p style="color: orange;">Stock limité ({{ $produit['stock'] }} restants)</p>
        @else
            <p style="color: red;">Rupture de stock</p>
        @endif
        <hr>
    @endforeach
@endsection
