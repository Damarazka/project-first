@extends('layouts.app')
@section('content')
<section class="hero-section mb-3 pt-5">
    <div class="container">
        <div class="d-flex align-items-center justify-content-center">
            <div class="col-md-6 mb-3">
                <h1>Data Mahasiswa Universitas .......</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod, sem sit amet euismod
                    tincidunt, eros enim tempor lacus, sit amet bibendum felis tortor non ipsum. Fusce a velit ac nulla
                    vehicula faucibus.</p>
            </div>
            <div class="col-md-6">
                <img src="https://fatihgazi.id/wp-content/uploads/2022/12/Ankara-University.webp" alt="Hero Image" class="img-fluid mb-3 img-thumbnail">
                <a class="btn btn-primary" href="{{url('mahasiswa')}}">Lihat Data</a>
            </div>
        </div>
    </div>
</section>
@endsection