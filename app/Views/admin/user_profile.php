<body class="hold-transition sidebar-mini layout-fixed ml-2">
  <div class="wrapper">
        <?php include('header.php');?>
        <?php include('sidebar.php');?>
        <nav class="main-header mt-3 p-2" style='background:#F7F9F9;border-radius:20px;'>
            <h2 class='profile_heading'>My Profile</h2>
            <form>
                <div class="row">
                    <div class="col-sm-10 col-md-5 m-2">
                        <label>First name<span class='text-danger'>*</span></label>
                       <input type="text" class="form-control" placeholder="First name" value="<?php echo $user['first_name'] ?>" disabled>
                    </div>
                    <div class="col-sm-10 col-md-5 m-2">
                    <label>Last name<span class='text-danger'>*</span></label>
                        <input type="text" class="form-control" placeholder="Last name" value="<?php echo $user['last_name'] ?>" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10 col-md-5 m-2">
                    <label>Email<span class='text-danger'>*</span></label>
                       <input type="text" class="form-control" placeholder="Email" value="<?php echo $user['email'] ?>" disabled>
                    </div>
                    <div class="col-sm-10 col-md-5 m-2">
                    <label>Mobile<span class='text-danger'>*</span></label>
                        <input type="text" class="form-control" placeholder="Mobile" value="<?php echo $user['mobile'] ?>" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10 col-md-5 m-2">
                    <label>State<span class='text-danger'>*</span></label>
                       <input type="text" class="form-control" placeholder="State" disabled>
                    </div>
                    <div class="col-sm-10 col-md-5 m-2">
                    <label>District<span class='text-danger'>*</span></label>
                        <input type="text" class="form-control" placeholder="District" disabled>
                    </div>
                </div>
                
            </form>
            <div class='float-right mt-3'>
                  <a href='reports' class='back'><button class='btn btn-primary'>Back</button></a>
            </div>

        
        </nav>
        <?php include('footer.php');?>
    </div>
</body>