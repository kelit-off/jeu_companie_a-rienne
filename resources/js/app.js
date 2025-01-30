// import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
    
})

window.dropdown = function(submenu) {
    document.querySelectorAll(".submenu").forEach(function(element){ 
        if(!element.classList.contains("hidden")) {
            element.classList.add("hidden")
        }
    })
    document.querySelector("."+submenu).classList.toggle("hidden");
    document.querySelector("#arrow").classList.toggle("rotate-0");
}

function openSidebar() {
    document.querySelector(".sidebar").classList.toggle("hidden");
}