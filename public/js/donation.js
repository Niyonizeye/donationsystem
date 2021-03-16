// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();
var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in an element with id="Div"
  document.getElementById("days").innerHTML = days;
  document.getElementById("hours").innerHTML = hours;
  document.getElementById("minutes").innerHTML = minutes;
  document.getElementById("seconds").innerHTML = seconds;

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
  }
}, 1000);



// read more script 

// let lengthText = document.querySelector("#description");

// if(lengthtext.length>100){
//     lengthText.style="color:red";
// // }
$(function () {
    $('.read-more-content').addClass('hide_content')
$('.read-more-show, .read-more-hide').removeClass('hide_content')

// Set up the toggle effect:
$('.read-more-show').on('click', function(e) {
  $(this).next('.read-more-content').removeClass('hide_content');
  $(this).addClass('hide_content');
  e.preventDefault();
});

// Changes contributed by @diego-rzg
$('.read-more-hide').on('click', function(e) {
  var p = $(this).parent('.read-more-content');
  p.addClass('hide_content');
  p.prev('.read-more-show').removeClass('hide_content'); // Hide only the preceding "Read More"
  e.preventDefault();
});
})


// $(document).ready(function() { 
//     $("button").click(function() { 
//         // reduce the whitespace from both sides of a string.  
//         var geeks1 = selector.text(),; 
//         //split a string into an array of substrings 
//         var geek = geeks1.split(" ") 
//             // count number of elements 
//         alert(geek.length); 
//     }); 
// }); 
