        // Init an example confirm alert on button click
        jQuery('.js-swal-confirm-keluar').on('click', function(){
            swal({
                title: 'Peringatan!',
                text: 'Apakah anda yakin keluar dari sistem?',
                type: 'warning',
                // type: 'error',
                // type: 'success',
                showCancelButton: true,
                confirmButtonColor: '#d26a5c',
                confirmButtonText: 'Keluar',
                cancelButtonText: 'Batal',
                html: false,
                preConfirm: function() {
                    return new Promise(function (resolve) {
                        setTimeout(function () {
                            resolve();
                        }, 50);
                    });
                }
            })
        });
