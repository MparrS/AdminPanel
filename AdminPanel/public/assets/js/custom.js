// filepath: AdminPanel/public/assets/js/custom.js
$(document).ready(function() {
    // Initialize tooltips
    $('[data-toggle="tooltip"]').tooltip();

    // Logout functionality
    window.logout = function() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You want to logout!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, logout!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to logout script or perform logout action
                window.location.href = 'logout.php'; // Adjust the URL as necessary
            }
        });
    };

    // Example of a custom function to handle form submissions
    $('#myForm').on('submit', function(e) {
        e.preventDefault();
        // Perform form validation and submission logic here
        // For example, using AJAX to submit the form
    });
});