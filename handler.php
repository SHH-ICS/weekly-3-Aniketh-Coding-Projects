<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pizza Order Summary</title>
</head>

<body>

  <h2>Order Summary</h2>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $size = $_POST['size'];
    $toppings = $_POST['toppings'];

    $sizeCost = $size == "large" ? 6.00 : 10.00;
    $toppingCost = 0.00;

    switch ($toppings) {
      case "1":
        $toppingCost = 1.00;
        break;
      case "2":
        $toppingCost = 1.75;
        break;
      case "3":
        $toppingCost = 2.50;
        break;
      case "4":
        $toppingCost = 3.35;
        break;
    }

    $subtotal = $sizeCost + $toppingCost;
    $tax = $subtotal * 0.13;
    $total = $subtotal + $tax;

    echo "<p>Size: " . ucfirst($size) . " - $" . number_format($sizeCost, 2) . "</p>";
    echo "<p>Toppings: " . $toppings . " - $" . number_format($toppingCost, 2) . "</p>";
    echo "<p>Subtotal: $" . number_format($subtotal, 2) . "</p>";
    echo "<p>Tax (13% HST): $" . number_format($tax, 2) . "</p>";
    echo "<p>Total Cost: $" . number_format($total, 2) . "</p>";
  } else {
    echo "<p>Error: No order submitted. Please go back to the <a href='index.html'>order form</a>.</p>";
  }
  ?>

</body>

</html>