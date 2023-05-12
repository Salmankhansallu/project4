<?php
$work=7;
$task=['work','eat','commute','watch TV','sleep'];
$hour=[4,6,2,2,10];
$activity=array();
// $activity="[".$task[0].",".$hour[0]."]";
// echo $activity;
// for($i=0;$i<5;$i){
//     $activity[$i]="[".$task[$i].",".$hour[$i]."]";
// }
// foreach($activity as $ac@){
//   echo $ac.'<br>';
// }

 ?>
<html>
  <head>
    <style>
        
        body{
        background:rgb(236, 236, 236);
       
    }

    .report_index{
        width:95%;
        margin-left:12px;
        padding:30px 10px;
        border-radius: 20px;
    }
    </style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['school','link', 'status'],
          
          ['active', 'http://localhost/project4/district_school',   20],
          ['inactive', 'http://localhost/project4/district_school', 10]
         
        ]);
        var view = new google.visualization.DataView(data);
        view.setColumns([0, 2]);

        var options = {
          title: 'Class Activity'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(view, options);
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
<!-- <div class="card-deck d-flex justify-content-between flex-wrap bg-white report_index">
  <div class="col-md-6">
    <div class="card-body">
        <div id='piechart' class=''></div>
     
    </div>
  </div>
</div> -->
</nav>
<div class="main-header">
            <h3 class="heading text-center">Courses Data</h3>
            <div class="  table-responsive">
                <table class="table table-bordered m-2 x-overflow-scroll">
                    <thead style="background:black; color:white">
                        <tr>
                            <th scope="col">S. No.</th>
                            <th scope="col">Class</th>
                            <th scope="col">Course Title</th>
                            <!-- <th scope="col">Lesson</th> -->
                            <th scope="col">Section</th>
                            
                        </tr>
                  
                    </thead>
                    <tbody class="tbody">
                      <?php 
                      $serial=1;
                      // echo gettype($reports);
                      // echo "<pre>";
                      // print_r($reports);
                      // exit;  
                      foreach($reports as $report){
                        $datas=(array) $report; //object to array conversion
                        $report_datas=json_decode($datas['report']); //string to array conversion
                        foreach($report_datas as $report_data){
                          $data= (array) $report_data; //object to array conversion
                          // echo "<pre>";
                          // print_r($data);
                          // exit;  
                          $stringdata=json_encode($data['lesson']);
                        ?>
                          <tr>
                            <td><?php echo $serial++; ?></td>
                            <td><?php echo $data['course']; ?></td>
                            <td><?php echo $datas['title'] ?></td>
                            <td><a href='<?php echo base_url('course_section').'?id='.$data['course_id'];?>'><button class='btn btn-success'>Section</button></a></td>
                            <!-- <td><a href='<?php #echo base_url('lessons').'?id='.$stringdata.'%'.$datas['title'];?>'><button class='btn btn-success'>Lesson</button></a></td> -->
                           
                         </tr>
                      
                        <?php } }?>
                
            
                    </tbody>
            
                </table>
            </div>
        </div>
<?php include('footer.php');?>
   </div>
</body>
</html>

