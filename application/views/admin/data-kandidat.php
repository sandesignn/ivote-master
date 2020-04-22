<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Kandidat</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id Kandidat</th>
                                <th>Foto Kandidat</th>
                                <th>Nama Kandidat</th>
                                <th>Jurusan</th>
                                <th>More Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php foreach ($kandidat as $kdd) : ?>
                            <tr>
                                <td><?= $kdd['id_kandidat'] ?></td>
                                <td><img width="150px" src="<?= base_url() ?>/asset/img/kandidat/<?= $kdd['foto_kandidat'] ?>" alt=""></td>
                                <td><?= $kdd['nama_kandidat'] ?></td>
                                <td><?= $kdd['jurusan'] ?></td>
                                <td>
                                    <a class="btn btn-warning" href="<?= base_url() ?>dashboard/updatekandidat/<?= $kdd['id_kandidat'] ?>"><i class="nav-icon fas fa-edit"></i></a>
                                    <a class="btn btn-danger"  href="<?= base_url() ?>dashboard/deletekandidat/<?= $kdd['id_kandidat'] ?>" onclick="return confirm('Are you sure?')"><i class="nav-icon fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Id Kandidat</th>
                                <th>Foto Kandidat</th>
                                <th>Nama Kandidat</th>
                                <th>Jurusan</th>
                                <th>More Option</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->