// import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
    
})

window.dropdown = function(submenuClass) {
    const submenu = document.querySelector("." + submenuClass); // Sélectionne le sous-menu correspondant
    if (!submenu) return; // Sécurité : si l'élément n'existe pas, on quitte

    const isHidden = submenu.classList.contains("hidden");

    // Ferme tous les sous-menus et remet les flèches à l'état normal
    document.querySelectorAll(".submenu").forEach(element => {
        element.classList.add("hidden");
    });
    document.querySelectorAll("#arrow").forEach(arrow => {
        arrow.classList.add("rotate-180");
    });

    // Si le sous-menu était caché, on l'affiche et on met à jour la flèche
    if (isHidden) {
        submenu.classList.remove("hidden");
        const arrow = document.querySelector(`[onclick="dropdown('${submenuClass}')"] #arrow`);
        if (arrow) arrow.classList.toggle("rotate-180");
    }
};

function openSidebar() {
    document.querySelector(".sidebar").classList.toggle("hidden");
}