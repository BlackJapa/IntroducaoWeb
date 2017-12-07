function subscribe(){
    swal({
        title: 'Entre com seu email para receber nossas novidades.',
        input: 'email',
        showCancelButton: true,
        confirmButtonText: 'Submit',
        showLoaderOnConfirm: true,
        preConfirm: (email) => {
          return new Promise((resolve) => {
            setTimeout(() => {
              if (email === 'taken@example.com') {
                swal.showValidationError(
                  'This email is already taken.'
                )
              }
              resolve()
            }, 2000)
          })
        },
        allowOutsideClick: false
      }).then((result) => {
        if (result.value) {
          swal({
            type: 'success',
            title: 'Ajax request finished!',
            html: 'Submitted email: ' + result.email
          })
        }
      })
};

function show1() {
    swal({
        title: 'Comentário registrado',
        text: 'Obrigado pelo seu comentário.',
        timer: 5000,
        onOpen: () => {
            swal.showLoading()
        }
    }).then((result) => {
        if (result.dismiss === 'timer') {
            location.href='index.php'
        }
    })
};

