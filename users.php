<!DOCTYPE html>
<html>
<head>
    <title>userinfo</title>
    <?php include 'connection.php' ?>
    <?php include 'links.php'?>
    <?php include 'navbar.php'?>

    <link rel="stylesheet" href="CSS/users.css">

</head>

<body style="background-color:powderblue;">
        <?php
            include 'connection.php';
            $sql = "SELECT * FROM customers";
            $result = mysqli_query($con,$sql);
        ?>
    <div class="main-div" >
        <h1 style="color:#17a2b8;">List of all Customers</h1>
            <div class="center-div">
                <div class="table-responsive" >
                        <table class="table-hover" >
                        <thead >
                            <tr>
                            <th style="color:#0d1128;"> Si No. </th>
                            <th style="color:#0d1128;">Customer Name </th>
                            <th style="color:#0d1128;"> Email </th>
                            <th style="color:#0d1128;"> Balance </th>
                            <th style="color:#0d1128;"> Start Transaction </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            while($rows=mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                                <td><?php echo $rows['id'] ?></td>
                                <td><?php echo $rows['name']?></td>
                                <td><?php echo $rows['email']?></span></td>
                                <td><?php echo $rows['balance']?></td>
                                <td><a href="transfer.php?id= <?php echo $rows['id'] ;?>"> <i class=" fa fa-2x fa-exchange" aria-hidden="true"> </i> </a></td> 
                            </tr>
                            <?php
                                }
                            ?>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
</body>
</html>