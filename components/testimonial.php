<section>
    <div class="__testimonial">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center flex-columns">
                    <h3>Happy Clients Now Living In Canada</h3>
                </div>
                <div class="col-12">
                    <?php
                    $testimonials = [
                        [
                            'name' => 'Carmen Arteaga',
                            'image' => '/public/images/testimonials/1.png',
                            'rating' => '/public/images/testimonials/rating.png',
                            'text' => 'Excellent service received by agent Carlos Fernando Ayala Rodriguez. The information provided was clear, complete and exceeded my expectations. Thank you very much Mr. Carlos Fernando for your kindness and your recommendations!',
                        ],
                        [
                            'name' => 'Claudio Fernandez',
                            'image' => '/public/images/testimonials/1.png',
                            'rating' => '/public/images/testimonials/rating.png',
                            'text' => 'Muy buen servicio desde el comienzo, la atención brindada por el agente Carlos Fernando Ayala es muy buena, amable y respetuoso. Te brinda muy buena información y que es lo que se debe de evitar para no ser víctimas de un fraude. Muchas gracias!!',
                        ],
                        [
                            'name' => 'Yamal Prieto',
                            'image' => '/public/images/testimonials/1.png',
                            'rating' => '/public/images/testimonials/rating.png',
                            'text' => 'Muy buen servicio desde el comienzo, la atención brindada por el agente Carlos Fernando Ayala es muy buena, amable y respetuoso. Te brinda muy buena información y que es lo que se debe de evitar para no ser víctimas de un fraude. Muchas gracias!!',
                        ],
                        [
                            'name' => 'Florencia Barbero',
                            'image' => '/public/images/testimonials/1.png',
                            'rating' => '/public/images/testimonials/rating.png',
                            'text' => 'Muy buen servicio desde el comienzo, la atención brindada por el agente Carlos Fernando Ayala es muy buena, amable y respetuoso. Te brinda muy buena información y que es lo que se debe de evitar para no ser víctimas de un fraude. Muchas gracias!!',
                        ],
                        [
                            'name' => 'Florencia Barbero',
                            'image' => '/public/images/testimonials/1.png',
                            'rating' => '/public/images/testimonials/rating.png',
                            'text' => 'Muy buen servicio desde el comienzo, la atención brindada por el agente Carlos Fernando Ayala es muy buena, amable y respetuoso. Te brinda muy buena información y que es lo que se debe de evitar para no ser víctimas de un fraude. Muchas gracias!!',
                        ],
                    ];

                    echo '<div class="__embla">';

                    echo '        <div class="__embla__container py-5">';

                    foreach ($testimonials as $testimonial) {
                        echo '            <div class="__embla__slide __embla__class-names">';
                        echo '                <div class="__customSlides d-flex align-items-start gap-3">';
                        echo '                    <div>';
                        echo '                        <img src="' . htmlspecialchars($testimonial['image']) . '" alt="">';
                        echo '                    </div>';
                        echo '                    <div>';
                        echo '                        <h4>' . htmlspecialchars($testimonial['name']) . '</h4>';
                        echo '                        <img src="' . htmlspecialchars($testimonial['rating']) . '" alt="" class="mb-2" width="120" height="20">';
                        echo '                        <p>' . htmlspecialchars($testimonial['text']) . '</p>';
                        echo '                    </div>';
                        echo '                </div>';
                        echo '            </div>';
                    }



                    echo '        </div>';

                    echo '</div>';

                    ?>


                </div>
            </div>
        </div>
    </div>
</section>