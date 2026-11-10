# Tutoriel — Trait

## Objectif

Apprendre à partager du code entre plusieurs classes PHP avec les traits, sans utiliser l'héritage.

## Fichier

`exemple.php` dans ce dossier.

## Explication du code

### 1. Définition du trait `Horodatable`

```php
trait Horodatable
{
    private string $creeLe;
    private string $modifieLe;

    public function horodater(): void
    {
        $maintenant = date('Y-m-d H:i:s');
        $this->creeLe = $maintenant;
        $this->modifieLe = $maintenant;
    }

    public function mettreAJour(): void
    {
        $this->modifieLe = date('Y-m-d H:i:s');
    }

    public function afficherDates(): string
    {
        return "Créé le : " . $this->creeLe . " | Modifié le : " . $this->modifieLe;
    }
}
```

- Le mot-clé `trait` définit un bloc de code réutilisable.
- `Horodatable` contient des propriétés (`$creeLe`, `$modifieLe`) et des méthodes.
- `horodater()` initialise les deux dates à la date actuelle.
- `mettreAJour()` met à jour uniquement la date de modification.
- `afficherDates()` formate les dates pour l'affichage.
- Un trait n'est **pas** instanciable seul : il doit être utilisé dans une classe.

### 2. Second trait `AfficherMessage`

```php
trait AfficherMessage
{
    public function afficherMessage(string $action): string
    {
        return "Opération réussie : " . $action;
    }
}
```

- Un second trait, plus simple, qui fournit une méthode de notification.
- Une classe peut utiliser **plusieurs traits** à la fois.

### 3. Utilisation dans la classe `Article`

```php
class Article
{
    use Horodatable;
    use AfficherMessage;

    private string $titre;
    private string $contenu;

    public function __construct(string $titre, string $contenu)
    {
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->horodater();
    }
}
```

- `use Horodatable;` injecte toutes les propriétés et méthodes du trait dans la classe.
- `use AfficherMessage;` ajoute le second trait.
- Dans le constructeur, `$this->horodater()` appelle la méthode du trait comme si elle appartenait à la classe.
- La classe `Article` a maintenant accès à `horodater()`, `mettreAJour()`, `afficherDates()` et `afficherMessage()`.

### 4. Utilisation dans la classe `Section`

```php
class Section
{
    use Horodatable;
    // ...
}
```

- La classe `Section` utilise le même trait `Horodatable`.
- Les deux classes partagent le même comportement **sans héritage** et sans duplication de code.

### 5. Différence avec l'héritage

| Aspect         | Héritage (`extends`)         | Trait (`use`)                    |
|----------------|------------------------------|----------------------------------|
| Relation       | "est un" (is-a)              | "a le comportement de"           |
| Limite         | Une seule classe parente     | Plusieurs traits possibles       |
| Usage          | Hiérarchie de classes        | Partage horizontal de code       |

## Commande d'exécution

Depuis la racine du dépôt :

```bash
php lab-php/pratique/traits/exemple.php
```

## Résultat attendu

```
=== Trait Horodatable ===

Article : Les nouveautés PHP 8 — Créé le : 2026-11-09 15:00:00 | Modifié le : 2026-11-09 15:00:00
Section : Technologie (#3498db) — Créé le : 2026-11-09 15:00:00 | Modifié le : 2026-11-09 15:00:00

=== Mise à jour ===
Après modification : Créé le : 2026-11-09 15:00:00 | Modifié le : 2026-11-09 15:00:01

=== Trait AfficherMessage ===
Opération réussie : ajout d'un article
```

> **Note :** Les dates affichées correspondent à la date et l'heure d'exécution.

## Lien avec le projet

Dans un projet Laravel, les traits sont utilisés partout :

- `HasFactory` — Permet à un modèle d'utiliser les factories pour les tests.
- `SoftDeletes` — Ajoute la suppression douce à un modèle.
- `Notifiable` — Ajoute les notifications à un utilisateur.

## Exercice complémentaire

Créer un trait `Sluggable` qui génère automatiquement un slug à partir d'un titre (par exemple, `"Mon Article"` → `"mon-article"`). Utiliser ce trait dans la classe `Article` et afficher le slug.
