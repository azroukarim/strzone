/**
 * Maintenance Mode Check
 * Priority: localStorage (admin toggle) → config.json
 * Redirects to enpane.html if maintenance is active.
 */
(function () {
    // Avoid infinite redirect loop
    if (window.location.pathname.includes('enpane.html')) return;
    if (window.location.pathname.includes('admin.html')) return;

    const LS_KEY = 'streamtv_maintenance';

    // 1️⃣  Check localStorage first (admin override)
    const localState = localStorage.getItem(LS_KEY);
    if (localState === 'on') {
        window.location.href = 'enpane.html';
        return;
    }

    // 2️⃣  Fallback: check remote config.json
    fetch('config.json?v=' + new Date().getTime())
        .then(function (r) { return r.json(); })
        .then(function (data) {
            if (data.status === 'off') {
                window.location.href = 'enpane.html';
            }
        })
        .catch(function (err) {
            console.log('Maintenance check bypassed or failed.', err);
        });
})();
