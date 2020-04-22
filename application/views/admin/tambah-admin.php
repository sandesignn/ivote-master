<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Data Admin</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="<?= base_url() ?>dashboard/add" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" name="a" placeholder="masukkan username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama Admin</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="masukkan nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password Admin</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="masukkan password">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Tambah Admin</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->