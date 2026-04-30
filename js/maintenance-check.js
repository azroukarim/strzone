/**
 * Maintenance Mode Check
 * Fetches config.json and redirects to enpane.html if maintenance is true.
 */
(function() {
    // Avoid infinite redirect loop
    if (window.location.pathname.includes('enpane.html')) return;

    fetch('config.json?v=' + new Date().getTime()) // Prevent caching
        .then(response => response.json())
        .then(data => {
            if (data.status === 'off') {
                window.location.href = 'enpane.html';
            }
        })
        .catch(err => console.log('Maintenance check bypassed or failed.', err));
})();
