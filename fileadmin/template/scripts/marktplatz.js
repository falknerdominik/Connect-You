/**
 * Created with JetBrains PhpStorm.
 * User: VALE, Falkner
 * Date: 10.10.13
 * Time: 09:03
 * To change this template use File | Settings | File Templates.
 */

 // READY
$( document ).ready(function() {

	// bind functions to elements
	$( "#projects li" ).click(scrollToDetails);
});

function scrollToDetails(){
	alert( "Handler for .click() called." );
}