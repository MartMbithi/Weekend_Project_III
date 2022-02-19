<?php
/* Load Analytis Here */

/* 1 . Farmers */
$query = "SELECT COUNT(*)  FROM users WHERE user_access_level = 'Farmer' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($farmers);
$stmt->fetch();
$stmt->close();


/* 2. Staffs */
$query = "SELECT COUNT(*)  FROM users WHERE user_access_level = 'Admin' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($staffs);
$stmt->fetch();
$stmt->close();

/* 3. Upaid Invoices */
$query = "SELECT COUNT(*)  FROM orders WHERE order_payment_status = 'Pending' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($unpaid_orders);
$stmt->fetch();
$stmt->close();


/* 4. Paid Invoices */
$query = "SELECT COUNT(*)  FROM orders WHERE order_payment_status = 'Paid' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($paid_orders);
$stmt->fetch();
$stmt->close();


/* 5. Total Orders */
$query = "SELECT COUNT(*)  FROM orders  ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($all_orders);
$stmt->fetch();
$stmt->close();

/* 6. Total Payments */
$query = "SELECT SUM(pay_amount)  FROM payments  ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($total_payments);
$stmt->fetch();
$stmt->close();

