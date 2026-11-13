# Besoins du produit — Blog des Lauréats

> Les fonctionnalités et rôles sont repris du contexte fourni. Les priorités sont pédagogiques et provisoires. Les exigences de qualité sont des sujets à valider, et non des engagements déjà décidés.

## Besoins fonctionnels

| ID | Besoin fonctionnel | Acteur(s) | Source / statut |
|---|---|---|---|
| BF-01 | Consulter la liste des articles publiés. | Visiteur, étudiant | Fonction explicitement fournie. |
| BF-02 | Consulter une expérience ou un conseil publié. | Étudiant | Fonction explicitement fournie. |
| BF-03 | Rechercher des articles. | Étudiant | Fonction explicitement fournie ; critères de recherche à préciser. |
| BF-04 | Créer un article. | Lauréat | Fonction explicitement fournie. |
| BF-05 | Modifier un article. | Lauréat | Fonction explicitement fournie ; règles de propriété à confirmer. |
| BF-06 | Publier un article. | Lauréat | Fonction explicitement fournie ; workflow de publication à confirmer. |
| BF-07 | Gérer les utilisateurs. | Administrateur | Fonction explicitement fournie ; opérations détaillées à préciser. |
| BF-08 | Gérer les articles et contrôler les publications. | Administrateur | Fonction explicitement fournie ; règles de contrôle à préciser. |
| BF-09 | Gérer les catégories. | Administrateur | Fonction explicitement fournie ; règles d'affectation à préciser. |

## Besoins non fonctionnels à explorer

Le contexte ne fixe pas d'exigences non fonctionnelles. Les thèmes suivants sont des questions à discuter avec les parties prenantes avant toute spécification :

| ID | Thème candidat | Question de validation |
|---|---|---|
| BNF-01 | Sécurité et droits d'accès | Comment distinguer les permissions de visiteur, étudiant, lauréat et administrateur ? |
| BNF-02 | Confidentialité des comptes | Quelles données d'utilisateur sont nécessaires et comment doivent-elles être protégées ? |
| BNF-03 | Accessibilité et facilité d'utilisation | Quels appareils, besoins d'accessibilité et parcours doivent être pris en charge ? |
| BNF-04 | Performance de consultation et recherche | Quels volumes et temps de réponse sont attendus ? |
| BNF-05 | Disponibilité et sauvegarde | Quel niveau de disponibilité et quelle politique de restauration sont nécessaires ? |
| BNF-06 | Modération et traçabilité | Quelles actions de contrôle doivent être conservées et consultables ? |

## Décisions produit ouvertes

1. La publication par un lauréat est-elle immédiate ou nécessite-t-elle une approbation ?
2. Un visiteur et un étudiant ont-ils des droits différents, ou l'étudiant est-il simplement un visiteur cible ?
3. Un lauréat peut-il modifier un article après sa publication ?
4. Que signifie concrètement « gérer » un utilisateur, un article ou une catégorie ?
5. Quels champs, filtres et règles de recherche sont nécessaires ?
6. Quelles exigences non fonctionnelles sont obligatoires pour la première version ?
