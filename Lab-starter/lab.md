---
marp: true
theme: default
size: 16:9
paginate: true
style: |
  section {
    font-family: Arial, sans-serif;
    background: #ffffff;
    color: #202938;
    padding: 48px 64px;
  }
  h1 {
    color: #1769aa;
  }
  h2 {
    color: #1769aa;
  }
  strong {
    color: #1769aa;
  }
  code {
    background: #eef4fa;
    color: #143b5d;
  }
---

<!-- _class: title -->

# Development Environment

<div class="by">
  <strong>Ranya Amzghar</strong>

encadre: Essarraj Fouad 
</div>

---

<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problem
3. Solution

---

## Problems Encountered

- Hidden files and folders, such as `.git`, were not visible in the file explorer.
- The `README.md` file was not displayed as expected.
- We sometimes forgot which lines of code needed to be modified.

---

<!-- _class: light -->

## IDE

IDE signifie Integrated Development Environment.

C’est un logiciel qui regroupe plusieurs outils permettant aux développeurs d’écrire, d’exécuter, de tester et de déboguer leur code dans un seul environnement.

Example: Visual Studio Code.

---

## Solutions Implemented

### 01 — Show hidden files

Enabled the relevant file-explorer setting so hidden files and folders, including `.git`, could be seen.

### 02 — Display README.md

Adjusted the relevant VS Code option/extension setting so `README.md` appeared in the explorer.

---
<!-- TODO: -->
<!-- _class: light -->

## Solutions Implemented

### 03 — Remember code changes

Installed **Todo Highlight** to highlight important comments and reminders in the code.

### 04 — Preview web pages

Installed **Live Server** to launch a local development server and automatically refresh web pages after changes.