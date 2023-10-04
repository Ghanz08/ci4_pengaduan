<?= $this->extend('layout/base'); ?>

<?= $this->section('content'); ?>

<div class="col-md-2">
    <nav aria-label="breadcrumb" class="bg-light p-3">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Product</li>
      </ol>
    </nav>
  </div>
  
<div class="card mx-4">
    <div class="card-body">
        <div class="container-fluid">
            <div class="box-body pad">
                <div class="row mt-3 align-items-center">
                    <div class="col-md-12 text-end">
                        <a href="/product/new" class="btn btn-outline-dark">New Product <i class="fa-regular fa-square-plus"></i></a>
                    </div>
                    </div>

                    <div class="row mt-4">
                    <table class="table table-striped w-100" id="productTable">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Stock</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($products as $product): ?>
                            <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $product['name']; ?></td>
                            <td><?= $product['price']; ?></td>
                            <td><?= $product['stock']; ?></td>
                            <td>
                                <div class="row">
                                <div class="col-auto">
                                    <a href="/product/<?= $product['id']; ?>/edit" class="btn btn-outline-warning mr-2">Edit <i class="fa-regular fa-pen-to-square"></i></a>
                                </div>
                                <div class="col-auto px-0">
                                    <form action="/product/<?= $product['id']; ?>" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-outline-danger">Delete <i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </div>
                                </div>
                            </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>