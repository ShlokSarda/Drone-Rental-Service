//For Sign In Modal
const modal1 = document.getElementById("myModal-1");
const openModalBtn1 = document.getElementById("primary");
const closeModalBtn1 = document.getElementById("closeModalBtn-1");
openModalBtn1.addEventListener("click", function () {
    modal1.style.display = "block";
});
closeModalBtn1.addEventListener("click", function () {
    modal1.style.display = "none";
});
window.addEventListener("click", function (event) {
    if (event.target === modal1) {
        modal1.style.display = "none";
    }
});

//For Sign Up Modal
const modal2 = document.getElementById("myModal-2");
const openModalBtn2 = document.getElementById("secondary");
const closeModalBtn2 = document.getElementById("closeModalBtn-2");
openModalBtn2.addEventListener("click", function () {
    modal2.style.display = "block";
});
closeModalBtn2.addEventListener("click", function () {
    modal2.style.display = "none";
});
window.addEventListener("click", function (event) {
    if (event.target === modal2) {
        modal2.style.display = "none";
    }
});