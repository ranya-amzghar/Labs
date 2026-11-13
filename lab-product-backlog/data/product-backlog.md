# Product Backlog — Blog des Lauréats

> **Backlog pédagogique provisoire.** Les éléments sont dérivés du périmètre fourni ; priorité, ordre, estimation et critères détaillés sont des propositions à valider avec le Product Owner et l'équipe. L'exemple ne décrit pas une application déjà réalisée.

## Légende

- **Priorité :** MoSCoW — Must (indispensable proposé), Should (important proposé), Could (souhaitable), Won't (hors périmètre actuel).
- **Estimation :** points relatifs selon une échelle Fibonacci ; valeurs de départ à réestimer en équipe, pas une durée.
- **Critères :** conditions d'acceptation proposées pour rendre les histoires vérifiables.

## Éléments ordonnés

| Rang | ID | User Story | Priorité | Estimation |
|---:|---|---|---|---:|
| 1 | US-01 | En tant que visiteur, je veux consulter les articles publiés afin de découvrir les expériences partagées. | Must | 3 |
| 2 | US-02 | En tant qu'étudiant, je veux ouvrir un article afin de lire l'expérience et les conseils d'un lauréat. | Must | 2 |
| 3 | US-03 | En tant qu'étudiant, je veux rechercher des articles afin de trouver des expériences correspondant à mon besoin. | Should | 5 |
| 4 | US-04 | En tant qu'étudiant, je veux découvrir les articles par catégorie afin d'explorer un thème. | Should | 3 |
| 5 | US-05 | En tant que lauréat, je veux créer un article afin de préparer le partage de mon expérience. | Must | 5 |
| 6 | US-06 | En tant que lauréat, je veux modifier mon article afin de corriger ou compléter son contenu. | Must | 3 |
| 7 | US-07 | En tant que lauréat, je veux publier mon article afin de le rendre accessible aux lecteurs. | Must | 3 |
| 8 | US-08 | En tant qu'administrateur, je veux gérer les utilisateurs afin d'administrer les comptes de la plateforme. | Must | 5 |
| 9 | US-09 | En tant qu'administrateur, je veux gérer les catégories afin d'organiser les articles. | Should | 3 |
| 10 | US-10 | En tant qu'administrateur, je veux contrôler les publications afin de gérer les articles présents sur le blog. | Must | 5 |
| 11 | US-11 | En tant qu'administrateur, je veux gérer les articles afin de maintenir le contenu du blog. | Should | 5 |

## Critères d'acceptation proposés

### US-01 — Consulter les articles publiés

- La page de consultation affiche les articles publiés.
- Chaque résultat permet d'identifier le titre et l'auteur de l'article.
- Un article non publié n'apparaît pas dans la consultation publique.

### US-02 — Ouvrir un article

- L'étudiant peut ouvrir un article depuis la liste.
- Le contenu publié et les informations de l'article sont lisibles.
- Un article inexistant ou non publié n'est pas présenté comme un contenu public.

### US-03 — Rechercher des articles

- L'étudiant peut saisir un terme de recherche.
- Les résultats correspondent au terme selon les champs de recherche qui seront définis.
- Un état explicite est affiché lorsqu'aucun résultat ne correspond.

### US-04 — Découvrir les articles par catégorie

- Les catégories disponibles sont visibles pour l'étudiant.
- Le choix d'une catégorie affiche les articles publiés associés.
- Un état explicite est affiché si la catégorie ne contient aucun article publié.

### US-05 — Créer un article

- Le lauréat peut saisir les informations nécessaires à la création d'un article.
- L'article créé est associé à son auteur.
- Les champs obligatoires restent à définir avec le Product Owner avant validation.

### US-06 — Modifier son article

- Le lauréat peut modifier un article qu'il est autorisé à gérer.
- Les changements sauvegardés sont visibles lors de la prochaine consultation autorisée.
- La règle d'autorisation et le traitement d'un article déjà publié restent à confirmer.

### US-07 — Publier un article

- Le lauréat peut déclencher l'action de publication pour un article prêt.
- L'état de publication est identifiable après l'action.
- L'accès public dépend de l'état publié.
- Le lien entre publication par le lauréat et contrôle par l'administrateur est une décision ouverte.

### US-08 — Gérer les utilisateurs

- L'administrateur peut accéder à la gestion des utilisateurs.
- Les opérations de gestion et leurs effets sont définis avant implémentation.
- Les actions de gestion ne sont accessibles qu'aux personnes autorisées, selon une règle à spécifier.

### US-09 — Gérer les catégories

- L'administrateur peut consulter les catégories existantes.
- L'administrateur peut réaliser les opérations de gestion retenues par le Product Owner.
- L'effet d'une modification ou suppression sur les articles associés est défini avant implémentation.

### US-10 — Contrôler les publications

- L'administrateur peut consulter les articles à contrôler ou déjà publiés selon le workflow retenu.
- L'administrateur peut appliquer les actions de contrôle décidées par le Product Owner.
- Le statut résultant est visible pour les personnes autorisées.
- Les états, actions possibles et notifications sont à confirmer.

### US-11 — Gérer les articles

- L'administrateur peut retrouver un article à gérer.
- Les opérations autorisées sont définies pour chaque état d'article.
- La gestion ne supprime ni ne modifie un contenu sans une action explicite et autorisée.

## Dépendances et préparation indicative des Sprints

Cette proposition est un support de discussion, pas un plan engagé :

| Proposition | Éléments candidats | Point à vérifier |
|---|---|---|
| Sprint candidat A | US-01, US-02, US-05 | Valider le contenu minimal d'un article et le parcours de consultation. |
| Sprint candidat B | US-06, US-07, US-10 | Décider du workflow de publication et des droits de modification. |
| Sprint candidat C | US-03, US-04, US-08, US-09, US-11 | Définir les règles de recherche et les opérations d'administration. |

L'équipe sélectionne les éléments d'un Sprint selon l'objectif, les dépendances, la capacité et la Definition of Done. Aucun nombre de points n'est converti en durée ou en promesse de livraison.

## Questions de refinement

- Quels champs constituent un article valide ?
- La publication est-elle immédiate ou modérée ?
- Quels rôles peuvent consulter, modifier, publier, retirer ou supprimer un contenu ?
- Quels critères de recherche sont utiles aux étudiants ?
- Quelles opérations précises sont comprises dans la gestion des utilisateurs et des catégories ?
- Quels critères de qualité et de sécurité sont indispensables au premier incrément ?
