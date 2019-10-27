<?php

require_once 'connection.php';

// This is a function for checking that if sessions exist or not
function sessionCheck()
{
    if ($_SESSION['exists'] != true) {
        header("Location: index.php");
    }
}


// This is the function of homepage that is checking the credentials and passing the system to dashboard
function authentication()
{
    global $connection;

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM admin";
        $result = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $db_email = $row['email'];
            $db_pass = $row['password'];
            $admin_name = $row['admin_name'];

            if ($email == $db_email && $password == $db_pass) {
                session_start();
                header("Location: dashboard.php");
                $_SESSION['exists'] = true;
                $_SESSION['name'] = $admin_name;
            } else if ($email == null && $password == null) {
                echo "<script> alert('Please Enter your Credentials and try again') </script>";
            } else {
                echo "<script> alert('Incorrect Password! Please Try again') </script>";
            }
        }
    }
}


// This a function to check the stock
function stock()
{
    global $connection;
    $query = "SELECT * FROM inventory";
    $result = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $pid = $row['product_id'];
        ?>
        <td class="py-1"><?php echo $row['product_id']; ?></td>
        <td class="py-1"><?php echo $row['product_name']; ?></td>
        <td class="py-1"><?php echo $row['product_quantity']." Kg"; ?></td>
        <td class="py-1"><?php echo $row['product_price'] . " Pkr"; ?></td>
        <td class="py-1"><?php echo $row['product_entry_time']; ?></td>
        <td class="py-1"><?php echo $row['product_status']; ?></td>
        <td class="py-1"> <a href="handler.php?src=delete&pid=<?php echo $pid ?>"> Delete </a> </td>
        </tr>
    <?php
        }
    }

    // This is a function to delelte a product from inventory
    function deleteproductfromstock($pid)
    {
        global $connection;
        $query = "DELETE FROM inventory where product_id = $pid";
        $result = mysqli_query($connection, $query);
        header("Location: stock.php");
    }

    // This is a function for adding stock in Inverntory
    function addStock()
    {
        global $connection;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $quantity = $_POST['quanity'];
            $price = $_POST['price'];
            $status = $_POST['status'];
            $query = "INSERT INTO inventory(product_name,product_quantity,product_price,product_status) VALUES ('$name','$quantity','$price','$status')";
            $result = mysqli_query($connection, $query);
            if ($result) {
                echo "<script> alert('Data has been Inserted in Stock Sucessfully') </script>";
            } else {
                echo "<script> alert('Data Could not be saved. Please try again') </script>";
            }
        }
    }


    // This is a function to show sales in the Sales Page
    function showSales()
    {

        global $connection;
        $query = "SELECT * FROM sales";
        $result = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
        <td class="py-1"><?php echo $row['sale_id']; ?></td>
        <td class="py-1"><?php echo $row['product_name']; ?></td>
        <td class="py-1"><?php echo $row['product_quantity']." Kg"; ?></td>
        <td class="py-1"><?php echo $row['product_price'] . " Rs"; ?></td>
        <td class="py-1"><?php echo $row['customer_name']; ?></td>
        <td class="py-1"><?php echo $row['customer_contact']; ?></td>
        <td class="py-1"><?php echo $row['customer_address']; ?></td>
        </tr>
<?php
    }
}


function purchase()
{

    global $connection;

    if (isset($_POST['submit'])) {
        $c_name = $_POST['c_name'];
        $c_contact = $_POST['c_contact'];
        $c_address = $_POST['c_address'];
        $p_name = $_POST['p_name'];
        $p_quantity = $_POST['p_quantity'];
        $p_price = $_POST['p_price'];
        $query = "INSERT INTO sales(customer_name,customer_contact,customer_address,product_name,product_quantity,product_price) VALUES ('$c_name','$c_contact','$c_address','$p_name','$p_quantity','$p_price')";
        $result = mysqli_query($connection, $query);
        if ($result) {
            echo "<script> alert('Sale has been added in Sales') </script>";
        } else {
            echo "<script> alert('Error with database. Please try again or contact the developer for any error') </script>";
        }
    }
}

