var i = 1;
$(document).ready(function(){
    $("#label1").click(function(){
        i++;
        $("p").append(" <input name='options"+i+"' placeholder='option'></input><br><br>");
    });

});
