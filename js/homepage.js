// Navbar functionality start
const mob_nav = document.getElementById("mob_nav");
const mob_nav_links = document.querySelector("#mob_nav > .nav_links");
const mob_nav_btns = document.querySelector("#mob_nav > .nav_btns");
const nav_mob_open = document.getElementById("nav_mob_open");
const nav_mob_close = document.getElementById("nav_mob_close");

nav_mob_open.addEventListener("click", () => {
    nav_mob_open.style.display = "none";
    nav_mob_close.style.display = "block";
    mob_nav.style.display = "flex";
    mob_nav.style.height = "300px";
    setTimeout(() => {
        mob_nav_links.style.display = "flex";
        mob_nav_btns.style.display = "flex";
    }, 500);
});

nav_mob_close.addEventListener("click", () => {
    nav_mob_open.style.display = "block";
    nav_mob_close.style.display = "none";
    mob_nav_links.style.display = "none";
    // mob_nav_btns.style.display = "none";
    setTimeout(() => {
        mob_nav.style.height = "0px";
    }, 500);
    setTimeout(() => {
        mob_nav.style.display = "none";
    }, 1000);
});
// Navbar functionality end