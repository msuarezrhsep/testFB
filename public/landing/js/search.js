$(document).ready(function(){
    filterSearch();	
    $('.productDetail').click(function(){
        filterSearch();
    });	
	$('#priceSlider').slider({		
	}).on('change', priceRange); 	
});
function priceRange(e){
	$('.priceRange').html($(this).val() + " - 1000");
	$('#minPrice').val($(this).val());
	filterSearch();	
}
function filterSearch() {
	$('.searchResult').html('<div id="loading">Cargando .....</div>');
	var action = 'fetch_data';
	var minPrice = $('#minPrice').val();
	var maxPrice = $('#maxPrice').val();
	var marca = getFilterData('marca');
	var tipo = getFilterData('tipo');
	var grupo = getFilterData('grupo');
	$.ajax({
		url:$('#base_url').val(),
		method:"POST",
		dataType: "json",		
		data:{action:action, minPrice:	minPrice, maxPrice:maxPrice, marca:marca, tipo:tipo, grupo:grupo},
		success:function(data){
			$('.searchResult').html(data.prod);
			console.log(data);
		},
		error : function(xhr, status) {
			console.log(xhr.responseText);
			console.log(status);
		}
	});
}
function getFilterData(className) {
	var filter = [];
	$('.'+className+':checked').each(function(){
		filter.push($(this).val());
	});
	return filter;
}