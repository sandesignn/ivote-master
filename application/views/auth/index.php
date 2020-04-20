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
  <title>Home iVote</title>
</head>
<nav class="mycontainer">
  <a href="<?= base_url() ?>">iVote.</a>
  <a href="<?= base_url('auth/login') ?>"><button class="sign-btn">Sign in</button></a>
</nav>

<body>
  <!-- Main Container -->
  <div class="mymain-container">
    <h2>
      Pemilihan Gubma dan Wagubma <br> Fakultas Ilmu Komputer <br />
      Universitas Sriwijaya
    </h2>
    <div class="jumbo-img">
      <img width="400" src="<?= base_url('asset/') ?>img/index-img.png" alt="" />
    </div>
    <div class="titleVote">
      <h4>Vote Kandidat Calon Gubma & Wagubma</h4>
    </div>
    <form action="#" method="post">
      <!-- Candidat Boxes -->
      <div class="boxKandidat">
        <div class="person">
          <a href="#" data-toggle="modal" data-target="#exampleModalScrollable"><img src="<?= base_url('asset/') ?>img/1.jpg" alt="profile-picture" /></a>
        </div>
        <div class="name">
          <a href="#" data-toggle="modal" data-target="#exampleModalScrollable">
            <h4>Ade & Juanda</h4>
          </a>
          <h5>SI 2019 & SK 2019</h5>
        </div>
        <div class="radio-box">
          <label class="custom-radio">
            <input type="radio" name="jj" value="ade">
            <div class="radio-btn"><i class="fas fa-check"></i></div>
          </label>
        </div>
      </div>
      <!-- End Candidat Boxes -->
      <!-- Candidat Boxes -->
      <div class="boxKandidat">
        <div class="person">
          <a href="#" data-toggle="modal" data-target="#exampleModalScrollable"><img src="<?= base_url('asset/') ?>img/1.jpg" alt="profile-picture" /></a>
        </div>
        <div class="name">
          <a href="#" data-toggle="modal" data-target="#exampleModalScrollable">
            <h4>Ade & Juanda</h4>
          </a>
          <h5>SI 2019 & SK 2019</h5>
        </div>
        <div class="radio-box">
          <label class="custom-radio">
            <input type="radio" name="jj" value="ade">
            <div class="radio-btn"><i class="fas fa-check"></i></div>
          </label>
        </div>
      </div>
      <!-- End Candidat Boxes -->


      <button class="btn-submit" type="submit">Kirim Vote</button>

    </form>

    <!-- Countdown Box -->
    <div class="countdown-box">
      <h2>Sisa Waktu Voting</h2>
      <div class="countdown">
        <h2>
          <span class="days">00</span> Hr
          <span class="separator">:</span>
          <span class="hours">0</span> Jm
          <span class="separator">:</span>
          <span class="minutes">0</span> Mnt
          <span class="separator">:</span>
          <span class="seconds">00</span> Dtk
        </h2>
      </div>
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


  <script class="source" type="text/javascript">
    var now = new Date();
    var day = now.getDate();
    var month = now.getMonth() + 1;
    var year = now.getFullYear() + 1;

    var nextyear = month + '/' + day + '/' + year + ' 07:07:07';

    $('h2').countdown({
      date: '4/25/2020 11:00:00', // TODO Date format: 07/27/2017 17:00:00
      offset: +7, // TODO Your Timezone Offset
      day: 'Day',
      days: 'Days'
    }, function() {
      alert('Done!');
    });
  </script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/4447724730.js" crossorigin="anonymous"></script>
  <!-- Call sweet alert -->
  <script src="<?= base_url('asset/'); ?>/js/sweet/sweetalert2.all.min.js"></script>

  <script>
    $('.btn-submit').on('click', function(e) {
      e.preventDefault();
      Swal.fire({
        title: 'Kamu belum login',
        text: "Silahkan login untuk melakukan vote menggunakan akun Sistem Akademik Anda",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'OK, Login'
      }).then((result) => {
        if (result.value) {
          // Swal.fire(
          //   'Kamu berhasil keluar',
          //   'Voting hanya bisa dilakukan satu kali',
          //   'success'
          // )
          window.location.href = "<?= base_url() ?>/auth/login";
        }
      })
    });
  </script>
</body>

</html>