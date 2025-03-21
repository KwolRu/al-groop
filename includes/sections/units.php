<section id="units" class="units">
    <div class=" mx-auto px-4">
        <h2>Юниты</h2>
 
        <?php
        $units = [
            [
            'title' => 'INVEST',
            'description' => '<span>Выгодно покупаем и продаем</span><span> квартиры уже более 18 лет</span>',
            'sub-description' => '/ИНВЕСТИЦИОННОЕ АГЕНСТВО',
            'number' => 'invest.com',
            'image' => 'assets/img/units/1.png',
            'link' => 'https://invest.com',
            'linkText' => 'Подробнее'
            ],
            [
            'title' => 'DOM CLUB',
            'description' => 'СЕМЕЙНЫЙ БИЗНЕС-КЛУБ',
            'sub-description' => '/БИЗНЕС-КЛУБ',
            'number' => 'domclub.ru',
            'image' => 'assets/img/units/2.png',
            'link' => 'https://domclub.ru',
            'linkText' => 'Узнать больше'
            ],
            [
            'title' => 'FLIPPING POINT',
            'description' => 'ТОЧКА НАДЕЖНОГО ДОХОДА ВО ФРАНЧАЙЗИНГОВОМ БИЗНЕСЕ',
            'sub-description' => '/СТУДИЯ ФРАНЧАЙЗИНГОВОГО БИЗНЕСА',
            'number' => 'flippingpoint.ru',
            'image' => 'assets/img/units/3.png',
            'link' => 'https://flippingpoint.ru',
            'linkText' => 'Открыть сайт'
            ],
            [
            'title' => 'FLIPPING POINT ОАЭ',
            'description' => 'ТОЧКА НАДЕЖНОГО ДОХОДА ВО ФРАНЧАЙЗИНГОВОМ БИЗНЕСЕ',
            'sub-description' => '/СТУДИЯ ФРАНЧАЙЗИНГОВОГО БИЗНЕСА',
            'number' => 'flippingpoint.ae',
            'image' => 'assets/img/units/4.png',
            'link' => 'https://flippingpoint.ae',
            'linkText' => 'Coming soon'
            ],
            [
            'title' => 'AGENCY',
            'description' => 'Инвест. агенство по приобретению / продаже квартиры',
            'sub-description' => '/ИНВЕСТИЦИОННОЕ АГЕНСТВО',
            'number' => 'agency.com',
            'image' => 'assets/img/units/5.png',
            'link' => 'https://agency.com',
            'linkText' => 'Перейти'
            ],
            [
                'title' => 'STYLE',
            'description' => 'СОЗДАЕМ МЕЧТЫ -ОФОРМЛЯЕМ РЕАЛЬНОСТЬ',
            'sub-description' => '/ИНВЕСТИЦИОННОЕ АГЕНСТВО',
            'number' => 'agency.com',
            
            'image' => 'assets/img/units/6.png',
            'link' => 'https://agency.com',
            'linkText' => 'Перейти'
            ],
            [
            'title' => 'HR ALLIANCE',
            'description' => 'ПОДБОР ПЕРСОНАЛА НИКОГДА НЕ БЫЛ ТАКИМ ПРОСТЫМ',
            'sub-description' => '/ИНВЕСТИЦИОННОЕ АГЕНСТВО',
            'number' => 'hr-alliance.com',
            'image' => 'assets/img/units/7.png',
            'link' => 'https://hr-alliance.com',
            'linkText' => 'Связаться'
            ],
            [
            'title' => 'DESIGN',
            'description' => 'Продажа готовых интерьерных решений',
            'sub-description' => '/ИНВЕСТИЦИОННОЕ АГЕНСТВО',
            'number' => 'design.ru',
            'image' => 'assets/img/units/8.png',
            'link' => 'https://design.ru',
            'linkText' => 'Зайти'
            ],
            [
            'title' => 'QUICK-DEV',
            'description' => 'СОЗДАЕМ БЫСТРЫЕ IT-РЕШЕНИЯ',
            'sub-description' => '/ИНВЕСТИЦИОННОЕ АГЕНСТВО',
            'number' => 'quick-dev.com',
            'image' => 'assets/img/units/9.png',
            'link' => 'https://quick-dev.com',
            'linkText' => 'Проверить'
            ],
            [
            'title' => 'БЛАГОТВОРИТЕЛЬНЫЙ ФОНД',
            'description' => 'СОЗДАЕМ БЫСТРЫЕ IT-РЕШЕНИЯ',
            'sub-description' => '/ИНВЕСТИЦИОННОЕ АГЕНСТВО',
            'number' => 'fond.ru',
            'image' => 'assets/img/units/10.png',
            'link' => 'https://fond.ru',
            'linkText' => 'Посмотреть'
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
                            <p><?php echo $unit['description']; ?></p>
                            <div class="stats">
                                <div class="sub-description">
                                    <p><?php echo $unit['sub-description']; ?></p>
                                </div>
                                <a href="<?php echo $unit['link']; ?>">
                                    <div class="units-item">
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
        </div>
    </div>
    <script src="assets/js/units.js"></script>
</section>
