<?php require_once('components/header.php') ?>
    <div class="container-fluid">
        <div class="row">
            <?php require_once('components/nav.php') ?>
            <div class="col-10 my-3">
            <h2>Transaksi</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Harga Produk</th>
                        <th scope="col">Foto Produk</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="align-middle">1</th>
                            <td class="align-middle">caries belilanca</td>
                            <td class="align-middle">alat kosmetik</td>
                            <td class="align-middle">Jl.neraka</td>
                            <td class="align-middle">Rp.890.000</td>
                            <td><img src="assets/img/kosmetik.jpg" class="image-table" alt=""></td>
                            <td class="align-middle">dikirim</td>
                            <td><button type="button" class="btn btn-success">Detail Transaksi</button>
                    </tr>
                    <tr>
                        <th scope="row" class="align-middle">2</th>
                            <td class="align-middle">laksamana ghaisan</td>
                            <td class="align-middle">jam tangan</td>
                            <td class="align-middle">Jl.jahanam</td>
                            <td class="align-middle">Rp.500.000</td>
                            <td><img src="assets/img/jamtangan.jpg" class="image-table" alt=""></td>
                            <td class="align-middle">dikirim</td>
                            <td><button type="button" class="btn btn-success">Detail Transaksi</button>
                    </tr>
                    <tr>
                        <th scope="row" class="align-middle">3</th>
                            <td class="align-middle">ghaliana theana</td>
                            <td class="align-middle">skincare</td>
                            <td class="align-middle">Jl.firaun</td>
                            <td class="align-middle">Rp.2.500.000</td>
                            <td><img src="assets/img/skincare.jpg" class="image-table" alt=""></td>
                            <td class="align-middle">dikirim</td>
                            <td><button type="button" class="btn btn-success">Detail Transaksi</button>
                    </tr>
                    <tr>
                        <th scope="row" class="align-middle">4</th>
                            <td class="align-middle">edward damson</td>
                            <td class="align-middle">Printer Epson</td>
                            <td class="align-middle">Jl.surgawi</td>
                            <td class="align-middle">Rp.250.000.000</td>
                            <td><img src="assets/img/jordan.jpg" class="image-table" alt=""></td>
                            <td class="align-middle">dikirim</td>
                            <td><button type="button" class="btn btn-success">Detail Transaksi</button>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require_once('components/footer.php') ?>      