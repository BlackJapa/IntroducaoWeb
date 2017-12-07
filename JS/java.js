function testeZ() {
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

function show() {
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
}