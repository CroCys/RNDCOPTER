const orderButtons = document.querySelectorAll('.order-button');
orderButtons.forEach(button => {
    button.addEventListener('click', function () {
        const title = button.getAttribute('data-helicopter');
        openPopup(title);
    });
});

function openPopup(title) {
    const helicopterInput = document.getElementById('helicopter');
    helicopterInput.value = title;
    $('#exampleModal').modal('show');
}
