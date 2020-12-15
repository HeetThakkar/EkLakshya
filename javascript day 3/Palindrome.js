function reverseString([...str]) {
    var str1=str.reverse();
    str1 = str1.join("");
    return str1
}
str='malayalam'
var str1=reverseString(str);
console.log(str1)
if(str==str1){
    console.log('it is a palindrome')
}
else{
    console.log('it is not a palindrome')
}
