@extends('layout.app')

@section('content')
    <!-- Page Header -->
    <header class="page-header bg-primary text-white text-center py-5 mt-4">
        <div class="container">
            <h1 class="display-4 fw-bold text-uppercase">About Us</h1>
            <p class="lead mt-3 opacity-90">
                The story behind our passion, vision, and relentless pursuit of excellence.
            </p>
        </div>
    </header>

    <!-- About Section -->
    <section class="page-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-heading text-uppercase">Our Story</h2>
                <h3 class="section-subheading text-muted">
                    From humble beginnings to digital innovation.
                </h3>
            </div>

            <!-- Timeline -->
            <ul class="timeline">
                <!-- Timeline Item 1 -->
                <li>
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="{{ asset('assets/img/about/1.jpg') }}" alt="Our Humble Beginnings" />
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2009–2011</h4>
                            <h4 class="subheading">Our Humble Beginnings</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Founded in a small garage, we started by building simple websites for local businesses.
                                Our mission: to make digital presence accessible to everyone.
                            </p>
                        </div>
                    </div>
                </li>

                <!-- Timeline Item 2 -->
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="{{ asset('assets/img/about/2.jpg') }}" alt="An Agency is Born" />
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>March 2011</h4>
                            <h4 class="subheading">An Agency is Born</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                With growing demand, we officially launched as a full-service digital agency,
                                expanding our team and service offerings.
                            </p>
                        </div>
                    </div>
                </li>

                <!-- Timeline Item 3 -->
                <li>
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="{{ asset('assets/img/about/3.jpg') }}" alt="Transition to Full Service" />
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>December 2015</h4>
                            <h4 class="subheading">Transition to Full Service</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                We evolved beyond design into development, strategy, and cybersecurity—
                                becoming a one-stop solution for modern brands.
                            </p>
                        </div>
                    </div>
                </li>

                <!-- Timeline Item 4 -->
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="{{ asset('assets/img/about/4.jpg') }}" alt="Phase Two Expansion" />
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>July 2020</h4>
                            <h4 class="subheading">Phase Two Expansion</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                We embraced remote collaboration, serving global clients while maintaining our core values:
                                integrity, creativity, and precision.
                            </p>
                        </div>
                    </div>
                </li>

                <!-- Final CTA Item -->
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Be Part<br />
                            Of Our<br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
@endsection
