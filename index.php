<?php
echo 'helloworld';
$cars = array("ford","bmw","dodge");
echo "<br>" .$cars[1]. " " .count($cars);

?>
<button id="btn" class="btn btn-primary" onclick="myFun()">car</button>

<script>
function myFun(){
    document.getElementById("btn").innerHTML ="switch";
};
</script>