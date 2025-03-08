@extends('adminlte::page')

@section('title_prefix', 'Заказы')

@section('content')
    <div class="row justify-content-right">
        <div class="col-2">
            <div class="wrapper">
                <a href="{{ route('admin.order.create') }}" class="btn btn-block btn-outline-primary">Создать новый заказ</a>
            </div>
        </div>
    </div>
@stop
