var carrito = []

function checkboxSelect(type){
	if(!carrito.includes(type.value)){
		carrito.push(type.value);
		console.log("Productos añadidos al carrito: " + carrito);
		implementorBuild(type.value);
	}
}

function inputSelect(){
	let temp = document.getElementById("text-input").value;
	if(!carrito.includes(temp)){
		carrito.push(temp);
		console.log("Productos añadidos al carrito: " + carrito);
		implementorBuild(temp);
	}
}

function selSelect(paellaType){
	if(!carrito.includes(paellaType.value)){
		carrito.push(paellaType.value);
		console.log("Productos añadidos al carrito: " + carrito);
		implementorBuild(paellaType.value);
	}
}

function implementor(){
	console.log("Precio IVA: ", getIva());
	console.log("Precio original: ", this.paellaPrice.value - getIva());
	if (this.typeCoin.value === "dolar")
		var total = newCalculateDollar(this.paellaPrice.value);
	else if (this.typeCoin.value === "peso")
		var total = newCalculatePeso(this.paellaPrice.value);
	else if (this.typeCoin.value === "euro")
		var total = newCalculateEuro(this.paellaPrice.value);
	console.log("Precio", this.typeCoin.value, ": ", total);
	var decoratedItems = [];
	for(var i = 0; i < carrito.length; i++){
		var decorator = new executeDecorator(carrito[i])
		decoratedItems.push(decorator);
	}
	console.log(decoratedItems[0]);
}

function implementorBuild(paellaValue){
	var factory = executeFactory(paellaValue);
	var paellaProduct = generatePaella(factory.type);
	iva += getIva()
	console.log(paellaProduct);
}