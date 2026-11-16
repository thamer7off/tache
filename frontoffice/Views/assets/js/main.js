// Bouton mode clair / sombre
var bouton = document.getElementById('theme-toggle');
var html = document.documentElement;

// Au chargement : on remet le thème sauvegardé
if (localStorage.getItem('theme') === 'dark') {
    html.setAttribute('data-theme', 'dark');
}

bouton.addEventListener('click', function () {
    if (html.getAttribute('data-theme') === 'dark') {
        html.setAttribute('data-theme', 'light');
        localStorage.setItem('theme', 'light');
    } else {
        html.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark');
    }
});
