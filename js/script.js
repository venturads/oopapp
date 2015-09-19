$(document).ready(function(){
    $("#label1").click(function(){
        for(var i=0;i>4;i++){
            console.log(i);
        $("p").append(" <input name='options"+i+"' placeholder='option'></input><br><br>");
        }
    });

});
