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

//Enlève les animations au changement de résolution de l'écran
/*
const navLinks = document.querySelector(".menu-responsive")
new ResizeObserver(entries => {
    if(entries[0].contentRect.width <= 900){
        navLinks.style.transition = "transform all 1.5s ease-in-out";
    }else{
        navLinks.style.transition = "none"
    }
}).observe(document.body)*/

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

let path = document.querySelector('#pathf');
let pathLf = path.getTotalLength();

path.style.strokeDasharray = pathLf + ' ' + pathLf;
path.style.strokeDashoffset = pathLf;
path.getBoundingClientRect();

window.addEventListener("scroll", function(e) {
  let scrollPerc = (document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight); //rapport
  let drawLf = pathLf * scrollPerc;
  path.style.strokeDashoffset = pathLf - drawLf;
  
    
  if (scrollPerc >= 0.99) {
    path.style.strokeDasharray = "none";
    
  } else {
    path.style.strokeDasharray = pathLf + ' ' + pathLf;
  }

});

let paths = document.querySelector('#paths');
let pathLs = paths.getTotalLength();

paths.style.strokeDasharray = pathLf + ' ' + pathLf;
paths.style.strokeDashoffset = pathLf;
paths.getBoundingClientRect();

window.addEventListener("scroll", function(e) {
  let scrollPerc = (document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight); //rapport
  let drawLs = pathLs * scrollPerc;
  paths.style.strokeDashoffset = pathLs - drawLs;
  
    
  if (scrollPerc >= 0.99) {
    paths.style.strokeDasharray = "none";
    
  } else {
    paths.style.strokeDasharray = pathLs + ' ' + pathLs;
  }

});

let patht = document.querySelector('#patht');
let pathLt = patht.getTotalLength();

patht.style.strokeDasharray = pathLt + ' ' + pathLt;
patht.style.strokeDashoffset = pathLt;
patht.getBoundingClientRect();

window.addEventListener("scroll", function(e) {
  let scrollPerc = (document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight); //rapport
  let drawLt = pathLt * scrollPerc;
  patht.style.strokeDashoffset = pathLt - drawLt;
  
    
  if (scrollPerc >= 0.99) {
    patht.style.strokeDasharray = "none";
    
  } else {
    patht.style.strokeDasharray = pathLt + ' ' + pathLt;
  }

});

/*
let pathfo = document.querySelector('#pathfo');
let pathLfo = pathfo.getTotalLength();

pathfo.style.strokeDasharray = pathLfo + ' ' + pathLfo;
pathfo.style.strokeDashoffset = pathLfo;
pathfo.getBoundingClientRect();

window.addEventListener("scroll", function(e) {
  let scrollPerc = (document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight); //rapport
  let drawLfo = pathLfo * scrollPerc;
  pathfo.style.strokeDashoffset = pathLfo - drawLfo;
  
    
  if (scrollPerc >= 0.99) {
    pathfo.style.strokeDasharray = "none";
    
  } else {
    pathfo.style.strokeDasharray = pathLfo + ' ' + pathLfo;
  }

});
*/