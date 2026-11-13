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

<section class="cover">

![Solicode](logo_solicode.png)
![OFPPT](ofppt_logo.png)

# Lab : Architecture 3-tiers, DAO, Service et BaseService

**Étudiant : Ranya Amzghar**

**Encadrant : Essarraj Fouad**

</section>

---

## 2. Plan

1. Stack technique.
2. Définitions.
3. Problème et besoin.
4. Solution et pratique.
5. Résultats.

---

## 3. Stack technique

| Outil / Technologie | Rôle principal | Utilité dans le Lab |
|---|---|---|
| PHP 8 | Langage de programmation | Permet de définir les classes, les services et la logique du démonstrateur. |
| Fichier JSON | Stockage simple des données | Enregistre les sections dans un fichier local pour garder un exemple fonctionnel sans dépendance externe. |
| Architecture 3-tiers | Organisation du code | Sépare les données, la logique métier et la logique de présentation dans des couches distinctes. |

---

## 4. Définitions

### 4.1 Architecture 3-tiers

- Sépare la présentation, le métier et les données.
- Clarifie les responsabilités de chaque couche.

### 4.2 DAO

- Gère la lecture et l'écriture des données.
- Isole les accès à la source de données.

### 4.3 Service

- Contient la logique métier.
- Applique les règles avant d'utiliser le DAO.

### 4.4 BaseService

- Regroupe les méthodes communes.
- Évite la duplication dans plusieurs services.

---

## 5. Problème et besoin

### Problème

- Le code est mélangé dans les mêmes fichiers.
- Il devient difficile à lire et à modifier.
- La répétition de logique augmente les erreurs.

### Besoin

- Séparer les responsabilités.
- Organiser le code par couche.
- Faciliter la maintenance et la compréhension.

---

## 6. Solution et pratique

### 6.1 DAO pour les sections

- Le DAO lit et insère les sections.
- Il isole les accès aux données de la logique métier.

```php
$sectionDao = new SectionDAO();
$sections = $sectionDao->findAll();
```

- Résultat : liste de sections accessible dans le code.

---

### 6.2 Service métier

- Le service valide les informations avant l'enregistrement.
- Il applique les règles métier de manière centralisée.

```php
$sectionService = new SectionService(new SectionDAO());
$section = $sectionService->createSection('Culture', 'Les sorties et spectacles.');
```

- Résultat : section validée et enregistrée correctement.

---

### 6.3 BaseService partagé

- Le BaseService regroupe les méthodes réutilisables.
- Il centralise la validation et le nettoyage des données.

```php
protected function validateRequired(string $fieldName, string $value): void
{
    if (trim($value) === '') {
        throw new InvalidArgumentException($fieldName . ' ne peut pas être vide.');
    }
}
```

- Résultat : logique uniforme pour plusieurs services.

---

## Résultats

- Compréhension de l'architecture 3-tiers.
- Utilisation d'un DAO dédié à la persistance des données.
- Mise en place d'un service métier avec validation.
- Utilisation d'un BaseService pour factoriser les méthodes communes.
- Exemple fonctionnel et compréhensible pour le projet News Application.
