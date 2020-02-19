// $(".faq_item_btn").on("click", function() {
//   $(".faq_content").removeClass("show");
//   $(this).addClass("active").siblings(".faq_item_btn").removeClass("active")
//   $(this).next(".faq_content").addClass("show");
// });

$(".faq_item_btn").bind ("click", function (event)
{
  $("a.faq_item_btn").trigger ("click");
});
