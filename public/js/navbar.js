// active navbar

const navbarLinks = document.querySelectorAll(".navbar a");

navbarLinks.forEach((link) => {
    if (link.href === window.location.href) {
        link.classList.add("active");
    }
});

// mobile nav toogle

const mobileNavShow = document.querySelector(".mobile-nav-show");
const mobileNavHide = document.querySelector(".mobile-nav-hide");

document.querySelectorAll(".mobile-nav-toggle").forEach((el) => {
    el.addEventListener("click", function (event) {
        event.preventDefault();
        mobileNavToogle();
    });
});

function mobileNavToogle() {
    document.querySelector("body").classList.toggle("mobile-nav-active");
    mobileNavShow.classList.toggle("d-none");
    mobileNavHide.classList.toggle("d-none");
}
