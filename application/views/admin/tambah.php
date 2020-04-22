<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <?= $this->session->flashdata('messageIn'); ?>
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Kandidat</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="<?= base_url() ?>dashboard/add" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Kandidat<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukan nama pasangan kandidat" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Jurusan Kandidat <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="jurusan" placeholder="ex: SI 2018 & SK 2019" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Foto Kandidat<span class="text-danger">*</span></label>
                            <input type="file" class="form-control-file" name="foto" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Visi Kandidat<span class="text-danger">*</span></label>
                            <div class="mb-3">
                                <textarea name="visi" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Misi Kandidat<span class="text-danger">*</span></label>
                            <div class="mb-3">
                                <textarea name="misi" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->