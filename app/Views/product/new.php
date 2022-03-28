<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="card shadow">
            <div class="card-header">
                <h4>Add Data</h4>
            </div>
            <div class="card-body">
                <form action="/product/create" method="post">
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Input product name" name="name" />
                    </div>

                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" min="1" id="stock" placeholder="Input product stock" name="stock" />
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" min="0" id="price" class="form-control" placeholder="Input product price" name="price" />
                    </div>

                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" name="category" id="category">
                            <option value="utilities">Utilities</option>
                            <option value="Make_up">Make up</option>
                            <option value="Skincare">Skincare</option>
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