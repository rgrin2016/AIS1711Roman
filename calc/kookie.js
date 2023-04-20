// сохраняем значения формы в куки
function saveFormInputs() {
  // получаем элементы формы
  const nameInput = document.getElementById('name');
  const emailInput = document.getElementById('email');
  const messageInput = document.getElementById('message');
  
  // создаем объект с данными формы
  const formData = {
    name: nameInput.value,
    email: emailInput.value,
    message: messageInput.value
  };
  
  // преобразуем объект formData в строку JSON
  const jsonFormData = JSON.stringify(formData);
  
  // сохраняем строку JSON в куки на 30 дней
  document.cookie = `formData=${jsonFormData}; max-age=${30 * 24 * 60 * 60}; path=/`;
}

// вызываем функцию сохранения формы при отправке формы
const form = document.getElementById('contact-form');
form.addEventListener('submit', saveFormInputs);