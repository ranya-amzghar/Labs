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

![Solicode](logo_solicode.png) ![OFPPT](ofppt_logo.png)

# Lab POO — Approfondir la programmation orientée objet


**Étudiante :** Ranya Amzghar  
**Encadrant :** Essarraj Fouad

---

## 2. Plan

1. Stack technique
2. Définitions
3. Problème et besoin
4. Solution et pratique
5. Résultats

---

## 3. Stack technique

| Outil / technologie | Rôle principal | Utilité dans le Lab |
|:---------------------|:---------------|:--------------------|
| PHP 8+ | Langage de programmation | Écrire les classes et appliquer les notions de POO |
| PHP CLI | Exécution en ligne de commande | Lancer `demo.php` et observer la démonstration |

La programmation orientée objet est le sujet du Lab ; PHP permet d'en pratiquer les concepts dans un exemple exécutable.

---

## 4. Définitions

Une **classe abstraite** est une classe de base qui ne peut pas être instanciée directement et qui peut déclarer des méthodes que ses classes dérivées doivent définir.

Une **interface** est un contrat qui déclare les méthodes qu'une classe doit fournir lorsqu'elle l'implémente.

L'**héritage** est un mécanisme par lequel une classe dérivée reprend et peut spécialiser les propriétés et méthodes accessibles d'une classe de base.

---

## 4. Définitions

Le **polymorphisme** permet d'utiliser une même opération sur des objets de types différents, chaque type pouvant en fournir son propre comportement.

L'**encapsulation** consiste à contrôler l'accès aux données et aux opérations d'un objet au moyen de niveaux de visibilité tels que `private`, `protected` et `public`.

Un **membre statique** est une propriété ou une méthode rattachée à une classe plutôt qu'à une instance particulière.

---

## 5. Problème et besoin

### Problème

Lors du développement en PHP, organiser un programme contenant plusieurs classes peut devenir difficile. La répétition du code, le manque de réutilisation et la mauvaise gestion des relations entre classes peuvent rendre le programme complexe à maintenir.

### Besoin

Comprendre et utiliser les concepts avancés de la POO pour mieux organiser les classes, réutiliser le code et faciliter sa maintenance.

---

## 6. Solution et pratique — Solution proposée

Utiliser les concepts de la POO pour améliorer l'organisation du code :

- **Classe abstraite :** définir une base commune.
- **Interface :** imposer un contrat aux classes.
- **Héritage :** réutiliser et spécialiser le code.
- **Polymorphisme :** utiliser des comportements différents à travers une même méthode.
- **Encapsulation :** contrôler l'accès aux données.
- **Membres statiques :** partager des propriétés et méthodes au niveau de la classe.

---

## 6. Solution et pratique — Classe abstraite

```php
abstract class NewsItem implements Publishable
{
    private int $id;
    protected string $title;

    abstract public function getType(): string;
}
```

`NewsItem` regroupe des données communes et impose aux classes dérivées de préciser leur type.

---

## 6. Solution et pratique — Interface

```php
interface Publishable
{
    public function getTitle(): string;

    public function publish(): string;
}
```

`Publishable` impose aux objets concernés de fournir un titre et un comportement de publication.

---

## 6. Solution et pratique — Héritage

```php
class Article extends NewsItem
{
    public function getType(): string
    {
        return 'Article';
    }

    public function publish(): string
    {
        return sprintf('Article : %s', $this->title);
    }
}
```

`Article` hérite de `NewsItem` pour reprendre le titre commun et définir le type de contenu.

---

## 6. Solution et pratique — Polymorphisme

```php
$items = [$journalist, $section, $article];

foreach ($items as $item) {
    echo $item->publish() . PHP_EOL;
}
```

La boucle appelle `publish()` sur chaque objet et obtient le résultat propre à sa classe.

---

## 6. Solution et pratique — Encapsulation

```php
require_once __DIR__ . '/src/Publishable.php';

class Journalist implements Publishable
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

$journalist = new Journalist('Ranya Amzghar');
echo $journalist->getName();
```

La propriété privée `name` est consultée à travers une méthode publique sans accès direct depuis l'extérieur.

---

## 6. Solution et pratique — Membres statiques

```php
private static int $createdCount = 0;

public static function getCreatedCount(): int
{
    return self::$createdCount;
}

echo NewsItem::getCreatedCount();
```

Cet extrait de `NewsItem` incrémente le compteur à la création et permet de le consulter sans instance particulière.

---

## 6. Solution et pratique — Résultats

La démonstration affiche le profil du journaliste, l'article publié dans sa section et les deux contenus créés par `NewsItem`.
