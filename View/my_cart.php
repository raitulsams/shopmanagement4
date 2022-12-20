<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <style>
        form {
            display: inline;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Item Name</th>
                <th>Item Price</th>
                <th>Quantity</th>
                <th>Remove</th>
            </tr>
        </thead>
    </table>
    <?php
    $total = 0;
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            $total = $total + $value['Price'];
            echo "
            <tr>
                <td>$value[ID]</td>
                <td>$value[Item_Name]</td>
                <td>$value[Price]</td>
                <td><input type='number' value='$value[Quantity]' min='1' max='10'></td>                
                <td style='display:inline'>
                <form action='cart.php' method='POST' >
                    <button name='remove_item'>Remove</button>
                    <input type='hidden' name = 'id' value='$value[ID]'>
                </form></td>
            </tr> <br>";
        }
    }

    ?>

    <div>
        <h3>Total: <?php echo "$total" ?></h3>
    </div>


</body>

</html>