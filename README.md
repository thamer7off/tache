# The Medix - squelette MVC simple

Deux projets : `frontoffice/` (patient) et `backoffice/` (médecin).

## Lancer
    cd backoffice
    php -S localhost:8000
    -> http://localhost:8000/index.php?page=dashboard

    cd frontoffice
    php -S localhost:8001
    -> http://localhost:8001/index.php?page=home

## Ajouter une page (ex : ordonnances) dans le Back Office
1. Créer `app/Models/Ordonnance.php`
2. Créer `app/Controllers/OrdonnanceController.php`
3. Créer `app/Views/pages/ordonnances.php`
4. Ajouter une ligne dans `app/routes.php`
5. Ajouter un lien dans `app/Views/partials/sidebar.php`
