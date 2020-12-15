function Product(name,price){
    this.name=name;
    this.price=price;
    this.printDetails=function(){
        console.log('The price for ',this.name,' is',this.price);
    }
}
Product.prototype.brand='lg';
Product.prototype.discountedPrice=function(discount){
    console.log('new price after discount is ',this.price-discount)

}
var product=new Product('washing machine',20000);
product.printDetails();
product.discountedPrice(5000);