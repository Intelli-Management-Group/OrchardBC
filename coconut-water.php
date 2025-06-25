<?php include 'inc/header.php'; ?>

<style>
    footer {
        border-top-left-radius: 24px;
        border-top-right-radius: 24px;
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

<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<body>
    <div class="product-coconut-bg overflow-x-hidden">
        <div class="container section-padding-sm pt-0-sm">
            <div class="row">
                <div class="product-coconut-img-wrap col-lg-8 order-1 order-lg-2">
                    <img src="img/coconut/BC_Orchard_Coconut_Water_can.png" alt="BC Orchard Coconut Water" class="product-coconut-img product-coconut-img-1">
                    <img src="img/coconut/BC_Orchard_Coconut_Water_can.png" alt="BC Orchard Coconut Water" class="product-coconut-img product-coconut-img-2">
                    <img src="img/coconut/ice_cube_1.png" alt="ice cube" class="floating-ice-1">
                    <img src="img/coconut/ice_cube_2.png" alt="ice cube" class="floating-ice-2">
                    <img src="img/coconut/ice_cube_3.png" alt="ice cube" class="floating-ice-3">
                </div>

                <div class="col-lg-4 text-white d-flex flex-column justify-content-center order-2 order-lg-1">
                    <h3 class="mb-lg-5 mb-3">100% Pure<br class="d-none d-lg-block"> Coconut Water</h3>
                    <p>Nothing added. Nothing taken away.</p>
                    <p style="text-align: justify;">Our coconut water is bottled straight from young Vietnamese coconuts—capturing nature’s hydration at its peak. Naturally sweet, packed with essential electrolytes, and free from additives, it’s the cleanest way to refresh your day. From workouts to wind-downs, this is hydration as it should be.</p>
                </div>
            </div>
        </div>
        <div class="cocoanut-water-bg-ice">
            <img src="img/coconut/bcorchard_coconut_water_bg_ice.png" alt="BC Orchard Coconut Water" class="w-100">
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
                    <div class="lottie-container">
                        <!-- id="lottie1" -->
                        <img src="img/coconut/BCO_icon_Hydration.png" alt="Electrolyte-Rich Hydration" class="lottie-container">
                    </div>
                    <h5 class="mt-3">Electrolyte-Rich Hydration</h5>
                    <p>Rich in natural electrolytes to replenish fluids after workouts, sports, or even a rough night out.</p>
                </div>

                <div class="col-md-4 d-flex flex-column align-items-center text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="lottie-container">
                        <!-- id="lottie2" -->
                        <img src="img/coconut/BCO_icon_Immunity.png" alt="Boosts Immunity" class="lottie-container">
                    </div>
                    <h5 class="mt-3">Boosts Immunity</h5>
                    <p>Delivers 20% of your daily vitamin C, strengthening your immune system in a light, refreshing way.</p>
                </div>

                <div class="col-md-4 d-flex flex-column align-items-center text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="lottie-container">
                        <!-- id="lottie3" -->
                        <img src="img/coconut/BCO_icon_GoodforSkin.png" alt="Good for Skin" class="lottie-container">
                    </div>
                    <h5 class="mt-3">Supports Skin & Recovery</h5>
                    <p>Helps your skin retain moisture and provides natural antioxidants to fight signs of aging and oxidative stress.</p>
                </div>
            </div>
        </div>
    </div>

    <svg viewBox="0 0 1440 100" style="display: block; width: 100%; height: auto; margin-bottom: -1px;">
        <path fill="#516e32" d="M0,100 Q720,0 1440,100 L1440,100 L0,100 Z"></path>
    </svg>

    <div class="product-coconut-bg-2 position-relative">
        <img src="img/coconut/young_coconut_1.png" alt="coconut" class="floating-coconut-1">
        <img src="img/coconut/young_coconut_2.png" alt="coconut" class="floating-coconut-2">
        <div class="container-xxl section-padding">
            <h2 class="text-center text-white mb-5">It Starts with Young Vietnamese Coconuts</h2>
            <div class="bg-white rounded-5 p-3">
                <div class="row">
                    <div class="col-lg-7">
                        <img src="img/coconut/img_main.jpg" alt="" class="product-highlight-img-bg">
                        <!-- https://www.nokaorganics.com/cdn/shop/files/AdobeStock_71166726_83c8afd8-eed0-4c02-9dbe-e0c7137457e9.jpg -->
                    </div>

                    <div class="col-lg-5">
                        <div class="row" style="margin-bottom: 30px;" data-aos="fade-up" data-aos-delay="0">
                            <div class="col-4">
                                <img src="img/coconut/img_sweet.jpg" alt="" class="product-highlight-img-sm">
                                <!-- https://www.nokaorganics.com/cdn/shop/files/iStock-1328913917.jpg -->
                            </div>
                            <div class="col-8 d-flex flex-column justify-content-center">
                                <h6>Naturally Sweet</h6>
                                <p class="mb-0">Young coconuts are up to 30% sweeter than mature ones—so naturally sweet, you’ll think we added sugar (we didn’t).</p>
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 30px;" data-aos="fade-up" data-aos-delay="100">
                            <div class="col-4">
                                <img src="img/coconut/img_nutrients.jpg" alt="" class="product-highlight-img-sm">
                            </div>
                            <div class="col-8 d-flex flex-column justify-content-center">
                                <h6>Rich in Nutrients</h6>
                                <p class="mb-0">Packed with natural electrolytes—especially potassium—and often called the “Water of Life” for its balance and hydration benefits.</p>
                            </div>
                        </div>

                        <div class="row" data-aos="fade-up" data-aos-delay="200">
                            <div class="col-4">
                                <img src="img/coconut/img_pure.jpg" alt="" class="product-highlight-img-sm">
                            </div>
                            <div class="col-8 d-flex flex-column justify-content-center">
                                <h6>100% Pure</h6>
                                <p class="mb-0">To keep everything good from our young coconuts, we add nothing—no sugar, no extras. Just pure coconut water, as it should.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row top-margin">
                <div class="col-lg-4 col-md-6 text-white order-lg-0 order-1 text-md-start text-center">
                    <h2>Health in Every Sip</h2>
                    <h6 class="mb-5">What ‘Packed with Nutrition’ Really Means</h6>

                    <div class="nutrition-container">
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

                <div class="col-lg-4 d-flex justify-content-center order-lg-1 order-0 mt-0" data-aos="fade-up">
                    <img src="img/coconut/BC_Orchard_Coconut_Water_can_2.png" alt="BC Orchard Coconut Water" class="img-fluid product-nutrition-img">
                </div>

                <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center order-lg-2 order-2">
                    <div class="bg-white rounded-5 p-4 w-100" style="max-width: 350px;">
                        <div id="aos-anchor" data-aos="fade-up" data-aos-delay="0">
                            <h6 class="text-center">Every Can Delivers</h6>
                            <hr>
                        </div>

                        <div data-aos="fade-up" data-aos-delay="50" data-aos-anchor="#aos-anchor">
                            <div class="d-flex justify-content-between">
                                <div>calories</div>
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
                                <img src="img/coconut/BCO_coconut_water_can.png" alt="" class="h-100">
                                <div>
                                    <h5 class="mb-0">BC Orchard</h5>
                                    <div>v.s.<br>Other Coconut Water</div>
                                </div>
                            </div>
                            <div class="product-comparison-card-content">
                                No added sugar—not 1%, not less than 1%—zero. No preservatives, no “quality control” additives. Just pure coconut water. Nothing else.
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="product-comparison-card">
                            <div class="product-comparison-inner-card-2">
                                <img src="img/coconut/BCO_coconut_water_can.png" alt="" class="h-100">
                                <div>
                                    <h5 class="mb-0">BC Orchard</h5>
                                    <div>v.s.<br>Juices</div>
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
                                <img src="img/coconut/BCO_coconut_water_can.png" alt="" class="h-100">
                                <div>
                                    <h5 class="mb-0">BC Orchard</h5>
                                    <div>v.s.<br>Sports Drinks</div>
                                </div>
                            </div>
                            <div class="product-comparison-card-content">
                                No artificial colors, flavors, or mystery chemicals you can’t pronounce—just the cleanest, most natural way to restore electrolytes and rehydrate.
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <div class="product-comparison-card">
                            <div class="product-comparison-inner-card-4">
                                <img src="img/coconut/BCO_coconut_water_can.png" alt="" class="h-100">
                                <div>
                                    <h5 class="mb-0">BC Orchard</h5>
                                    <div>v.s.<br>Soft Drinks</div>
                                </div>
                            </div>
                            <div class="product-comparison-card-content">
                                No caffeine, no fizz, and no crash—just clean, natural refreshment you can enjoy daily, with real health benefits in every sip.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <svg viewBox="0 0 1440 100" preserveAspectRatio="none" width="0" height="0">
        <defs>
            <clipPath id="bottomCurve" clipPathUnits="objectBoundingBox">
                <path d="M0,1 Q0.5,0 1,1 L1,0 L0,0 Z" />
            </clipPath>
        </defs>
    </svg>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.5/lottie.min.js"></script>

    <!-- Replace With png Images -->
    <!-- <script>
        lottie.loadAnimation({
            container: document.getElementById('lottie1'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: 'https://www.nokaorganics.com/cdn/shop/files/icon-immune-support.json?v=13080125162050862022'
        });

        lottie.loadAnimation({
            container: document.getElementById('lottie2'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: 'https://www.nokaorganics.com/cdn/shop/files/icon-fruit-blends.json?v=2311880577335748567'
        });

        lottie.loadAnimation({
            container: document.getElementById('lottie3'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: 'https://www.nokaorganics.com/cdn/shop/files/icon-for-all-ages.json?v=11389779386743926115'
        });
    </script> -->

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 500,
            easing: 'ease-in-out',
            once: false
        });
    </script>

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
                769: {
                    slidesPerView: 'auto',
                    centeredSlides: false,
                }
            }
        });
    </script>
</body>

<?php include 'inc/footer.php'; ?>