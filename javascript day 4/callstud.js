var stud1={
    name:'heet',
    rollno:1,
    marks:99,
}
var stud2={
    name:'hmt',
    rollno:2,
    marks:99,
}
var showTotal={
        hobie: function (...args){
       args.forEach(element => {
        console.log('rollno: ',this.rollno,'name: ',this.name,'has scored',this.marks,'having hobbies: ',element);
       });
   }
  
}

showTotal.hobie.apply(stud1,['football','cricket']);
showTotal.hobie.apply(stud2,['long-drive','music']);