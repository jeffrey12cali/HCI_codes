function shoppingCar(typePaella){ 
    this.typePaella = typePaella;
    var arrayElements = [];
}

shoppingCar.prototype = {
    add: function(products){
        this.arrayElements.push(products);
    },
    remove: function(products){
        this.arrayElements.splice(0, this.arrayElements.length);
        this.arrayElements.push(products);
    }
}

/*function shoppingCar(typePaella){ 
    this.typePaella = typePaella;
    var arrayElements = [];

    shoppingCar.prototype = {

        add: function(product){
            this.arrayElements.push(product);
            console.log(this.arrayElements);
        },

        remove: function (arrayElements){

            arrayElements.split(0, this.arrayElements.length);
            arrayElements.add(product);
        }

    }

}*/


function buildShoppingCar(type, product){//tipo de producto, producto){
    /*this.product = product
    var car = new shoppingCar(productType);
    console.log(car);
    var productType = new shoppingCar(productType);
    car.compositeProto().add(productType);
    productType.add(product);*/

    var arrayC = [];
    //var resultCar = car.compositeProto().add(product);

    var car = new shoppingCar(type);

    for (var i = 0; i < prodcut.lenght; i++){
        car.add(product[i])
        arrayC.push(car);
    }

    return arrayC;
}

