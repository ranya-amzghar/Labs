---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  :root {
    --bg: #0B1628;
    --surface: #16263D;
    --card: #20334D;
    --accent: #38BDF8;
    --accent-hover: #0EA5E9;
    --light: #BAE6FD;
    --text: #E2E8F0;
    --white: #FFFFFF;
    --muted: #8293A8;
    --border: #2B4365;
  }

  section {
    background: var(--bg);
    color: var(--text);
    font-family: 'Segoe UI', Arial, sans-serif;
    padding: 28px 48px 45px 48px;
    font-size: 24px;
    border-top: 4px solid var(--accent);
  }

  h1, h2, h3 {
    color: var(--white);
  }

  h1 {
    color: var(--accent);
    font-size: 42px;
    margin: 0 0 14px 0;
    font-weight: 700;
  }

  h2 {
    font-size: 30px;
    border-bottom: 2px solid var(--accent);
    padding-bottom: 6px;
    margin: 12px 0 10px 0;
  }

  h3 {
    color: var(--accent);
    font-size: 26px;
    margin: 10px 0 6px 0;
  }

  p {
    line-height: 1.45;
    margin: 6px 0;
    font-size: 1em;
  }

  ul, ol {
    line-height: 1.45;
    margin: 6px 0 10px 0;
    padding-left: 24px;
    font-size: 0.98em;
  }

  li {
    margin-bottom: 6px;
  }

  li::marker {
    color: var(--accent);
  }

  strong {
    color: var(--light);
  }

  code {
    background: var(--surface);
    color: var(--light);
    padding: 3px 8px;
    border-radius: 5px;
    font-size: 0.9em;
  }

  pre {
    background: #070D18 !important;
    border: 1px solid var(--border);
    border-left: 4px solid var(--accent);
    border-radius: 8px;
    padding: 10px 16px !important;
    margin: 8px 0 !important;
  }

  pre code {
    background: none !important;
    color: #F8FAFC !important;
    font-size: 16px !important;
    line-height: 1.35 !important;
  }

  pre code span, pre code * {
    color: #F8FAFC !important;
  }

  blockquote {
    background: var(--surface);
    border-left: 4px solid var(--accent);
    padding: 10px 16px;
    color: var(--light);
    border-radius: 0 6px 6px 0;
    margin: 10px 0;
  }

  table {
    display: table !important;
    width: 100% !important;
    border-collapse: collapse !important;
    margin: 16px 0 !important;
    background: var(--surface) !important;
    border: 1px solid var(--border) !important;
    border-radius: 8px !important;
    overflow: hidden !important;
  }

  th {
    background: #1E3A5F !important;
    color: var(--accent) !important;
    padding: 12px 18px !important;
    border: 1px solid var(--border) !important;
    text-align: left !important;
    font-weight: 700 !important;
    font-size: 21px !important;
    letter-spacing: 0.4px !important;
  }

  td {
    background: var(--surface) !important;
    color: var(--text) !important;
    padding: 10px 18px !important;
    border: 1px solid var(--border) !important;
    font-size: 20px !important;
    line-height: 1.45 !important;
  }

  tr:nth-child(even) td {
    background: var(--card) !important;
  }

  td code {
    background: #070D18 !important;
    color: var(--accent) !important;
    border: 1px solid var(--border) !important;
    padding: 3px 8px !important;
    border-radius: 4px !important;
    font-size: 19px !important;
    font-family: 'Consolas', 'Courier New', monospace !important;
  }

  /* Cover slide */

  section.cover,
  section[data-marpit-pagination="1"] {
    text-align: left !important;
    background: linear-gradient(145deg, #070D18 0%, #0B1628 50%, #16263D 100%) !important;
    padding: 46px 60px !important;
    display: flex !important;
    flex-direction: column !important;
    justify-content: flex-start !important;
    align-items: flex-start !important;
    border-top: 5px solid var(--accent);
  }

  section.cover p:first-of-type,
  section[data-marpit-pagination="1"] p:first-of-type {
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
    width: 100% !important;
    margin: 0 0 35px 0 !important;
  }

  section.cover img,
  section[data-marpit-pagination="1"] img {
    height: 85px !important;
    width: auto !important;
    object-fit: contain !important;
    margin: 0 !important;
    padding: 0 !important;
  }

  section.cover img[alt*="Solicode"],
  section[data-marpit-pagination="1"] img[alt*="Solicode"] {
    height: 105px !important;
  }

  section.cover img[alt*="OFPPT"],
  section[data-marpit-pagination="1"] img[alt*="OFPPT"],
  section.cover img[alt*="Ofppt"],
  section[data-marpit-pagination="1"] img[alt*="Ofppt"] {
    background: #FFFFFF !important;
    padding: 6px 14px !important;
    border-radius: 8px !important;
  }

  section.cover h1,
  section[data-marpit-pagination="1"] h1 {
    font-size: 50px !important;
    color: var(--white) !important;
    text-align: left !important;
    margin: 20px 0 14px 0 !important;
    font-weight: 700 !important;
    letter-spacing: -1px !important;
  }

  section.cover p:not(:first-of-type),
  section[data-marpit-pagination="1"] p:not(:first-of-type) {
    color: var(--text) !important;
    font-size: 26px !important;
    line-height: 1.6 !important;
    text-align: left !important;
    margin: 6px 0 !important;
  }

  section.cover p:not(:first-of-type) strong,
  section[data-marpit-pagination="1"] p:not(:first-of-type) strong {
    color: var(--accent) !important;
  }

  section.cover::after,
  section[data-marpit-pagination="1"]::after {
    display: none !important;
  }

  section.lead {
    text-align: center;
  }

  section::after {
    content: "" !important;
    display: none !important;
  }

---

<!-- _class: cover -->
<!-- _paginate: false -->

![Solicode](logo_solicode.png) ![OFPPT](ofppt_logo.png)

# LAB PHP

**Gestion des erreurs, Namespace et Trait**

**Réalisé par :** Ranya Amzghar

**Encadré par :** Essarraj Fouad

<!-- Je vais vous présenter les notions de gestion des erreurs, des namespaces et des traits en PHP. -->

---

# Plan

1. Stack technique
2. Définitions
3. Problème et besoin
4. Solution et pratique
5. Résultats

<!-- Voici les différentes parties de ce Lab. -->

---

# Stack technique

| Outil / Technologie | Rôle principal                | Utilité dans le Lab                                                          |
|---------------------|-------------------------------|------------------------------------------------------------------------------|
| **PHP**             | Langage de programmation      | Écrire et exécuter les scripts illustrant les exceptions, namespaces et traits. |
| **VS Code**         | Éditeur de code               | Éditer les fichiers PHP avec la coloration syntaxique et les extensions.      |
| **Terminal**        | Exécution des scripts         | Lancer les fichiers PHP en ligne de commande avec `php fichier.php`.         |

<!-- Notre stack technique repose sur PHP, VS Code et le terminal. -->

---

# Définitions

## Exception

Une **exception** est un mécanisme qui permet de signaler et de gérer les erreurs dans un programme. Au lieu de laisser le programme s'arrêter brutalement, on peut capturer l'erreur et décider quoi faire.

## Namespace

Un **namespace** (espace de noms) est un système d'organisation qui regroupe les classes, fonctions et constantes sous un nom unique. Cela évite les conflits lorsque deux classes portent le même nom.

## Trait

Un **trait** est un bloc de code réutilisable que l'on peut inclure dans plusieurs classes. Il permet de partager des méthodes entre des classes sans utiliser l'héritage.

<!-- Ces trois notions sont essentielles pour écrire du code PHP propre et maintenable. -->

---

# Problème et besoin

## Problème

- Les erreurs non gérées font **planter** le programme sans explication claire.
- Deux classes portant le **même nom** provoquent un conflit fatal.
- Le **copier-coller** de code entre classes crée de la duplication difficile à maintenir.

## Besoin

- **Gérer les erreurs** proprement avec des messages clairs.
- **Organiser les classes** pour éviter les conflits de noms.
- **Partager du comportement** entre classes sans duplication.

<!-- À compléter : quel problème concret avez-vous rencontré ? -->

---

# Solution et pratique

## 01 — Gestion des exceptions (try / catch / throw)

Les exceptions permettent de capturer une erreur et de la traiter sans interrompre le programme.

```php
function diviser(int $a, int $b): float {
    if ($b === 0) {
        throw new Exception("Division par zéro impossible !");
    }
    return $a / $b;
}

try {
    echo diviser(10, 0);
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}
```

<!-- On lance une exception avec throw et on la capture avec try/catch. -->

---

## 02 — Namespaces (déclaration et utilisation)

Les namespaces organisent le code et évitent les conflits de noms entre classes.

```php
// Déclaration — App/Models/Produit.php
namespace App\Models;

class Produit {
    public function __construct(public string $nom) {}
}

// Utilisation — index.php
use App\Models\Produit;

$p = new Produit("Clavier");
echo $p->nom; // Clavier
```

<!-- Le mot-clé namespace déclare l'espace de noms et use permet d'importer la classe. -->

---

## 03 — Traits (définition et utilisation)

Un trait permet de réutiliser des méthodes dans plusieurs classes sans héritage.

```php
trait Horodatage {
    public function maintenant(): string {
        return date('Y-m-d H:i:s');
    }
}

class Article {
    use Horodatage;
}

$article = new Article();
echo $article->maintenant(); // 2026-11-09 16:30:00
```

<!-- Le mot-clé use à l'intérieur d'une classe intègre les méthodes du trait. -->

---

# Résultats

- ✅ Comprendre le rôle des **exceptions** et savoir utiliser `try` / `catch` / `throw`.
- ✅ Savoir déclarer un **namespace** et importer une classe avec `use`.
- ✅ Créer et utiliser un **trait** pour partager du code entre classes.
- ✅ Écrire du code PHP **organisé**, **robuste** et **réutilisable**.

<!-- Ces trois mécanismes sont fondamentaux pour structurer un projet PHP professionnel. -->
