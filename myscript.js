console.log("non permitted visual  page detected");
$j=jQuery.noConflict();

$j(document).ready(function() {

$j(".switch-tmce").css({'color' : 'lightgray', 'cursor' : 'not-allowed'});


});


jQuery(document).ready(function() {
    document.getElementById("content-tmce").onclick = 'none';
});