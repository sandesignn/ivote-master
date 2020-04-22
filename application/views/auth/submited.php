<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="stylesheet" href="<?= base_url(); ?>asset/css/main.css" />
  <title>Home iVote</title>
</head>
<nav class="mycontainer">
  <a href="#">iVote.</a>
  <button class="logout-btn">Get Out</button>
  <button class="signed-btn"><?= $userlogin['nama_mahasiswa']; ?></button>
</nav>

<body>
  <!-- Main Container -->
  <div class="mymain-container">
    <h2 class="thanks">
      Terimakasih. <br> Kamu telah melakukan voting.
    </h2>
    <div class="jumbo-img-submited">
      <img width="400" src="<?= base_url('asset/') ?>img/index-img.png" alt="" />
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
  <?php
  $dateVote = date("d-m-Y H:i:s", strtotime($uservote['date']));
  ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/4447724730.js" crossorigin="anonymous"></script>
  <!-- Call sweet alert -->
  <script src="<?= base_url('asset/'); ?>/js/sweet/sweetalert2.all.min.js"></script>
  <script>
    $(document).ready(function() {
      Swal.fire({
        icon: 'success',
        title: 'Terimakasih',
        text: 'Kamu telah melakukan voting dan voting hanya dapat dilakukan 1 kali dan tidak bisa diulang',
        footer: '<a href="#">Pelajari lebih lanjut?</a>'
      })
    });


    $('.logout-btn').on('click', function() {
      Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Anda akan keluar dari sesi ini",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'OK, Keluar'
      }).then((result) => {
        if (result.value) {
          // Swal.fire(
          //   'Kamu berhasil keluar',
          //   'Voting hanya bisa dilakukan satu kali',
          //   'success'
          // )
          window.location.href = "<?= base_url() ?>/auth/logout";
        }
      })
    });


    $('.signed-btn').on('click', function() {
      Swal.fire({
        icon: 'question',
        title: 'Kamu telah vote sebagai',
        text: "<?= $userlogin['nama_mahasiswa'] ?> pada <?= $dateVote  ?>"
      })
    });

    $('.btn-submit').on('click', function(e) {
      e.preventDefault();
      Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Anda akan memvote kandidat tersebut",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'OK, Vote'
      }).then((result) => {
        if (result.value) {
          $('.form-submit').submit();
        }
      })
    });
  </script>
</body>

</html>