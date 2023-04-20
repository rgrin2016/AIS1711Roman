// заполняем форму сохраненными значениями из кук
function fillFormInputs() {
  // получаем значение куки
  const cookieValue = document.cookie.replace(/(?:(?:^|.*;\s*)formData\s*\=\s*([^;]*).*$)|^.*$/, '$1');
  
  // проверяем, есть ли сохраненные значения
  if (cookieValue) {
    // преобразуем строку JSON в объект formData
    const formData = JSON.parse(cookieValue);
    
    // получаем элементы формы
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const messageInput = document.getElementById('message');
    
    // заполняем элементы формы сохраненными значениями
    nameInput.value = formData.name;
    emailInput.value = formData.email;
    messageInput.value = formData.message;
  }
}

// вызываем функцию заполнения формы при загрузке страницы
window.addEventListener('load', fillFormInputs);