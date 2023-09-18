let mysidebar=document.getElementById("mysidebar");
let closeBtn=document.getElementById("closeBtn");
let main=document.getElementById("main");

main.addEventListener("click",()=>{
    mysidebar.style.width="250px";
})
closeBtn.addEventListener("click",()=>{
    mysidebar.style.width="0px";
})