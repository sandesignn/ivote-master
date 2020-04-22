<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Waktu Vote</h1>
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
                                <th>Start Vote</th>
                                <th>End Vote</th>
                                <th>More Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $waktu['start'] ?></td>
                                <td><?= $waktu['end'] ?></td>
                                <td>
                                    <a class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" href="#"><i class="nav-icon fas fa-edit"></i></a>
                                </td>
                            </tr>

                            </tr>

                        </tbody>

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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url() ?>dashboard/updatewaktu" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Start Vote<span class="text-danger">*</span></label>
                            <input type="datetime-local" class="form-control" name="start" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">End Vote<span class="text-danger">*</span></label>
                            <input type="datetime-local" class="form-control" name="end" required>
                        </div>

                    </div>
                    <!-- /.card-body -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>