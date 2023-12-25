const toggleBtn = document.getElementById('toggle-logout');
const logoutForm = document.getElementById('logout-form');

toggleBtn.addEventListener('click', () => {
    logoutForm.classList.toggle('hidden');
});