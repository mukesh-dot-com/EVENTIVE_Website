function register() {
      Swal.fire({
title: 'Signin To Register',
text: "",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
background: 'var(--hover-color)',
color: 'var(--createevent-color)',
cancelButtonColor: '#d33',
confirmButtonText: 'Sign Me In'
})
.then((result) => {
if (result.isConfirmed) {
  setTimeout(function(){
  window.location.href = "studlogin.php";
  },1200);
}
})
}