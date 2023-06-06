const submit = document.getElementById('sendMessage');
const form = document.forms['message-me__form'];
const checkBox = document.getElementById('policy_check:checked');
let error;
let data;


function checkForm(input) {

	if (!input.value) {
		input.classList.add('error');
		return error = true;
	} else {

		input.classList.remove('error');
		return error = false;
	}
}

//прописать в scss стили для ошибки error в инпутах, класс добавляется автоматически
submit.addEventListener('click', function (event) {
	event.preventDefault();

	// проверка заполненных полей
	for (let i = 2; i <= 2  && i >= 0; i-=1) {
		checkForm (form[i]);

		if (error) {
			break;
		}
	}


	if (!error) {
		data = new FormData(form);
		for(var pair of data.entries()) {
			console.log(pair[0]+ ', '+ pair[1]);
		 }

		 fetch('./mail/mail.php', {
			method: 'POST',
			body: data,
			credentials: 'same-origin',
			headers: {
				'Accept': 'application/json',
				'Content-type': 'application/json'
			}
		 }).then((response) => {
			if (response.ok) {
				// можно добавить поп-ап с благодарностью за отправку сообщения
			} else {
				// а здесь сообщение об ошибке
			}
		 })

	}

	return 
});
