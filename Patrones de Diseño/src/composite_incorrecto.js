function shoppingCar(typePaella){ 
    this.typePaella = typePaella;
    var arrayElements = [];

    this.compositeProto = function(){
        var objectoComposite = {
            add: function(product){
                arrayElements.push(product);
                return arrayElements;
            },

            remove: function (arrayElements){

                arrayElements.split(0, arrayElements.length);
                arrayElements.add(product);
                return arrayElements;
            }
        }

        return objectoComposite;
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


function buildShoppingCar(productType, product){//tipo de producto, producto){
    /*this.product = product
    var car = new shoppingCar(productType);
    console.log(car);
    var productType = new shoppingCar(productType);
    car.compositeProto().add(productType);
    productType.add(product);*/

    var car = new shoppingCar(productType);
    //var resultCar = car.compositeProto().add(product);

    var resultCar;

    for (var i = product.lenth - 1; i >= 0; i++){
        resultCar = car.compositeProto().add(product);
    }

    return resultCar;
}

