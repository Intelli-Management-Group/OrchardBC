<footer>
    <div class="container mt-lg-0 mt-4">
        <div class="row section-padding bottom-padding-sm">
            <div class="col-xxl-6 col-xl-7 col-lg-6 mt-0">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('img/Generic/KEG_logo_white.svg') }}" alt="logo" class="logo">
                </a>
                <p class="mt-4 mb-0">Helping families raise amazing children is what we do. Call today for a tour and you'll quickly see why families across Canada trust us as their preschool of choice.</p>
                <div class="social-icons mt-3">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-x-twitter"></i>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-6 offset-xxl-2 offset-xl-1">
                <h3 class="mb-3">Contact</h3>
                <p><a href="mailto:@example.com">@example.com</a></p>
                <p><a href="tel:+17782977108">+1 (778) 297-7108</a></p>
                <p class="mb-0">200 - 3071 No.5 Rd,<br>Richmond, BC, V6X 2T4</p>
            </div>
            <div class="col-xl-2 col-lg-3 col-6">
                <h3 class="mb-3">Quick Info</h3>
                <p><a href="{{ url('/academics') }}">Academics</a></p>
                <p><a href="{{ url('/franchise') }}">Franchise</a></p>
            </div>
        </div>

        <hr class="m-0">

        <div class="row section-padding-sm">
            <div class="col-lg-6">
                <p class="mb-0">&copy; <?php echo Date('Y'); ?> Kingsman Education Group. All rights reserved.</p>
            </div>
            <div class="col-lg-6 d-flex flex-wrap justify-content-lg-end justify-content-start gap-4 mt-lg-0 mt-4">
                <div class="d-flex gap-4 flex-column flex-sm-row">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Use</a>
                </div>
                <div class="d-flex gap-4 flex-column flex-sm-row">
                    <a href="#">Accessibility</a>
                    <a href="#">License</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>