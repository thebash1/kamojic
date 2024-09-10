const toggleButton = document.getElementById('toggleButton');

toggleButton.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
    toggleButton.classList.toggle('dark-mode');
    if (document.body.classList.contains('dark-mode'));
});
