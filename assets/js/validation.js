document.addEventListener('DOMContentLoaded', function () {
    // Маска для номера телефона
    var phoneInputs = document.querySelectorAll(".maskphone");

    phoneInputs.forEach(phoneInput => {
        phoneInput.addEventListener("input", mask);
        phoneInput.addEventListener("focus", mask);
        phoneInput.addEventListener("blur", mask);
    });

    function mask(event) {
        var blank = "+_ (___) ___-__-__";
        var i = 0;
        var val = this.value.replace(/\D/g, "").replace(/^8/, "7").replace(/^9/, "79");

        this.value = blank.replace(/./g, function(char) {
            if (/[_\d]/.test(char) && i < val.length) return val.charAt(i++);
            return i >= val.length ? "" : char;
        });

        if (event.type == "blur") {
            if (this.value.length == 2) this.value = "";
        } else {
            setCursorPosition(this, this.value.length);
        }
    }

    function setCursorPosition(elem, pos) {
        elem.focus();
        if (elem.setSelectionRange) {
            elem.setSelectionRange(pos, pos);
        } else if (elem.createTextRange) {
            var range = elem.createTextRange();
            range.collapse(true);
            range.moveEnd("character", pos);
            range.moveStart("character", pos);
            range.select();
        }
    }

    // Форма отправки
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(form);
            
            fetch('send.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Replace form with success message
                    const formWrapper = form.closest('.contact-wrapper');
                    formWrapper.innerHTML = `
                        <div class="success-message">
                            <h3 class="section-title">Спасибо за обращение!</h3>
                            <p class="section-description">Ваше сообщение успешно отправлено.</p>
                            <p class="section-description">Наш специалист свяжется с вами в ближайшее время.</p>
                        </div>
                    `;
                } else {
                    alert(data.message || 'Произошла ошибка при отправке сообщения');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Произошла ошибка при отправке сообщения');
            });
        });
    });
});
