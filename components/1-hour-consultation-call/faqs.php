<section>
    <div class="__faqs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <h3>Frequently Asked Questions</h3>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-7">
                    <div class="__faqsInner bg-white">
                        <?php
                        $faqs = [
                            [
                                'title' => 'What does the legal urgent assessment include ?',
                                'content' => '<p>1- Includes 1 hour of consultation with a Lawyer or Consultant, plus 1.5 hours of private interviews with one of our agents regulated by Immigration Canada.</p>

                                <p>2- You will receive an in-depth analysis of your immigration situation and needs, evaluating human, professional and immigration aspects. If you do not have a profile for any program, then the plan will focus on improving the areas you need to improve your profile. </p>

                                <p>This is the fastest and most financially affordable way you will find .</p>'
                            ],
                            [
                                'title' => 'How will I receive my emergency legal evaluation? ',
                                'content' => 'In this section, we cover the background information relevant to the subject. This includes historical context, key developments, and foundational concepts that will help you understand the main content.'
                            ],
                            [
                                'title' => 'How will I make my payment ?',
                                'content' => '<p>You must click on the red button here, it is secure, no one on our team has access to your data other than the bank.</p>
                                
                                <p>
                                Payment must be made via credit card.
                                </p>
                                <p>
                                If you wish to finance the cost of the Legal Consultation, you must do so with your bank, we do not have this option available.
                                </p>
                                '
                            ]
                        ];
                        ?>

                        <div class="p-2 mx-auto text-zinc-700 flex-column divide-y-2 divide-solid divide-white divide-opacity-5 divide-white">
                            <?php foreach ($faqs as $item): ?>
                                <div class="item p-4 flex flex-col">
                                    <div class="title font-bold d-flex justify-content-between align-items-center">
                                        <h4 class="text-xl"><?php echo $item['title']; ?></h4>
                                        <span class="fas fa-chevron-down"></span>
                                    </div>
                                    <p class="text">
                                    <?php echo htmlspecialchars_decode($item['content']); ?>
                                    </p>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>