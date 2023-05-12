<body class="hold-transition sidebar-mini layout-fixed ml-2">
  <div class="wrapper">
        <?php include('header.php');?>
        <?php include('sidebar.php');?>
        <nav class="main-header mt-3 p-2" style='background:#F7F9F9;border-radius:20px;'>
            <h2 class='profile_heading'>Change Password</h2>
            <?php if($session->get('password_change_success')!=NULL)
                             echo $session->get('password_change_success');
                             $session->remove('password_change_success');
                       ?>
            <form action='<?php echo base_url('change_password_method');?>' method='post'>
                
                <div class="row">
                    <div class="col-sm-10 col-md-5 m-2">
                    <label>Email<span class='text-danger'>*</span></label>
                       <input type="text" class="form-control" placeholder="Email" name='email' value="<?php echo $_POST['email']??'';?>" required>
                       <?php if($session->get('email_error')!=NULL)
                             echo $session->get('email_error');
                             $session->remove('email_error');
                       ?>
                    </div>
                    <div class="col-sm-10 col-md-5 m-2">
                    <label>Current Password<span class='text-danger'>*</span></label>
                        <input type="password" class="form-control" placeholder="Current Password" name='current_password' required>
                        <?php if($session->get('cur_password_error')!=NULL)
                             echo $session->get('cur_password_error');
                             $session->remove('cur_password_error');
                       ?>
                    </div>
                </div>
                <div class="row">
                <div class="col-sm-10 col-md-5 m-2">
                    <label>New Password<span class='text-danger'>*</span></label>
                        <input type="password" class="form-control" placeholder="New Password" name='new_password'  required>
                    </div>
                    <div class="col-sm-10 col-md-5 m-2">
                    <label>Confirm New Password<span class='text-danger'>*</span></label>
                        <input type="password" class="form-control" placeholder="Confirm New Password" name='confirm_new_password' required>
                        <?php if($session->get('new_password_error')!=NULL)
                             echo $session->get('new_password_error');
                             $session->remove('new_password_error');
                       ?>
                    </div>
                </div>
                <a href='#'><button class='btn btn-primary'>Change Password</button></a>
                
            </form>
            <div class='float-right mt-3'>
                  <a href='#' class='back' ><button class='btn btn-primary' onclick="history.back()">Back</button></a>
            </div>

        
        </nav>
        <?php include('footer.php');?>
    </div>
</body>