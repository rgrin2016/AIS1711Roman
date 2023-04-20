const form = document.getElementById("contact-form");

form.addEventListener("submit", function (event) {
  event.preventDefault();

  const formData = new FormData(form);

  const xhr = new XMLHttpRequest();
  xhr.open("POST", "send.php");

  xhr.onload = function () {
    if (xhr.status === 200) {
      alert("Сообщение отправлено!");
      form.reset();
    } else {
      alert("Произошла ошибка при отправке сообщения.");
    }
  };

  xhr.send(formData);
});