@extends('base')

@section('title12')
    Produits
@endsection
@section('content34')
    <h2>Produits:</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>image</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quanti }}</td>
                    <td>{{ $product->image }}</td>
                </tr>

            @empty
                <tr>
                    <td  colspan="6" align="center">
                        <p class="h4">Pas de produits</p>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
