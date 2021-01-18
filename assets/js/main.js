// Bootstrap 5 tooltips
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
});

const btnDark = document.querySelector(".btn-toggle-dark");
const btnLight = document.querySelector(".btn-toggle-light");

btnDark.addEventListener("click", function() {
    event.preventDefault();
    document.body.classList.add("dark-theme");
    document.body.classList.remove("light-theme");
    btnDark.classList.add("active");
    btnLight.classList.remove("active");
    document.cookie = "theme=" + "dark-theme";
});
btnLight.addEventListener("click", function() {
    event.preventDefault();
    document.body.classList.remove("dark-theme");
    document.body.classList.add("light-theme");
    btnDark.classList.remove("active");
    btnLight.classList.add("active");
    document.cookie = "theme=" + "light-theme";
});