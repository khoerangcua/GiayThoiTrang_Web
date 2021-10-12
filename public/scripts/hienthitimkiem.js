var filterbranditems = document.getElementById('filter-brand-items');
var filterpriceitems = document.getElementById('filter-price-items');
var filtersizeitems = document.getElementById('filter-size-items');

filterbranditems.style.display = "none";
filterpriceitems.style.display = "none";
filtersizeitems.style.display = "none";

function filterbrandtoggle(el){
	if(filterbranditems.style.display == "none"){
		filterbranditems.style.display = "block";
		el.innerHTML = "-";
	}else{
		filterbranditems.style.display = "none";
		el.innerHTML = "+";
	}
}
function filterpricetoggle(el){
	if(filterpriceitems.style.display == "none"){
		filterpriceitems.style.display = "block";
		el.innerHTML = "-";
	}else{
		filterpriceitems.style.display = "none";
		el.innerHTML = "+";
	}
}
function filtersizetoggle(el){
	if(filtersizeitems.style.display == "none"){
		filtersizeitems.style.display = "block";
		el.innerHTML = "-";
	}else{
		filtersizeitems.style.display = "none";
		el.innerHTML = "+";
	}
}