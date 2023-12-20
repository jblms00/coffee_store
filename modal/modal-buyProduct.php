<!-- Modal Buy Drinks -->
<div class="modal fade" id="buyItem<?php echo $row['product_id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="actions/product-purchased-function.php" method="post">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Buy <?php  echo $row['product_name']; ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input type="hidden" name="product_image" value="<?php echo $row['product_image']?>">
                                    <input type="hidden" name="product_id" value="<?php echo $row['product_id']?>">
                                    <input type="hidden" name="product_name" value="<?php echo $row['product_name']?>">
                                    <input type="hidden" name="user_email" value="<?php echo $user_data['email']?>">
                                    <input type="number" name="product_quantity" max="10" class="form-control" placeholder="Enter Quantity" required>
                                    <label>Quantity (Maximum of 10 Orders)</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <label>Add-ons:</label>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" name="product_add_ons[]" type="checkbox" value="Tapioca Pearls">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Tapioca Pearls
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" name="product_add_ons[]" type="checkbox" value="Cream Puff">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Cream Puff
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" name="product_add_ons[]" type="checkbox" value="Espresso Shot">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Espresso Shot
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <select class="form-select" name="product_size">
                                    <option value="16oz">16oz</option>
                                    <option value="22oz">22oz</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" role="button" class="btn btn-success">Place Order</button>
                </div>
            </form>
        </div>
    </div>
</div>