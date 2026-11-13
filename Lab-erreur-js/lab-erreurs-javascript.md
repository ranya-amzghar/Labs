---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    background: #f7f8fc;
    color: #172033;
    font-family: "Aptos", "Segoe UI", sans-serif;
    padding: 48px 64px;
  }
  h1, h2 {
    color: #183b66;
  }
  h1 {
    font-size: 2em;
  }
  strong {
    color: #bf542d;
  }
  code {
    color: #a33a24;
  }
  pre {
    border-left: 4px solid #e28a45;
    background: #edf1f7;
    padding: 14px 18px;
  }
---

# Lab : erreurs JavaScript
## Lire, comprendre et déboguer les erreurs JS

**Réalisée par :** Ranya Amzghar  
**Encadrée par :** Essarraj Fouad

---

<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## Introduction

Une erreur JavaScript signale qu'une instruction ne peut pas être analysée ou exécutée comme prévu.

- Elle fournit un **type**, un **message** et souvent une **pile d'appels**.
- L'analyse de ces indices aide à localiser la cause plutôt qu'à masquer le symptôme.
- Outils : Node.js, console des DevTools du navigateur et débogueur de VS Code.

---

## Problems Encountered — 5 erreurs JavaScript

Exemples de problèmes possibles pendant l'exécution ou l'analyse du code :

| Type d'erreur | Exemple fautif | Cause |
|:---|:---|:---|
| `SyntaxError` | `const = 5;` | Déclaration invalide |
| `ReferenceError` | `console.log(prenom);` | `prenom` n'est pas déclarée |
| `TypeError` | `null.nom` | Lecture d'une propriété sur `null` |
| `RangeError` | `(1.2).toFixed(101)` | Précision hors limites |
| `URIError` | `decodeURIComponent("%")` | Séquence d'URI mal formée |

---

## Solutions Implemented — Corrections des 5 erreurs

| Type d'erreur | Correction |
|:---|:---|
| `SyntaxError` | `const score = 5;` — écrire une déclaration valide. |
| `ReferenceError` | `const prenom = "Lina"; console.log(prenom);` — déclarer la variable. |
| `TypeError` | `const profil = null; console.log(profil?.nom ?? "Invité");` — gérer la valeur absente. |
| `RangeError` | `(1.2).toFixed(2)` — utiliser une précision comprise entre 0 et 100. |
| `URIError` | `decodeURIComponent("%20")` — fournir une séquence encodée valide. |

Après la correction, relancer le code pour vérifier le résultat attendu.

---

## Anatomie d'une erreur

Exemple de message (le texte exact varie selon le moteur et le contexte) :

```text
TypeError: Cannot read properties of null (reading 'nom')
    at afficherProfil (app.js:5:22)
    at app.js:9:1
```

- **TypeError** : catégorie de l'erreur.
- **Message** : l'accès à `nom` a été tenté sur `null`.
- **`app.js:5:22`** : fichier, ligne et colonne du point signalé.
- **Pile d'appels** : appels ayant conduit à cette ligne ; commencer par le haut.

---

## Trois types à reconnaître

| Type | Indice | Exemple |
|:---|:---|:---|
| `SyntaxError` | Le code ne respecte pas la syntaxe attendue. | Parenthèse ou accolade manquante |
| `ReferenceError` | Un identifiant n'est pas défini ou accessible. | `console.log(nomUtilisateur)` si la variable n'existe pas |
| `TypeError` | Une opération n'est pas valide pour cette valeur. | Lire une propriété de `null` |

Une `SyntaxError` empêche généralement le script concerné d'être analysé ; les autres exemples surviennent à l'exécution.

---

## Exemple : sécuriser une valeur nullable

### Code fautif

```javascript
const utilisateur = null;
console.log(utilisateur.nom);
```

L'accès à `nom` échoue, car `utilisateur` vaut `null`.

### Correction si l'absence d'utilisateur est acceptable

```javascript
console.log(utilisateur?.nom ?? "Invité");
```

`?.` interrompt l'accès si la valeur est absente ; `??` choisit `"Invité"` uniquement si le résultat est `null` ou `undefined`.

---

## Exercice : diagnostiquer avant de corriger

1. Enregistrer le code dans `app.js`.
2. L'exécuter avec `node app.js` ou dans la console du navigateur.
3. Relever le type, le message et la première ligne de la pile dans le code.
4. Expliquer pourquoi l'appel échoue, puis proposer une correction.

```javascript
function afficherNom(utilisateur) {
  return utilisateur.nom.toUpperCase();
}

console.log(afficherNom(null));
```

---

## Correction de l'exercice

Ici, l'argument reçu vaut `null` : la lecture de `utilisateur.nom` déclenche un `TypeError`.

```javascript
function afficherNom(utilisateur) {
  if (utilisateur == null) {
    return "Utilisateur inconnu";
  }

  return utilisateur.nom.toUpperCase();
}

console.log(afficherNom(null));
```

**Résultat attendu :** `Utilisateur inconnu`

Le garde-fou rend le cas absent explicite. Si cette donnée est obligatoire, il vaut mieux signaler l'entrée invalide plutôt que fournir une valeur de remplacement.
