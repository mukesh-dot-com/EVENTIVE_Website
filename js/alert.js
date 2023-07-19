let logAdd = document.querySelector('.log');
  $('.log').on('click',function() {
      Swal.fire({
title: 'Are you sure?',
text: "",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
background: 'var(--hover-color)',
color: 'var(--createevent-color)',
cancelButtonColor: '#d33',
confirmButtonText: 'Yes, log out'
})
.then((result) => {
if (result.isConfirmed) {
  Swal.fire({
    title: 'Logged Out Successfully',
    text: '',
    icon: 'success',
    buttons: 'false',
    color: 'var(--createevent-color)',
    background: 'var(--hover-color)',
  })
  setTimeout(function(){
  window.location.href = "landpage.php";
  },1200);
}
})
})