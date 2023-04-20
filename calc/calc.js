let result = document.getElementById('result');
let historyList = document.getElementById('history-list');
let history = [];

function addToResult(value) {
	result.value += value;
}

function clearResult() {
	result.value = '';
}

function calculate() {
	try {
		let expr = result.value;
		let res = eval(expr);
		result.value = res;
		history.push(`${expr} = ${res}`);
		renderHistory();
	} catch (e) {
		alert('Ошибка в выражении!');
	}
}

function renderHistory() {
	historyList.innerHTML = '';
	history.forEach(item => {
		let li = document.createElement('li');
		li.innerText = item;
		historyList.appendChild(li);
	});
}
