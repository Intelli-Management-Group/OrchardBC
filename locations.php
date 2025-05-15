<?php include 'inc/header.php'; ?>

<body>
    <div class="banner-container locations-banner">
        <div class="banner-content">
            <h1>Where to find us</h1>
        </div>
    </div>

    <div class="container">
        <div class="row section-padding">
            <div class="col-lg-8 mx-auto">
                <p class="text-center">Looking for BC Orchard products near you? Start here. Our coconut water is available at select trusted retailers in BC, with more locations coming soon for our juices and ArrowTree snacks. For bulk purchases or retail opportunities, please reach out through our Contact page.</p>
            </div>
        </div>

        <div class="text-center">
            <button class="button active" data-filter="all">ALL</button>
            <button class="button" data-filter="coconut">Coconut Water</button>
            <button class="button" data-filter="juice">Juice</button>
            <button class="button" data-filter="arrow">Arrow Tree</button>
        </div>

        <div class="row bottom-margin mt-3">
            <div class="col-lg-4 offset-lg-2">
                <div class="location-card" data-category="coconut">
                    <div>
                        <p>Coconut Water</p>
                        <h5>Brandon & Joanny’s<br> NoFrills</h5>
                        <div>101-1030 Denman St, Vancouver</div>
                    </div>
                    <div>
                        <div class="devider"></div>
                        <a href="https://maps.app.goo.gl/jF4piCsshDbHxJWbA" target="_blank" rel="noopener noreferrer">Get Directions</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="location-card" data-category="coconut juice">
                    <div>
                        <p>Coconut Water / Juice</p>
                        <h5>Big Crazy Supermarket<br> (柏仁超市)</h5>
                        <div>180-4551 No 3 Rd, Richmond</div>
                    </div>
                    <div>
                        <div class="devider"></div>
                        <a href="https://maps.app.goo.gl/14wo4h6Ck9YUuiJ9A" target="_blank" rel="noopener noreferrer">Get Directions</a>
                    </div>
                </div>
            </div>

            <!-- <div class="col-lg-4">
                <div class="location-card" data-category="coconut juice">
                    <div>
                        <p>Coconut Water / Juice</p>
                        <h5>Head Office</h5>
                        <div>200-3071 No. 5 Rd, Richmond</div>
                    </div>
                    <div>
                        <div class="devider"></div>
                        <a href="https://maps.app.goo.gl/14wo4h6Ck9YUuiJ9A" target="_blank" rel="noopener noreferrer">Get Directions</a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</body>

<script>
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
</script>

<?php include 'inc/footer.php'; ?>