$("#logout").on("click", function() {
    $.ajax({
        url: 'api/logout.php',
        type: 'POST',
        success: function(data) {
            Swal.fire({
                icon: 'success',
                title: data.message,
                timer: 2000,
                showConfirmButton: false
            }).then(res => {
                window.location.href = "login.php";
            });             
        }
    });
});