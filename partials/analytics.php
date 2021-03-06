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


$user_id = $_SESSION['user_id'];
$user_access_level = $_SESSION['user_access_level'];

if ($user_access_level == 'staff') {
    /* Load Staffs Analytics Here */

    /* 1 . Orders */
    $query = "SELECT COUNT(*)  FROM orders ";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($orders);
    $stmt->fetch();
    $stmt->close();


    /* 2 . Products */
    $query = "SELECT SUM(product_qty)  FROM products ";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($products);
    $stmt->fetch();
    $stmt->close();
    /* Avoid Posting Null Values */
    if (!empty($products)) {
        $products = $products;
    } else {
        $products = 0;
    }


    /* 3. Incomes */
    $query = "SELECT SUM(order_amount) FROM orders WHERE order_status = 'paid' ";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($paid_orders);
    $stmt->fetch();
    $stmt->close();
    /* Avoid Posting Null Values */
    if (!empty($paid_orders)) {
        $paid_orders = $paid_orders;
    } else {
        $paid_orders = 0;
    }

    /* 4. Unpaid Orders */
    $query = "SELECT SUM(order_amount) FROM orders WHERE order_status = 'pending'  AND order_type = 'purchase'";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($unpaid_orders);
    $stmt->fetch();
    $stmt->close();
    /* Avoid Posting Null Values */
    if (!empty($unpaid_orders)) {
        $unpaid_orders = $unpaid_orders;
    } else {
        $unpaid_orders = 0;
    }

    /* 5. Pending Supply Payments */
    $query = "SELECT SUM(order_amount) FROM orders WHERE order_status = 'pending'  AND order_type = 'supply'";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($supplies_orders);
    $stmt->fetch();
    $stmt->close();
    /* Avoid Posting Null Values */
    if (!empty($supplies_orders)) {
        $supplies_orders = $supplies_orders;
    } else {
        $supplies_orders = 0;
    }

    /* 6. Expenditure */
    $query = "SELECT SUM(order_amount) FROM orders WHERE order_status = 'paid'  AND order_type = 'supply'";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($expenditure);
    $stmt->fetch();
    $stmt->close();
    /* Avoid Posting Null Values */
    if (!empty($expenditure)) {
        $expenditure = $expenditure;
    } else {
        $expenditure = 0;
    }


    /* 7. Customers */
    $query = "SELECT COUNT(*)  FROM users WHERE user_access_level = 'customer' ";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($customers);
    $stmt->fetch();
    $stmt->close();

    /* 8. Suppliers */
    $query = "SELECT COUNT(*)  FROM users WHERE user_access_level = 'supplier' ";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($suppliers);
    $stmt->fetch();
    $stmt->close();

    /* 9. Revenue */
    $query = "SELECT SUM(order_amount) FROM orders WHERE order_status = 'paid'  AND order_type = 'purchase'";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($revenue);
    $stmt->fetch();
    $stmt->close();
    /* Avoid Posting Null Values */
    if (!empty($revenue)) {
        $revenue = $revenue;
    } else {
        $revenue = 0;
    }
} elseif ($user_access_level == 'customer') {
    /* Load Customer Analytics Here */
    /* 1 . Orders */
    $query = "SELECT COUNT(*)  FROM orders WHERE order_supplier_id = '$user_id' ";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($orders);
    $stmt->fetch();
    $stmt->close();

    /* 3. Incomes */
    $query = "SELECT SUM(order_amount) FROM orders WHERE order_status = 'paid' AND order_supplier_id = '$user_id' ";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($paid_orders);
    $stmt->fetch();
    $stmt->close();
    /* Avoid Posting Null Values */
    if (!empty($paid_orders)) {
        $paid_orders = $paid_orders;
    } else {
        $paid_orders = 0;
    }

    /* 4. Unpaid Orders */
    $query = "SELECT SUM(order_amount) FROM orders WHERE order_status = 'pending' AND order_supplier_id = '$user_id' ";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($unpaid_orders);
    $stmt->fetch();
    $stmt->close();
    /* Avoid Posting Null Values */
    if (!empty($unpaid_orders)) {
        $unpaid_orders = $unpaid_orders;
    } else {
        $unpaid_orders = 0;
    }
} else {
    /* Load Supplier Analytics Here */
    /* 1 . Orders */
    $query = "SELECT COUNT(*)  FROM orders WHERE order_supplier_id = '$user_id' ";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($orders);
    $stmt->fetch();
    $stmt->close();

    /* 3. Incomes */
    $query = "SELECT SUM(order_amount) FROM orders WHERE order_status = 'paid' AND order_supplier_id = '$user_id' ";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($paid_orders);
    $stmt->fetch();
    $stmt->close();
    /* Avoid Posting Null Values */
    if (!empty($paid_orders)) {
        $paid_orders = $paid_orders;
    } else {
        $paid_orders = 0;
    }

    /* 4. Unpaid Orders */
    $query = "SELECT SUM(order_amount) FROM orders WHERE order_status = 'pending' AND order_supplier_id = '$user_id' ";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $stmt->bind_result($unpaid_orders);
    $stmt->fetch();
    $stmt->close();
    /* Avoid Posting Null Values */
    if (!empty($unpaid_orders)) {
        $unpaid_orders = $unpaid_orders;
    } else {
        $unpaid_orders = 0;
    }
}
