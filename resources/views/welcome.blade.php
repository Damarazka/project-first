@extends('layouts.app')
@section('content')
<section class="hero-section mb-3 pt-5">
    <div class="container">
        <div class="d-flex align-items-center justify-content-center">
            <div class="col-md-6 mb-3">
                <h1>Data Mahasiswa Universitas .......</h1>
                <p>"Kami berkomitmen untuk memberikan pendidikan berkualitas tinggi yang berfokus pada pengembangan karakter, pemikiran kritis, dan kreativitas guna membentuk pemimpin masa depan yang beretika, inovatif, dan berdaya saing global."</p>
            </div>
            <div class="col-md-6">
                <img src="https://idn.sch.id/wp-content/uploads/2021/03/IDN-Boarding-School-Solo.jpg" alt="Hero Image" class="img-fluid mb-3 img-thumbnail">
                <a class="btn btn-primary" href="{{url('mahasiswa')}}">Lihat Data</a>
            </div>
        </div>
    </div>
</section>
@endsection