function Shape(length,width){
    this.lenght=length;
    this.width=width;
    this.area=function(){
        console.log('area =', this.length*this.width);
    }
    this.perimeter=function(){
        console.log('perimeter =', this.length+this.width+this.length+this.width);
    }
}
function Rectangle(lenght,width){
    this.lenght=lenght;
    this.width=width
    Shape.call(this,length,width);
}
//function Triangle(base,height){
  //  base=this.base;
   // height=this.height
 //   Shape.call(this);
   // this.area=function(){
     //   console.log(this.base*this.height*0.5);
    //}
   // this.perimeter=function(){
     //   console.log('perimeter =', this.base+this.height);
    //}
//}
var rectangle= new Rectangle(50,50);
area();
