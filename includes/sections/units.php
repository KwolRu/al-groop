<section id="units" class="units">
    <div class=" mx-auto px-4">
        <h2>Юниты</h2>

        <?php
        $units = [
            [
            'title' => 'INVEST',
            'description' => '<span>Выгодно покупаем и продаем</span><span> квартиры уже более 18 лет</span>',
            'sub-description' => '/ИНВЕСТИЦИОННОЕ АГЕНСТВО',
            'image' => 'assets/img/units/1.png',
            'link' => 'https://alliance-invest.ru',
            'linkText' => 'сайт'
            ],
            [
            'title' => 'DOM CLUB',
            'description' => 'СЕМЕЙНЫЙ БИЗНЕС-КЛУБ',
            'sub-description' => '/БИЗНЕС-КЛУБ',
            'image' => 'assets/img/units/2.png',
            'link' => 'https://dom-club.com',
            'linkText' => 'сайт'
            ],
            [
            'title' => 'FLIPPING POINT',
            'description' => 'ТОЧКА НАДЕЖНОГО ДОХОДА ВО ФРАНЧАЙЗИНГОВОМ БИЗНЕСЕ',
            'sub-description' => '/СТУДИЯ ФРАНЧАЙЗИНГОВОГО БИЗНЕСА',
            'image' => 'assets/img/units/3.png',
            'link' => '#',
            'linkText' => 'сайт'
            ],
            [
            'title' => 'FLIPPING POINT ОАЭ',
            'description' => 'ТОЧКА НАДЕЖНОГО ДОХОДА ВО ФРАНЧАЙЗИНГОВОМ БИЗНЕСЕ',
            'sub-description' => '/СТУДИЯ ФРАНЧАЙЗИНГОВОГО БИЗНЕСА',
            'image' => 'assets/img/units/4.png',
            'link' => '#',
            'linkText' => 'подробнее'
            ],
            [
            'title' => 'AGENCY',
            'description' => 'Инвест. агенство по приобретению / продаже квартиры',
            'sub-description' => '/ИНВЕСТИЦИОННОЕ АГЕНСТВО',
            'image' => 'assets/img/units/5.png',
            'link' => 'https://alliance-agency.ru',
            'linkText' => 'сайт'
            ],
            [
            'title' => 'STYLE',
            'description' => 'СОЗДАЕМ МЕЧТЫ -ОФОРМЛЯЕМ РЕАЛЬНОСТЬ',
            'sub-description' => '/ИНВЕСТИЦИОННОЕ АГЕНСТВО',
            'image' => 'assets/img/units/6.png',
            'link' => 'https://alliance-style.ru',
            'linkText' => 'сайт'
            ],
            [
            'title' => 'HR ALLIANCE',
            'description' => 'ПОДБОР ПЕРСОНАЛА НИКОГДА НЕ БЫЛ ТАКИМ ПРОСТЫМ',
            'sub-description' => '/ИНВЕСТИЦИОННОЕ АГЕНСТВО',
            'image' => 'assets/img/units/7.png',
            'link' => 'https://hr-easy.ru/',
            'linkText' => 'сайт'
            ],
            [
            'title' => 'DESIGN',
            'description' => 'Продажа готовых интерьерных решений',
            'sub-description' => '/ИНВЕСТИЦИОННОЕ АГЕНСТВО',
            'image' => 'assets/img/units/8.png',
            'link' => 'https://alliance-roomstore.ru',
            'linkText' => 'сайт'
            ],
            [
            'title' => 'QUICK-DEV',
            'description' => 'СОЗДАЕМ БЫСТРЫЕ IT-РЕШЕНИЯ',
            'sub-description' => '/ИНВЕСТИЦИОННОЕ АГЕНСТВО',
            'image' => 'assets/img/units/9.png',
            'link' => 'https://quick-dev.ru',
            'linkText' => 'сайт'
            ],
            [
            'title' => 'БЛАГОТВОРИТЕЛЬНЫЙ ФОНД',
            'description' => 'СОЗДАЕМ БЫСТРЫЕ IT-РЕШЕНИЯ',
            'sub-description' => '/ИНВЕСТИЦИОННОЕ АГЕНСТВО',
            'image' => 'assets/img/units/10.png',
            'link' => 'https://fond.ru',
            'linkText' => 'подробнее'
            ],
        ];
        ?>

        <div class="units-grid">
            <?php foreach ($units as $unit):
                // Generate ID based on unit title
                $id = '';
                switch ($unit['title']) {
                    case 'INVEST':
                        $id = 'alliance-invest';
                        break;
                    case 'DOM CLUB':
                        $id = 'dom-club';
                        break;
                    case 'FLIPPING POINT':
                        $id = 'flipping-point';
                        break;
                    case 'FLIPPING POINT ОАЭ':
                        $id = 'flipping-point-uae';
                        break;
                    case 'AGENCY':
                        $id = 'alliance-agency';
                        break;
                    case 'STYLE':
                        $id = 'alliance-style';
                        break;
                    case 'HR ALLIANCE':
                        $id = 'hr-alliance';
                        break;
                    case 'DESIGN':
                        $id = 'design';
                        break;
                    case 'QUICK-DEV':
                        $id = 'quick-dev';
                        break;
                    case 'БЛАГОТВОРИТЕЛЬНЫЙ ФОНД':
                        $id = 'charity-fund';
                        break;
                }
            ?>
                <div id="<?php echo $id; ?>" class="units-card">
                    <div class="units-top container">
                        <div class="units-title">
                            <h3><?php echo $unit['title']; ?></h3>
                        </div>
                        <div class="units-text">
                            <div class="collection">
                            <p><?php echo $unit['description']; ?></p>
                            <div class="sub-description">
                                    <p><?php echo $unit['sub-description']; ?></p>
                                </div>
                            </div>
                            <div class="stats">
                                
                                <a href="<?php echo $unit['link']; ?>">
                                    <div class="units-item st-button">
                                        <span class="label"><img src="assets/img/arrow.svg" alt=""></span>
                                        <span class="number"><?php echo $unit['linkText']; ?></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="units-bottom">
                        <img src="<?php echo $unit['image']; ?>" alt="">
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- <ul id="cards">
                        <li class="card" id="card_1">
                            <div class="card__content">
                                <div>
                                    <h2>Card One</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <p><a href="#top" class="btn btn--accent">Read more</a></p>
                                </div>
                                <figure>
                                    <img src="https://codyhouse.co/demo-tutorials/stacking-cards/assets/img/img-1.jpg" alt="Image description">
                                </figure>
                            </div>
                        </li>
                        <li class="card" id="card_2">
                            <div class="card__content">
                                <div>
                                    <h2>Card Two</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <p><a href="#top" class="btn btn--accent">Read more</a></p>
                                </div>
                                <figure>
                                    <img src="https://codyhouse.co/demo-tutorials/stacking-cards/assets/img/img-2.jpg" alt="Image description">
                                </figure>
                            </div>
                        </li>
                        <li class="card" id="card_3">
                            <div class="card__content">
                                <div>
                                    <h2>Card Three</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <p><a href="#top" class="btn btn--accent">Read more</a></p>
                                </div>
                                <figure>
                                    <img src="https://codyhouse.co/demo-tutorials/stacking-cards/assets/img/img-3.jpg" alt="Image description">
                                </figure>
                            </div>
                        </li>
                        <li class="card" id="card_4">
                            <div class="card__content">
                                <div>
                                    <h2>Card Four</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <p><a href="#top" class="btn btn--accent">Read more</a></p>
                                </div>
                                <figure>
                                    <img src="https://codyhouse.co/demo-tutorials/stacking-cards/assets/img/img-2.jpg" alt="Image description">
                                </figure>
                            </div>
                        </li>
                    </ul> -->
                    <!-- <script>
                        import {
                            showDialog
                        } from 'https://codepen.io/bramus/pen/ZEqMOLz/cccfe67c2b9cdfbeb5fb59083dbd0a64.jsx';
                        showDialog('https://scroll-driven-animations.style/demos/stacking-cards/css/');
                    </script> -->
        </div>
    </div>
    <script src="assets/js/units.js"></script>
</section>