<!-- Site Footer -->
<footer class="footer py-4 bg-dark text-light">
    <div class="container">
        <div class="row align-items-center">
            <!-- Copyright Notice (Left on Large Screens) -->
            <div class="col-lg-4 text-lg-start mb-3 mb-lg-0">
                <small class="text-muted">
                    &copy; {{ date('Y') }} Your Website. All Rights Reserved.
                </small>
            </div>

            <!-- Social Media Icons (Centered on Mobile, Middle on Desktop) -->
            <div class="col-lg-4 text-center mb-3 mb-lg-0">
                <a
                    class="btn btn-outline-light btn-social mx-2 rounded-circle"
                    href="#!"
                    aria-label="Twitter"
                    style="width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center;"
                >
                    <i class="fab fa-twitter"></i>
                </a>
                <a
                    class="btn btn-outline-light btn-social mx-2 rounded-circle"
                    href="#!"
                    aria-label="Facebook"
                    style="width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center;"
                >
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a
                    class="btn btn-outline-light btn-social mx-2 rounded-circle"
                    href="#!"
                    aria-label="LinkedIn"
                    style="width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center;"
                >
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>

            <!-- Legal Links (Right on Large Screens) -->
            <div class="col-lg-4 text-lg-end">
                <a class="text-decoration-none text-light me-3 small" href="#!">Privacy Policy</a>
                <a class="text-decoration-none text-light small" href="#!">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>

<!-- Optional: Add subtle hover effect for social buttons via CSS (if not in styles.css) -->
@push('styles')
<style>
    /* Smooth hover effect for social icons */
    .btn-social {
        transition: all 0.25s ease;
        border: 1px solid #ffffff4d;
    }
    .btn-social:hover {
        background-color: #fed136; /* Accent gold from Start Bootstrap */
        border-color: #fed136;
        color: #000 !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 10px #00000033;
    }
</style>
@endpush
