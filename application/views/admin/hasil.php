<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Hasil Voting Kandidat</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Halaman Utama Admin</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col">

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id Kandidat</th>
                                <th>Nama Kandidat</th>
                                <th>Total Voting</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php foreach ($kandidatdata as $idk) : ?>
                            <tr>
                                <td><?= $idk['id_kandidat'] ?></td>
                                <td><?= $idk['nama_kandidat'] ?></td>
                                <td>
                                    <?= $hasil ?> voted
                                </td>

                            </tr>
                        <?php endforeach; ?>
                        </tr>

                        </tbody>
                       
                    </table>
                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->