<?php include "pages/includes/header.php";?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <img src="<?php echo $productDetails['image'];?> " alt="" class="img-fluid" style="height: 300px">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-body" style="..">
                    <h2 class="font-weight-bold"><?php echo $productDetails['name']; ?></h2>
                    <p>Price: BDT <?php echo $productDetails['price']; ?></p>
                    <p><?php echo $productDetails['description']; ?></p>
                    <a href="javascript:void(0)" class="btn btn-outline-success">Order Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "pages/includes/footer.php";?>
