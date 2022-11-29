const hamburger = document.getElementById("hamburger");
const nav_Hide = document.querySelector(".nav-Hide");
const cloceBurger = document.getElementById("cloceBurger");
const liTarget = document.querySelectorAll(".navlinks li");

hamburger.addEventListener("click", () => {
    if (nav_Hide.style.display === "block") {
        nav_Hide.style.display = "none";
        hamburger.style.opacity = "1"
        cloceBurger.style.opacity = "0";
    }
    else {
        nav_Hide.style.display = "block";
        cloceBurger.style.display = "block";
        hamburger.style.opacity = "0"
        cloceBurger.style.opacity = "1";
    }
})

liTarget.forEach((e) => {
    e.addEventListener("click", () => {
        if (nav_Hide.style.display === "block") {
            nav_Hide.style.display = "none";
            hamburger.style.opacity = "1"
            cloceBurger.style.opacity = "0";
        }
        else {
            nav_Hide.style.display = "block";
            cloceBurger.style.display = "block";
            hamburger.style.opacity = "0"
            cloceBurger.style.opacity = "1";
        }
    })
})