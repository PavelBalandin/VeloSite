
//====== Show and hide user submenu ======//
var submenuElement = document.getElementById('mainLi');
var elem = submenuElement.children;

function showHideSubMenu() {
	submenuElement.addEventListener('mouseenter', showSubMenu);
	submenuElement.addEventListener('mouseleave', hideSubMenu);
}

function showSubMenu() {
	if (submenuElement.value == 1) {
		for (var i = 0; i < elem.length; i++) {
			elem[i].style.height = "auto";
			elem[i].style.opacity = "1";
			elem[i].style.overflow = "visible";
		}
	}
}

function hideSubMenu(){
	for (var i = 1; i < elem.length; i++) {
		elem[i].style.height = "0";
		elem[i].style.opacity = "0";
		elem[i].style.overflow = "hidden";
	}
}


//============ Function call ============//
showHideSubMenu();