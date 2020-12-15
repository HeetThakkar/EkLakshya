var studentList=[ {name:'raju',rollno:1,phoneno:1234567890,dept:'comps',hobbies:['football','cricket']},
{name:'heet',rollno:2,phoneno:1234567890,dept:'it',hobbies:['football','cricket']},
{name:'hmt',rollno:3,phoneno:1234567890,dept:'elex',hobbies:['football','cricket']},
{name:'thakkar',rollno:4,phoneno:1234567890,dept:'civil',hobbies:['football','cricket']},
{name:'heetthakkar',rollno:5,phoneno:1234567890,dept:'mech',hobbies:['football','cricket']},
];
studentList.forEach(student=>{
    for(const prop in student){
        var stud=student[prop];
        if(stud instanceof Array){
            stud.forEach(eLem=>console.log('hobby= '+eLem))
        }
        else
        console.log(stud);
    }
});