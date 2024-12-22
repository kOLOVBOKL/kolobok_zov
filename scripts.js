// Получаем элементы для управления паролем
const togglePasswordButton = document.getElementById('toggle-password');
const passwordField = document.getElementById('password');

// Функция для переключения отображения пароля
togglePasswordButton.addEventListener('click', function() {
    // Если пароль скрыт, показываем его, если показан - скрываем
    const type = passwordField.type === 'password' ? 'text' : 'password';
    passwordField.type = type;

    // Меняем текст кнопки
    if (type === 'password') {
        togglePasswordButton.textContent = 'Show Password';
    } else {
        togglePasswordButton.textContent = 'Hide Password';
    }
});
