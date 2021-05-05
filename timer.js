let dt=new Date(new Date().setTime(0));
let time=dt.getTime();
let second=Math.floor((time%(100*60))/1000);
let minute=Math.floor((time%(1000*60*60))/(1000*60));
let timer=0;
setInterval(function(){
    if(second<59)
    {
        second++;
    }
    else{
        minute++;
        second=0;
    }
    let format_sec=second<10?`0${second}`:`${second}`;
    let format_min=minute<10?`0${minute}`:`${minute}`;
    document.querySelector(".timer").innerHTML=`${format_min} : ${format_sec}`;
},1000)