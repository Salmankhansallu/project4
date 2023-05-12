
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
<?php include('header.php');?>
<?php include('header2.php');?>
<?php include('sidebar.php');?>

<div class="main-header">
    
            <h3 class="heading text-center">Section Data</h3>
            

            <div class="  table-responsive">
                <table class="table table-bordered m-2 x-overflow-scroll">
                    <thead style="background:black; color:white">
                        <tr>
                            <th scope="col">S. No.</th>
                            <th scope="col">Section Name</th>
                            <th scope="col">Lesson</th>
                            
                        </tr>
                       
                  
                    </thead>
                    <tbody class="tbody">
                        <?php 
                        // echo "<pre>";
                        // print_r($section_detail);
                        $serial=1;
                        foreach($section_detail as $section){
                            ?>
                            <tr>
                                <td><?php echo $serial++;?></td>
                                <td><?php echo $section->title;?></td>
                                <td><a href='<?php echo base_url('lessons').'?ids='.$section->id.'%'.$section->course_id;?>'><button class='btn btn-success'>Lesson</button></a></td>
                            </tr>
                       
                       <?php }?>
                    </tbody>
            
                </table>
            </div>
        
        </div>
<?php include('footer.php');?>
   </div>
</body>