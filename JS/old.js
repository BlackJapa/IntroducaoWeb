function msgf()
{
  alert("funciona");
};

function show() {
  swal({
    title: 'How old are you?',
    type: 'question',
    input: 'range',
    inputAttributes: {
      min: 8,
      max: 120,
      step: 1
    },
    inputValue: 25
  })
};

function testeZ() {
  swal({
    title: 'Auto close alert!',
    text: 'I will close in 5 seconds.',
    timer: 5000,
    onOpen: () => {
      swal.showLoading()
    }
  }).then((result) => {
    if (result.dismiss === 'timer') {
    }
  })
};

function erro() {
  swal(
    'Oops...',
    'Something went wrong!',
    'error'
  )
};

function cantoSuperior() {
  swal({
    position: 'top-right',
    type: 'success',
    title: 'Your work has been saved',
    showConfirmButton: false,
    timer: 1500
  })
};

function animadao() {
  swal({
    title: 'jQuery HTML example',
    html: $('<div>')
      .addClass('some-class')
      .text('jQuery is everywhere.'),
    animation: false,
    customClass: 'animated rubberBand'
  })
};

function salvarAlteracoes() {
  swal({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.value) {
      swal(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      )
    }
  })
};

function customImage() {
  swal({
    title: 'Sweet!',
    text: 'Modal with a custom image.',
    imageUrl: 'https://unsplash.it/400/200',
    imageWidth: 400,
    imageHeight: 200,
    imageAlt: 'Custom image',
    animation: false
  })
};

function customPadding() {
  swal({
    title: 'Custom width, padding, background.',
    width: 600,
    padding: 100,
    background: '#fff url(//bit.ly/1Nqn9HU)'
  })
};

function cadastro() {
  swal.setDefaults({
    input: 'text',
    confirmButtonText: 'Next &rarr;',
    showCancelButton: true,
    progressSteps: ['1', '2', '3']
  })

  var steps = [
    {
      title: 'Question 1',
      text: 'Chaining swal2 modals is easy'
    },
    'Question 2',
    'Question 3'
  ]

  swal.queue(steps).then((result) => {
    swal.resetDefaults()

    if (result.value) {
      swal({
        title: 'All done!',
        html:
        'Your answers: <pre>' +
        JSON.stringify(result.value) +
        '</pre>',
        confirmButtonText: 'Lovely!'
      })
    }
  })
};

function aceitarOsTermos() {
  const { value: accept } = await swal({
    title: 'Terms and conditions',
    input: 'checkbox',
    inputValue: 1,
    inputPlaceholder:
    'I agree with the terms and conditions',
    confirmButtonText:
    'Continue <i class="fa fa-arrow-right></i>',
    inputValidator: (result) => {
      return !result && 'You need to agree with T&C'
    }
  })

  if (accept) {
    swal('You agreed with T&C :)')
  }
};