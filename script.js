document.addEventListener('DOMContentLoaded', function () {
    // Селекторы элементов
    const openModalButton = document.getElementById('openModal');
    const closeModalButton = document.getElementById('closeModal');
    const dialog = document.getElementById('myModal');
    const showPassButton = document.getElementById('showPass');
    const nameInput = document.getElementById('name');
    const passInput = document.getElementById('pass');
    const nameError = document.getElementById('nameError');
    const passError = document.getElementById('passError');

    // Открытие модального окна
    openModalButton.addEventListener('click', function () {
        dialog.showModal();
    });

    // Закрытие модального окна
    closeModalButton.addEventListener('click', function () {
        dialog.close();
    });

    // Закрытие модального окна при клике за пределы окна
    dialog.addEventListener('click', function (event) {
        if (event.target === dialog) {
            dialog.close();
        }
    });

    // Показать/скрыть пароль
    showPassButton.addEventListener('pointerdown', function () {
        passInput.setAttribute('type', 'text');
    });

    showPassButton.addEventListener('pointerup', function () {
        passInput.setAttribute('type', 'password');
    });

    // Функция для очистки ошибок
    function clearErrors() {
        nameError.textContent = '';
        passError.textContent = '';
    }

    // Функция для валидации полей
    function validateField(input, errorMessage, customMessage) {
        errorMessage.textContent = ''; // Очищаем ошибку

        // Проверяем, если поле не валидно
        if (!input.validity.valid) {
            input.setAttribute('aria-invalid', 'true');
            if (input.validity.valueMissing) {
                errorMessage.textContent = customMessage || 'Это поле обязательно для заполнения.';
            } else if (input.validity.tooShort) {
                errorMessage.textContent = customMessage || 'Пароль должен быть хотя бы 6 символов.';
            } else {
                errorMessage.textContent = 'Некорректное значение.';
            }
        } else {
            input.removeAttribute('aria-invalid');
        }
    }

    // Валидация полей при потере фокуса
    nameInput.addEventListener('blur', function () {
        validateField(nameInput, nameError, 'Имя должно содержать хотя бы 3 символа.');
    });

    passInput.addEventListener('blur', function () {
        validateField(passInput, passError, 'Пароль должен быть хотя бы 6 символов.');
    });

    // Валидация при отправке формы
    document.getElementById('loginForm').addEventListener('submit', function (event) {
        clearErrors(); // Очистить ошибки

        let isValid = true;

        // Проверка имени
        if (nameInput.value.length < 3) {
            nameError.textContent = 'Имя должно содержать хотя бы 3 символа.';
            isValid = false;
        }

        // Проверка пароля
        if (passInput.value.length < 6) {
            passError.textContent = 'Пароль должен содержать хотя бы 6 символов.';
            isValid = false;
        }

        // Если форма не валидна, отменить отправку
        if (!isValid) {
            event.preventDefault();
        }
    });
});
