@extends('layout.app')

@section('content')
    <!-- Page Header -->
    <header class="page-header bg-primary text-white text-center py-5 mt-4">
        <div class="container">
            <h1 class="display-4 fw-bold text-uppercase">Get In Touch</h1>
            <p class="lead mt-3 opacity-90">
                We'd love to hear from you. Send us a message!
            </p>
        </div>
    </header>

    <!-- Contact Section -->
    <section class="page-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">
                    Reach out for collaborations, support, or just to say hello.
                </h3>
            </div>

            <!-- SB Forms Contact Form -->
            <!--
                Note: To activate this form, you must:
                1. Sign up at https://startbootstrap.com/solution/contact-forms
                2. Replace "API_TOKEN" below with your actual SB Forms API token.
            -->
            <form
                id="contactForm"
                data-sb-form-api-token="YOUR_SB_FORMS_API_TOKEN_HERE"
                novalidate
            >
                <div class="row align-items-stretch mb-5">
                    <!-- Left Column: Name, Email, Phone -->
                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <input
                                class="form-control"
                                id="name"
                                type="text"
                                placeholder="Your Name *"
                                data-sb-validations="required"
                            />
                            <div class="invalid-feedback" data-sb-feedback="name:required">
                                A name is required.
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <input
                                class="form-control"
                                id="email"
                                type="email"
                                placeholder="Your Email *"
                                data-sb-validations="required,email"
                            />
                            <div class="invalid-feedback" data-sb-feedback="email:required">
                                An email is required.
                            </div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">
                                Email is not valid.
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <input
                                class="form-control"
                                id="phone"
                                type="tel"
                                placeholder="Your Phone *"
                                data-sb-validations="required"
                            />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">
                                A phone number is required.
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Message -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea
                                class="form-control"
                                id="message"
                                placeholder="Your Message *"
                                data-sb-validations="required"
                            ></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">
                                A message is required.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submit Success Message -->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        <br />
                        Thank you for reaching out. We’ll get back to you soon.
                    </div>
                </div>

                <!-- Submit Error Message -->
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">
                        Error sending message. Please try again later.
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button
                        class="btn btn-primary btn-xl text-uppercase"
                        id="submitButton"
                        type="submit"
                    >
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection

@push('scripts')
    <!-- SB Forms JS (handles validation + submission) -->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
@endpush
