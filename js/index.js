/*let loni = $(".name");
let bubu = $(".info");
let app = $(".appear");


$(document).ready(function(){
    loni.click(function(){
        bubu.css({
            color: "black",
            visibility: "visible"
        })
    })
    $(".main").mouseleave(function(){
        bubu.css({
            visibility: "hidden"
        })
    })
})

function openSect(){
    let dis = document.getElementById("disappear");
    if(dis.className === "appear"){
        dis.className += "appear";
        app.css({
            display: "flex",
            flexDirection: "row",
            justifyContent: "space-around",
            backgroundColor: "red",
            height: "5vh",
        })
    }else{
        dis.className = "appear";
        app.css({
            display: "none",
        })
    }
}

$(document).ready(function(){
    bubu.click(function(){
        $(".hidinfo").css({
            display: "flex",
            backgroundColor: "blue",
            flexDirection: "row",
            justifyContent: "space-around",
            textDecoration: "none",
            color: "red",
        })
    })

    $(".hidinfo").mouseenter(function closeInfo(){
        $('hidinfo').css({
            display: "none",
        })
    })
})
*/
/*
$(document).ready(function(){
    $(".blue").click(function(){
        $(".home").css({
            filter: "hue-rotate(70deg)",
        })
    })
    $(".red").click(function(){
        $(".home").css({
            filter: "hue-rotate(190deg)",
        })
    })
    $(".purple").click(function(){
        $(".home").css({
            filter: "hue-rotate(100deg)",
        })
    })
    $(".green").click(function(){
        $(".home").css({
            filter: "hue-rotate(320deg)",
        })
    })
    $(".yellow").click(function(){
        $(".home").css({
            filter: "hue-rotate(280deg)",
        })
    })
})*/

const navigation = document.querySelector('nav');

window.addEventListener('scroll', () => {

   if(window.scrollY > 30){
    navigation.classList.add('anim-nav');
   } else{
    navigation.classList.remove('anim-nav');
   }

})

const menuResp = document.querySelector(".fas");
const navAll = document.querySelector(".links");

menuResp.addEventListener('click', () =>{
navAll.classList.toggle('menu-responsive')
})

//Enlève les animations au cahngement de résolution de l'écran
const navLinks = document.querySelector(".menu-responsive")
new ResizeObserver(entries => {
    if(entries[0].contentRect.width <= 900){
        navLinks.style.transition = "transform all 1.5s ease-in-out";
    }else{
        navLinks.style.transition = "none"
    }
}).observe(document.body)

const theme = document.querySelector('.day');

theme.addEventListener('click', () => {
    const body = document.body;

    if (body.classList.contains('dark')){
        body.classList.add('light')
        body.classList.remove('dark')
        theme.innerHTML = "&#x1F311"

    }else if(body.classList.contains('light')){
        body.classList.add('dark')
        body.classList.remove('light')
        theme.innerHTML = "&#x1F31E"
    }
})