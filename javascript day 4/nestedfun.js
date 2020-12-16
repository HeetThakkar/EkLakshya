function showProduct(name,brand,cost){
  
    return function(discount){
        console.log(`The price of ${name} of ${brand} after discount is ${cost-discount}`)
    }
}
showProduct('tv','lg',9000)(5000);