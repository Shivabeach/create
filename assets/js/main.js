let urls = document.getElementsByTagName('ul');


//* adding an array
const numbers = [10,20,30,40];
const sum = numbers.reduce((accumulator, currentValue) => {
  return accumulator + currentValue;
}, 0);
console.log(sum);

//! adding arrays
const numbering = [10,20,10,40];
let sums = 0
for (let n of numbering)
  sums += n;
console.log(sums);

// Make menu invisible
const btnTop = document.getElementById("menu");

$(window).scroll(function() {
  if ($(window).scrollTop() > 150) {
    btnTop.style.visibility='hidden';
  } else {
    btnTop.style.visibility='visible';
  }
});

$(function () {
  "use strict";
  $("#date").datepicker({
    dateFormat: "yy-mm-dd"
  });
});

$(function() {
  "use strict";
  $('form#ajax').on('submit', function(e) {
    e.preventDefault();
    var that = $(this),
      url = that.attr('action'),
      type = that.attr('method'),
      data = {};
    that.find('[name]').each(function(index, value) {
      var that = $(this),
        name = that.attr('name'),
        value = that.val();
      data[name] = value;
    });
    $.ajax({
      url: url,
      type: type,
      data: data,
      success: function(response) {
        $('#display').html(response).delay(6000).fadeOut(1000);

      }
    });
    return false;
  });
});

$(function() {
  $('A[rel="external"]').click(function() {
    window.open($(this).attr('href'));
    return false;
  });
});
