$('.logout-btn').on('click', function () {
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
            //     'Deleted!',
            //     'Your file has been deleted.',
            //     'success'
            // )
            var base_url = Window.location;
            console.log(base_url);
        }
    })
});