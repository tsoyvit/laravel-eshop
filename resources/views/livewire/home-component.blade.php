<div>

    <div id="carousel" class="carousel slide carousel-fade">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/slider/1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>First slide label</h2>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/slider/2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Second slide label</h2>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/slider/3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Third slide label</h2>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/slider/4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Fourth slide label</h2>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/slider/5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Fifth slide label</h2>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="advantages">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="section-title">
                        <span>Наши преимущества</span>
                    </h2>
                </div>
            </div>

            <div class="row gy-3 items">
                <div class="col-lg-3 col-sm-6">
                    <div class="item">
                        <p>
                            <i class="fas fa-shipping-fast"></i>
                        </p>
                        <p>Прямые поставки от производителей брендов</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="item">
                        <p>
                            <i class="fas fa-cubes"></i>
                        </p>
                        <p>Широкий ассортимент товаров. Более 10 тыс. наименований</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="item">
                        <p>
                            <i class="fas fa-hand-holding-usd"></i>
                        </p>
                        <p>Приятные и конкурентные цены</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="item">
                        <p>
                            <i class="fa-solid fa-user-graduate"></i>
                        </p>
                        <p>Консультации от профессионалов</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="featured-products">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="section-title">
                        <span>Рекомендуемые товары</span>
                    </h2>
                </div>
            </div>

            <div class="row">
                @foreach($hitProducts as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3" wire:key="{{ $product->id }}">
                        @include('incs.product-card')
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="new-products">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="section-title">
                        <span>Новинки</span>
                    </h2>
                </div>
            </div>

            <div class="owl-carousel owl-theme owl-carousel-full" wire:key="{{ $product->id }}">
                @foreach($newProducts as $product)
                    @include('incs.product-card')
                @endforeach
            </div>

        </div>
    </section>

    <section class="about-us" id="about">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="section-title">
                        <span>About Us</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit velit illo, ex magni
                        odio rem ab a saepe nihil assumenda illum reiciendis quae nemo fuga porro omnis.
                        Nesciunt, nostrum at?</p>
                    <p>Laboriosam, esse dolore incidunt voluptas ea enim quasi laudantium quod ipsum asperiores,
                        labore, similique cum accusamus optio perspiciatis et cumque pariatur est sapiente
                        dolorem repudiandae libero nulla nesciunt rem! Magnam!</p>
                    <p>Voluptatem, maiores dicta? Quod enim temporibus sapiente quisquam optio sed fuga, facilis
                        iusto animi qui, vitae voluptate inventore eveniet nulla eius soluta et magnam eligendi
                        a veniam tenetur laborum saepe.</p>
                </div>
            </div>
        </div>
    </section>

    <iframe id="map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2407.1070529675467!2d2.3478712780714384!3d48.85881153486507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1ee52239cb%3A0x2cacf4239af49ccb!2zMTggUnVlIFNhaW50LURlbmlzLCA3NTAwMSBQYXJpcywg0KTRgNCw0L3RhtC40Y8!5e0!3m2!1sru!2sua!4v1683972127217!5m2!1sru!2sua"
            width="100%" height="450" style="border:0; display: block;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
    </iframe>

</div>

@script
<script>
    $(function () {

        $(".owl-carousel-full").owlCarousel({
            margin: 20,
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 2
                },
                700: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });

    });
</script>
@endscript
