<section>
    <div class="">
        <div class="container">
            <div class="__experience">
                <div class="d-flex justify-content-center align-items-center px-5">
                    <h2 class="text-white __heading">Canadian accredited lawyers and consultants with 28+ years of experience</h2>
                </div>
                <?php
                $experiences = [
                    [
                        'image' => '/public/images/experience/experience1.png',
                        'number' => '9,500 +',
                        'text' => 'migrated to Canada',
                    ],
                    [
                        'image' => '/public/images/experience/experience2.png',
                        'number' => '100%',
                        'text' => 'of refugee cases won in 2023',
                    ],
                    [
                        'image' => '/public/images/experience/experience3.png',
                        'number' => '3,000 +',
                        'text' => 'international students migrated',
                    ],
                    [
                        'image' => '/public/images/experience/experience4.png',
                        'number' => '12,500 +',
                        'text' => 'migrated due to CI Canada',
                    ],
                ];

                echo '<div class="row my-5 px-5">';
                foreach ($experiences as $experience) {
                    echo '<div class="col-lg-3 col-md-6 mb-3">';
                    echo '    <div class="d-flex flex-column justify-content-start align-items-lg-start align-items-center __expSection">';
                    echo '        <img src="' . htmlspecialchars($experience['image']) . '" alt="" class="mb-3">';
                    echo '        <h3>' . htmlspecialchars($experience['number']) . '</h3>';
                    echo '        <p>' . htmlspecialchars($experience['text']) . '</p>';
                    echo '    </div>';
                    echo '</div>';
                }
                echo '</div>';
                ?>
                <div class="d-flex justify-content-center mx-auto">
                    <a href="http://" class="btn __btn bg-red text-white">
                        <div class="d-flex justify-content-between gap-3">
                            <span>Get Started </span>
                            <img src="/public/images/icon-arrow-right.png" alt="" srcset="">
                        </div>
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>