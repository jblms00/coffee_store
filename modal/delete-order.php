<!-- Modal Delete to Cart-->
<div class="modal fade" id="delete_order<?php echo $row['order_id'];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-delete-item">
            <form action="actions/delete-order-function.php" method="post">
                <div class="modal-header">
                    <h1>Remove Order</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" name="order_id" value="<?php echo $row['order_id'];?>">
                    <p>Are your sure you want remove this order?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <button name="delete" role="button" class="btn btn-success">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>