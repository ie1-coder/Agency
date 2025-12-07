@extends('layout.app')

@section('content')
    <!-- Page Header -->
    <header class="page-header bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4 fw-bold text-uppercase">Our Team</h1>
            <p class="lead mt-3 opacity-90">
                Meet the talented individuals behind our success.
            </p>
        </div>
    </header>

    <!-- Team Section -->
    <section class="page-section bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">
                    Dedicated professionals united by passion and precision.
                </h3>
            </div>

            <!-- Reusable Team Component -->
            <x-team-section />
        </div>
    </section>
@endsection
