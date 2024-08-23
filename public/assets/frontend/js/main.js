$(document).ready(function(){
    $('.dropdown-submenu a.test').on("click", function(e){
      $(this).next('ul').toggle();
      e.stopPropagation();
      e.preventDefault();
    });
  });


// language dropdown toggle on clicking button
$(".language-btn").on("click", function (event) {
  event.preventDefault();
  event.stopPropagation();
  $(this).next(".language-dropdown").toggleClass("open");
});
$(document).on("click", function (event) {
  if ($(".language-dropdown").hasClass("open")) {
      $(".language-dropdown").removeClass("open");
  }
});

// Counter
const counters = document.querySelectorAll(".counters");
let count = document.getElementById("count");
const increase = document.getElementById("increase");
const decrease = document.getElementById("decrease");

const count1 = document.getElementById("count1");
const increase1 = document.getElementById("increase1");
const decrease1 = document.getElementById("decrease1");

let value = 0;
let value1 = 0;

increase.addEventListener("click", () => {
  value++;
  count.textContent = value;
});

decrease.addEventListener("click", () => {
  count.textContent = value;
  if (value <= 0) {
      value = 0;
  } else {
      value--;
  }
});

increase1.addEventListener("click", () => {
  value1++;
  count1.textContent = value1;
});

decrease1.addEventListener("click", () => {
  count1.textContent = value;
  if (value1 <= 0) {
      value1 = 0;
  } else {
      value1--;
  }
});
