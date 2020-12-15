function  printOddNums(arr)
{
console.log(arr);
arr.forEach(element => {
    console.log(element);
});
}
arr=[1];
for (let index = 3; index < 100; index++) {
    arr.push(index);
    index++;
}
printOddNums(arr);