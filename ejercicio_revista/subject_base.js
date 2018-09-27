function searchTupla(){
	var search = document.getElementById('search').value;
	var dataEn = 'serach='+search;
}

funtion insertUser(){
	var identificacion = document.getElementById('identification').value;
	var first_name = document.getElementById('first_name').value;
	var last_name = document.getElementById('last_name').value;
	var age = document.getElementById('age').value;
	var city = document.getElementById('city').value;

	var dataEn = {
		'identification': identification,
		'frist_name': first_name,
		'last_name': last_name,
		'age': age,
		'city': city
	};

	$.ajax({
		type:'POST',
		url:'src/backend_revista.php',
		data:dataEn,
		success:function(resp){
			$('#res').html(resp)
		}
	});
}
function suscribeUser(){
}