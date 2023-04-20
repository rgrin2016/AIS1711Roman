<style>
	table {
  border-collapse: collapse;
  width: 100%;
}
th,
td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
th {
  background-color: #f2f2f2;
}
tfoot td {
  font-weight: bold;
}

</style>
<?php
// Старт сессии
session_start();

// Проверяем, была ли отправлена форма добавления товара в корзину
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['data_id'])) {
		
		// Получаем ID товара, который нужно добавить в корзину
		$data_id = $_POST['data_id'];
		
		// Проверяем, есть ли уже товар в корзине. Если да, увеличиваем количество
		if (isset($_SESSION['cart'][$data_id])) {
				$_SESSION['cart'][$data_id]['quantity']++;
		} else { // Иначе добавляем новый товар в корзину с количеством 1
				$_SESSION['cart'][$data_id] = array(
						'name' => 'ID Животного ' . $data_id,
						'price' => rand(10, 100),
						'quantity' => 1
				);
		}
}

// Выводим содержимое корзины
if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
		echo '<table>';
		echo '<tr><th>Название товара</th><th>Цена за единицу</th><th>Количество</th><th>Общая стоимость</th></tr>';
		foreach ($_SESSION['cart'] as $data_id => $product) {
				$total_price = $product['price'] * $product['quantity'];
				echo '<tr>';
				echo '<td>' . $product['name'] . '</td>';
				echo '<td>' . $product['price'] . '</td>';
				echo '<td>' . $product['quantity'] . '</td>';
				echo '<td>' . $total_price . '</td>';
				echo '</tr>';
		}
		echo '<tr><td colspan="3"><strong>Общая стоимость:</strong></td><td><strong>' . get_total_price() . '</strong></td></tr>';
		echo '</table>';
} else {
		echo 'Корзина пуста';
}

// Функция для получения общей стоимости товаров в корзине
function get_total_price() {
		$total_price = 0;
		foreach ($_SESSION['cart'] as $data_id => $product) {
				$total_price += $product['price'] * $product['quantity'];
		}
		return $total_price;
}
?>
<script>
  function goBack() {
    window.history.back();
  }
</script>
<form action="add_to_cart.php" method="GET">
	<input type="hidden" name="clear_cart" value="true">
	<button type="submit">Очистить корзину</button>
</form>
<?php
if(isset($_GET['clear_cart']) && $_GET['clear_cart'] == true) {
	$_SESSION['cart'] = array();
}
?>
<button onclick="goBack()">Назад</button>
