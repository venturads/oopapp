// Get the context of the canvas element we want to select
var ctx = document.getElementById("myChart").getContext("2d");
var myNewChart = new Chart(ctx).PolarArea(data);

 // get bar chart canvas
var income = document.getElementById("income").getContext("2d");