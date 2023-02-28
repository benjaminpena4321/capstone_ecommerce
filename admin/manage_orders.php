<?php session_start();?>

<?php include '../partials/header.php' ?>

<body style=" background-color: #c4c4c4;" class="container-fluid">

 <?php include "partials/navigation.php"; ?>


<div class="row">
    <?php  
        require "../functions/connect.php";
        $sql = "SELECT * FROM orders";
        $result = mysqli_query($con, $sql);
        foreach ($result as $results){
            extract($results); ?>

            <div class="col-lg-12">
            <center>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Transaction Code</th>
                            <th>User Id</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <?php echo $user_id;?></td>
                            <td><?php echo $transaction_code; ?></td>
                            <td> <?php echo $id; ?> </td>
                        </tr>
                    </tbody>
                </table>
            </center>    
            </div>


            <!-- <div class="col-lg-12" style="padding:50px;  border:1px solid black;">
                <div class="card"> -->
                    <!-- <p class="card-title text-center"><?php  ?></p> -->
                <!-- </div>
            </div> -->

        <?php }
    ?>
    
</div>


















































	


</body>