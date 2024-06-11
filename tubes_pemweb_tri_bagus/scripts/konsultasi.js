document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('consultationForm');
    const cancelButton = document.getElementById('cancelButton');

    cancelButton.addEventListener('click', function () {
        form.reset();
    });
});
