@extends('layout.template')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Data Mahasiswa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item m-1">
                    <a class=" btn btn-primary" href="#">login</a>
                </li>
                <li class="nav-item m-1">
                    <a class=" btn btn-warning" href="#">Sing up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1>Data Mahasiswa Universitas ......</h1>
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                    vehicula risus at mauris dapibus, a bibendum neque vestibulum.
                </p>
            </div>
            <div class="col-md-6">
                <img src="https://sabilalrisjad.com/wp-content/uploads/2021/02/Screenshot_600.jpg" class="img-fluid" alt="Gambar Hero" />
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>Hubungi Admin</h2>
            </div>
            <div class="col-md-6 text-end">
                <a href="#" class="btn btn-success btn-lg me-3">whatsapp</a>
                <a href="#" class="btn btn-primary btn-lg">telegram</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer class="footer-section py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>Hak Cipta Damarazka &copy; 2023 - Data Mahasiswa</p>
            </div>
            <div class="col-md-6 text-end">
                <a href="#" class="me-3"><i class="fab fa-facebook fa-lg"></i></a>
                <a href="#" class="me-3"><i class="fab fa-twitter fa-lg"></i></a>
                <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
            </div>
        </div>
    </div>
</footer>