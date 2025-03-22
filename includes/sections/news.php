<section id="news" class="news">
    <div class="container">
        <div class="">
            <h2 class="section-title-news">НОВОСТИ / медиа</h2>

        </div>

        <div class="news-wrapper">
            <?php
            $news = [
                [
                    'title' => 'ОТКРЫТАЯ ВСТРЕЧА БИЗНЕС-КЛУБА ДОМ',
                    'image' => 'assets/img/news/1.png',
                    'link' => 'https://www.propertyfinder.ae/uae/dubai/new-projects',
                    'linkText' => 'подробнее'
                ],
                [
                    'title' => 'NEW CONSEPTION BY ALLIANCE DESIGN',
                    'image' => 'assets/img/news/2.png',
                    'link' => 'https://www.eventbrite.com/e/webinar-franchising-business-tickets-523111241827',
                    'linkText' => 'подробнее'
                ],
            ];
            ?>

            <div class="news-grid">
                <?php foreach ($news as $item): ?>
                    <div class="news-card">
                        <div class="flex-rerevers">
                        <div class="news-top container">
                            <div class="news-title">
                                <h3><?php echo $item['title']; ?></h3>
                            </div>
                           
                        </div>
                        <div class="news-top">
                            <div class="stats">
                               
                                <a href="<?php echo $item['link']; ?>">
                                    <div class="news-item st-button">
                                        <span class="label"><img src="assets/img/arrow.svg" alt=""></span>
                                        <span class="number"><?php echo $item['linkText']; ?></span>
                                    </div>
                                </a>
                            </div>

                        </div>
                        </div>
                        <div class="news-bottom">
                        <img class="news-img" src="<?php echo $item['image']; ?>" alt="">
                    </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>