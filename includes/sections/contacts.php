<section id="contacts" class="contacts section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="left-od">
            <h2 class="section-title">СВЯЗАТЬСЯ<br>С НАМИ</h2>
            <p class="section-description">
                <span>Оставьте заявку, наш специалист свяжется с вами и проведет</span> <span>консультацию по всем юнитами "ALLIANCE GROUP"</span>
            </p>
            <div class="stats">
                <a href="javascript:void(0)" onclick="toggleText()">
                    <div class="stat-item st-button od">
                        <span class="number" id="readMoreBtn">подробнее</span>
                        <span class="label"><img src="assets/img/arrow.svg" alt=""></span>
                    </div>
                </a>
                <!-- Add more stats -->
            </div>
        </div>

        <div class="contact-wrapper right-od">
            <form class="contact-form" method="POST" action="send.php" id="mainContactForm">
                <div class="form-group">
                    <input type="text" name="name" id="name" class="form-input" placeholder=" ">
                    <label for="name" class="form-label">ИМЯ</label>
                </div>

                <div class="form-group">
                    <input type="tel" name="phone" id="phone" required class="form-input maskphone" placeholder=" ">
                    <label for="phone" class="form-label">ТЕЛЕФОН</label>
                </div>

                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-input" placeholder=" ">
                    <label for="email" class="form-label">ЭЛЕКТРОННАЯ ПОЧТА</label>
                </div>

                <div class="form-group">
                    <textarea name="message" id="message" rows="4" class="form-input" placeholder="необязательно"></textarea>
                    <label for="message" class="form-label">КОММЕНТАРИЙ </label>
                </div>
                <button type="submit" class="submit-button">
                    <div class="stat-item st-button">
                        <span class="number">отправить</span>
                        <span class="label"><img src="assets/img/arrow.svg" alt=""></span>
                    </div>
                </button>
            </form>
        </div>
    </div>
</section>