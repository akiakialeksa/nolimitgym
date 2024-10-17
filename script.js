document.addEventListener("DOMContentLoaded", function() {
    flatpickr("#Dan", {
        dateFormat: "d/m/Y",
        firstDayOfWeek: 1,
        minDate: "today"    
    });
});

document.querySelector('.Form').addEventListener('submit', function(e) {
    const dateInput = document.getElementById('Dan');
    const dateError = document.getElementById('date-error');

    if (!dateInput.value) {
        e.preventDefault();
        dateError.style.display = 'block';
    } else {
        dateError.style.display = 'none';
    }
});