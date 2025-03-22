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
                    <div class="stat-item st-button">
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
                <p class="description">
                    <span>Реализовано </span>                    <span>собственных объектов</span>
                </p>
                <span class="value">900+</span>
            </div>
            <div class="we-item">
                <p class="description">
                    <span>Человек </span>
                    <span>в команде</span>
                </p>
                <span class="value">120</span>
            </div>
            <div class="we-item">
                <p class="description">
                    <span>Прибыльных </span>
                    <span>проектов</span>
                </p>
                <span class="value">96%</span>
            </div>
            <div class="we-item">
                <p class="description">
                    <span>Бизнес-юнитов</span>

                </p>
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
