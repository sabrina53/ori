(function(){
  console.log('Hello World!');

  var logo = document.querySelector('#logo-menu');
  var popMenu = document.querySelector('#menu');
  var whiteLogo = document.querySelector('.whiteLogo');

  function popMenuClicked() {
  	console.log('popMenuClicked');
  	popMenu.classList.add('active');
  	  	logo.classList.add('active');

  }
function expandedMenu() {
	console.log('popMenuClicked');
  	popMenu.classList.remove('active');
  	logo.classList.remove('active');
}

  logo.addEventListener('click',popMenuClicked);
  whiteLogo.addEventListener('click',expandedMenu);
})();
 

 //  user nav 

 
console.log("Linked up");


let menuListener = document.querySelector(".user-tab");
let menu = document.querySelector(".hiddenUser");

function showHide()
{
  menu.classList.toggle('show');
}

menuListener.addEventListener("click", showHide);