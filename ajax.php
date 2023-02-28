<?php session_start(); ?>
<?php include 'partials/header.php' ?>

<body style=" background-color: #c4c4c4;">



<h2>AJAX</h2>

<button id="btn">Fetch info for 3 New Animals</button>
<br>
<div id="animal-info"></div>



<script type="text/javascript">
	var pageCounter = 1;
	var animalContainer = document.getElementById('animal-info');

	var	btn = document.getElementById('btn');

	btn.addEventListener('click', function(){
	
	var ourRequest = new XMLHttpRequest();
	ourRequest.open('GET', 'https://learnwebcode.github.io/json-example/animals-'+ pageCounter +'.json');
	ourRequest.onload = function() {
		var ourData = JSON.parse(ourRequest.responseText);
		renderHTML(ourData);
		// console.log(ourData[0]);
		// console.log(ourRequest.responseText);
	};
	ourRequest.send();

	pageCounter++;
	if(pageCounter > 3){
		btn.classList.add("hide-me");
	}

})

	function renderHTML(data){
		var htmlString = "";

		for (i = 0; i < data.length; i++){
			htmlString += "<p>" + data[i].name + " is a " + data[i].species + "</p>";
		}


		animalContainer.insertAdjacentHTML('beforeend', htmlString);
	}










</script>

































</body>