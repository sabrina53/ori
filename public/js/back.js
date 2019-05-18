

var back = document.querySelector('.backbtn');

function BackClicked(){
	window.history.back();
}
  
back.addEventListener('click',BackClicked);
