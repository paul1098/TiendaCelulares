Swal.fire({
    title: '<strong>Registro exitoso</strong>',
    icon: 'success',
    html:`Su cuenta fue creada exitosamente`,
    focusConfirm: false,
    reverseButtons: true,
    confirmButtonColor: '#840424',
    confirmButtonText:`Iniciar Sesión`
  }).then((result) => {
    if (result.value) {
      window.location.href = `../login.php`
    }
  }); 