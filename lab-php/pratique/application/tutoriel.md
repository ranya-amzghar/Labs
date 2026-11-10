# Tutoriel — Application PHP réunissant trois notions

## Objectif

Observer comment les exceptions, les namespaces et les traits coopèrent dans un petit scénario de création d'article et de section. L'exemple est autonome et pédagogique ; il n'est pas intégré au projet technique.

## Structure des fichiers

```text
application/
├── index.php
└── src/
    ├── Exceptions/ValidationException.php
    ├── Models/Article.php
    ├── Models/Section.php
    ├── Services/ArticleService.php
    └── Traits/HasTimestamps.php
```

`index.php` est le point d'entrée. Chaque classe est dans son propre fichier et son namespace correspond à son rôle. Le chargement est explicite avec `require_once` : aucun autoloader Composer n'est configuré dans cette démonstration.

## Exécution

Depuis la racine du dépôt :

```bash
php lab-php/pratique/application/index.php
```

## Parcours du code

### 1. Charger les classes et utiliser leurs namespaces

Au début de `index.php`, les instructions `use` importent l'exception, les modèles et le service. Les appels à `require_once` chargent ensuite leurs fichiers. L'ordre commence par les dépendances (exception et trait), puis les modèles et le service.

Par exemple, `Article.php` déclare `namespace App\Models;` et importe le trait avec `use App\Traits\HasTimestamps;`. Les chemins de fichiers rendent l'organisation visible, mais les namespaces ne chargent pas eux-mêmes les fichiers.

### 2. Partager l'horodatage avec un trait

`HasTimestamps` définit les dates de création et de modification, ainsi que les méthodes pour les lire et les mettre à jour. `Article` et `Section` utilisent toutes deux ce trait. Leur constructeur appelle `initializeTimestamps()` afin que les dates soient prêtes avant l'affichage.

Le trait n'est pas instancié seul : ses méthodes et propriétés deviennent disponibles dans les classes qui l'utilisent.

### 3. Valider et lancer une exception

`ArticleService::create()` reçoit un titre, un contenu et une section. Il vérifie d'abord que le titre n'est pas vide, puis que le contenu a la longueur minimale. Si une règle échoue, `throw` lance une `ValidationException`; sinon, le service crée et retourne un objet `Article`.

`ValidationException` étend `RuntimeException` et mémorise le nom du champ fautif dans `field`. Son accesseur `getField()` permet au code appelant d'identifier le champ sans analyser le message.

### 4. Intercepter à la frontière d'exécution

Dans `index.php`, le premier bloc `try` crée une section et un article valides, puis affiche leurs informations et dates. Le second scénario fournit un titre vide. Le bloc `catch` intercepte précisément `ValidationException` et affiche son champ et son message : l'exécution peut continuer après l'erreur attendue.

## Résultat attendu

Les horodatages varient selon le moment où le script est lancé :

```text
=== Création d'un article valide ===
Section : Technologie | Créée le : [date et heure] | Modifiée le : [date et heure]
Article : Découvrir PHP [Technologie] | Créé le : [date et heure] | Modifié le : [date et heure]

=== Gestion d'une validation invalide ===
Erreur sur le champ 'titre' : Le titre est obligatoire.
```

## Lien avec l'architecture du projet

La séparation `Models`, `Services`, `Exceptions` et `Traits` illustre une organisation possible pour une application PHP. Dans un framework ou le projet technique, les règles de validation, le mécanisme de chargement des classes et les modèles doivent suivre les conventions réellement utilisées.

## Limite et exercice complémentaire

L'exemple ne persiste aucune donnée et vérifie la longueur avec `strlen`, qui mesure des octets en UTF-8 plutôt que des caractères visibles. Tester le cas où le contenu est trop court, puis adapter la validation à une application qui dispose d'une extension de comptage Unicode.
