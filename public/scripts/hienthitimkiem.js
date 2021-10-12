var filterbranditems = document.getElementById('filter-brand-items');
var filterpriceitems = document.getElementById('filter-price-items');
var filtersizeitems = document.getElementById('filter-size-items');
var filtercontrol = document.getElementsByClassName("filter-control");

filterbranditems.style.display = "block";
filterpriceitems.style.display = "block";
filtersizeitems.style.display = "block";

function filterbrandtoggle(el){
	if(filterbranditems.style.display == "block"){
		filterbranditems.style.display = "none";
		el.innerHTML = "+";
		filtercontrol.innerHTML = "+";
	}else{
		filterbranditems.style.display = "block";
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
function filtersizetoggle(el){
	if(filtersizeitems.style.display == "none"){
		filtersizeitems.style.display = "block";
		el.innerHTML = "-";
		filtercontrol.innerHTML = "-";
	}else{
		filtersizeitems.style.display = "none";
		el.innerHTML = "+";
	}
}