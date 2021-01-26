Swal.fire({
    title: '<strong>Error de datos</strong>',
    icon: 'error',
    html:`Ingresa un Email o contraseña correctos`,
    focusConfirm: false,
    reverseButtons: true,
    confirmButtonColor: '#840424',
    confirmButtonText:`OK`
  }).then((result) => {
    if (result.value) {
      window.location.href = `../login.php`
    }
  }); 