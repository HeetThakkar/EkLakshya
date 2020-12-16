function Shape(length,width){
    
    this.area=function(){
        console.log('area of rectangle=', length*width);
    }
    this.perimeter=function(){
        console.log('perimeter of rectangle =', length+width+length+width);
    }
}
function Rectangle(l,width){
  Shape.call(this,l,width);  
  
    
}
function Triangle(base,height){
  
    Shape.call(this,base,height);
    this.base=base;
    this.height=height;
    this.area=function(){
       console.log('area of triangle: ',this.base*this.height*0.5);
    }
    this.perimeter=function(){
        console.log('perimeter of triangle =', this.base+this.height);
  }
}
var rectangle= new Rectangle(50,50);
rectangle.area();
rectangle.perimeter();
var triangle= new Triangle(10,20);
triangle.area();
triangle.perimeter();
