/**
 * Created with JetBrains PhpStorm.
 * User: Thiago
 * Date: 20/11/12
 * Time: 11:38
 * To change this template use File | Settings | File Templates.
 */

$(document).on("pageinit", function () {


    $("#popupPanel").on({
        popupbeforeposition:function () {
            var h = $(window).width();

            $("#popupPanel")
                .css("width", h);
        }
    });


});
