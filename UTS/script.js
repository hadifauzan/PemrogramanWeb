$(document).ready(function(){
    $('#registrationForm').submit(function(event){
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();

        if(name.trim() == '' || email.trim() == '' || phone.trim() == '') {
            alert('Semua kolom harus diisi.');
            event.preventDefault();
        }
    });
});