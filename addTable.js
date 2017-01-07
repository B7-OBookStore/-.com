count = 1;

function addTable() {
	count++;

	var element = document.createElement('tbody');
	element.innerHTML = '<tr><th>注文'+count+'</th></tr><tr><td>出版社</td><td><input name="publisher[]" type="text"></td></tr><tr><td>ISBN</td><td><input name="isbn[]" type="text"></td></tr><tr><td>書名</td><td><input name="title[]" type="text"></td></tr><tr><td>著者</td><td><input name="author[]" type="text"></td></tr><tr><td>ご注文数</td><td><input name="number[]" type="text"></td></tr>';

	var objBody = document.getElementsByTagName("table").item(0);
	objBody.appendChild(element);
}