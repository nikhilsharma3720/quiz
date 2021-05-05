 const quizques=[
    {
        question:"What is your name ?",
        a:"Nikhil",
        b:"opt2",
        c:"opion3",
        d:"tion4",
        ans:"Nikhil"
    }
    ,
    {
        question:"what is your fav colour ?",
        a:"opti1",
        b:"green",
        c:"optio",
        d:"optionded4",
        ans:"green"
    },
    {
        question:"what is your fav language ?",
        a:"opti1",
        b:"Java",
        c:"optio",
        d:"optionded4",
        ans:"java"
    },
    {
        question:"what is your fav sport ?",
        a:"opti1",
        b:"cricket",
        c:"optio",
        d:"optionded4",
        ans:"cricket"
    },
    {
        question:"what is your fav Team ?",
        a:"opti1",
        b:"CSK",
        c:"optio",
        d:"optionded4",
        ans:"CSK"
    }
];
const question=document.querySelector(".question");
const option1=document.querySelector("#option1");
const option2=document.querySelector("#option2");
const option3=document.querySelector("#option3");
const option4=document.querySelector("#option4");
const submit=document.querySelector("#submit");
const answers=document.querySelector(".option");
let questioncount=0;
let score=0;
const loadques=()=>
{
    const optionlist=quizques[questioncount];
    question.innerHTML=optionlist.question;
    option1.innerHTML=optionlist.a;
    option2.innerHTML=optionlist.b;
    option3.innerHTML=optionlist.c;
    option4.innerHTML=optionlist.d;
}
loadques();
 

var header = document.getElementById("options");
var btns = header.getElementsByClassName("option");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  if (current.length > 0) { 
    current[0].className = current[0].className.replace(" active", "");
  }
  this.className += " active";
  });
}











const getCheckAnswer=()=>{
    let useranswer=document.querySelector("li.option.active").innerHTML;
    return useranswer;  
};

submit.addEventListener("click",()=>
{
    const checkedanswer=getCheckAnswer();
    console.log(checkedanswer);
    if(checkedanswer==quizques[questioncount].ans)
    {
         score++;
         
    };
    console.log(score);
        questioncount++;
    if(questioncount<quizques.length)
    {
        loadques();
    }
})
 