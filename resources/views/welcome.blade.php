<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Playing</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('storage/thumbnails/play-3.png')}}">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .background-image {
            background-image: url("{{asset('storage/old-car.jpeg')}}");
            background-size: cover;
            background-repeat: no-repeat;

            /*width: 200px;*/
            /*width: 100%;*/
            height: 102vh;
        }
        @media (min-width: 700px) {
            .slideshow__slide {
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
            }
        }
        @media (min-width : 700px) {
            .h1 {
                position: absolute;
                top: 50%;
                right: 0;
                bottom: 0;
                left: 20%;
                font-size: 30px;
            }
        }



    </style>
    <script>
        const $window = $(window);
        const $body = $('body');

        class Slideshow {
            constructor(userOptions = {}) {
                const defaultOptions = {
                    $el: $('.slideshow'),
                    showArrows: false,
                    showPagination: true,
                    duration: 10000,
                    autoplay: true };


                let options = Object.assign({}, defaultOptions, userOptions);

                this.$el = options.$el;
                this.maxSlide = this.$el.find($('.js-slider-home-slide')).length;
                this.showArrows = this.maxSlide > 1 ? options.showArrows : false;
                this.showPagination = options.showPagination;
                this.currentSlide = 1;
                this.isAnimating = false;
                this.animationDuration = 1200;
                this.autoplaySpeed = options.duration;
                this.interval;
                this.$controls = this.$el.find('.js-slider-home-button');
                this.autoplay = this.maxSlide > 1 ? options.autoplay : false;

                this.$el.on('click', '.js-slider-home-next', event => this.nextSlide());
                this.$el.on('click', '.js-slider-home-prev', event => this.prevSlide());
                this.$el.on('click', '.js-pagination-item', event => {
                    if (!this.isAnimating) {
                        this.preventClick();
                        this.goToSlide(event.target.dataset.slide);
                    }
                });

                this.init();
            }

            init() {
                this.goToSlide(1);
                if (this.autoplay) {
                    this.startAutoplay();
                }

                if (this.showPagination) {
                    let paginationNumber = this.maxSlide;
                    let pagination = '<div class="pagination"><div class="container">';

                    for (let i = 0; i < this.maxSlide; i++) {
                        let item = `<span class="pagination__item js-pagination-item ${i === 0 ? 'is-current' : ''}" data-slide=${i + 1}>${i + 1}</span>`;
                        pagination = pagination + item;
                    }

                    pagination = pagination + '</div></div>';

                    this.$el.append(pagination);
                }
            }

            preventClick() {
                this.isAnimating = true;
                this.$controls.prop('disabled', true);
                clearInterval(this.interval);

                setTimeout(() => {
                    this.isAnimating = false;
                    this.$controls.prop('disabled', false);
                    if (this.autoplay) {
                        this.startAutoplay();
                    }
                }, this.animationDuration);
            }

            goToSlide(index) {
                this.currentSlide = parseInt(index);

                if (this.currentSlide > this.maxSlide) {
                    this.currentSlide = 1;
                }

                if (this.currentSlide === 0) {
                    this.currentSlide = this.maxSlide;
                }

                const newCurrent = this.$el.find('.js-slider-home-slide[data-slide="' + this.currentSlide + '"]');
                const newPrev = this.currentSlide === 1 ? this.$el.find('.js-slider-home-slide').last() : newCurrent.prev('.js-slider-home-slide');
                const newNext = this.currentSlide === this.maxSlide ? this.$el.find('.js-slider-home-slide').first() : newCurrent.next('.js-slider-home-slide');

                this.$el.find('.js-slider-home-slide').removeClass('is-prev is-next is-current');
                this.$el.find('.js-pagination-item').removeClass('is-current');

                if (this.maxSlide > 1) {
                    newPrev.addClass('is-prev');
                    newNext.addClass('is-next');
                }

                newCurrent.addClass('is-current');
                this.$el.find('.js-pagination-item[data-slide="' + this.currentSlide + '"]').addClass('is-current');
            }

            nextSlide() {
                this.preventClick();
                this.goToSlide(this.currentSlide + 1);
            }

            prevSlide() {
                this.preventClick();
                this.goToSlide(this.currentSlide - 1);
            }

            startAutoplay() {
                this.interval = setInterval(() => {
                    if (!this.isAnimating) {
                        this.nextSlide();
                    }
                }, this.autoplaySpeed);
            }

            destroy() {
                this.$el.off();
            }}


        (function () {
            let loaded = false;
            let maxLoad = 3000;

            function load() {
                const options = {
                    showPagination: true };


                let slideShow = new Slideshow(options);
            }

            function addLoadClass() {
                $body.addClass('is-loaded');

                setTimeout(function () {
                    $body.addClass('is-animated');
                }, 600);
            }

            $window.on('load', function () {
                if (!loaded) {
                    loaded = true;
                    load();
                }
            });

            setTimeout(function () {
                if (!loaded) {
                    loaded = true;
                    load();
                }
            }, maxLoad);

            addLoadClass();
        })();
    </script>
</head>
<body>

<div class="background-image">
    <div class="slideshow__slide-caption-title" style="color: #ffffff; margin-top: -20px">
        <h1 class="h1" style="position: absolute; top: 40%; left: 20%; font-size: 55px">
            Everything broken can be repaired
        </h1>
    </div>
</div>
</body>
</html>
{{--// slideshow__slide-caption-title--}}


{{--
  .slideshow__slide-background-load-wrap {
            transition: transform 0.9s cubic-bezier(0.4, 0, 0.2, 1);
            transform: translate3d(0, 100%, 0);
            overflow: hidden;
        }

        .is-loaded .slideshow__slide-background-load-wrap {
            transform: translate3d(0, 0, 0);
            transition-delay: 0s;
        }

        .slideshow__slide.is-prev .slideshow__slide-background-parallax,
        .slideshow__slide.is-next .slideshow__slide-background-parallax {
            transform: none !important;
        }

        .slideshow__slide.is-prev-section .slideshow__slide-background-parallax,
        .slideshow__slide.is-next-section .slideshow__slide-background-parallax {
            transform: none !important;
        }

        .slideshow__slide-background-load {
            transition: transform 0.9s cubic-bezier(0.4, 0, 0.2, 1);
            transform: translate3d(0, -50%, 0);
        }

        .is-loaded .slideshow__slide-background-load {
            transform: translate3d(0, 0, 0);
        }

        .slideshow__slide-background-wrap {
            transition: -webkit-transform 1.2s cubic-bezier(0.4, 0, 0.2, 1) 0.5s;
            transition: transform 1.2s cubic-bezier(0.4, 0, 0.2, 1) 0.5s;
            transition: transform 1.2s cubic-bezier(0.4, 0, 0.2, 1) 0.5s, -webkit-transform 1.2s cubic-bezier(0.4, 0, 0.2, 1) 0.5s;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .slideshow__slide.is-prev .slideshow__slide-background-wrap {
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }

        .slideshow__slide.is-next .slideshow__slide-background-wrap {
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }

        .slideshow__slide.is-prev-section .slideshow__slide-background-wrap {
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
            transition: none;
        }

        .slideshow__slide.is-next-section .slideshow__slide-background-wrap {
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
            transition: none;
        }

        .slideshow__slide-background {
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1) 1.5s;
            transform: scale(1);
            overflow: hidden;
        }

        .slideshow__slide.is-prev .slideshow__slide-background, .slideshow__slide.is-next .slideshow__slide-background {
            transform: scale(0.5);
            transition-delay: 0s;
        }

        .slideshow__slide.is-prev-section .slideshow__slide-background, .slideshow__slide.is-next-section .slideshow__slide-background {
            transform: scale(0.5);
            transition-delay: 0s;
            transition: none;
        }

        .slideshow__slide-image-wrap {
            transition: transform 1.2s cubic-bezier(0.4, 0, 0.2, 1) 0.6s;
            transform: translate3d(0, 0, 0);
        }

        .slideshow__slide.is-prev .slideshow__slide-image-wrap {
            transform: translate3d(0, 50%, 0);
        }

        .slideshow__slide-image {
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1) 1.5s;
            transform: scale(1);
        }

        .slideshow__slide.is-prev .slideshow__slide-image, .slideshow__slide.is-next .slideshow__slide-image {
            transform: scale(1.25);
            transition-delay: 0s;
        }

        .slideshow__slide.is-prev-section .slideshow__slide-image, .slideshow__slide.is-next-section .slideshow__slide-image {
            transform: scale(1.25);
            transition-delay: 0s;
            transition: none;
        }

        .slideshow__slide-image::before, .slideshow__slide-image::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            opacity: 0.35;
        }

        .slideshow__slide-image::before {
            background-color: #1e1e22;
        }

        .slideshow__slide-image::after {
            background: linear-gradient(to bottom, transparent 0%, #1e1e22 100%);
        }

        .slideshow__slide.is-prev .slideshow_container,
        .slideshow__slide.is-next .slideshow_container {
            transform: none !important;
        }

        .slideshow__slide.is-prev-section .slideshow_container,
        .slideshow__slide.is-next-section .slideshow_container {
            transform: none !important;
        }

        .slideshow__slide-caption-text {
            position: relative;
            height: 100%;
            padding-top: 33vh;
            transition: transform 1.2s cubic-bezier(0.4, 0, 0.2, 1) 0.4s;
            transform: translate3d(0, 0, 0);
        }

        .slideshow__slide.is-prev .slideshow__slide-caption-text {
            transform: translate3d(0, -100%, 0);
        }

        .slideshow__slide.is-next .slideshow__slide-caption-text {
            transform: translate3d(0, 100%, 0);
        }

        .slideshow__slide.is-prev-section .slideshow__slide-caption-text {
            transform: translate3d(0, -100%, 0);
            transition: none;
        }

        .slideshow__slide.is-next-section .slideshow__slide-caption-text {
            transform: translate3d(0, 100%, 0);
            transition: none;
        }

        .slideshow__slide-caption {
            position: relative;
            height: 100%;
            transform: translate3d(0, 100%, 0);
            transition: transform 1s cubic-bezier(0.4, 0, 0.2, 1) 0.1s;
        }

        .is-loaded .slideshow__slide-caption {
            transform: translate3d(0, 0, 0);
        }

        .slideshow__slide-caption-title {
            line-height: 1;

        @media (max-height: 500px) {
            margin-bottom: 0 !important;
        }
        }



        @media (max-width: 699px) {
            .slideshow__slide-caption-title {
                font-size: 40px;
                margin-bottom: 150px;
            }
            .slideshow.-full .slideshow__slide-caption-title {
                margin-bottom: 30px;
            }
        }

        @media (min-width: 700px) {
            .slideshow__slide-caption-title {
                font-size: 5.625rem;
                margin-bottom: 1.25rem;
            }
        }

        @media (min-width: 700px) and (max-width: 749px) {
            .slideshow__slide-caption-title {
                font-size: 4.375rem;
            }
        }

        @media (min-width: 1600px) {
            .slideshow__slide-caption-title {
                font-size: 6.25rem;
            }
        }

        .slideshow__slide-caption-title.-full {
            width: 100%;
        }

        .slideshow__slide-caption-subtitle {
            display: inline-block;
            padding: 1.875rem 0;
        }

        .slideshow__slide-caption-subtitle.-load {
            transition: -webkit-transform 0.9s cubic-bezier(0.4, 0, 0.2, 1) 0.4s;
            transition: transform 0.9s cubic-bezier(0.4, 0, 0.2, 1) 0.4s;
            transition: transform 0.9s cubic-bezier(0.4, 0, 0.2, 1) 0.4s, -webkit-transform 0.9s cubic-bezier(0.4, 0, 0.2, 1) 0.4s;
            -webkit-transform: translate3d(0, 3.75rem, 0);
            transform: translate3d(0, 3.75rem, 0);
        }

        .is-loaded .slideshow__slide-caption-subtitle.-load {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        body[data-route-option="prev-section"] .slideshow__slide-caption-subtitle.-load, body[data-route-option="next-section"] .slideshow__slide-caption-subtitle.-load {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .slideshow__slide-caption-subtitle-label {
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transform: translateZ(0);
            display: inline-block;
        }--}}
