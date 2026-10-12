---
marp: true
theme: default
paginate: true
---

# Antigravity : Documentation simplifiée

## 1. Qu’est-ce qu’Antigravity ?

Antigravity est un environnement de développement basé sur des agents d’intelligence artificielle. Ces agents peuvent planifier des tâches, écrire du code, exécuter des commandes et tester le travail réalisé. Le développeur supervise les actions de l’agent et vérifie les résultats.

-----

## 2. Le déroulement du travail

Le workflow se compose de quatre étapes :

**Planifier → Vérifier le plan → Exécuter → Tester**

1. **Planifier (Plan)** : demander à l’agent de préparer un plan avant de commencer, par exemple avec `/plan`.
2. **Vérifier (Review)** : lire le plan et demander des modifications si nécessaire avant de modifier les fichiers.
3. **Exécuter (Execute)** : autoriser l’agent à réaliser le travail.
4. **Tester (Verify)** : vérifier soi-même que le résultat fonctionne correctement.

------

## 3. Structure d’un prompt

Un prompt est une instruction donnée à l’agent pour lui expliquer le travail à réaliser.

Un bon prompt contient les éléments suivants :

* **Goal (Objectif)** : ce qu’il faut créer ou corriger.
* **Context (Contexte)** : le projet, le langage ou le framework utilisé.
* **Scope (Périmètre)** : les fichiers concernés et les éléments à ne pas modifier.
* **Constraints (Contraintes)** : les règles à respecter, les bibliothèques autorisées et le style souhaité.
* **Process (Déroulement)** : demander un plan et attendre l’approbation avant de commencer.
* **Done when (Condition de réussite)** : préciser comment vérifier que le travail est terminé.
* **Output (Résultat)** : demander un résumé des modifications effectuées.

Les éléments essentiels sont l’objectif, le contexte, le périmètre et la condition de réussite.

------
### Exemple de prompt

```text
Objectif : créer une application Todo.
Contexte : HTML, CSS et JavaScript.
Périmètre : travailler uniquement dans les fichiers du projet.
Contraintes : utiliser un code simple et éviter les bibliothèques externes.
Déroulement : proposer un plan et attendre mon approbation.
Condition de réussite : pouvoir ajouter, afficher et supprimer des tâches.
Résultat : résumer les modifications effectuées.
```
-------

## 4. Les Rules et les Skills

Les Rules et les Skills permettent de guider l’agent, mais ils ont des rôles différents.

| Fonctionnalité       | Rôle                                                   | Utilisation                                           |
| -------------------- | ------------------------------------------------------ | ----------------------------------------------------- |
| Rules (Règles)       | Définir des consignes permanentes                      | Préciser le rôle de l’agent et les règles à respecter |
| Skills (Compétences) | Fournir une méthode réutilisable pour certaines tâches | Réaliser des tâches spécifiques, comme créer un CRUD  |

------
### A. Créer une Rule

Une Rule définit les règles que l’agent doit suivre.

Exemple de fichier : `.agents/rules/backend-developer.md`

```markdown
Tu es un développeur backend spécialisé en Laravel.

- Présente toujours un plan avant de modifier les fichiers.
- Ne modifie jamais le fichier .env.
```



-----

### B. Créer une Skill

Une Skill décrit une méthode que l’agent peut utiliser pour réaliser une tâche.

Exemple de fichier : `.agents/skills/laravel-crud/SKILL.md`

```markdown
---
name: laravel-crud
description: Créer un CRUD complet avec Laravel.
---

# Laravel CRUD

1. Créer la migration et le modèle.
2. Créer le contrôleur avec validation.
3. Ajouter les routes et les vues Blade.
```
------

### C. Demander à l’agent d’utiliser les Rules et les Skills

On peut donner à l’agent une instruction pour qu’il consulte les règles et utilise la compétence appropriée.

Exemple :

```text
Lis les règles présentes dans C:/agent-kit/rules/
et respecte-les.

Utilise la Skill laravel-crud pour cette tâche.
```

Les chemins et les conventions de fichiers peuvent varier selon la version et la configuration d’Antigravity.

------
## 5. MCP (Model Context Protocol)

MCP est un protocole qui permet de connecter un agent d’intelligence artificielle à des outils et à des services externes, par exemple GitHub, Google Drive ou certaines bases de données.

### Comment configurer un serveur MCP ?

1. Ouvrir le panneau de l’agent.
2. Cliquer sur le menu « ... ».
3. Sélectionner « Manage MCP Servers ».
4. Ouvrir « View raw config ».
5. Ajouter la configuration du serveur dans `mcp_config.json`.
6. Enregistrer, actualiser la configuration et redémarrer Antigravity si nécessaire.

-----

### Exemple de configuration pour GitHub

```json
{
  "mcpServers": {
    "github": {
      "serverUrl": "https://api.githubcopilot.com/mcp/",
      "headers": {
        "Authorization": "Bearer YOUR_TOKEN_HERE"
      }
    }
  }
}
```

**Attention :** cet exemple est indicatif. Il faut vérifier que le serveur est compatible avec la version d’Antigravity utilisée. Le jeton d’accès doit rester secret et ne doit pas être partagé ou enregistré directement dans un dépôt public.

-----

## 6. Exercices pratiques

### Exercice 1 : Créer une application Todo

Créer une application qui permet d’ajouter, d’afficher et de supprimer des tâches.

### Exercice 2 : Tester un formulaire de connexion

Demander à l’agent de tester un formulaire de connexion et de détecter les erreurs.

### Exercice 3 : Utiliser plusieurs agents

Demander à un agent de travailler sur le frontend et à un autre de travailler sur le backend, en définissant clairement leurs responsabilités.

### Exercice 4 : Corriger un bug

Introduire une erreur dans un projet, demander à l’agent de l’identifier et de la corriger, puis vérifier le résultat.

------

## Conclusion

Antigravity permet de travailler avec des agents d’intelligence artificielle pour développer, tester et améliorer des applications. Pour l’utiliser efficacement, il faut écrire des prompts clairs, définir des règles, réutiliser des Skills et vérifier le code généré avant de le valider.