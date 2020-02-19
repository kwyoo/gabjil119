// $(document).ready(function() {
// 	$('.side_nav .side_nav_sub_menu:has(ul)').click(function(e) {
// 		e.preventDefault();
//
// 		if($(this).hasClass('active')) {
// 			$(this).removeClass('active');
// 			$(this).children('ul').slideUp();
// 		} else {
// 			$('.side_nav .side_nav_sub_menu ul').slideUp();
// 			$('.side_nav li').removeClass('active');
// 			$(this).addClass('active');
// 			$(this).children('ul').slideDown();
// 		}
//
// 		$('.side_nav li ul li a').click(function() {
// 			window.location.href = $(this).attr('href');
// 		})
// 	});
// });


var acc = document.getElementsByClassName("side_nav_sub_menu_btn");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
