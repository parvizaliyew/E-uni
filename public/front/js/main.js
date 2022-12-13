var swiper = new Swiper(".home-slider", {
  direction: "vertical",
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
var counted = 0;
$(window).scroll(function () {

  var oTop = $('#counter').offset().top - window.innerHeight;
  if (counted == 0 && $(window).scrollTop() > oTop) {
    $('.count').each(function () {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
        countNum: countTo
      },

        {

          duration: 2000,
          easing: 'swing',
          step: function () {
            $this.text(Math.floor(this.countNum));
          },
          complete: function () {
            $this.text(this.countNum);
            //alert('finished');
          }

        });
    });
    counted = 1;
  }

});
$('.social-slider').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 4
    }
  }
});
$(".select-item").click(function () {
  $(this).parent().toggleClass("active")
});
$(".thumb-images img").click(function () {
  let src = $(this).attr('src')
  $(".thumb-1").attr('src', src)
});
$(".teacher-card-body").click(function (e) {
  let target = e.target;
  if (target != $(this).find('.staff-icon img')[0]) {
    $(this).parent().find(".pop-up").addClass("active")
    $("body").css("overflow-y", "hidden")
  } 
});
$(".pop-up").click(function (){
  $(this).removeClass("active")
  $("body").css("overflow-y", "scroll")
})
$(".pop-up-main").click(function(){
  $(this).parent().parent().parent().addClass("active")
  $("body").css("overflow-y", "hidden")
  console.log($(this).parent().parent().parent())
})
$(".show-more").click(function () {
  $(".pop-up").addClass("active")
  $("body").css("overflow-y", "hidden")
});
$(".close-pop-up").click(function () {
  $(".pop-up").removeClass("active")
  $("body").css("overflow-y", "scroll")
});
$(".little-item").click(function () {
  $(this).addClass("active")
  $(".little-item").not(this).removeClass("active")
});
$(".little-item:nth-child(1)").click(function () {
  $("#leadership").css("display", "block")
  $("#teacher").css("display", "none")
  $("#staff").css("display", "none")
  $("#bachelor").css("display", "block")
  $("#master-degree").css("display", "none")
  $("#phd").css("display", "none")
});
$(".little-item:nth-child(2)").click(function () {
  $("#leadership").css("display", "none")
  $("#teacher").css("display", "block")
  $("#staff").css("display", "none")
  $("#bachelor").css("display", "none")
  $("#master-degree").css("display", "block")
  $("#phd").css("display", "none")
});
$(".little-item:nth-child(3)").click(function () {
  $("#leadership").css("display", "none")
  $("#teacher").css("display", "none")
  $("#staff").css("display", "block")
  $("#bachelor").css("display", "none")
  $("#master-degree").css("display", "none")
  $("#phd").css("display", "block")
});
$(".little-item:nth-child(3)").click(function () {
  $("#leadership").css("display", "none")
  $("#teacher").css("display", "none")
  $("#staff").css("display", "block")
  $("#bachelor").css("display", "none")
  $("#master-degree").css("display", "none")
  $("#phd").css("display", "block")
});
$(".pages.polici-pages .page-item:first-child").click(function () {
  $("#regulations").css("display", "block")
  $("#academics-polici").css("display", "none")
  $("#news").css("display", "block")
  $("#events").css("display", "none")
  $(".pages.polici-pages .page-item").removeClass("active")
  $(this).addClass("active")
});
$(".pages.polici-pages .page-item:last-child").click(function () {
  $("#regulations").css("display", "none")
  $("#academics-polici").css("display", "block")
  $("#news").css("display", "none")
  $("#events").css("display", "block")
  $(".pages.polici-pages .page-item").removeClass("active")
  $(this).addClass("active")
});
let lists = $('.select-dropdown .select-item');
$(".open-search").click(function(){
  $(".drop-form").toggleClass("active")
})
$(".drop-close").click(function(){
  $(".drop-form").removeClass("active")
})
lists.on('click', function () {
  let text = $(this).text();
  $('#select').text(text);
});
$(".nav-item").click(function(){
  $(this).toggleClass("active")
})
$(".nav-close").click(function(){
  $(".header-bottom").removeClass("active")
})
$(".nav-open").click(function(){
  $(".header-bottom").addClass("active")
})