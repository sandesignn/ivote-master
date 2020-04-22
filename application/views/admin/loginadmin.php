<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <!-- Countdown-->
    <!-- <link type="text/css" href="<?= base_url() ?>asset/js/countdown/jquery.countdown.css?v=1.0.0" rel="stylesheet"> -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>asset/js/countdown/jquery.countdown.min.js?v=1.0.0"></script>
    <link rel="stylesheet" href="<?= base_url('asset/') ?>css/main.css" />
    <title>Login iVote</title>
</head>
<nav class="mycontainer">
    <a href="<?= base_url() ?>">iVote.</a>

</nav>

<body>
    <!-- Main Container -->
    <div class="mymain-container">

        <div class="jumbo-img-login">
            <img width="500" src="<?= base_url('asset/') ?>img/login.png" alt="" />
        </div>

        <div class="kotak_login">
            <p class="tulisan_login">Login <br><b>Admin iVote.</b></p>


            <form action="<?= base_url(); ?>dashboard" method="post">
                <?= $this->session->flashdata('m'); ?>
                <label class="form_name"><b>Username</b></label>
                <br>
                <input type="text" name="username" class="form_login" placeholder="xxxxxxxxxxxx">

                <label class="form_name"><b>Password</b></label>
                <input type="password" name="password" class="form_login" placeholder="Password ..">

                <input type="submit" name="btn-go" class="tombol_login form_name" value="Go">

                <br />

                <a class="link form_name" href="#"><b>Lupa Password ?</b></a>

            </form>

        </div>
       
    </div>

    <!-- End Main Container -->


    <!-- Footer -->
    <footer>
        <div class="mymain-container">
            <a href="#"><img src="<?= base_url('asset/') ?>img/icons-3.png" alt=""></a>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Visi & Misi Kandidat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4447724730.js" crossorigin="anonymous"></script>
</body>

</html>