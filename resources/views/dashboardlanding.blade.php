@extends('landingpage.layout.index')
@section('content')
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Welcome To PresensiKu!</div>
        <div class="masthead-heading text-uppercase">Memudahkan PresensiMu ! </div>
        <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
    </div>
</header>

<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <a href="#">
                        <i class="fas fa-file fa-stack-1x fa-inverse"></i>
                    </a>
                </span>
                <h4 class="my-3">Management CUTI</h4>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <a href="#">
                        <i class="fas fa-address-book fa-stack-1x fa-inverse"></i>
                    </a>
                </span>
                <h4 class="my-3">ABSEN</h4>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <a href="#">
                        <i class="fas fa-money-bills fa-stack-1x fa-inverse"></i>
                    </a>
                </span>
                <h4 class="my-3">JABATAN</h4>
            </div>
        </div>
    </div>
</section>

<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{ asset('landing/assets/img/team/airell.jpeg') }}" alt="..." />
                    <h4>Airell Aristo</h4>
                    <p class="text-muted">Full Stack Web Developer</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
        </div>
    </div>
</section>
@endsection
