let minus=document.querySelector(".minus");
let plus=document.querySelector(".plus");
let display=document.getElementById("display")
minus.addEventListener("click",()=>{
    display.value=parseInt(display.value)-1
})
plus.addEventListener("click",()=>{
    display.value=parseInt(display.value)+1
})
