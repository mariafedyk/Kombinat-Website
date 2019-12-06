$(window).scroll(function(){

  var fix = $('.menu')

  if($(this).scrollTop() > 100){
    fix.addClass('fix');
  }
  else{
    fix.removeClass('fix');
  }

})

$('#studytype').change(function(){
  if($(this).val() == 'Дистанційна форма'){ // or this.value == 'volvo'
    $('#studytypetext').addClass('show');
  }
  else{
    $('#studytypetext').removeClass('show');
  }
});

$('#link1').click(function(){
	$('#table1').toggleClass('show');
	$('.btndown1').toggleClass('showbtn');

})
$('#link2').click(function(){
	$('#table2').toggleClass('show');
	$('.btndown2').toggleClass('showbtn');

})
$('#link3').click(function(){
	$('#table3').toggleClass('show');
	$('.btndown3').toggleClass('showbtn');

})
$('#link4').click(function(){
	$('#table4').toggleClass('show');
	$('.btndown4').toggleClass('showbtn');
})
 $('#link6').click(function(){
  $('#table6').toggleClass('show');
  $('.btndown6').toggleClass('showbtn');
})

$(document).ready(function(){
  $('.slider').slick({
  	arrows: false,
  	dots:true,
  	dotsClass: "MyDots",
    autoplay:true
  });
});
