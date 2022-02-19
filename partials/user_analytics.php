<?php
/* Load Analytis Here */

$user_id = $_SESSION['user_id'];


/* 1. Paid Invoices */
$query = "SELECT COUNT(*)  FROM products WHERE product_user_id = '$user_id' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($products);
$stmt->fetch();
$stmt->close();

/* 2. Upaid Invoices */
$query = "SELECT COUNT(*)  FROM orders o
INNER JOIN products p ON p.product_id = o.order_product_id 
WHERE o.order_payment_status = 'Pending' AND  p.product_user_id = '$user_id'";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($unpaid_orders);
$stmt->fetch();
$stmt->close();


/* 3. Paid Invoices */
$query = "SELECT COUNT(*)  FROM orders o
INNER JOIN products p ON p.product_id = o.order_product_id
WHERE o.order_payment_status = 'Paid' AND p.product_user_id = '$user_id' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($paid_orders);
$stmt->fetch();
$stmt->close();


/* 4. Total Orders */
$query = "SELECT COUNT(*)  FROM orders o 
INNER JOIN products p ON p.product_id = o.order_product_id
WHERE p.product_user_id = '$user_id'  ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($all_orders);
$stmt->fetch();
$stmt->close();

/* 5. Total Payments */
$query = "SELECT SUM(pay_amount)  FROM payments pa
INNER JOIN orders o ON o.order_id = pa.pay_order_id
INNER JOIN products p ON p.product_id = o.order_product_id
WHERE p.product_user_id = '$user_id'  ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($total_payments);
$stmt->fetch();
$stmt->close();
