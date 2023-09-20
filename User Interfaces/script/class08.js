
let xhr; // declare outside the function - in case I need to abort/access
// setup ajax request
function callAjaxJs(){
	// create the ajax request
	xhr = new XMLHttpRequest();

	// setup my remote connection
	// open( METHOD, WHERE )
	xhr.open("GET", "ajaxTest.txt");

	// send the request
	xhr.send();

	// wait for response
	xhr.onreadystatechange = function(){
		// response is being processed
		if (xhr.readyState == 4 && xhr.status == 200){
			// request completed = xhr.readyState == 4
			// successful page load = xhr.status == 200
			console.log("request done!!")

			let response = xhr.responseText;
			console.log(response);
			document.getElementById("demo").innerHTML = response;
		}

	}
}

$(document).ready(function(){

	// replace content of #demo with provided URL
//	$("#demo").load("ajaxTest.txt");


	// use get request on pokemon API - https://pokeapi.co/
	$.get("https://pokeapi.co/api/v2/pokemon/7/", function(data){
		$("#demo").append("---GET---<br>");
		$("#demo").append(data.moves[0].move.name); // traverse object and arrays to fetch the first moves name
		console.log(data);
	})

	// use post request on deck of card api - https://deckofcardsapi.com/
	$.post("https://deckofcardsapi.com/api/deck/new/shuffle/?deck_count=1", {}, function(myData){
		$("#demo").append("<br>---POST---<br>");
		$("#demo").append(myData.deck_id);// traverse object and arrays to fetch the deck id
		console.log(myData);
	})
});