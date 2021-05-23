window.onload = init;

function init(){
    var button = document.getElementById("alex_button")
    button.onclick = handleButtonClick;
}

function handleButtonClick() {
	alert('Hello world!');
}

