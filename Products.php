<?php
session_start(); // Ensure session is started before any output
require_once 'Conn.php';
$connect = mysqli_connect($servername, $username, $password, $db_name);

// Check if $_POST["add_to_cart"] is set and perform the necessary actions
if(isset($_POST["add_to_cart"]))  
{  
    if(isset($_SESSION["shopping_cart"]))  
    {  
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
        if(!in_array($_POST["product_id"], $item_array_id))  
        {  
            $count = count($_SESSION["shopping_cart"]);  
            $item_array = array(  
                'item_id'       => $_POST["product_id"],  
                'item_name'     => $_POST["hidden_name"],  
                'item_price'    => $_POST["hidden_price"],  
                'item_quantity' => $_POST["quantity"]  
            );  
            $_SESSION["shopping_cart"][$count] = $item_array;  
        }  
        else  
        {  
            echo '<script>alert("Item Already Added")</script>';  
        }  
    }  
    else  
    {  
        $_SESSION["shopping_cart"] = array(); // Initialize shopping cart as an array

        $item_array = array(  
            'item_id'       => $_POST["product_id"],  
            'item_name'     => $_POST["hidden_name"],  
            'item_price'    => $_POST["hidden_price"],  
            'item_quantity' => $_POST["quantity"]  
        );  
        $_SESSION["shopping_cart"][0] = $item_array;  
    }  
}  

// Check if $_GET["action"] is set and perform the necessary actions
if (isset($_GET["action"]) && $_GET["action"] == "delete") {
    if (isset($_SESSION["shopping_cart"]) && is_array($_SESSION["shopping_cart"])) {
        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
            if ($values["item_id"] == $_GET["id"]) {
                unset($_SESSION["shopping_cart"][$keys]);
             
            }
        }
    } else {
        echo '<script>window.location="Products.php"</script>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Product Page</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <link rel="stylesheet" href="css/productPage.css">
  <link rel="icon" href="images/logo.jpeg" type="image/gif">
</head>
<body>
<?php
$sql = "SELECT * FROM products";
$result = mysqli_query($connect, $sql); 
$path = "images/";
if(mysqli_num_rows($result) > 0)  
{  
    while($row = mysqli_fetch_array($result)) {
        ?>
        <div class="card">
            <form method="post" action="Products.php?action=add&id=<?php echo $row["P_ID"]; ?>"> 
                <img class="productImg" style="width:100%;height:250px" src="<?php echo $path.$row["P_IMAGE"] ?>"><br>  
                <h1 class="pName"><?php echo $row["P_NAME"] ?></h1>
                <p class="price"> <?php echo $row["P_PRICE"] ?> JD </p>
                <input type="number" name="quantity" class="form-control" value="1" min="0" max="20" />
                <input type="hidden" name="product_id" value="<?php echo $row["P_ID"]; ?>" />
                <input type="hidden" name="hidden_name" value="<?php echo $row["P_NAME"]; ?>" />  
                <input type="hidden" name="hidden_price" value="<?php echo $row["P_PRICE"]; ?>" />  
                <input type="submit" name="add_to_cart" class="addToCart" value="Add to Cart" /> 
            </form>
        </div>
        <?php
    }
}
?>

<hr>

<div style="clear:both"></div>  
<br />  
<h3>Order Details</h3>  
<div class="table-responsive">  
    <div class="cart">
        <table class="table table-bordered">  
            <tr>  
                <th width="40%">Item Name</th>  
                <th width="10%">Quantity</th>  
                <th width="20%">Price</th>  
                <th width="15%">Total</th>  
                <th width="5%">Remove</th>  
            </tr>  
            <?php   
            if(!empty($_SESSION["shopping_cart"]))  
            {  
                $total = 0;  
                foreach($_SESSION["shopping_cart"] as $cart_item)  
                {  
                    ?>  
                    <tr>  
                        <td><?php echo $cart_item["item_name"]; ?></td>  
                        <td><?php echo $cart_item["item_quantity"]; ?></td>  
                        <td>$ <?php echo $cart_item["item_price"]; ?></td>  
                        <td>$ <?php echo number_format($cart_item["item_quantity"] * $cart_item["item_price"], 2); ?></td>  
                        <td>
                            <a href="Products.php?action=delete&id=<?php echo $cart_item["item_id"]; ?>"><span class="text-danger">Remove</span></a>
                        </td>  
                    </tr>  
                    <?php  
                    $total += ($cart_item["item_quantity"] * $cart_item["item_price"]);  
                }  
                ?>  
                <tr>  
                    <td colspan="3" align="right">Total</td>  
                    <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                    <td></td>  
                </tr>  
                <?php  
            }  
            else  
            {  
                ?>  
                <tr>  
                    <td colspan="5" align="center">No items in the cart</td>  
                </tr>  
                <?php  
            }  
            ?>  
        </table>  
    </div>    
</div>  

<hr>

<script src="../project/js/HomePage.js"></script> 
<script src="../project/js/jquery-min.js"></script>
<script src="../project/js/cart.js"></script>
<p><button onclick="load()">Go to Home page</button></p>
</body>
</html> 
