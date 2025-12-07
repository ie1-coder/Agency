@extends('layout.app')

@section('content')
    <!-- Hero Masthead with Visual Enhancement -->
    <header class="masthead">
        <!-- Subtle radial gradient overlay for depth -->
        <div class="masthead-overlay"></div>
        <div class="container position-relative z-1 text-center">
            <!-- Subheading: Elegant, light, and inviting -->
            <div class="masthead-subheading fw-light mb-3" style="font-family: 'Roboto Slab', serif; font-weight: 300; font-size: 1.5rem; opacity: 0.95;">
                Welcome To Our Studio!
            </div>

            <!-- Main Heading: Bold, uppercase, with refined spacing -->
            <h1 class="masthead-heading text-uppercase" style="font-family: 'Montserrat', sans-serif; letter-spacing: 4px; font-weight: 700; font-size: 3.5rem;">
                It's Nice To Meet You
            </h1>

            <!-- CTA Button: Rounded, shadowed, with hover lift -->
            <a
                class="btn btn-primary btn-xl text-uppercase mt-4"
                href="#services"
                style="
                    border-radius: 50px;
                    padding: 16px 40px;
                    letter-spacing: 1px;
                    font-weight: 700;
                    box-shadow: 0 6px 20px rgba(0,0,0,0.18);
                    transition: all 0.35s ease;
                "
            >
                Tell Me More
            </a>
        </div>
    </header>

    <!-- Include other sections as partials (modular design) -->
    @include('pages.partials.services')
    @include('pages.partials.portfolio')
    @include('pages.partials.about')
    @include('pages.partials.team')
@endsection

@push('styles')
<style>
    /* Enhanced Masthead with layered depth */
    .masthead {
        background: linear-gradient(135deg, #0f0f3ce0, #000000bf),
                    url("{{ asset('assets/img/header-bg.jpg') }}") no-repeat center center scroll;
        background-size: cover;
        height: 100vh;
        min-height: 700px;
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
    }

    /* Radial light overlay for magical glow effect */
    .masthead-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(
            ellipse at center,
            transparent 0%,
            rgba(0, 0, 0, 0.4) 80%
        );
        pointer-events: none;
    }

    /* Button hover effect: subtle lift + shadow intensification */
    .masthead .btn-xl:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    }

    /* Section heading underline accent (golden) */
    .section-heading {
        position: relative;
        display: inline-block;
        margin-bottom: 1rem;
    }
    .section-heading::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: #fed136; /* Start Bootstrap's accent color */
        border-radius: 2px;
    }

    /* Service icon hover animation */
    .fa-stack {
        transition: transform 0.3s ease, filter 0.3s ease;
    }
    .fa-stack:hover {
        transform: scale(1.1);
        filter: drop-shadow(0 6px 12px rgba(0,0,0,0.25));
    }
</style>
@endpush
