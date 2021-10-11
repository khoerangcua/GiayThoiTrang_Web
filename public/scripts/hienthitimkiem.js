var filterbranditems = document.getElementById('filter-brand-items');
var filterpriceitems = document.getElementById('filter-price-items');
var filtersizeitems = document.getElementById('filter-size-items');

filterbranditems.style.display = "none";
filterpriceitems.style.display = "none";
filtersizeitems.style.display = "none";

function filterbrandtoggle(){
	if(filterbranditems.style.display == "none"){
		filterbranditems.style.display = "block";
	}else{
		filterbranditems.style.display = "none";
	}
}
function filterpricetoggle(){
	if(filterpriceitems.style.display == "none"){
		filterpriceitems.style.display = "block";
	}else{
		filterpriceitems.style.display = "none";
	}
}
function filtersizetoggle(){
	if(filtersizeitems.style.display == "none"){
		filtersizeitems.style.display = "block";
	}else{
		filtersizeitems.style.display = "none";
	}
}