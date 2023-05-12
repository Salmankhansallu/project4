<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>District School</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['District','link', 'no_of_school'],
          ['Angul', 'http://localhost/project4/user_login', 1500],
          ['Cuttack', 'http://localhost/project4/user_login', 1170],
          ['Jajpur', 'http://localhost/project4/user_login', 660],
          ['Sonepur', 'http://localhost/project4/user_login', 1030],
          ['Bargarh', 'http://localhost/project4/user_login', 1300],
          ['Bolangir', 'http://localhost/project4/user_login', 1270],
          ['Ganjam', 'http://localhost/project4/user_login', 640],
          ['Rayagada', 'http://localhost/project4/user_login', 1230]
        ]);
        var view = new google.visualization.DataView(data);
        view.setColumns([0,2]);

        var options = {
          chart: {
            title: 'District School',
            // subtitle: 'Sales, Expenses, and Profit: 2014-2017',
            },
          series: {
            0: { axis: 'distance' }
          },
          axes: {
            y: {
              distance: {label: 'No. of School'}
            }
          }
          };
        

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(view, google.charts.Bar.convertOptions(options));
        var selectHandler = function(e) {
         window.location = data.getValue(chart.getSelection()[0]['row'], 1 );
        }
        // Add our selection handler.
        google.visualization.events.addListener(chart, 'select', selectHandler);

      
      }
    </script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
   <div class="wrapper">
        <?php include('header.php');?>
        <?php include('header2.php');?>
        <?php include('sidebar.php');?>
        <nav class="main-header mt-3 ">
            <div class="card-deck d-flex justify-content-between flex-wrap bg-white report_index">
                <div class="col">
                    <div class="card-body">
                        <div id='columnchart_material' class=''></div>
            
                    </div>
                </div>
            </div>
        </nav>

        <div class="main-header">
            <h3 class="heading text-center">District School</h3>
            <div class="  table-responsive">
                <table class="table table-bordered m-2 x-overflow-scroll">
                    <thead style="background:black; color:white">
                        <tr>
                            <th scope="col">S. No.</th>
                            <th scope="col">District</th>
                            <th scope="col">Total School</th>
                            <th scope="col">Active School</th>
                            <th scope="col">Inactive School</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                            <td> 1</td>
                            <td>Angul</td>
                            <td>1500</td>
                            <td>1500</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td> 2</td>
                            <td>Cuttack</td>
                            <td>1170</td>
                            <td>1000</td>
                            <td>170</td>
                        </tr>
                        <tr>
                            <td> 3</td>
                            <td>Jujpur</td>
                            <td>600</td>
                            <td>450</td>
                            <td>150</td>
                        </tr>
                
            
                    </tbody>
            
                </table>
            </div>
        </div>
        <?php include('footer.php');?>
    </div>
</body>
</html>