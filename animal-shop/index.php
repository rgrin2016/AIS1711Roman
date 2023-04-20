<!DOCTYPE html>
<html>
		<head>
				<title>Магазин животных</title>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<link rel="stylesheet" href="style.css">
				<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		</head>
		<body>
				<header>
						<h1>Магазин животных</h1>
				</header>
				<nav>
						<ul>
								<li><a href="#">Главная</a></li>
								<li><a href="#">Собаки</a></li>
								<li><a href="#">Кошки</a></li>
								<li><a href="#">Птицы</a></li>
								<li><a href="#">Грызуны</a></li>
						</ul>
				</nav>
				
				<main style="text-align: center;">
						<section>
								<h2>Добро пожаловать!</h2>
								<p>Выберите категорию животных, которую хотите просмотреть.</p>
						</section>
						
						<section id="dogs">
								<h2>Собаки</h2>
								<ul>
										<li>
												<img src="https://avatars.dzeninfra.ru/get-zen_doc/4032365/pub_60901919b8f34b04d27f2f43_60901b14c235fb60b6c2c1e4/scale_1200?text=Product+1" alt="Товар 1" data_id="1" class="product-img">
												<h3>Собакен рыжий (ID 1)</h3>
												<p>Описание</p>
												
										</li>
										<li>
												<img src="https://storage-api.petstory.ru/resize/1000x1000x80/6a/27/5d/6a275df2d3674711bd01037fc5741c50.jpeg?text=Product+2" alt="Товар 2" class="product-img">
												<h3>Собакен черный (ID 2)</h3>
												<p>Описание</p>
												
										</li>
										<li>
												<img src="https://sobaka.guru/wp-content/uploads/2019/02/Porody-sobak-s-beloj-sherstju3.png?text=Product+3" alt="Товар 3" class="product-img">
												<h3>Собакен белый (ID 3)</h3>
												<p>Описание</p>
												
										</li>
								</ul>
						</section>
						
						<section id="cats">
								<h2>Кошки</h2>
								<ul>
										<li>
												<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/94/British_shorthair_with_calico_coat_%281%29.jpg/1200px-British_shorthair_with_calico_coat_%281%29.jpg?text=Product+4" alt="Котяра цветной" class="product-img">
												<h3>Котяра цветной (ID 4)</h3>
												<p>Описание</p>
												
										</li>
										<li>
												<img src="https://sterlegrad.ru/uploads/posts/2020-02/1581077293_cat-1391857_1280.jpg?text=Product+5" alt="Товар 5" class="product-img">
												<h3>Котяра непонятного цвета (ID 5)</h3>
												<p>Описание</p>
												
										</li>
										<li>
												<img src="https://cs4.pikabu.ru/post_img/2015/03/25/6/1427275512_1897370620.jpg?text=Product+6" alt="Товар 6" class="product-img">
												<h3>Котяра уличный (ID 6)</h3>
												<p>Описание</p>
												
										</li>
								</ul>
						</section>
						
						<section id="birds">
								<h2>Птицы</h2>
								<ul>
										<li>
												<img src="https://avatars.dzeninfra.ru/get-zen_doc/2408175/pub_5ea83f208b8c7b4d24379cb3_5ea8404b092bfa16a46e7a4a/scale_1200?text=Product+7" alt="Товар 7" class="product-img">
												<h3>Птица мелкая (ID 7)</h3>
												<p>Описание</p>
												
										</li>
										<li>
												<img src="https://n1s2.hsmedia.ru/0e/fe/e5/0efee5ab2e2adea46a61e860e9aaa776/728x507_1_3b9b08b1053e0876aa6ed100d0fb5888@3636x2530_0xac120003_4506514221661349147.jpeg?text=Product+8" alt="Товар 8" class="product-img">
												<h3>Птица средняя (ID 8)</h3>
												<p>Описание</p>
												
										</li>
										<li>
												<img src="https://notivory.com/upload/medialibrary/5f9/07riunpr59ryok2mr9t1i5w0qopqhopg.jpg?text=Product+9" alt="Товар 9" class="product-img">
												<h3>Птица крупная (ID 9)</h3>
												<p>Описание</p>
												
										</li>
								</ul>
						</section>
						
						<section id="rodents">
								<h2>Грызуны</h2>
								<ul>
										<li>
												<img src="https://avatars.dzeninfra.ru/get-zen_doc/4162493/pub_63f64e5e42bde33eeb1c470e_63f650160f84a17a5fc86cca/scale_1200?text=Product+10" alt="Товар 10" class="product-img">
												<h3>Грызун древесный (ID 10)</h3>
												<p>Описание </p>
												
										</li>
										<li>
												<img src="https://gor-dez.spb.ru/images/news/mozhet-li-mish-progrizt-beton.jpg?text=Product+11" alt="Товар 11" class="product-img">
												<h3>Грызун по бетону (ID 11)</h3>
												<p>Описание </p>
												
										</li>
										<li>
												<img src="https://animals.moe-online.ru/media_new/1/8/6/9/5/5/6/4a6e5b770b6496169e3a0aaf9c3660bd/k2Vt1LwFoJbGTW8Iz49nIiehRyvGsXZpQWA9MeWp-thumb_720.jpg?text=Product+12" alt="Товар 12" class="product-img">
												<h3>Грызун обыкновенный (ID 12)</h3>
												<p>Описание </p>
												
										</li>
								</ul>
						</section>
				</main>
				<div id="modal-container" style="text-align: center;">
					<div id="modal-content">
						<img id="modal-image" src="" style="width: 400px;">
					</div>
				</div>
				<form action="add_to_cart.php" method="POST" style="text-align: center;">
  <label for="data_id">ID товара:</label>
  <input type="number" id="data_id" name="data_id" required>
  <button type="submit">Добавить в корзину</button>
  <a href="javascript:history.back()">Вернуться назад</a>
	<a href="add_to_cart.php">Посмотреть корзину</a>
</form>

<script>
	// Находим все картинки с классом "product-img"
	const images = document.querySelectorAll('.product-img');
	// Находим модальное окно и его содержимое
	const modalContainer = document.getElementById('modal-container');
	const modalContent = document.getElementById('modal-content');
	// Находим элемент для закрытия модального окна (в данном случае - крестик)
	const closeButton = document.createElement('span');
	closeButton.classList.add('close-button');
	closeButton.innerHTML = '&times;';
	closeButton.addEventListener('click', () => {
		modalContainer.style.display = 'none';
	});
	
	// Добавляем обработчики кликов на каждую картинку
	images.forEach((image) => {
		image.addEventListener('click', () => {
			// Устанавливаем URL изображения в тег img модального окна
			const modalImage = document.getElementById('modal-image');
			modalImage.src = image.src;
			// Добавляем кнопку закрытия в модальное окно
			modalContent.appendChild(closeButton);
			// Показываем модальное окно
			modalContainer.style.display = 'block';
		});
	});
	
	// Обработчик событий для закрытия модального окна по клику за его пределами
	window.addEventListener('click', (event) => {
		if (event.target == modalContainer) {
			modalContainer.style.display = 'none';
		}
	});
	</script>
				<footer>
						<p style="text-align: center;">&copy; Магазин животных 2023</p>
				</footer>
		</body>
</html>
