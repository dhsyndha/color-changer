<?php require_once('components/header.php') ?>
    <div class="container-fluid">
        <div class="row">
            <?php require_once('components/nav.php') ?>
            <div class="col-10 my-3">
                <h2>Data Produk</h2>
                <div class="mb-3"><button type="button" class="btn btn-primary">tambah produk</button></div>
                <table class="table">
            <thead>
                <tr>
                <th scope="col">no</th>
                <th scope="col">nama produk</th>
                <th scope="col">harga produk</th>
                <th scope="col">foto Produk</th>
                <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td scope="row" class="align-middle">1</td>
                <td class="align-middle">kosmetik</td>
                <td class="align-middle">Rp. 800.000</td>
                <td><img src="assets/img/kosmetik.jpg" class="image-table" alt=""></td>
                <td class="align-middle"><button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-danger">Danger</button></td>
            </tr>
            <tr>
                <td scope="row" class="align-middle">2</td>
                <td class="align-middle">sepatu</td>
                <td class="align-middle">Rp. 400.000</td>
                <td><img src="assets/img/sepatu.jpg" class="image-table" alt=""></td>
                <td class="align-middle"><button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-danger">Danger</button></td>
            </tr>
            <tr>
                <td scope="row" class="align-middle">3</td>
                <td class="align-middle">jamtangan</td>
                <td class="align-middle">Rp. 960.000</td>
                <td><img src="assets/img/jamtangan.jpg" class="image-table" alt=""></td>
                <td class="align-middle"><button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-danger">Danger</button></td>
            </tr>
            </tbody>
            </table>
            </div>
        </div>
    </div>
<?php require_once('components/footer.php') ?>    