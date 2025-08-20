<?php
$title = "100% Pure Coconut Water | No Sugar, No Additives | BC Orchard";
$description = "Enjoy 100% pure coconut water with no sugar, no additives—just hydration the way nature intended. A better choice for wellness, recovery, and refreshment.";
include 'inc/header.php';
?>

<style>
    footer {
        border-top-left-radius: 32px;
        border-top-right-radius: 32px;
    }

    .swiper {
        padding-bottom: 60px !important;
    }

    @media screen and (max-width: 1399px) {
        .swiper {
            cursor: grab;
        }
    }

    .swiper-slide {
        width: 310px !important;
    }

    .swiper-pagination-bullet {
        width: 12px !important;
        height: 12px !important;
        background-color: #2a2a2a !important;
    }
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<body>
    <div class="product-coconut-bg overflow-x-hidden">
        <div class="container section-padding-sm pt-0-sm">
            <div class="row">
                <div class="product-coconut-img-wrap col-lg-8 order-1 order-lg-2">
                    <img src="img/coconut/bc-orchard-100-percent-pure-coconut-water-can-hero.png" alt="BC Orchard 100% pure coconut water" class="product-coconut-img product-coconut-img-1">
                    <img src="img/coconut/bc-orchard-100-percent-pure-coconut-water-can-hero.png" alt="BC Orchard 100% pure coconut water" class="product-coconut-img product-coconut-img-2">
                    <img src="img/coconut/bc-orchard-ice-cube-floating-1.png" alt="floating ice cube" class="floating-ice-1">
                    <img src="img/coconut/bc-orchard-ice-cube-floating-2.png" alt="floating ice cube" class="floating-ice-2">
                    <img src="img/coconut/bc-orchard-ice-cube-floating-3.png" alt="floating ice cube" class="floating-ice-3">
                </div>

                <div class="col-lg-4 text-white d-flex flex-column justify-content-center order-2 order-lg-1">
                    <h3 class="mb-lg-3 mb-3">100% Pure<br class="d-none d-lg-block"> Coconut Water</h3>
                    <h5 class="sub-heading">Nothing Added. Nothing Taken Away.</h5>
                    <p style="text-align: justify;">From coconut straight to bottle, our coconut water is naturally sweet, packed with essential electrolytes, and free from additives, making it the cleanest way to refresh your day. No matter the occasion—workouts or wind-downs—this is true hydration.</p>
                </div>
            </div>
        </div>
        <div class="cocoanut-water-bg-ice">
            <img src="img/coconut/bc-orchard-coconut-water-banner-ice-bottom-strip.png" alt="BC Orchard Coconut Water" class="w-100">
        </div>
    </div>
    <!-- SVG for U-shaped clip-path -->
    <svg width="0" height="0" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <clipPath id="smoothBottomCurve" clipPathUnits="objectBoundingBox">
                <path d="M0,0 H1 V1 C1,1 0.5,0.85 0,1 Z" />
            </clipPath>
            <clipPath id="smoothBottomCurve-sm" clipPathUnits="objectBoundingBox">
                <path d="M0,0 H1 V1 C1,1 0.5,0.95 0,1 Z" />
            </clipPath>
        </defs>
    </svg>

    <!--<svg viewBox="0 0 1440 100" style="display: block; width: 100%; height: auto;">-->
    <!--    <path fill="#3a4810" d="M0,100 Q720,0 1440,100 L1440,0 L0,0 Z"></path>-->
    <!--</svg>-->

    <div class="container">
        <div class="section-padding-sm">
            <h2 class="text-center">A Better Way to Rehydrate</h2>
            <div class="row mt-5 gy-md-0">
                <div class="col-md-4 d-flex flex-column align-items-center text-center" data-aos="fade-up" data-aos-delay="0">
                    <img src="img/coconut/BCO_icon_Hydration.png" alt="Electrolyte-Rich Hydration" class="benefits-img">
                    <h5 class="mt-3">Electrolyte-Rich Hydration</h5>
                    <p>Rich in natural electrolytes to replenish fluids after workouts, sports practice, or a rough night out.</p>
                </div>

                <div class="col-md-4 d-flex flex-column align-items-center text-center" data-aos="fade-up" data-aos-delay="100">
                    <img src="img/coconut/BCO_icon_Immunity.png" alt="Boosts Immunity" class="benefits-img">
                    <h5 class="mt-3">Boosts Immunity</h5>
                    <p>Delivers 20% of your daily vitamin C, strengthening your immune system in a light, refreshing way.</p>
                </div>

                <div class="col-md-4 d-flex flex-column align-items-center text-center" data-aos="fade-up" data-aos-delay="200">
                    <img src="img/coconut/BCO_icon_GoodforSkin.png" alt="Good for Skin" class="benefits-img">
                    <h5 class="mt-3">Supports Skin & Recovery</h5>
                    <p>Helps your skin retain moisture and provides natural antioxidants to combat aging and oxidative stress.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- <svg viewBox="0 0 1440 100" style="display: block; width: 100%; height: auto;">
        <path fill="#246113" d="M0,100 Q720,0 1440,100 L1440,100 L0,100 Z"></path>
    </svg> -->

    <section class="position-relative">
        <svg viewBox="0 0 1440 70" preserveAspectRatio="none" class="d-none d-lg-block" style="display: block; width: 100%; height: 70px; background-color: #246113;">
            <path fill="#ffffff" d="M0,70 C480,0 960,0 1440,70 L1440,0 L0,0 Z"></path>
        </svg>

        <svg viewBox="0 0 1440 20" preserveAspectRatio="none" class="d-lg-none d-block" style="display: block; width: 100%; height: 20px; background-color: #246113;">
            <path fill="#ffffff" d="M0,20 C480,0 960,0 1440,20 L1440,0 L0,0 Z"></path>
        </svg>

        <div class="product-coconut-bg-2 position-relative">
            <img src="img/coconut/bc-orchard-young-coconut-half-corner-left.png" alt="young coconut" class="floating-coconut-1">
            <img src="img/coconut/bc-orchard-young-coconut-half-corner-right.png" alt="young coconut" class="floating-coconut-2">
            <div class="container-xxl section-padding">
                <h2 class="text-center text-white mb-5">Young Vietnamese Coconuts</h2>
                <div class="bg-white rounded-5 p-3">
                    <div class="row">
                        <div class="col-lg-7">
                            <img src="img/coconut/bc-orchard-young-coconut-on-tree.jpg" alt="Young Vietnamese coconut on tree" class="product-highlight-img-bg">
                        </div>

                        <div class="col-lg-5">
                            <div class="row" style="margin-bottom: 30px;" data-aos="fade-up" data-aos-delay="0">
                                <div class="col-4">
                                    <img src="img/coconut/bc-orchard-coconut-water-child-holding-can-naturally-sweet.jpg" alt="Child holding BC Orchard coconut water, showing naturally sweet taste." class="product-highlight-img-sm">
                                </div>
                                <div class="col-8 d-flex flex-column justify-content-center">
                                    <h6>Naturally Sweet</h6>
                                    <p class="mb-0">Young coconuts are up to 30% sweeter than mature ones—so naturally sweet, you’ll think we added sugar (we didn’t).</p>
                                </div>
                            </div>

                            <div class="row" style="margin-bottom: 30px;" data-aos="fade-up" data-aos-delay="100">
                                <div class="col-4">
                                    <img src="img/coconut/img_nutrients.jpg" alt="Glass of coconut water with C, K, Ca, Mg icons—rich in nutrients and electrolytes" class="product-highlight-img-sm">
                                </div>
                                <div class="col-8 d-flex flex-column justify-content-center">
                                    <h6>Rich in Nutrients</h6>
                                    <p class="mb-0">Packed with natural electrolytes like potassium, coconut water is often called the “water of life” for its hydration benefits.</p>
                                </div>
                            </div>

                            <div class="row" data-aos="fade-up" data-aos-delay="200">
                                <div class="col-4">
                                    <img src="img/coconut/img_pure.jpg" alt="" class="product-highlight-img-sm">
                                </div>
                                <div class="col-8 d-flex flex-column justify-content-center">
                                    <h6>100% Pure</h6>
                                    <p class="mb-0">It’s all about our young coconuts, so we add nothing. Each can contains pure, quality coconut water.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row top-margin">
                    <div class="col-lg-4 col-md-6 d-flex justify-content-lg-start justify-content-center text-white order-lg-0 order-1 text-md-start text-center">
                        <div class="nutrition-container">
                            <h2>Health in <br>Every Sip</h2>
                            <h6 class="mb-5">What ‘Packed with Nutrition’ Really Means</h6>

                            <div class="nutrition-circle-container">
                                <div data-aos="fade-up" data-aos-delay="0">
                                    <div class="d-flex justify-content-start align-items-center gap-3">
                                        <div class="nutrition-circle">55</div>
                                        <h5 class="mb-0">Calories</h5>
                                    </div>
                                    <hr>
                                </div>
                                <div data-aos="fade-up" data-aos-delay="100">
                                    <div class="d-flex justify-content-start align-items-center gap-3">
                                        <div class="nutrition-circle">340<br>mg</div>
                                        <h5 class="mb-0">Potassium</h5>
                                    </div>
                                    <hr>
                                </div>
                                <div data-aos="fade-up" data-aos-delay="200">
                                    <div class="d-flex justify-content-start align-items-center gap-3">
                                        <div class="nutrition-circle">22%</div>
                                        <h5 class="mb-0">Daily Vitamin C</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 d-flex justify-content-center order-lg-1 order-0 mt-0" data-aos="fade-up">
                        <img src="img/coconut/BC_Orchard_Coconut_Water_can_2.png" alt="BC Orchard Coconut Water" class="img-fluid product-nutrition-img">
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex justify-content-lg-end justify-content-center align-items-center order-lg-2 order-2 mt-lg-0 mt-md-4 mt-5">
                        <div class="bg-white rounded-5 p-4 w-100" style="max-width: 350px;">
                            <div id="aos-anchor" data-aos="fade-up" data-aos-delay="0">
                                <h6 class="text-center">Every Can Delivers</h6>
                                <hr>
                            </div>

                            <div data-aos="fade-up" data-aos-delay="50" data-aos-anchor="#aos-anchor">
                                <div class="d-flex justify-content-between">
                                    <div>Calories</div>
                                    <div>55</div>
                                </div>
                                <hr>
                            </div>

                            <div data-aos="fade-up" data-aos-delay="100" data-aos-anchor="#aos-anchor">
                                <div class="d-flex justify-content-between">
                                    <div>Fat</div>
                                    <div>0 g</div>
                                </div>
                                <hr>
                            </div>

                            <div data-aos="fade-up" data-aos-delay="150" data-aos-anchor="#aos-anchor">
                                <div class="d-flex justify-content-between">
                                    <div>Carbohydrate</div>
                                    <div>14 g</div>
                                </div>
                                <hr>
                            </div>

                            <div data-aos="fade-up" data-aos-delay="200" data-aos-anchor="#aos-anchor">
                                <div class="d-flex justify-content-between">
                                    <div>Added Sugar</div>
                                    <div>0 g</div>
                                </div>
                                <hr>
                            </div>

                            <div data-aos="fade-up" data-aos-delay="250" data-aos-anchor="#aos-anchor">
                                <div class="d-flex justify-content-between">
                                    <div>Potassium</div>
                                    <div>11% dv</div>
                                </div>
                                <hr>
                            </div>

                            <div data-aos="fade-up" data-aos-delay="300" data-aos-anchor="#aos-anchor">
                                <div class="d-flex justify-content-between">
                                    <div>Vitamin C</div>
                                    <div>22% dv</div>
                                </div>
                                <hr>
                            </div>

                            <div data-aos="fade-up" data-aos-delay="450" data-aos-anchor="#aos-anchor" class="text-center">
                                <button class="button" data-bs-toggle="modal" data-bs-target="#nutritionModal">VIEW NUTRITION FACTS</button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="nutritionModal" tabindex="-1" aria-labelledby="nutritionModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="nutritionModalLabel">Nutrition Facts</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body d-flex justify-content-center">
                                            <img src="img/coconut/nutrition_label.jpg" class="img-fluid" alt="Nutrition Label" style="max-height: 750px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container section-padding">
        <h2 class="text-center mb-5">This Is the Better Choice</h2>
        <div class="row">
            <!-- Swiper Container -->
            <div class="swiper productSwiper">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="product-comparison-card">
                            <div class="product-comparison-inner-card-1">
                                <!-- <img src="img/coconut/BCO_coconut_water_can.png" alt="" class="h-100"> -->
                                <div>
                                    <h5 class="mb-0">BC Orchard</h5>
                                    <div>vs.</div>
                                    <h6 class="mb-0">Other Coconut Waters</h6>
                                </div>
                            </div>
                            <div class="product-comparison-card-content">
                                No added sugar. No preservatives. No “quality control” additives. Just the pure, quality coconut water you have come to expect.
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="product-comparison-card">
                            <div class="product-comparison-inner-card-2">
                                <!-- <img src="img/coconut/BCO_coconut_water_can.png" alt="" class="h-100"> -->
                                <div>
                                    <h5 class="mb-0">BC Orchard</h5>
                                    <div>vs.</div>
                                    <h6 class="mb-0">Juices</h6>
                                </div>
                            </div>
                            <div class="product-comparison-card-content">
                                Less sugar, more electrolytes. Thanks to its isotonic nature and chemical similarity to blood plasma, coconut water is a better rehydration fluid.
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="product-comparison-card">
                            <div class="product-comparison-inner-card-3">
                                <!-- <img src="img/coconut/BCO_coconut_water_can.png" alt="" class="h-100"> -->
                                <div>
                                    <h5 class="mb-0">BC Orchard</h5>
                                    <div>vs.</div>
                                    <h6 class="mb-0">Sports Drinks</h6>
                                </div>
                            </div>
                            <div class="product-comparison-card-content">
                                No artificial colors, flavours, or mystery chemicals you can’t pronounce—just the cleanest, most natural way to restore electrolytes and rehydrate.
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <div class="product-comparison-card">
                            <div class="product-comparison-inner-card-4">
                                <!-- <img src="img/coconut/BCO_coconut_water_can.png" alt="" class="h-100"> -->
                                <div>
                                    <h5 class="mb-0">BC Orchard</h5>
                                    <div>vs.</div>
                                    <h6 class="mb-0">Soft Drinks</h6>
                                </div>
                            </div>
                            <div class="product-comparison-card-content">
                                No caffeine, no fizz, and no crash. Only the clean, natural refreshment you can enjoy daily, with real health benefits in every sip.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <!-- <svg viewBox="0 0 1440 100" preserveAspectRatio="none" width="0" height="0">
        <defs>
            <clipPath id="bottomCurve" clipPathUnits="objectBoundingBox">
                <path d="M0,1 Q0.5,0 1,1 L1,0 L0,0 Z" />
            </clipPath>
        </defs>
    </svg> -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.productSwiper', {
            spaceBetween: 20,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            loop: false,
            breakpoints: {
                0: {
                    slidesPerView: 'auto',
                    centeredSlides: true,
                },
                577: {
                    slidesPerView: 'auto',
                    centeredSlides: false,
                }
            }
        });
    </script>
</body>

<?php include 'inc/footer.php'; ?>