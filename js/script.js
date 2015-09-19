$(document).ready(function(){
    $("#label1").click(function(){
        var i = 0;
        i =+ 1;
        $("p").append(" <input name='options"+i+"' placeholder='option'></input><br><br>");
    });

});
