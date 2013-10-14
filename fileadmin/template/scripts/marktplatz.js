/**
 * Created with JetBrains PhpStorm.
 * User: VALE, Falkner
 * Date: 10.10.13
 * Time: 09:03
 * To change this template use File | Settings | File Templates.
 */

 // READY
$( document ).ready(function() {

	// Fügt den Event-Handler zu den Projekt lis hinzu
	$( "#projects li" ).click(scrollToDetails);
});

/*
 * Scrollt zu den Details, wird beim Klick auf ein Projekt aufgerufen
 *
*/
function scrollToDetails(){

        //$('body').scrollTo( {top:'30%', left:'0px'}, 800, {easing:'easeInBounce'} );
       //scrollTo(0,700);
    $('body').scrollTo( 0, 800, {queue:true} );
}