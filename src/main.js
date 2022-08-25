// let nCount = selector => {
//   $(selector).each(function () {
//     $(this)
//       .animate({
//         Counter: $(this).text()
//       }, {
//         // A string or number determining how long the animation will run.
//         duration: 4000,
//         // A string indicating which easing function to use for the transition.
//         easing: "swing",
//         /**
//          * A function to be called for each animated property of each animated element. 
//          * This function provides an opportunity to
//          *  modify the Tween object to change the value of the property before it is set.
//          */
//         step: function (value) {
//           $(this).text(Math.ceil(value));
//         }
//       });
//   });
// };

// let a = 0;
// $(window).scroll(function () {
//   // The .offset() method allows us to retrieve the current position of an element  relative to the document
//   let oTop = $(".numbers").offset().top - window.innerHeight;
//   if (a == 0 && $(window).scrollTop() >= oTop) {
//     a++;
//     nCount(".rect > h1");
//   }
// });



/**
 *
 *  sticky navigation
 *
 */

let navbar = $(".navbar");

$(window).scroll(function () {
  // get the complete hight of window
  let oTop = $(".section-2").offset().top - window.innerHeight;
  if ($(window).scrollTop() > oTop) {
    navbar.addClass("sticky");
  } else {
    navbar.removeClass("sticky");
  }
});
const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});

//calendar
function eventcalendar()
{
location.href="../calendar/src1/index.html";
}