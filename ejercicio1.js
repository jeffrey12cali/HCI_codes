function años(edad){
	var aux = edad * 365;
	return aux;
}

function a_texto(nueva_edad){
	return nueva_edad.toString();
}

function ejercicio(){
	var edad = Number(prompt("Ingrese su edad: "));
	//var años = (edad) => edad*365;
	var nueva_edad = años(edad);
	if (nueva_edad % 2 == 0){
		var texto = a_texto(nueva_edad);
		console.log(texto);
	}
	else{
		var array = [edad, nueva_edad];
		console.log(array);
	}
}
