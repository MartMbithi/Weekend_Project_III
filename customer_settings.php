<?php
/*
 * Created on Mon Feb 21 2022
 *
 *  Devlan Agency - devlan.co.ke 
 *
 * hello@devlan.co.ke
 *
 *
 * The Devlan End User License Agreement
 *
 * Copyright (c) 2022 Devlan Agency
 *
 * 1. GRANT OF LICENSE
 * Devlan Agency hereby grants to you (an individual) the revocable, personal, non-exclusive, and nontransferable right to
 * install and activate this system on two separated computers solely for your personal and non-commercial use,
 * unless you have purchased a commercial license from Devlan Agency. Sharing this Software with other individuals, 
 * or allowing other individuals to view the contents of this Software, is in violation of this license.
 * You may not make the Software available on a network, or in any way provide the Software to multiple users
 * unless you have first purchased at least a multi-user license from Devlan Agency.
 *
 * 2. COPYRIGHT 
 * The Software is owned by Devlan Agency and protected by copyright law and international copyright treaties. 
 * You may not remove or conceal any proprietary notices, labels or marks from the Software.
 *
 * 3. RESTRICTIONS ON USE
 * You may not, and you may not permit others to
 * (a) reverse engineer, decompile, decode, decrypt, disassemble, or in any way derive source code from, the Software;
 * (b) modify, distribute, or create derivative works of the Software;
 * (c) copy (other than one back-up copy), distribute, publicly display, transmit, sell, rent, lease or 
 * otherwise exploit the Software.  
 *
 * 4. TERM
 * This License is effective until terminated. 
 * You may terminate it at any time by destroying the Software, together with all copies thereof.
 * This License will also terminate if you fail to comply with any term or condition of this Agreement.
 * Upon such termination, you agree to destroy the Software, together with all copies thereof.
 *
 * 5. NO OTHER WARRANTIES. 
 * DEVLAN AGENCY  DOES NOT WARRANT THAT THE SOFTWARE IS ERROR FREE. 
 * DEVLAN AGENCY SOFTWARE DISCLAIMS ALL OTHER WARRANTIES WITH RESPECT TO THE SOFTWARE, 
 * EITHER EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO IMPLIED WARRANTIES OF MERCHANTABILITY, 
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT OF THIRD PARTY RIGHTS. 
 * SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF IMPLIED WARRANTIES OR LIMITATIONS
 * ON HOW LONG AN IMPLIED WARRANTY MAY LAST, OR THE EXCLUSION OR LIMITATION OF 
 * INCIDENTAL OR CONSEQUENTIAL DAMAGES,
 * SO THE ABOVE LIMITATIONS OR EXCLUSIONS MAY NOT APPLY TO YOU. 
 * THIS WARRANTY GIVES YOU SPECIFIC LEGAL RIGHTS AND YOU MAY ALSO 
 * HAVE OTHER RIGHTS WHICH VARY FROM JURISDICTION TO JURISDICTION.
 *
 * 6. SEVERABILITY
 * In the event of invalidity of any provision of this license, the parties agree that such invalidity shall not
 * affect the validity of the remaining portions of this license.
 *
 * 7. NO LIABILITY FOR CONSEQUENTIAL DAMAGES IN NO EVENT SHALL DEVLAN AGENCY  OR ITS SUPPLIERS BE LIABLE TO YOU FOR ANY
 * CONSEQUENTIAL, SPECIAL, INCIDENTAL OR INDIRECT DAMAGES OF ANY KIND ARISING OUT OF THE DELIVERY, PERFORMANCE OR 
 * USE OF THE SOFTWARE, EVEN IF DEVLAN HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES
 * IN NO EVENT WILL DEVLAN  LIABILITY FOR ANY CLAIM, WHETHER IN CONTRACT 
 * TORT OR ANY OTHER THEORY OF LIABILITY, EXCEED THE LICENSE FEE PAID BY YOU, IF ANY.
 */

session_start();
require_once 'config/config.php';
require_once 'config/codeGen.php';
/* Update User Profile */
if (isset($_POST['update_profile'])) {
    $user_id = $_SESSION['user_id'];
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_phone_no = $_POST['user_phone_no'];

    /* Persist */
    $sql = "UPDATE users SET user_name =?, user_email =?, user_phone_no =? WHERE user_id =?";
    $prepare = $mysqli->prepare($sql);
    $bind = $prepare->bind_param(
        'ssss',
        $user_name,
        $user_email,
        $user_phone_no,
        $user_id
    );
    $prepare->execute();
    if ($prepare) {
        $success = "Profile Updated";
    } else {
        $err = "Failed!, Please Try Again";
    }
}

/* Change Password */
if (isset($_POST['change_password'])) {
    $user_id = $_SESSION['user_id'];
    $old_password = sha1(md5($_POST['old_password']));
    $new_password = sha1(md5($_POST['new_password']));
    $confirm_password = sha1(md5($_POST['confirm_password']));

    /* Check If Old Password  Match  */
    $sql = "SELECT * FROM  users WHERE user_id = '$user_id'";
    $res = mysqli_query($mysqli, $sql);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        if ($old_password != $row['user_password']) {
            $err =  "Please Enter Correct Old Password";
        } elseif ($new_password != $confirm_password) {
            $err = "Confirmation Password Does Not Match";
        } else {
            $new_password  = sha1(md5($_POST['new_password']));
            $query = "UPDATE users SET  user_password =? WHERE user_id =?";
            $stmt = $mysqli->prepare($query);
            $rc = $stmt->bind_param('ss', $new_password, $id);
            $stmt->execute();
            if ($stmt) {
                $success = "Password Updated";
            } else {
                $err = "Please Try Again Or Try Later";
            }
        }
    }
}

/* Load Header Partial */
require_once('partials/head.php');
?>

<body>

    <!-- Navigation Bar-->
    <?php require_once('partials/navbar.php'); ?>
    <!-- End Navigation Bar-->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="wrapper">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title"><?php echo $_SESSION['user_name']; ?> Profile Settings</h4>
                    </div>
                </div>
            </div>
            <?php
            /* Wrap With Logged In User Session */
            $user_id = $_SESSION['user_id'];
            $ret = "SELECT * FROM users
            WHERE user_id = '$user_id'";
            $stmt = $mysqli->prepare($ret);
            $stmt->execute(); //ok
            $res = $stmt->get_result();
            while ($user = $res->fetch_object()) {
            ?>

                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-20">Personal Info</h4>
                            <form method="post" enctype="multipart/form-data" role="form">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="">Name</label>
                                        <input type="text" required value="<?php echo $user->user_name; ?>" name="user_name" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Email</label>
                                        <input type="text" value="<?php echo $user->user_email; ?>" required name="user_email" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Phone Number</label>
                                        <input type="text" value="<?php echo $user->user_phone_no; ?>" required name="user_phone_no" class="form-control">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" name="update_profile" class="btn btn-primary">Update Profile</button>
                                </div>
                            </form>
                        </div>
                    </div><!-- end col-->
                    <div class="col-lg-6 col-xl-6">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-20">Change Password</h4>
                            <form method="post" enctype="multipart/form-data" role="form">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="">Old Password</label>
                                        <input type="password" required name="old_password" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">New Password</label>
                                        <input type="password" required name="new_password" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Confirm New Pasword</label>
                                        <input type="password" required name="confirm_password" class="form-control">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" name="change_password" class="btn btn-primary">Change Password</button>
                                </div>
                            </form>
                        </div>
                    </div><!-- end col-->
                </div>
            <?php } ?>
            <!-- end row -->
        </div> <!-- container -->

        <!-- Footer -->
        <?php require_once('partials/footer.php'); ?>
        <!-- End Footer -->

    </div> <!-- End wrapper -->

    <?php require_once('partials/scripts.php'); ?>

</body>

</html>