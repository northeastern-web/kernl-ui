import $ from 'jquery';

let $acc = $(".acc");

$acc
  .swap()
  .on('activate.swap', function() {
    console.log('activate');
  })
  .on('deactivate.swap', function() {
    console.log('deactivate');
  });
