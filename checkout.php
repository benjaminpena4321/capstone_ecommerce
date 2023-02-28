<?php session_start();?>

    <?php include 'partials/header.php' ?>

    <body style=" background-color: #c4c4c4;">
    
     <?php include 'partials/navigation.php' ?> 


<?php 

if(isset($_SESSION['cart']) && isset($_SESSION['user'])){
    
}else {

}

?>


<div class="row">
    <div class ="col-lg-12">
        <center>
            <h1>Checkout</h1>

            <form action="functions/checkout_endpoint.php" method="post">
                <label for=""> Enter your address:</label> <br>
                <textarea name="address" id="" cols="30" rows="5" required></textarea> <br>
                <select name="payment_method" id=""> <br>
                    <option value="1">Cash on delivery</option>
                    <option value="2" disabled>Paypal(coming soon)</option>
                </select> <br>
                <button class="btn">Submit</button>


            </form>
        </center>
    
    </div>




</div>





















































<style>
    footer {
        position:fixed;
    }
</style>


<?php include 'partials/footer.php'; ?>