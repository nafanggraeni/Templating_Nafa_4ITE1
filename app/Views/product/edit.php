<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="card mt-4 shadow">
            <div class="card-header">
                <h4>Edit Data</h4>
            </div>
            <div class="card-body">
                <form action="/product/<?= $data['id'] ?>/update" method="post">
                    <input type="hidden" name="_method" value="put" />
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Input product name" name="name" value="<?= $data['name'] ?>" />
                    </div>

                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" min="1" id="stock" class="form-control" placeholder="Input product stock" name="stock" value="<?= $data['stock'] ?>" />
                    </div>


                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" min="0" id="price" class="form-control" placeholder="Input product price" name="price" value="<?= $data['price'] ?>" />
                    </div>

                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category" id="category" class="form-control">
                            <option value="utilities" <?php $data['category'] == "utilities" ? "selected" : "" ?>>Utilities</option>
                            <option value="Make_Up" <?php $data['category'] == "Make_up" ? "selected" : "" ?>> Make Up</option>
                            <option value="Skincare" <?php $data['category'] == "Skincare" ? "selected" : "" ?>>Skincare</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="text-center p-3" ;">
  </div>
<?= $this->endSection() ?>