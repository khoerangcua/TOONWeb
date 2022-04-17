var filterplacesitems = document.getElementById('filter-places-items');
var filterpriceitems = document.getElementById('filter-price-items');
var filterconditems = document.getElementById('filter-condition-items');
var filtercontrol = document.getElementsByClassName("filter-control");
var filter = document.getElementById('filter');

filter.style.display = "block";
filterplacesitems.style.display = "block";
filterpriceitems.style.display = "block";
filterconditems.style.display = "block";

function filtertoogle(el){
	if(filter.style.display == "none"){
		filter.style.display = "block";
		el.innerHTML = "Bộ lọc ▲";
	}else{
		filter.style.display = "none";
		el.innerHTML = "Bộ lọc ▼"
	}
}
function filterplacestoggle(el){
	if(filterplacesitems.style.display == "block"){
		filterplacesitems.style.display = "none";
		el.innerHTML = "+";
		filtercontrol.innerHTML = "+";
	}else{
		filterplacesitems.style.display = "block";
		el.innerHTML = "-";
	}
}
function filterpricetoggle(el){
	if(filterpriceitems.style.display == "none"){
		filterpriceitems.style.display = "block";
		el.innerHTML = "-";
		filtercontrol.innerHTML = "-";
	}else{
		filterpriceitems.style.display = "none";
		el.innerHTML = "+";
	}
}
function filtercondtoggle(el){
	if(filterconditems.style.display == "none"){
		filterconditems.style.display = "block";
		el.innerHTML = "-";
		filtercontrol.innerHTML = "-";
	}else{
		filterconditems.style.display = "none";
		el.innerHTML = "+";
	}
}