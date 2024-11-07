console.log('Script is working!');

document.addEventListener("DOMContentLoaded", function() {
    flatpickr("#Dan", {
        dateFormat: "d/m/Y",
        firstDayOfWeek: 1,
        minDate: "today"
    });
});

function validateForm() {
    let isValid = true;

    const fields = [
        { id: 'Ime', error: 'ime-error' },
        { id: 'Prezime', error: 'prezime-error' },
        { id: 'broj-telefona', error: 'broj-error' },
        { id: 'Tip', error: 'tip-error' },
        { id: 'Dan', error: 'date-error' },
        { id: 'Vreme', error: 'vreme-error' }
    ];

    fields.forEach(field => {
        const input = document.getElementById(field.id);
        const error = document.getElementById(field.error);

        if (!input.value) {
            error.style.display = 'block';
            isValid = false;
        } else {
            error.style.display = 'none';
        }
    });

    return isValid;
}

$(document).ready(function(){
    $('#gym-form').on('submit', function(e){
        e.preventDefault();

        if (!validateForm()) {
            console.log('Form validation failed.');
            return;
        }
        
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
                        $('#popunite').hide();
                        $('#zakazivanje-naslov').hide();
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
