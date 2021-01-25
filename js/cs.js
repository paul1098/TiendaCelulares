Swal.fire({
    title: '<strong>Cerraste sesión</strong>',
    icon: 'success',
    html:`Cerraste sesión exitosamente`,
    focusConfirm: false,
    reverseButtons: true,
    confirmButtonColor: '#840424',
    confirmButtonText:`OK`
  }).then((result) => {
    if (result.value) {
      window.location.href = `../login.php`
    }
  }); 