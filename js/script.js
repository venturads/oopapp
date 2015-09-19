var i = 1;
$(document).ready(function(){
    $("#label1").click(function(){
        i++;
        $("p").append(" <input name='options"+i+"' placeholder='option'></input><br><br>");
    });
    $("#login").click(function(){
        $("#login").append("<?php include 'login.php'; ?>");
    });
});
