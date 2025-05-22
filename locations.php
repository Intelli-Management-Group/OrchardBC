<?php include 'inc/header.php'; ?>

<body>
    <div class="banner-container locations-banner">
        <div class="banner-content">
            <h1>Where to Find Us</h1>
        </div>
    </div>

    <div class="container">
        <div class="row section-padding">
            <div class="col-lg-8 mx-auto">
                <h4 class="text-center">Looking to purchase in bulk or explore a retail partnership? Reach us directly today.</h4>
            </div>
        </div>

        <!-- <div class="text-center">
            <button class="button active" data-filter="all">ALL</button>
            <button class="button" data-filter="coconut">Coconut Water</button>
            <button class="button" data-filter="juice">Juice</button>
            <button class="button" data-filter="arrow">Arrow Tree</button>
        </div> -->

        <div class="row bottom-margin">
            <div class="col-md-4 d-flex flex-column align-items-center text-center">
                <div class="upper-header">Our Office</div>
                <p class="mb-0">200 - 3071 No.5 Rd,<br>Richmond, BC, V6X 2T4</p>
            </div>

            <div class="col-md-4 d-flex flex-column align-items-center border-start border-end">
                <div class="upper-header">Contact Us</div>
                <a href="mailto:contact@example.com">contact@example.com</a>
                <a href="tel:+17782977108">+1 (778) 297-7108</a>
            </div>

            <div class="col-md-4 d-flex flex-column align-items-center">
                <div class="upper-header">Follow Us</div>
                <div class="social-icons">
                    <img src="img/home/icons/facebook.svg" alt="" class="social-icon">
                    <img src="img/home/icons/instagram.svg" alt="" class="social-icon">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h4 class="text-center">Grab Your Favorites In-Store —we’re expanding, stay tuned for more.</h4>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-4 offset-lg-1">
                <div class="location-card" data-category="coconut">
                    <div>
                        <div class="upper-header">Coconut Water</div>
                        <h5>Brandon & Joanny’s<br> NoFrills</h5>
                        <div>101-1030 Denman St, Vancouver</div>
                    </div>
                    <div>
                        <div class="devider"></div>
                        <a href="https://www.google.com/maps/place/Brandon+%26+Joanny's+NOFRILLS+Vancouver/@49.2887289,-123.1382003,17z/data=!3m1!4b1!4m6!3m5!1s0x5486722886d4e1df:0xf0668965f385a62b!8m2!3d49.2887289!4d-123.1382003!16s%2Fg%2F1tfmhhqc!5m1!1e1?entry=tts&g_ep=EgoyMDI1MDUxMS4wIPu8ASoASAFQAw%3D%3D&skid=94aeb5ac-b08d-4690-9aee-e18992e16923" target="_blank" rel="noopener noreferrer">More Info</a>
                    </div>
                </div>
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5204.6982870686825!2d-123.1382003!3d49.288728899999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5486722886d4e1df%3A0xf0668965f385a62b!2sBrandon%20%26%20Joanny&#39;s%20NOFRILLS%20Vancouver!5e0!3m2!1sen!2sca!4v1747342506141!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
            </div>

            <div class="col-lg-4 offset-lg-1">
                <div class="location-card" data-category="coconut juice">
                    <div>
                        <div class="upper-header">Coconut Water</div>
                        <h5>Big Crazy Supermarket<br> (柏仁超市)</h5>
                        <div>180-4551 No 3 Rd, Richmond</div>
                    </div>
                    <div>
                        <div class="devider"></div>
                        <a href="https://www.google.com/maps/place/Big+Crazy+Supermarket/@49.1805006,-123.1381608,17z/data=!3m1!4b1!4m6!3m5!1s0x5486752e7b7d7181:0xcbf087954704aced!8m2!3d49.1805006!4d-123.1381608!16s%2Fg%2F1w96gfgg!5m1!1e1?entry=tts&g_ep=EgoyMDI1MDUxMi4wIPu8ASoASAFQAw%3D%3D&skid=debaa0ed-3a44-47d8-8d85-19149ce25b79" target="_blank" rel="noopener noreferrer">More Info</a>
                    </div>
                </div>
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2608.0572312846216!2d-123.13816079999998!3d49.1805006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5486752e7b7d7181%3A0xcbf087954704aced!2sBig%20Crazy%20Supermarket!5e0!3m2!1sen!2sca!4v1747342600524!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
            </div>
        </div>

        <div class="row bottom-margin">
            <iframe src="https://www.google.com/maps/d/u/1/embed?mid=1P4YbeONeysOhsFgbnckvTn5LCzVa-7o&ehbc=2E312F&noprof=1"></iframe>
        </div>
    </div>
</body>

<!-- <script>
    document.querySelectorAll('.button').forEach(button => {
        button.addEventListener('click', () => {
            document.querySelectorAll('.button').forEach(btn => btn.classList.remove('active'));

            button.classList.add('active');

            const filter = button.getAttribute('data-filter');

            document.querySelectorAll('.location-card').forEach(card => {
                const categories = card.getAttribute('data-category').split(' ');
                if (filter === 'all' || categories.includes(filter)) {
                    card.parentElement.style.display = 'block';
                } else {
                    card.parentElement.style.display = 'none';
                }
            });
        });
    });
</script> -->

<?php include 'inc/footer.php'; ?>