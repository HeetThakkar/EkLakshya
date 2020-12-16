function showTotal(...args){
    var sum=0;
    var count=0;
       return function(){
         args.forEach(element => {
            sum+=element;
            count++;
        });
        return (sum/count);
    }();
}
console.log(showTotal(20,20,50));