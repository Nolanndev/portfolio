// alert("Ce site est en cours de construction, il n'est pour le moment disponible que pour les ordinateurs. Merci de votre compréhension");


const letters = " AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz?";

let interval = null;

const nameElement = document.querySelector(".test");

nameElement.onmouseenter = (event) => {
	let iteration = 0;

	clearInterval(interval);

	interval = setInterval(() => {
		nameElement.innerText = nameElement.innerText
			.split("")
			.map((letter, index) => {
				if (index < iteration) {
					return nameElement.dataset.value[index];
				}

				return letters[Math.floor(Math.random() * 26)];
			})
			.join("");

		if (iteration >= nameElement.dataset.value.length) {
			clearInterval(interval);
		}

		iteration += 1 / 3;
	}, 30);
};
