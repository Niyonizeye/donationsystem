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

$(function () {
    function trimText(selector, limit) {    
        var text = selector.text(),
            trim;

        selector.each(function() {
            if ($(this).text().length > limit) {
                trim = $(this).text().substr(0, limit);

                $(this).text(trim);
                $(this).append('<span class="expand">Read More<i class="fas fa-plus-circle">');
            };
        });

        $(selector).on("click",".expand", function() { //future element
            $(this).parent().text(text).append('<span class="collapse">Read Less<i class="fas fa-chevron-circle-up">');
        });

        $(selector).on("click", ".collapse",function() { //future element
            $(this).parent().text(trim).append('<span class="expand">Read More<i class="fas fa-plus-circle">');
        });

    };


    trimText($(".one"),   300);

})