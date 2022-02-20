<?php
/*
 * Created on Sat Feb 19 2022
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
/* Add Staff */
if (isset($_POST['add_staff'])) {
    $user_name  = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_phone_no = $_POST['user_phone_no'];
    $user_access_level = 'customer';

    /* Check If They Match */
    $sql = "SELECT * FROM  users  
    WHERE user_phone_no = '$user_phone_no' || user_email = '$user_email'";
    $res = mysqli_query($mysqli, $sql);
    if (mysqli_num_rows($res) > 0) {
        $users = mysqli_fetch_assoc($res);
        if ($users['user_phone_no'] == $user_phone_no || $users['user_email'] == $user_email) {
            $err = "Email Or Phone Number Already Exists";
        }
    } else {
        /* Persist */
        $sql = "INSERT INTO users(user_name, user_email, user_phone_no, user_access_level) VALUES(?,?,?,?)";
        $prepare = $mysqli->prepare($sql);
        $bind = $prepare->bind_param(
            'ssss',
            $user_name,
            $user_email,
            $user_phone_no,
            $user_access_level
        );
        $prepare->execute();
        if ($prepare) {
            $success = "$user_name Account Created";
        } else {
            $err = "Failed!, Please Try Again";
        }
    }
}

/* Update Staff */
if (isset($_POST['update_staff'])) {
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_id = $_POST['user_id'];
    $user_phone_no = $_POST['user_phone_no'];

    /* Persist */
    $sql = "UPDATE users SET user_name =?, user_email =?, user_phone_no =? WHERE user_id =?";
    $prepare = $mysqli->prepare($sql);
    $bind = $prepare->bind_param(
        'ssss',
        $suer_name,
        $user_email,
        $user_phone_no,
        $user_id
    );
    $prepare->execute();
    if ($prepare) {
        $success = "$user_name Account Updated";
    } else {
        $err = "Failed!, Please Try Again";
    }
}

/* Delete Staff */
if (isset($_POST['delete_staff'])) {
    $user_id = $_POST['user_id'];

    /* Persist */
    $sql = "DELETE FROM users WHERE user_id = ?";
    $prepare = $mysqli->prepare($sql);
    $bind = $prepare->bind_param('s', $user_id);
    $prepare->execute();
    if ($prepare) {
        $success = "Customer Account Deleted";
    } else {
        $err = "Failed!, Please Try Again";
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
                        <div class="btn-group float-right m-t-15">
                            <button type="button" data-toggle="modal" data-target="#add_modal" class="btn btn-primary"> Register New Customer</button>
                        </div>
                        <h4 class="page-title">Customers</h4>
                    </div>
                </div>
            </div>
            <!-- Add User MOdal -->
            <!-- Add Modal -->
            <div class="modal fade fixed-right" id="add_modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog  modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header align-items-center">
                            <div class="modal-title">
                                <h6 class="mb-0">Register New Customer</h6>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" enctype="multipart/form-data" role="form">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="">Full Name</label>
                                        <input type="text" required name="user_name" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Phone Number</label>
                                        <input type="text" required name="user_phone_no" class="form-control" id="exampleInputEmail1">
                                    </div>
                                   <!--  <div class="form-group col-md-4">
                                        <label for="">Password</label>
                                        <input type="password" required name="user_password" class="form-control" id="exampleInputEmail1">
                                    </div> -->
                                    <div class="form-group col-md-6">
                                        <label for="">Email Address</label>
                                        <input type="text" name="user_email" class="form-control" id="exampleInputEmail1">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" name="add_staff" class="btn btn-primary">Register Customer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="card-box">
                        <table id="dt" class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone No</th>
                                    <th>Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $ret = "SELECT * FROM users WHERE user_access_level = 'customer'";
                                $stmt = $mysqli->prepare($ret);
                                $stmt->execute(); //ok
                                $res = $stmt->get_result();
                                while ($staff = $res->fetch_object()) {
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $staff->user_name; ?>
                                        </td>
                                        <td>
                                            <?php echo $staff->user_email; ?>
                                        </td>
                                        <td>
                                            <?php echo $staff->user_phone_no; ?>
                                        </td>
                                        <td>
                                            <a data-toggle="modal" href="#update_<?php echo $staff->user_id; ?>" class="badge badge-primary"><i class="fa fa-edit"></i> Edit</a>
                                            <a data-toggle="modal" href="#delete_<?php echo $staff->user_id; ?>" class="badge badge-danger"><i class="fa fa-trash"></i> Delete</a>
                                        </td>
                                        <!-- Update Modal -->
                                        <div class="modal fade fixed-right" id="update_<?php echo $staff->user_id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog  modal-xl" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header align-items-center">
                                                        <div class="modal-title">
                                                            <h6 class="mb-0">Update <?php echo $staff->user_name; ?></h6>
                                                        </div>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" enctype="multipart/form-data" role="form">
                                                            <div class="row">
                                                                <div class="form-group col-md-12">
                                                                    <label for="">Full Name</label>
                                                                    <input type="text" required name="user_name" value="<?php echo $staff->user_name; ?>" class="form-control" id="exampleInputEmail1">
                                                                    <input type="hidden" required name="user_id" value="<?php echo $staff->user_id; ?>" class="form-control" id="exampleInputEmail1">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="">Phone Number</label>
                                                                    <input type="text" required name="user_phone_no" value="<?php echo $staff->user_phone_no; ?>" class="form-control" id="exampleInputEmail1">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="">Email Address</label>
                                                                    <input type="text" name="user_email" value="<?php echo $staff->user_email; ?>" class="form-control" id="exampleInputEmail1">
                                                                </div>
                                                            </div>
                                                            <div class="text-right">
                                                                <button type="submit" name="update_staff" class="btn btn-primary">Update Customer</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal -->

                                        <!-- Delete Modal -->
                                        <div class="modal fade" id="delete_<?php echo $staff->user_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">CONFIRM DELETE</h5>
                                                        <button type="button" class="close" data-dismiss="modal">
                                                            <span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <form method="POST">
                                                        <div class="modal-body text-center text-danger">
                                                            <h4>Delete <?php echo $staff->user_name; ?> </h4>
                                                            <br>
                                                            <!-- Hide This -->
                                                            <input type="hidden" name="user_id" value="<?php echo $staff->user_id; ?>">
                                                            <button type="button" class="text-center btn btn-success" data-dismiss="modal">No</button>
                                                            <input type="submit" name="delete_staff" value="Delete" class="text-center btn btn-danger">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal -->
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div><!-- end col-->
            </div>
            <!-- end row -->
        </div> <!-- container -->


        <!-- Footer -->
        <?php require_once('partials/footer.php'); ?>
        <!-- End Footer -->

    </div> <!-- End wrapper -->


    <?php require_once('partials/scripts.php'); ?>

</body>

</html>