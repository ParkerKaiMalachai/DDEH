let btn = document.querySelector(".form-btn");

btn.addEventListener("click", async (e) => {

	e.preventDefault()

	let value = e.target.closest(".form").querySelector(".form-input").value;
	
	try {
		const response = await fetch("tasks/send.php", {
			method: "POST",
			headers: {
				"Content-Type": "application/x-www-form-urlencoded",
			},
			body: new URLSearchParams({value}),
		})
		const data = await response.json()
	} catch (e) {
	}
})
