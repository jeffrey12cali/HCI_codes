function productPaella(name){
	this.name = name;
}

function decoratorNameProduct(product,descripcion){
	this.product = product;
	this.descripcion = descripcion;
	var allName = this.product.name + " " + descripcion;
	console.log(allName)
	return allName;
}

function executeDecorator(item){
	var productName = new productPaella(item);
	var decorated = new decoratorNameProduct(productName, "La mejor paella de la universidad");
	return decorated;
}