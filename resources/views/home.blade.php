@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="mx-auto my-3 btn btn-success">
                    <a href="{{url('mahasiswa')}}" class="text-dark" style="text-decoration: none;">Menuju Data</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
