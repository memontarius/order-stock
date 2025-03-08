@extends('adminlte::page')

@section('title_prefix', 'Товары')

@section('content')
    <div class="row justify-content-right">
        <div class="col-2">
            <div class="wrapper">
                <a href="{{ route('admin.product.create') }}" class="btn btn-block btn-outline-primary">Добавить новый товар</a>
            </div>
        </div>
    </div>
@stop
