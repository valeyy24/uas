document.addEventListener('DOMContentLoaded', function () {
    // Example: Confirmation before deleting a product
    const deleteForms = document.querySelectorAll('form[action*="products"][method="POST"]');
    
    deleteForms.forEach(function(form) {
        form.addEventListener('submit', function(event) {
            const confirmDelete = confirm('Are you sure you want to delete this product?');
            if (!confirmDelete) {
                event.preventDefault();
            }
        });
    });
});
