

let searchLink = document.querySelector(".button-interested-in");
let searchPopupForm = document.querySelector(".modal-date");
let isFormOpen = false; 
let searchForm = searchPopupForm.querySelector(".date-form");
let arrivalDate= searchPopupForm.querySelector(".search-arrival-date");
let departureDate = searchPopupForm.querySelector(".search-departure-date");


var isStorageSupport = true;
var storage = "";

try {
  storage = localStorage.getItem("arrival-date");
  storage = localStorage.getItem("departure-date");
} catch (err) {
  isStorageSupport = false;
}


searchLink.addEventListener("click", function (evt) {
    console.log(isFormOpen);
    if (isFormOpen === true){
        searchPopupForm.classList.remove("modal-show");
        searchPopupForm.classList.remove("modal-error");
        isFormOpen = false;
    } else {
        searchPopupForm.classList.add("modal-show");
        arrivalDate.focus();
        isFormOpen = true;  
    }
});

searchForm.addEventListener("submit", function (evt) {
    if (!arrivalDate.value || !departureDate.value) {
    evt.preventDefault();
    searchPopupForm.classList.remove("modal-error");
    searchPopupForm.offsetWidth = searchPopupForm.offsetWidth;
    searchPopupForm.classList.add("modal-error");
    } else {
        if (isStorageSupport) {
            localStorage.setItem("arrival-date", arrivalDate.value);
            localStorage.setItem("departure-date", departureDate.value);
        }
    }
});

window.addEventListener("keydown", function (evt) {
    if (evt.keyCode === 27) {
      if (searchPopupForm.classList.contains("modal-show")) {
        evt.preventDefault();
        searchPopupForm.classList.remove("modal-show");
      }
    }
});



var loginLink = document.querySelector(".main-header__login-link");
var loginPopup = document.querySelector(".modal-login");
var loginClose = loginPopup.querySelector(".modal-close");

loginLink.addEventListener("click", function (evt) {
  evt.preventDefault();
  loginPopup.classList.add("modal-show");
});

loginClose.addEventListener("click", function (evt) {
  evt.preventDefault();
  loginPopup.classList.remove("modal-show");
});