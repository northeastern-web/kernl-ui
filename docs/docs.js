import '../src/scripts/main.js'
import $ from 'jquery'
//
//
// for kernl(ui) documentation ui only
//
//

// load some 16:9 images and randomize them
const path = './docs/images/random/';
const images = [
  '224.jpg','13824.jpg','44250.jpg','45606.jpg','56981.jpg','74770.jpg','115248.jpg','122516.jpg','131543.jpg','168518.jpg','177914.jpg','195891.jpg','199226.jpg','201826.jpg','204574.jpg','212215.jpg','221226.jpg','243947.jpg','262985.jpg','271403.jpg','272467.jpg','279561.jpg','283249.jpg','312465.jpg','325240.jpg','331559.jpg','340741.jpg','29760.jpg','31540.jpg','37439.jpg','38253.jpg','60738.jpg','72120.jpg','73912.jpg','85409.jpg','99012.jpg','110929.jpg','152597.jpg','166138.jpg','221637.jpg','222454.jpg','228792.jpg','229357.jpg','229736.jpg','242124.jpg','250745.jpg','252147.jpg','255216.jpg','255479.jpg','259596.jpg','263147.jpg','267249.jpg','269170.jpg','271130.jpg','276282.jpg','277641.jpg','278252.jpg','310125.jpg','313740.jpg','314123.jpg','337869.jpg','339558.jpg','339798.jpg','342304.jpg','594.jpg','768.jpg','21279.jpg','24274.jpg','30938.jpg','31543.jpg','33564.jpg','37688.jpg','43386.jpg','53883.jpg','65104.jpg','110936.jpg','126089.jpg','136360.jpg','226482.jpg','233036.jpg','255972.jpg','271380.jpg','303064.jpg','shining-twins.jpg','1-1.jpg','2-3.jpg','3-2.jpg','3-4.jpg','4-3.jpg','4-5.jpg','5-4.jpg','5-7.jpg','7-5.jpg','16-9.jpg'
];

$('#kernl .bg-img').each(function() {
  const randomImages = Math.floor(Math.random() * images.length);
  const selectedImg = images.splice(randomImages,1); // no repeated images
  $(this).attr("style",`background-image: url(${path}${selectedImg});`);
});

$('#kernl .card_graphic').each(function() {
  const randomImages = Math.floor(Math.random() * images.length);
  const selectedImg = images.splice(randomImages,1); // no repeated images
  $(this).append(`<img class='card_img' src='${path}${selectedImg}' alt=''>`);
});


/* Dynamically display responsive font sizes on typography page.
 * // * * Requires page reload after viewport resize. * * // *
 */
const htmlFontSize = $('html').css('fontSize');
$('#kernl .html-font-size').text(parseInt(htmlFontSize));

$('#kernl .element-font-size').each(function() {
  let elemFontSize = $(this).css('fontSize');
  elemFontSize = Math.round(parseFloat(elemFontSize));
  $(this).text(`${elemFontSize}px`);
});


/**
 * Dynamically change demo modal sizes
 */

$(document).on('keyup', function(e) {
  if (e.keyCode == 27) {
    $('.modal').removeClass('--sm --base --lg --xl --full');
  }
});

$('.modal-demo').on('click touch', 'a', function() {
  var modalSize = $(this).attr('data-size');
  $('.modal').removeClass('--sm --base --lg --xl --full').addClass( '--' + modalSize )
});

/**
 * Toggle 'parts' menu
 * adds class to allow for active state
 */
$('#kernl .k_nav').on('click touch', e => {
  $('#kernl .k_nav').toggleClass( 'k_nav__active' );
});


/**
 * change page container class asynchronously;
 */
$("#contSelect").on('click touch', 'li a', function(e) {
  e.preventDefault();
  $('#contSelect .\\--active').removeClass('--active');
  const contID = $(this).closest('li a').prop('id');
  $(this).closest('li a').addClass('--active');
  const contArray = ['default', 'full', 'contain'];
  $.each(contArray, function(i, v) {
     $('body').removeClass(v);
  });
  $('body').addClass(contID);
});


/**
 * For 'loader' demonstration;
 */
$('[data-load]').on('click touch', function() {
  $('.k_loader_example').text((index, text) => text.replace("Load Something", "Wait for it..."));
  $('.spinner').delay(5000).queue(function() {
    $(this).addClass('loaded').dequeue();
    $('.loaded').removeClass('spinner');
    $('.k_loader-placeholder').addClass('__graphic ar--16x9').queue(function(){
      $(this).append(`<img class="__graphic__img" src="${path}truck.jpg" alt="">`);
    });
  });
});
