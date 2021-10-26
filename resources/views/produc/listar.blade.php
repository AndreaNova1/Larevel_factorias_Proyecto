@extends('welcome')
<div class="Container mt-1">

    @section('content')
        <div  class="row justify-content-center">
            <div class="col-md-10">

                <a href="/">
                    <br>
                    <img src="https://umgnaranjo.com/wp-content/uploads/2018/11/logo.png" width="100" height="100" class="rounded mx-auto d-block" alt="...">
                    <br>
                </a>
                <h2 class="text-center mb-5">Detalles del Pedido</h2>

                <table class="table table-bordered table-striped text-center  ">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Producto</th>
                        <th>Telefono</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($product as $products)
                        <tr>
                            <td>{{$products->nombre}}</td>
                            <td>{{$products->email}}</td>
                            <td>{{$products->producto}}</td>
                            <td>{{$products->telefono}}</td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
        {{$product->links()}}

            </div>
        </div>

    @endsection
</div>
