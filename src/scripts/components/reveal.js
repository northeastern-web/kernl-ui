/*
 * Reveal (expand/collapse)
 * For accordions or mobile nav reveal
 * Inspiration: http://uniondesign.ca/simple-accordion-without-jquery-ui/
 */

$('[data-toggle]').on('click touch', function() {
  let group = $(this).attr('data-group');
  let target = $(this).attr('data-toggle');

  $(this).toggleClass('--active');
  $(target).slideToggle(600);
  // $(target).toggleClass('--visible');

  $(group + ' [data-toggle]').not($(this)).removeClass('--active');
  $(group + ' [data-target]').not($(target)).slideUp(600);
  // $(group + ' [data-target]').not($(target)).removeClass('--visible');
});
