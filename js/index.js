let loni = $(".name");
let bubu = $(".info");
let app = $(".appear");

/*
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
})*/

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