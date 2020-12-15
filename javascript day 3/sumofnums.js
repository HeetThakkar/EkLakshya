function  printSum(arr)
{
    sum=0

arr.forEach(element => {
    sum +=element
 
});
console.log(`sum of ${arr} is ${sum}`);
}
arr=[1];
for (let index = 2; index <= 100; index++) {
    arr.push(index);
   
}
printSum(arr);