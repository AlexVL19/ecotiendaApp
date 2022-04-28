@extends('layouts.app')

@section('title', 'Productos')

@section('contents')

    <div class="container mt-3 mb-5">
        <h3 class="text-center">Lista de productos</h3>
        <br>
        <center>
            <a href="{{ route('products.create')}}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Añadir...</a>
            <br>
            <br>
            <div>
                <div class="mr-5 ml-5">
                    <div class="">
                        <form action="" method="GET" role="search">

                            <div class="input-group">
                                <input type="text" class="form-control mr-2" name="term" placeholder="Buscar por producto..." id="term" size="6">
                                <span class="input-group-btn mr-5 mt-1">
                                    <button class="btn btn-success" type="submit">
                                        <i class="fa fa-search"></i> Buscar
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <hr class="text-center" style="line-height: 250px">
        </center>
    </div>

        <center>
        <div class="row">

            @foreach ($prodobj as $pro)

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ Storage::url($pro->image) }}">
                <div class="card-body">
                  <h5 class="card-title">{{$pro->product_name}}</h5>
                  <p class="card-text">{{$pro->desc}}</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><b>Precio:</b> {{$pro->cost}}</li>
                  <li class="list-group-item"><b>Cantidad:</b> {{$pro->quantity}}</li>
                  <li class="list-group-item"><b>ID categoría:</b> {{$pro->cat_id}}</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
            </div>

        </div>
        @endforeach
        </center>
@endsection
