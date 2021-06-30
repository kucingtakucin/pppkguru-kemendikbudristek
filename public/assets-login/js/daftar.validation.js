var btnDaftar = $('.fxt-npsn');
var inputNPSN = $('input[name="npsn"]');

btnDaftar.click(function (e) {
  e.preventDefault();
  if (e.target.value == 'cek-npsn') {
    // Check NPSN Logic
    if (inputNPSN.val() === '1234') {
      $('.form-wizard-npsn').removeClass('active');
      e.target.value = 'daftar-npsn';
    } else {
      alert(false + ' : Masukkan 1234');
    }
  } else if (e.target.value == 'daftar-npsn') {
    // Logic Daftar atau Step 2
    console.log('daftar');
  }
});
