<?php
/*
 * Created on Sun Feb 20 2022
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

/* Add Order */
if (isset($_POST['add_order'])) {
    $order_number = $b . $a;
    $order_supplier_id = $_SESSION['user_id'];
    $order_qty = $_POST['order_qty'];
    $order_product_id = $_POST['order_product_id'];
    $order_date = date('d M Y');
    $order_status = 'pending';
    $order_type = 'supply';

    /* Get The Order Product */
    $sql = "SELECT * FROM  products WHERE product_id = '$order_product_id'";
    $res = mysqli_query($mysqli, $sql);
    if (mysqli_num_rows($res) > 0) {
        $product = mysqli_fetch_assoc($res); {
            $order_payable_price = $product['product_price'] * $order_qty;
            /* Persist */
            $sql = "INSERT INTO orders (order_number, order_supplier_id, order_qty, order_amount, order_product_id, order_date, order_status, order_type)
            VALUES(?,?,?,?,?,?,?,?)";
            $prepare = $mysqli->prepare($sql);
            $bind = $prepare->bind_param(
                'ssssssss',
                $order_number,
                $order_supplier_id,
                $order_qty,
                $order_payable_price,
                $order_product_id,
                $order_date,
                $order_status,
                $order_type
            );
            $prepare->execute();
            if ($prepare) {
                $success = "Supply Order # $order_number Posted";
            } else {
                $err = "Failed!, Please Try Again Later";
            }
        }
    } else {
        $err = "Product Does Not Exist";
    }
}

/* Update Order */
if (isset($_POST['update_order'])) {
    $order_number = $_POST['order_number'];
    $order_qty = $_POST['order_qty'];
    $order_date = date('d M Y');
    $order_product_id = $_POST['order_product_id'];

    $sql = "SELECT * FROM  products WHERE product_id = '$order_product_id'";
    $res = mysqli_query($mysqli, $sql);
    if (mysqli_num_rows($res) > 0) {
        $product = mysqli_fetch_assoc($res); {
            $order_payable_price = $product['product_price'] * $order_qty;

            /* Persist */
            $sql = "UPDATE orders SET order_qty=?, order_amount =?, order_date =? WHERE order_number =?";
            $prepare = $mysqli->prepare($sql);
            $bind = $prepare->bind_param(
                'ssss',
                $order_qty,
                $order_payable_price,
                $order_date,
                $order_number
            );
            $prepare->execute();
            if ($prepare) {
                $success = "Supply Order # $order_number Updated";
            } else {
                $err = "Failed!, Please Try Again Later";
            }
        }
    } else {
        $err = "Product Does Not Exist";
    }
}

/* Delete Order */
if (isset($_POST['delete_order'])) {
    $order_id = $_POST['order_id'];

    /* Delete */
    $sql = "DELETE FROM orders WHERE order_id =?";
    $prepare = $mysqli->prepare($sql);
    $bind = $prepare->bind_param('s', $order_id);
    $prepare->execute();
    if ($prepare) {
        $success = "Order Cancelled";
    } else {
        $err = "Failed!, Please Try Again Later";
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
                            <button type="button" data-toggle="modal" data-target="#add_modal" class="btn btn-primary"> Make Supply Order Request</button>
                        </div>
                        <h4 class="page-title">Poultry Farm Products Supply Orders Requests</h4>
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
                                <h6 class="mb-0">Register New Product Order</h6>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" enctype="multipart/form-data" role="form">
                                <div class="row">
                                    <div class="form-group col-md-8">
                                        <label for="">Product Details</label>
                                        <select type="text" required name="order_product_id" class="form-control" id="exampleInputEmail1">
                                            <option>Select Product</option>
                                            <?php
                                            $ret = "SELECT * FROM products 
                                            ORDER BY product_name ASC ";
                                            $stmt = $mysqli->prepare($ret);
                                            $stmt->execute(); //ok
                                            $res = $stmt->get_result();
                                            while ($products = $res->fetch_object()) {
                                            ?>
                                                <option value="<?php echo $products->product_id; ?>"><?php echo $products->product_code . ' ' . $products->product_name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Order Qty</label>
                                        <input type="number" required name="order_qty" class="form-control" id="exampleInputEmail1">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" name="add_order" class="btn btn-primary">Register New Order Request</button>
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
                                    <th>Order Number</th>
                                    <th>Product</th>
                                    <th>Qty Ordered</th>
                                    <th>Date Posted</th>
                                    <th>Cost</th>
                                    <th>Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $user_id = $_SESSION['user_id'];
                                $ret = "SELECT * FROM orders o
                                INNER JOIN products p ON p.product_id = o.order_product_id
                                INNER JOIN users u ON u.user_id = o.order_supplier_id
                                WHERE order_type = 'supply' AND order_supplier_id = '$user_id'";
                                $stmt = $mysqli->prepare($ret);
                                $stmt->execute(); //ok
                                $res = $stmt->get_result();
                                while ($orders = $res->fetch_object()) {
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $orders->order_number; ?> <br>
                                            <?php if ($orders->order_status == 'paid') { ?>
                                                <span class="badge badge-success"><i class="fa fa-check"></i> Paid</span>
                                            <?php } else { ?>
                                                <span class="badge badge-danger">Pending</span>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php echo $orders->product_code . ' ' . $orders->product_name; ?>
                                        </td>
                                        <td>
                                            <?php echo $orders->order_qty; ?>
                                        </td>
                                        <td>
                                            <?php echo $orders->order_date; ?>
                                        </td>
                                        <td>
                                            Ksh <?php echo number_format($orders->order_amount, 2); ?>
                                        </td>
                                        <td>
                                            <?php if ($orders->order_status != 'paid') { ?>
                                                <a data-toggle="modal" href="#update_<?php echo $orders->order_id; ?>" class="badge badge-primary"><i class="fa fa-edit"></i> Edit</a>
                                            <?php } ?>
                                            <a data-toggle="modal" href="#delete_<?php echo $orders->order_id; ?>" class="badge badge-danger"><i class="fa fa-trash"></i> Cancel</a>
                                        </td>
                                        <!-- Update Modal -->
                                        <div class="modal fade fixed-right" id="update_<?php echo $orders->order_id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog  modal-xl" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header align-items-center">
                                                        <div class="modal-title">
                                                            <h6 class="mb-0">Update Order # <?php echo $orders->order_number; ?></h6>
                                                        </div>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" enctype="multipart/form-data" role="form">
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="">Order Product</label>
                                                                    <input type="text" readonly value="<?php echo $orders->product_code . ' ' . $orders->product_name; ?>" required class="form-control" id="exampleInputEmail1">
                                                                    <input type="hidden" readonly value="<?php echo $orders->order_product_id; ?>" required name="order_product_id" class="form-control" id="exampleInputEmail1">
                                                                    <input type="hidden" readonly value="<?php echo $orders->order_number; ?>" required name="order_number" class="form-control" id="exampleInputEmail1">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="">Order Qty</label>
                                                                    <input type="number" value="<?php echo $orders->order_qty; ?>" required name="order_qty" class="form-control" id="exampleInputEmail1">
                                                                </div>
                                                            </div>
                                                            <div class="text-right">
                                                                <button type="submit" name="update_order" class="btn btn-primary">Update Order</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal -->

                                        <!-- Delete Modal -->
                                        <div class="modal fade" id="delete_<?php echo $orders->order_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">CONFIRM CANCELLATION</h5>
                                                        <button type="button" class="close" data-dismiss="modal">
                                                            <span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <form method="POST">
                                                        <div class="modal-body text-center text-danger">
                                                            <h4>Cancel Order # <?php echo $orders->order_number; ?> </h4>
                                                            <br>
                                                            <!-- Hide This -->
                                                            <input type="hidden" name="order_id" value="<?php echo $orders->order_id; ?>">
                                                            <button type="button" class="text-center btn btn-success" data-dismiss="modal">No</button>
                                                            <input type="submit" name="delete_order" value="Cancel Order" class="text-center btn btn-danger">
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