// alert.js
function showAlert(message, type) {
    const alertBox = document.getElementById('alert');
    alertBox.style.display = 'block';
    alertBox.className = 'alert ' + type;
    document.getElementById('alert-message').textContent = message;

    // Hide the alert after 3 seconds
    setTimeout(() => {
        alertBox.style.display = 'none';
    }, 3000);
}
