<?php
$title = "BC Orchard | Pure Coconut Water & Natural Goodness from BC";
$description = "BC Orchard delivers wellness through 100% pure coconut water and thoughtfully crafted products. Experience premium ingredients and honest nutrition you can trust.";
include 'inc/header.php'; 
?>

<body>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <?php include 'inc/slider.php'; ?>

    <div class="container-fluid">
        <div class="row" style="--bs-gutter-y: 0;">
            <div class="col-lg-3 col-6 p-0 custom-border">
                <div class="highlight-wrap">
                    <div data-aos="fade-up" data-aos-delay="0">
                        <?php include 'img/home/icons/icon_premium.svg'; ?>
                        <div class="upper-header" style="font-size: 12px;">Premium Selection</div>
                        <p class="mb-0">Sourced from BC and Beyond</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-6 p-0 custom-border">
                <div class="highlight-wrap">
                    <div data-aos="fade-up" data-aos-delay="100">
                        <?php include 'img/home/icons/icon_wellness.svg'; ?>
                        <div class="upper-header" style="font-size: 12px;">Healthy Lifestyle</div>
                        <p class="mb-0">Everyday Wellness, Naturally</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-6 p-0 custom-border">
                <div class="highlight-wrap">
                    <div data-aos="fade-up" data-aos-delay="200">
                        <?php include 'img/home/icons/icon_canada.svg'; ?>
                        <div class="upper-header" style="font-size: 12px;">Proudly Canadian</div>
                        <p class="mb-0">Rooted in Local Values</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-6 p-0 custom-border">
                <div class="highlight-wrap">
                    <div data-aos="fade-up" data-aos-delay="300">
                        <?php include 'img/home/icons/icon_flavour.svg'; ?>
                        <div class="upper-header" style="font-size: 12px;">Full of Flavor</div>
                        <p class="mb-0">Healthy Can Still Be Delicious</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bottom-margin" style="margin-top: 30px; padding-left: 20px; padding-right: 20px;">
        <div class="row gy-4">
            <div class="col-xxl-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="product-card product-card-1">
                    <div class="product-card-content">
                        <div class="upper-header">Coconut Water</div>
                        <h4>Refresh <br>Rehydrate <br>Replenish</h4>
                        <a href="coconut-water.php"><button class="button">LEARN MORE</button></a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="product-card product-card-2">
                    <div class="product-card-content">
                        <div class="upper-header">BC Juices</div>
                        <h4>BC-Grown <br>Vibrant <br>Flavourful</h4>
                        <button class="button">COMING SOON</button>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="product-card product-card-3">
                    <div class="product-card-content">
                        <div class="upper-header">Arrow Tree Snacks</div>
                        <h4>Curated <br>Delightful <br>Elegant</h4>
                        <button class="button">COMING SOON</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bottom-margin" style="padding-left: 20px; padding-right: 20px;">
        <div class="row">
            <div class="col-44" data-aos="fade-up" data-aos-delay="0">
                <!-- <div class="masked-image masked-image-1"></div> -->
                <div class="masked-image top"></div>
                <div class="masked-image bottom"></div>
            </div>
            <div class="col-28" data-aos="fade-up" data-aos-delay="100">
                <div class="masked-image masked-image-2">
                    <div class="masked-image-content text-center">
                        <h4 style="line-height: 1.5;">More Than A Business - A Belief That Health Is Your Greatest Asset</h4>
                        <a href="about.php" class="button mt-3">ABOUT US</a>
                    </div>
                </div>
            </div>
            <div class="col-28" data-aos="fade-up" data-aos-delay="200">
                <div class="masked-image masked-image-3">
                    <div class="masked-image-content">
                        <p style="line-height: 2;">Founded in 2016, BC Orchard is a Canadian company dedicated to crafting honest, great-tasting products made with clean, simple ingredients. While our core offerings focus on natural hydration and everyday wellness, we also believe in thoughtful indulgence. That’s why we offer handcrafted premium snacks from Japan’s ArrowTree— elegant treats to enjoy or gifts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bottom-margin overflow-x-hidden" style="padding-left: 20px; padding-right: 20px;">
        <div class="row">
            <div class="col-lg-3 col-6 d-flex justify-content-center p-0 border-end" data-aos="fade-right">
                <div class="feature-product-wrap">
                    <div class="upper-header">Our Top Picks</div>
                    <h2>Featured Products</h2>
                    <p>Carefully selected for taste, quality, and purpose—these are our favorite picks for everyday refreshment and joy.</p>
                    <!-- <button class="button">VIEW MORE PRODUCTS</button> -->
                </div>
            </div>

            <div class="col-lg-3 col-6 p-0 border-end-lg" data-aos="fade-left">
                <div class="shop-wrap">
                    <img class="main-img" src="img/home/bco_feature-1.jpg" alt="BC Orchard 100% Pure Coconut Water">
                    <img class="hover-img" src="img/home/bco_feature-1-hover.jpg" alt="BC Orchard 100% Pure Coconut Water">
                    <div class="product-name">
                        <div class="brand-name">BC Orchard</div>
                        <h6 class="px-2">100% Pure Coconut Water</h6>
                        <a href="coconut-water.php" class="learn-more-button">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-6 p-0 border-end" data-aos="fade-left">
                <div class="shop-wrap">
                    <img class="main-img" src="img/home/bco_feature-3.jpg" alt="ArrowTreeGift M-box">
                    <img class="hover-img" src="img/home/bco_feature-3-hover.jpg" alt="ArrowTreeGift M-box">
                    <div class="product-name">
                        <div class="brand-name">Arrow Tree</div>
                        <h6 class="px-2">Gift M-box</h6>
                        <a href="" class="learn-more-button">Coming Soon</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-6 p-0" data-aos="fade-left">
                <div class="shop-wrap">
                    <img class="main-img" src="img/home/bco_feature-2.jpg" alt="Arrow Tree ICHI-HA">
                    <img class="hover-img" src="img/home/bco_feature-2-hover.jpg" alt="Arrow Tree ICHI-HA">
                    <div class="product-name">
                        <div class="brand-name">Arrow Tree</div>
                        <h6 class="px-2">ICHI-HA</h6>
                        <a href="" class="learn-more-button">Coming Soon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="testimonials-container bottom-margin">
        <div class="testimonials-content carousel slide" id="testimonialCarousel">
            <div class="upper-header">Client Testimonials</div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="testimonial-content-box">
                        <div class="testimonial-content">"It’s become my go-to when I feel wiped out. One can and I’m back on track—it’s surprisingly energizing."</div>
                        <div class="upper-header pt-5">Jenna M.</div>
                        <p class="mb-0">100% Pure Coconut water</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="testimonial-content-box">
                        <div class="testimonial-content">"Honestly the best coconut water I’ve had. It’s richer and more flavourful than the usual ones—and no weird aftertaste."</div>
                        <div class="upper-header pt-5">Devon L.</div>
                        <p class="mb-0">100% Pure Coconut water</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="testimonial-content-box">
                        <div class="testimonial-content">"I use it in my morning smoothies. The natural sweetness is just right, and it makes everything taste fresher."</h3>
                            <div class="upper-header pt-5">Maya T.</div>
                            <p class="mb-0">100% Pure Coconut water</p>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span class="fa fa-chevron-left carousel-control-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span class="fa fa-chevron-right carousel-control-icon"></span>
                </button>
            </div>
    </section>

    <section class="container-fluid bottom-margin overflow-x-hidden">
        <div class="row gy-5 gy-lg-0">
            <div class="col-lg-6 p-0 d-flex align-items-stretch" data-aos="fade-right">
                <div class="img-container">
                    <img src="img/home/contact_2.jpg" alt="" class="img-fluid">
                </div>
                <div class="scroll-container">
                    <div class="scroll-content">
                        <div class="scroll-text">Made to Refresh</div>
                        <div class="scroll-text">Made to Refresh</div>
                        <div class="scroll-text">Made to Refresh</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center" data-aos="fade-left">
                <div style="max-width: 500px;">
                    <div class="upper-header">Now In Stores</div>
                    <h2>Find Us Nearby</h2>
                    <p>Our products are available at select retailers in Vancouver and Richmond. See where you can pick them up today.</p>
                    <a href="find-us.php"><button class="button">Where to Buy</button></a>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll('.carousel-control-next, .carousel-control-prev').forEach(function(control) {
            control.addEventListener('mouseup', function() {
                this.blur();
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 500,
            easing: 'ease-in-out',
            once: false
        });
    </script>
</body>

<?php include 'inc/footer.php'; ?>