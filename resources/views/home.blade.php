@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="{{ route('admin.index') }}">
                    {{ __('Admin panel') }}
                </a>
            </div>
        </div>
    </div>
@endsection
