<?php include 'inc/header.php'; ?>

<body>
    <div class="banner-container locations-banner bottom-margin">
        <div class="banner-content">
            <h1>Where to find us</h1>
        </div>
    </div>

    <div class="container">
        <button class="button active" data-filter="all">ALL</button>
        <button class="button" data-filter="coconut">Coconut Water</button>
        <button class="button" data-filter="juices">Juices</button>
        <button class="button" data-filter="arrow">Arrow Tree</button>

        <div class="row bottom-margin mt-3">
            <div class="col-lg-4">
                <div class="location-card" data-category="coconut">
                    <div>
                        <h4>Brandon & Joanny’s NoFrills</h4>
                        <div>101-1030 Denman St, Vancouver</div>
                    </div>
                    <div>
                        <div class="devider"></div>
                        <a href="https://maps.app.goo.gl/jF4piCsshDbHxJWbA" target="_blank" rel="noopener noreferrer">Get Directions</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="location-card" data-category="coconut">
                    <div>
                        <h4>Big Crazy Supermarket (柏仁超市)</h4>
                        <div>180-4551 No 3 Rd, Richmond</div>
                    </div>
                    <div>
                        <div class="devider"></div>
                        <a href="https://maps.app.goo.gl/14wo4H5Ck9YUuiJ9A" target="_blank" rel="noopener noreferrer">Get Directions</a>
                    </div>
                </div>
            </div>
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