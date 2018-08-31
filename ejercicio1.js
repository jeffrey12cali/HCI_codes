function años(edad){
	var aux = edad * 365;
	return aux;
}

function a_texto(nueva_edad){
	return string(nueva_edad)
}

function ejercicio(){
	var edad = prompt("Ingrese su edad: ");
	//var años = (edad) => edad*365;
	var nueva_edad = años(edad);
	if (nueva_edad % 2 == 0){
		var texto = a_texto(nueva_edad);
	}
	else{

	}
	console.log(nueva_edad);
}
