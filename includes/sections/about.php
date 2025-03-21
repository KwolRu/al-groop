<img class="about-img" src="assets/img/we.png" alt="" srcset="">
<section id="about" class="about">
    <div class="container">
        <p class="about-title">О компании</p>
        <div class="about-content">
            <div class="about-text" id="aboutText">
                <p>Alliance Invest начали свою работу <br>на рынке недвижимости в 2008 году.</p>
                <p class="hidden-text">За этот срок компания зарекомендовала себя как надежного партнера для клиентов, инвесторов и девелоперов.</p>
            </div>
            <div class="stats">
                <a href="javascript:void(0)" onclick="toggleText()">
                    <div class="stat-item">
                        <span class="number" id="readMoreBtn">подробнее</span>
                        <span class="label"><img src="assets/img/arrow.svg" alt=""></span>
                    </div>
                </a>
                <!-- Add more stats -->
            </div>
        </div>
    </div>

    <div class="container w-50">


        <div class="we-grid">
            <div class="we-item">
                <span class="description">
                    <span>Реализовано </span>
                    <span>собственных объектов</span>
                </span>
                <span class="value">900+</span>
            </div>
            <div class="we-item">
                <span class="description">
                    <span>Человек </span>
                    <span>в команде</span>
                </span>
                <span class="value">120</span>
            </div>
            <div class="we-item">
                <span class="description">
                    <span>Прибыльных </span>
                    <span>проектов</span>
                </span>
                <span class="value">96%</span>
            </div>
            <div class="we-item">
                <span class="description">
                    <span>Бизнес-юнитов</span>

                </span>
                <span class="value">10</span>
            </div>
        </div>

    </div>
</section>

<script>
    function toggleText() {
        const hiddenText = document.querySelector('.hidden-text');
        const btn = document.getElementById('readMoreBtn');
        hiddenText.classList.toggle('visible');
        btn.textContent = hiddenText.classList.contains('visible') ? 'свернуть' : 'подробнее';
    }
</script>