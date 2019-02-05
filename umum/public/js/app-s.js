
$('.ui.secondary.menu .item').tab();

$('.ui.menu .item')
  .tab({
    history : true,
    historyType : 'state',
    // base url for all other path changes
    path        : '/my/base/url'
  })
;

$('.primary.basic.button')
  .on('click', function() {
    // programmatically activating tab
    $.tab('change tab', 'first');
  })
;


$('#REGISTRE')
.click(function (){

alert("nao so");

});
