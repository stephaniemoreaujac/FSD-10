console.log("chuck loaded");


/* PLAIN JAVASCRIPT */
// listen to "btnNewJoke"
document.getElementById("btnNewJoke").addEventListener("click", loadNewJoke);


/**
 * Click event in pure JS
 */
function loadNewJoke(){
	// create my request
	let xhr = new XMLHttpRequest()

	// setup my request
	xhr.open("GET", "https://api.chucknorris.io/jokes/random");

	// send request
	xhr.send();

	// monitor request
	xhr.onreadystatechange = function(){
		// completed (4)  and successful (200)
		if (xhr.readyState == 4 && xhr.status == 200){
			let resp = xhr.responseText; // response from the server
			console.log(resp);

			let respObj = JSON.parse(resp); // convert string into JSON obj
			console.log(respObj);
			 
			// show on html
			document.getElementById("theJoke").innerText = respObj.value; 
		}

	}

}

$(document).ready(function(){

	// listen to "btnJqueryJoke"
	$("#btnJqueryJoke").on("click", loadJqueryJoke);

	// load all the categories
	$.get("https://api.chucknorris.io/jokes/categories", function(categories){
		console.log(categories); // array returned via request

		$(categories).each(function (key, value){
			console.log(key + " : "  + value + " = " + categories[key]);
			let newCatId = "btnCat_" + value;
			// all of these produce the same result
			let newCat = $('<button type="button" id="' + newCatId + '" data-curcat="' + value + '">' + value + '</button>');
			//let newCat = $("<button type=button id=" + newCatId + " data-curcat=" + value + ">" + value + "</button>");
			//let newCat = $('<button type=button id=' + newCatId + ' data-curcat=' + value + '>' + value + "</button>');
			//let newCat = $(`<button type="button" id="${newCatId}" data-curcat="${value}">${value}</button>`)

			$('#categories').append( newCat );
			$(newCat).on("click", function(e){
				let curentCategory = $(this).data('curcat'); // fetch any information in a data-XX attribute
				$.get("https://api.chucknorris.io/jokes/random?category=" + curentCategory, 
					function(data){ $("#theJoke").text(data.value); })
			})
		});
	}); // end of get

}); // end of document ready

/**
 * Click event in jQuery
 */
function loadJqueryJoke(){
	$.get("https://api.chucknorris.io/jokes/random", function(data){
		console.log(data); // jquery converted the response automatically into JSON obj
		$("#theJoke").text(data.value);
	})
}