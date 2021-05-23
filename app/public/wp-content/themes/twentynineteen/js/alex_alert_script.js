window.onload = init;

function init(alex_text){
    var button = document.getElementById("alex_button")
    button.onclick = handleButtonClick;
	console.log(alex_text);
}

function handleButtonClick(alex_text) {
	alex_text="Hello world!";
	init(alex_text);
	alert(alex_text);

}

