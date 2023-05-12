

/** Service Wise Post List */

google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(servicePostDrawChart);
function servicePostDrawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Service', 'Posts'],
        ['Product',       11],
        ['Service',       20],
        ['Hotel',         22],
        ['Job',           12],
        ['Education',     7],
        ['Property',      2],
        ['Resale',        9],
        ['Matrimoney',    2]
    ]);
    
    var options = {
        title:'Service Wise Posts',
        is3D: true,
    };
  
    var chart = new google.visualization.PieChart(document.getElementById('service_post_piechart_3d'));
    chart.draw(data, options);
}