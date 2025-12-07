@extends('layout.app')

@section('content')
    <!-- Services Page Header -->
    <header class="page-header bg-primary text-white text-center py-5 mt-4">
        <div class="container">
            <h1 class="display-4 fw-bold text-uppercase">Our Services</h1>
            <p class="lead mt-3 opacity-90">
                We deliver excellence in every project — from concept to launch.
            </p>
        </div>
    </header>

    <!-- Main Services Content -->
    <section class="page-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-heading text-uppercase">What We Offer</h2>
                <h3 class="section-subheading text-muted">
                    Tailored solutions for modern digital challenges.
                </h3>
            </div>

            <div class="row text-center">
                <!-- Service 1: E-Commerce -->
                <div class="col-md-4 mb-5">
                    <div class="service-card p-4 rounded shadow-sm h-100">
                        <span class="fa-stack fa-3x mb-4">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">
                            Build scalable, secure, and high-converting online stores with seamless payment integration,
                            inventory management, and mobile-first UX.
                        </p>
                    </div>
                </div>

                <!-- Service 2: Responsive Design -->
                <div class="col-md-4 mb-5">
                    <div class="service-card p-4 rounded shadow-sm h-100">
                        <span class="fa-stack fa-3x mb-4">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">
                            Pixel-perfect interfaces that adapt flawlessly across all devices — ensuring consistent
                            brand experience from desktop to smartphone.
                        </p>
                    </div>
                </div>

                <!-- Service 3: Web Security -->
                <div class="col-md-4 mb-5">
                    <div class="service-card p-4 rounded shadow-sm h-100">
                        <span class="fa-stack fa-3x mb-4">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">
                            Proactive defense against threats: penetration testing, secure authentication, encrypted
                            communications, and compliance with OWASP standards.
                        </p>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center mt-5 pt-4 border-top">
                <h3 class="mb-4">Ready to elevate your digital presence?</h3>
                <a href="{{ route('contact') }}" class="btn btn-primary btn-xl text-uppercase">
                    Start Your Project
                </a>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    /* Custom background for page header */
    .page-header {
        background: linear-gradient(135deg, #1a1a2e, #16213e);
    }

    /* Service card styling with subtle hover */
    .service-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: #fff;
        border: 1px solid #0000000d;
    }

    .service-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 25px #0000001f;
    }

    /* Ensure icons scale consistently */
    .fa-stack {
        transition: transform 0.25s ease;
    }

    .service-card:hover .fa-stack {
        transform: scale(1.15);
    }
</style>
@endpush
