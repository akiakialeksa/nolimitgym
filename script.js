console.log('Script is working!');

// Format datuma u kalendaru
document.addEventListener("DOMContentLoaded", function() {
    flatpickr("#Dan", {
        dateFormat: "d/m/Y",
        firstDayOfWeek: 1,
        minDate: "today"    
    });
});


// Blokiranje prethodnih datuma
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


// Uspešno zakazivanje
$(document).ready(function(){
    $('#gym-form').on('submit', function(e){
        e.preventDefault();
        console.log('Form submission prevented!');

        $.ajax({
            type: 'POST',
            url: 'Connection.php',
            data: $(this).serialize(),
            dataType: 'html',
            success: function(response){
                try {
                    var jsonResponse = JSON.parse(response);
                    if (jsonResponse.status === 'success') {
                        $('#gym-form').hide();
                        $('#success-message').show().text(jsonResponse.message); 
                    } else {
                        alert('Došlo je do greške: ' + jsonResponse.message);
                    }
                } catch (error) {
                    console.error('Parsing error:', error);
                    alert('Došlo je do greške u obradi podataka.');
                }
            },
            error: function(){
                alert('Došlo je do greške. Pokušajte ponovo.');
            }
        });
    });
});
