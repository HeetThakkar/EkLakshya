var mobile={
    brand:'one plus',
    model:'6t',
    colour:'grey',
    price:30000,
    accessories:['adapter','usb'],
    features:{
        ram:'6gb',
        memory:'128gb',
    },
    show: function(){
        console.log("*******************all about mobile******************");
        for(const keyss in mobile){
            console.log(keyss+' = '+mobile[keyss])
        }
    }
    }
    var mobile1={
        brand:'one-plus',
        model:'7t',
        colour:'grey',
        price:35000,
        accessories:['adapter','usb'],
        features:{
            ram:'8gb',
            memory:'128gb',
        },
        show: function(){
            console.log("*******************all about mobile******************");
            for(const keyss in mobile1){
                console.log(keyss+' = '+mobile[keyss])
            }
        }
        }  
   
    for (const key in mobile){
        var mob=mobile[key];
        if(mob instanceof Array){
            mob.forEach(eLem=>console.log('accessories= '+eLem))
        }
        else if(typeof mob =='object'){
            for(const keyss in mob){
                console.log(keyss+' = '+mob[keyss])
            }
        }
         else if(typeof mob=='function'){
                mob();
            }
            else{
                console.log(mob);
            }
        
    }
    
    for (const key in mobile1){
        var mob=mobile1[key];
        if(mob instanceof Array){
            mob.forEach(eLem=>console.log('accessories= '+eLem))
        }
        else if(typeof mob =='object'){
            for(const keyss in mob){
                console.log(keyss+' = '+mob[keyss])
            }
        }
         else if(typeof mob=='function'){
                mob();
            }
            else{
                console.log(mob);
            }
        
    }
    
    