function vowel([...args]){
    var count=0;
   for (let index = 0; index < args.length; index++) {
       if(args[index]=='a' || args[index]=='e' || args[index]=='i' || args[index]=='o' || args[index]=='u')
       count++
       
   }
     console.log(`The number of vowels in  'The quick brown fox jumps over the lazy dog' are ${count}
        count`);   
    }
    vowel(`The quick brown fox jumps over the lazy dog`);