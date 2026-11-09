---
marp: true
theme: default
paginate: true
size: 16:9
---

<!-- _class: lead -->

![Solicode](logo_solicode.png) ![OFPPT](ofppt_logo.png)

# LAB PHP

**Gestion des erreurs, Namespace et Trait**

**Réalisé par :** Ranya Amzghar

**Encadré par :** Essarraj Fouad

<!-- Je vais vous présenter trois notions PHP pour améliorer notre code. -->

---

# Plan

1. Introduction
2. Problème et besoin
3. Gestion des erreurs et exceptions
4. Namespace
5. Trait
6. Résultats et conclusion

<!-- Voici les différentes parties de ce Lab. -->

---

# Introduction

## PHP

PHP est un langage de programmation.

Il permet de créer des applications web.

Dans ce Lab, nous découvrons trois notions :

- Gestion des erreurs et exceptions.
- Namespace.
- Trait.

<!-- Cette partie présente les notions PHP étudiées dans ce Lab. -->

---

# Problème et besoin

## Problème

- Les erreurs peuvent arrêter le programme.
- Les classes peuvent avoir des noms identiques.
- Plusieurs classes peuvent utiliser le même code.

## Besoin

- Détecter et traiter les erreurs.
- Organiser les classes.
- Partager du code entre les classes.

<!-- Ces notions permettent d'organiser le code et de mieux gérer les problèmes. -->

---

# Gestion des erreurs et exceptions

## Définition

Une erreur indique un problème dans le programme.

Une exception représente un problème qui peut être détecté et traité.

PHP utilise :

- `try` : tester un code.
- `throw` : signaler une exception.
- `catch` : traiter une exception.

<!-- Cette partie explique comment PHP détecte et traite les exceptions. -->

---

# Gestion des exceptions

## Exemple pratique

Dans le projet technique, un événement doit avoir un nom.

```php
<?php

function ajouterEvenement($nom)
{
    if (empty($nom)) {
        throw new Exception("Le nom est obligatoire.");
    }

    return "Événement ajouté : " . $nom;
}

try {
    echo ajouterEvenement("");
} catch (Exception $e) {
    echo $e->getMessage();
}
```

**Résultat :**

`Le nom est obligatoire.`

<!-- Cet exemple montre comment traiter une exception lors de l'ajout d'un événement. -->

---

# Namespace

## Définition

Un namespace organise les classes PHP.

Il permet de séparer les classes.

Il évite les conflits entre les noms de classes.

**Exemple :**

```php
namespace App\Models;

class Evenement
{
    public $nom;
}
```

La classe Evenement appartient au namespace `App\Models`.

<!-- Cette partie explique comment un namespace organise les classes du projet. -->

---

# Namespace

## Exemple pratique

Dans le projet technique :

```php
namespace App\Models;

class Evenement
{
    public function afficher()
    {
        return "Salon informatique";
    }
}
```
Pour utiliser cette classe :

```php
use App\Models\Evenement;

$event = new Evenement();

echo $event->afficher();
```

**Résultat :**

`Salon informatique`

<!-- Cet exemple montre comment utiliser une classe organisée dans un namespace. -->

---

# Trait

## Définition

Un Trait permet de partager du code entre plusieurs classes.

Il évite de répéter les mêmes méthodes.

PHP utilise le mot-clé `trait` pour créer un Trait.

<!-- Cette partie explique le rôle d'un Trait dans PHP. -->

---

# Trait

## Exemple pratique

Dans le projet technique, plusieurs classes peuvent afficher un message.

```php
<?php

trait AfficherMessage
{
    public function afficherMessage()
    {
        return "Opération réussie.";
    }
}
```

Utiliser le Trait dans une classe :

```php
class Evenement
{
    use AfficherMessage;
}

$event = new Evenement();

echo $event->afficherMessage();
```

**Résultat :**

`Opération réussie.`

<!-- Cet exemple montre comment une classe utilise un Trait pour partager une méthode. -->

---

# Résultats et conclusion

## Résultats

À la fin de ce Lab, nous pouvons :

- Détecter et traiter une exception.
- Organiser les classes avec Namespace.
- Partager des méthodes avec Trait.
- Améliorer l'organisation du code PHP.

## Conclusion

Ces notions permettent de créer un code PHP plus organisé et plus facile à gérer.

<!-- Dans cette partie, nous allons découvrir les résultats obtenus et conclure ce Lab. -->

---

<!-- _class: lead -->

# Merci pour votre attention !

