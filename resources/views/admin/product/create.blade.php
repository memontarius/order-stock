@extends('adminlte::page')

@php /** @var Illuminate\Database\Eloquent\Collection $categories */@endphp

@section('title_prefix', 'Новый товар')

@section('content')
    <div class="row justify-content-right">
        <div class="col-lg-6 col-md-12">
            <div class="wrapper">
                <x-adminlte-alert theme="success" title="Success">
                    Success theme alert!
                </x-adminlte-alert>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Новый товар</h3>
                    </div>
                    <form action="{{ route('admin.product.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="product-name">Название товара</label>
                                <input name="name" id="product-name" type="text"
                                       class="form-control
                                       @error('name') is-invalid @enderror"
                                       value="{{ old('name') }}">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="product-cat">Категория</label>
                                <select name="category_id" name="" id="product-cat" class="form-control">
                                    @foreach($categories as $category)
                                        <option {{ (old('category_id') == $category->id) ? 'selected' : '' }}
                                                value="{{ $category->id }}">{{ __($category->name) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="product-desc">Описание</label>
                                <textarea name="description" id="product-desc" class="form-control" rows="3"
                                          placeholder="Введите описание..."
                                          type="text">{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="product-price">Цена</label>
                                <input name="price" id="product-price" type="text"
                                       class="form-control
                                       @error('price') is-invalid @enderror"
                                       value="{{ old('price') }}">
                                @error('price')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Создать</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
