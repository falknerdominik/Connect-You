/**
 * Created by Valentin on 16.01.14.
 */


var widgets = array();
widgets[0] = "342";
// widgets[0] = "<div class='deletewidget panel panel-primary col-md-3 col-md-offset-1' ><div class='panel-heading' > Kalender <i class='remove glyphicon glyphicon-remove'></i> </div ><div class='panel-body'>";


window.onload = function () {
    $("#move").click(function () {
        $("#widgetmenu").animate({
            left: "0em"
        }, 300);
    });
    $("#content").click(function () {
        $("#widgetmenu").animate({
            left: "-15.8em"
        }, 300);
    });

    $(function () {
        $("li").click(function () {
            $("#content").append(widgets[0]);
        });
    });
}