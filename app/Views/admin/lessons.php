
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
<?php include('header.php');?>
<?php include('header2.php');?>
<?php include('sidebar.php');?>

<div class="main-header">
    <div class='course m-2 bg-dark p-2 rounded'>
        <h5>
            <a href='<?php echo base_url('reports');?>'>Course/</a>
            <?php 
            echo $lesson_data[0]['course_title'];
            ?>
        </h5>
    </div>
            <h3 class="heading text-center">Lesson Data</h3>
            <?php if($lesson_data==NULL)
                        echo "<div class='text-center'><h3>No Record Found..!</h3></div>";
                        else{ ?>

            <div class="  table-responsive">
                <table class="table table-bordered m-2 x-overflow-scroll">
                    <thead style="background:black; color:white">
                        <tr>
                            <th scope="col">S. No.</th>
                            <th scope="col">Lesson Name</th>
                            <!-- <th scope="col">Title</th> -->
                            <th scope="col">Start Time</th>
                            <th scope="col">End Time</th>
                            
                        </tr>
                       
                  
                    </thead>
                    <tbody class="tbody">
                        <?php  
                        // echo $_GET['id'];
                        
                        // echo '<pre>';
                        // print_r($lesson_data);
                        // exit;
                        $serial=1;
                        foreach($lesson_data as $lessons){ 
                            $session=session();
                            $session->set('course_title',$lessons['course_title']);
                            
                            foreach($lessons['lesson'] as $lesson){
                                
                                
                                ?>
                                <tr>
                                    <td><?php echo $serial++; ?></td>
                                    <td><?php echo $lesson->title ?></td>
                                    <td><?php echo $lessons['at_time'] ?></td>
                                    <td><?php echo $lessons['end_time']; ?></td>
                                </tr>
                      
                        <?php }}?>
            
                    </tbody>
            
                </table>
            </div>
            <?php }?>
        </div>
<?php include('footer.php');?>
   </div>
</body>