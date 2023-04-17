<?php
require('config.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badua Product Listing</title>
</head>
<body class="m-3">
<div class="container p-3">
    <h1>
        Badua Product Listling
    </h1>
    <div class="container p-3 bg-secondary text-light">
        <form action="add.php" method="post" class="container " >
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Product name</label>
                    <input name="product_name" class="form-control" type="text">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Price</label>
                    <input name="price" class="form-control" type="text">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Brand</label>
                    <input name="brand" class="form-control" type="text">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Supplier</label>
                    <input name="supplier" class="form-control" type="text">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Category</label>
                    <select name="category" class="form-control">
                    <option value="">Select Category...</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Manufacturer</label>
                    <input name="manufacturer" class="form-control" type="text">
                </div>
            </div>
            <div class="form-row">
            <label for="">Description</label>
                    <input style="height:100px" name="description" class="form-control" type="text">
            </div>
            <div class="form-row pt-3">
                <div class="form-group col-md-4">
                    <label for="">Quantity</label>
                    <input name="quantity" class="form-control" type="number" min="0">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Weight</label>
                    <input name="weight" class="form-control" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="3">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Date of Arrival</label>
                    <input name="arrival" class="form-control" type="date">
                </div>
            </div>
            
            <!-- Button Add -->
            <div class="form-row pt-3 justify-content-end"> 
                    <input class="btn btn-primary" type="submit" value="Add Product">
            </div>
            </form>
               
    </div>
            
</div>
    <div>
            <div class="container table table-responsive mt-3" style="max-height: 400px;" >
            <?php
                $conn = mysqli_connect($servername, $username, $password, $dbname);           
                // Execute SQL query to retrieve data from database
                $sql = "SELECT * FROM products";
                $result = mysqli_query($conn, $sql);

                // Display data in table
               

                            ?>
                            <table class="table-light table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Brand</th>
                <th>Supplier</th>
                <th>Category</th>
                <th>Manufacturer</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Weight</th>
                <th>Arrival</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop through the result and output the data in each row of the table
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['product_name']."</td>";
                echo "<td>".$row['price']."</td>";
                echo "<td>".$row['brand']."</td>";
                echo "<td>".$row['supplier']."</td>";
                echo "<td>".$row['category']."</td>";
                echo "<td>".$row['manufacturer']."</td>";
                echo "<td>".$row['description']."</td>";
                echo "<td>".$row['quantity']."</td>";
                echo "<td>".$row['weight']."</td>";
                echo "<td>".$row['arrival']."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
            </div>
    </div>
</body>
</html>