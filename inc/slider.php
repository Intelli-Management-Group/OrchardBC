<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .swiper {
            width: 100%;
            height: 900px;
        }

        .swiper-slide {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            background: black;
        }

        .home-slider {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .bg-image {
            position: absolute;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            z-index: -1;
            transform: scale(1);
        }

        .slider-content {
            color: white;
            text-align: left;
            opacity: 0;
            position: absolute;
            left: 5%;
            top: 50%;
            transform: translateY(-50%);
            width: 50%;
        }

        .swiper-pagination {
            bottom: 10% !important;
            left: 8% !important;
            right: auto;
            text-align: left;
            display: flex;
            align-items: center;
        }

        .swiper-pagination-bullet {
            background: white;
            opacity: 0.6;
            margin-right: 15px !important;
        }

        .swiper-pagination-bullet-active {
            opacity: 1;
            width: 12px;
            height: 12px;
            background: transparent;
            box-shadow: 0 0 0 2px #a8cc3c;
        }
    </style>
</head>

<body>
    <div class="swiper homeSwiper">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="home-slider">
                    <div class="bg-image" style="background-image: url('img/home/slider_1.jpg');"></div>
                    <div class="slider-content">
                        <div class="upper-header">PURE COCONUT WATER</div>
                        <h1>100% Coconut <br> Nothing More,<br> Nothing Less</h1>
                        <button class="button-white">LEARN MORE</button>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="home-slider">
                    <div class="bg-image" style="background-image: url('img/home/slider_2.jpg');"></div>
                    <div class="slider-content">
                        <div class="upper-header">CRAFTED TO DELIGHT</div>
                        <h1>Handcrafted in Japan for Moments That Matter</h1>
                        <button class="button-white">LEARN MORE</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-pagination"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <script>
        const swiper = new Swiper(".homeSwiper", {
            loop: true,
            allowTouchMove: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            speed: 0, // make swiper instantly switch slide (0 transition)
            on: {
                init: function() {
                    gsap.set(this.slides[this.activeIndex].querySelector('.bg-image'), {
                        scale: 1,
                        opacity: 1
                    });
                    animateText(this.slides[this.activeIndex]);
                },
                slideChangeTransitionStart: function() {
                    const previousSlide = this.slides[this.previousIndex];
                    const bgPrev = previousSlide.querySelector('.bg-image');
                    gsap.to(bgPrev, {
                        scale: 1.5, // More zoom out
                        opacity: 0,
                        duration: 2.5, // Longer duration
                        ease: "power3.out"
                    });

                    gsap.set(".slider-content", {
                        autoAlpha: 0,
                        y: 200
                    });
                },
                slideChangeTransitionEnd: function() {
                    const activeSlide = this.slides[this.activeIndex];
                    const bgActive = activeSlide.querySelector('.bg-image');
                    gsap.fromTo(bgActive, {
                        scale: 1.5, // Start more zoomed out
                        opacity: 0
                    }, {
                        scale: 1,
                        opacity: 1,
                        duration: 2.5, // Longer duration
                        ease: "power3.out"
                    });

                    animateText(activeSlide);
                }
            }
        });

        function animateText(slide) {
            const content = slide.querySelector(".slider-content");
            if (content) {
                gsap.to(content, {
                    autoAlpha: 1,
                    y: 0,
                    duration: 1.5,
                    ease: "power2.out",
                    delay: 0.5
                });
            }
        }
    </script>
</body>

</html>