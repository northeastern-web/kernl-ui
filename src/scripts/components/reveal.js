/*
 * Reveal (expand/collapse)
 * For accordions or mobile nav reveal
 * Inspiration: http://uniondesign.ca/simple-accordion-without-jquery-ui/
 */

$('[data-toggle="reveal"]').on('click touch', function() {
  let group = $(this).attr('data-group');
  let target = $(this).attr('data-target');

  $(this).toggleClass('--active');
  $(this).next().slideToggle(600);

  $(group + ' .__title').not($(this)).removeClass('--active');
  $(group + ' .__content').not($(target)).slideUp(600);
});
