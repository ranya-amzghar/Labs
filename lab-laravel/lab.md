# LAB LARAVEL

## Découvrir le framework Laravel

![Solicode](logo_solicode.png) ![OFPPT](ofppt_logo.png)

**Réalisé par :** Ranya Amzghar

**Encadré par :** Essarraj Fouad

---

# Plan

1. Stack technique
2. Définitions
3. Problème et besoin
4. Solution et pratique
5. Résultats et conclusion

---

# 1. Stack technique

| Outil | Rôle |
|---|---|
| PHP | Langage de programmation |
| Laravel | Framework web |
| Composer | Gestion des dépendances PHP |
| MySQL | Base de données |
| Visual Studio Code | Éditeur de code |

---

# 2. Définitions

- **Framework :** ensemble d'outils qui facilite le développement.
- **Route :** adresse qui permet d'accéder à une page.
- **Controller :** classe qui organise le traitement d'une demande.
- **Model :** classe qui représente et gère les données.
- **View :** partie qui affiche les informations à l'utilisateur.
- **Migration :** fichier qui permet de créer ou modifier la structure de la base de données.

---

# 3. Problème et besoin

## Problème

- Le code PHP peut devenir difficile à organiser.
- Les pages et les traitements peuvent être mélangés.
- La gestion de la base de données demande plusieurs étapes.

## Besoin

- Organiser le code.
- Séparer les responsabilités.
- Faciliter la gestion des données.
- Développer une application plus facilement.

---

# 4. Solution et pratique

## Découvrir Laravel

1. Installer PHP et Composer.
2. Créer un projet Laravel.
3. Découvrir les dossiers du projet.
4. Créer une route.
5. Afficher une page.
6. Découvrir les migrations.

## 01 — Créer un projet Laravel

Dans le terminal, exécuter :

```bash
composer create-project laravel/laravel mon-projet
```

Entrer dans le projet :

```bash
cd mon-projet
```

Lancer le serveur :

```bash
php artisan serve
```

## 02 — Découvrir les routes

Les routes définissent les adresses de l'application.

Exemple dans `routes/web.php` :

```php
Route::get('/bonjour', function () {
    return 'Bonjour Laravel';
});
```

Cette route affiche un message lorsque l'utilisateur ouvre `/bonjour`.

## 03 — Découvrir MVC

Laravel utilise une organisation appelée **MVC**.

| Élément | Rôle |
|---|---|
| Model | Gérer les données |
| View | Afficher les informations |
| Controller | Organiser les traitements |

Cette organisation sépare les différentes responsabilités de l'application.

## 04 — Découvrir les migrations

Les migrations permettent de créer et modifier les tables de la base de données.

Créer une migration :

```bash
php artisan make:migration create_categories_table
```

Exécuter les migrations :

```bash
php artisan migrate
```

---

# 5. Résultats et conclusion

## Résultats attendus

- Comprendre le rôle de Laravel.
- Découvrir la structure d'un projet.
- Créer une route.
- Comprendre MVC.
- Découvrir les migrations.

## Conclusion

Laravel facilite le développement web avec PHP grâce à une organisation claire et des outils intégrés.

---

# Merci pour votre attention !