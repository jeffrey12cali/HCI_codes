var array = [];

var fin = [];

/*Esta funcion permite obtener el valor del select de html(onchange)*/
function getValueType (paellaType){

	this.paellaType = paellaType;
	array.push(this.paellaType.value);
	console.log(array);
}

function buildPaella(){
	var factory = executeFactory(this.paellaType.value);
	var paellaProduct = generatePaella(factory.type);
	console.log(paellaProduct);
	console.log("Precio IVA: ", getIva());
	console.log("Precio original: ", this.paellaPrice.value - getIva());
	if (this.typeCoin.value === "dolar")
		var total = newCalculateDollar(this.paellaPrice.value);
	else if (this.typeCoin.value === "peso")
		var total = newCalculatePeso(this.paellaPrice.value);
	else if (this.typeCoin.value === "euro")
		var total = newCalculateEuro(this.paellaPrice.value);
	console.log("Precio", this.typeCoin.value, ": ", total);
	/*for (var i = 0; i < array.length; i++){
		var factory2 = executeFactory(array[i]);
		var paellaProduct2 = generatePaella(factory2.type);
		var car = new buildShoppingCar(factory2.type, paellaProduct2);
		console.log(car);
	}
	console.log(fin);*/
	var decorator = new executeDcorator(menuItems)
	console.log(decorator)
}

function getValuePrice(paellaPrice){
	this.paellaPrice = paellaPrice;
}

function getIva(){
	iva = paellaPrice.value * 0.19;
	return iva;
}

function getValueCoin(typeCoin){
	this.typeCoin = typeCoin;
}
