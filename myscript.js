$j=jQuery.noConflict();

$j(document).ready(function() {




window.onload = function () { 



$j(".switch-tmce").css({'color' : 'lightgray', 'cursor' : 'not-allowed'});
// $j(".wp-editor-tabs").css({'display' : 'none'});
$j(".quicktags-toolbar").children().not(".ed_button[value='link']").hide();
// $j(.ed_button[value='link']).hide();



// $j(".quicktags-toolbar").children().not("#qt_w2dc-field-input-99_link").hide();


// jQuery(document).ready(function() {


	// alert("It's loaded!");
    $j(".switch-tmce").click(false);

	// $j(".quicktags-toolbar").children().not(input[value='link']).hide();
	// $j(".quicktags-toolbar").children().not([value='link']).hide();


};


});
