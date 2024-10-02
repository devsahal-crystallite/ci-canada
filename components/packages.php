<section>
    <div class="__packages">
        <div class="container">
            <div class="row g-4 align-items-center justify-content-center">
                <div class="d-flex justify-content-center mb-5 __packagesHeading">
                    <h3>Let Jesus Hernández Fight For You</h3>
                </div>
                <?php
                $packages = [
                    [
                        'price' => '$10 CAD',
                        'title' => 'Pre-assessment',
                        'description' => 'Confirm your eligibility to immigrate to Canada.',
                        'details' => [
                            'Answer general questions with an assessment',
                            'Provide answers within 15 days',
                        ],
                        'ctaTxt' => 'Get Pre-assessment',
                        'showAdditionalPrice' => false, 
                        'link' => 'pre-assessment',
                    ],

                    [
                        'price' => '$150 CAD',
                        'title' => '30 min Consultation',
                        'description' => 'Consultation from a Canadian regulated consultant.',
                        'details' => [
                            'Conduct an analysis of your situation',
                            'Interview with a regulated agent',
                            'Legal team performs the analysis',
                            'Conclusion provided by a consultant',
                            'Check in agenda max. in 10 days',
                        ],
                        'ctaTxt' => 'Make Appointment',
                        'showAdditionalPrice' => true,  
                        'discounttitle'=>'',
                        'discountPrice'=>'$250 CAD',
                        'discountText'=>'limited time only',
                        'link' => '30-minute-consultation-call',
                    ],
                    [
                        'price' => '$210 CAD ',
                        'title' => '60 Minute Consultation',
                        'description' => 'Priority appointment scheduled within 3 days or less.',
                        'details' => [
                            'Interview with a regulated agent',
                            'Analysis of your situation and information',
                            'Presentation of alternatives',
                            'Legal team analysis',
                            'Interview with a regulated agent',
                            'Strategy delivery',
                        ],
                        'ctaTxt' => 'Make Appointment',
                        'showAdditionalPrice' => true, 
                        'discounttitle'=>'MOST POPULAR',
                        'discountPrice'=>'$350 CAD',
                        'discountText'=>'limited time only',
                        'link' => '1-hour-consultation-call',
                    ],
                ];

                foreach ($packages as $package) {
                    echo '<div class="col-lg-4 col-md-6 ">';
                    echo '  <div class="__pacakgesColumn d-flex flex-column justify-content-between">';
                    echo '    <div class="d-flex flex-column align-items-start justify-content-start gap-2">';
                    echo '      <div class="d-flex justify-content-between gap-2 __pricing">';
                    echo '          <div class="w-100"><h4 class="d-block">' . htmlspecialchars($package['price']) . '</h4></div>';
                
                    if ($package['showAdditionalPrice']) {
                        echo '<div class="__InnerAddtionalPrice">'; 
                        echo '<h3> ' . htmlspecialchars($package['discounttitle']) . '</h3>';
                        echo '<del> ' . htmlspecialchars($package['discountPrice']) . '</del>';
                        echo '<div class="__limitedTime"><p>' . htmlspecialchars($package['discountText']) . '</p></div>';
                        echo '</div>';
                    }
                
                    echo '</div>'; 
                    echo '        <span>' . htmlspecialchars($package['title']) . '</span>';
                    echo '        <p>' . htmlspecialchars($package['description']) . '</p>';
                    echo '        <ul>';
                    foreach ($package['details'] as $detail) {
                        echo '            <li class="d-flex align-items-center gap-3"> <img src="/public/images/check-circle-1.png" alt="">' . htmlspecialchars($detail) . '</li>';
                    }
                    echo '        </ul>';
                    echo '    </div>'; // Close the details div
                    echo ' <a href="' . htmlspecialchars($package['link']) . '" class="btn __packagesbtn ">';
                    echo '<div class="d-flex justify-content-between align-items-center gap-3">';
                    echo ' <span>' . htmlspecialchars($package['ctaTxt']) . ' </span>';
                    echo '<img src="/public/images/red-right.png" alt="" srcset="" width="16" height="16">';
                    echo ' </div>';
                    echo '</a>';
                    echo '</div>'; 
                    echo '</div>';
                }
                ?>

            </div>
        </div>
    </div>
</section>