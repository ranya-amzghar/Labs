---
marp: true
theme: default
---

# MVC 

---

# Plan 

1. **Qu'est ce qu'un MVC**
2. **Model**
3. **View**
4. **Controller**
5. **Fonctionnement**

---

# C’est quoi MVC ?

 Model – View – Controller

---

# Model:

Le Model représente et gère les données de l'application.

---

# View:

La View est la partie visible de l'application.

---

# Controller:

Le Controller reçoit les requêtes et coordonne le traitement.

---

# Fonctionnement global de MVC

```text
Utilisateur ── GET /articles ──► Route ──► Controller
                                              │  ▲
                                              ▼  │
                                        Model ⇄ Base de données
                                              │
                                              ▼
Utilisateur ◄────── HTML ◄────────────── View (Blade)
```
