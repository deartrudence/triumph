
( function( $ ) {
    console.log( "ready!" );

    window.onload = function(){
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myBar = new Chart(ctx).Bar(data, {
                responsive : true
            });
        }


  //   var ctx = document.getElementById("canvas").getContext("2d");
  //   var myBarChart = new Chart(ctx).Bar(data, {
		// 	responsive : true
		// })
    var data = {
    labels: ["0-14", "15-24", "25-44", "45-64", "65-74", "75+"],
    datasets: [
        {
            label: "Male",
             fillColor: "rgba(151,187,205,0.5)",
            strokeColor: "rgba(151,187,205,0.8)",
            highlightFill: "rgba(151,187,205,0.75)",
            highlightStroke: "rgba(151,187,205,1)",
            data: [4.0, 3.8, 6.6, 15.9, 30.2, 52.1]
        },
        {
            label: "Female",
            fillColor: "rgba(220,220,220,0.5)",
            strokeColor: "rgba(220,220,220,0.8)",
            highlightFill: "rgba(220,220,220,0.75)",
            highlightStroke: "rgba(220,220,220,1)",
          
            data: [2.5, 4.0, 7.5, 17.5, 32.0, 54.1]
        }

    ]
};
     
var legend =  "<ul><li><span style=\"background-color:rgba(151,187,205,0.5)\">__</span>Male</li><li><span style=\"background-color:rgba(220,220,220,0.5)\">__</span>Female</li></ul>"

    $('#bar-chart-legend').html(legend);
} )( jQuery );



