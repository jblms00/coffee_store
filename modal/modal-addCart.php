<!-- Modal Add to Cart-->
<div class="modal fade" id="modallAddCart<?php echo $row['product_id'];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="actions/add-to-cart-function.php" method="post">
                <div class="modal-header">
                    <h1>Add to Cart</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="product_image" value="<?php echo $row['product_image'];?>">
                    <input type="hidden" name="user_email" value="<?php echo $user_data['email'];?>">
                    <input type="hidden" name="product_id" value="<?php echo $row['product_id'];?>">
                    <input type="hidden" name="product_name" value="<?php echo $row['product_name'];?>">
                    <input type="hidden" name="product_type" value="<?php echo $row['product_type'];?>">
                    <p>Are your sure you want this to add to your cart?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <button type="submit" role="button" class="btn btn-success">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>