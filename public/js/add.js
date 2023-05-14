const showFormBtn = document.getElementById("show-form-btn");
		const myForm = document.getElementById("my-form");

		// add event listener to the button
		showFormBtn.addEventListener("click", function() {
			myForm.style.display = "block"; // show the form
		});
