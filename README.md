# 🧮 Fondations PHP 7 et Typage Strict
## Description
Ce projet PHP démontre plusieurs concepts fondamentaux :

- Gestion des erreurs et exceptions avec ini_set, error_reporting et try/catch.

- Autoloading des classes avec spl_autoload_register.

- Définition de fonctions utilitaires (bonjour, addition, division).

- Création d’une classe simple (Personne) avec une méthode de salutation.

- Organisation du code en structure de projet (public et src).
## Project Structure
```
project/
├── public/
│   └── index.php
├── src/
|   ├── Personne.php
|   └── utils.php
└── README.md
```
# ⚙️ Features
## 1. Fichier index.php
- Active l’affichage des erreurs (ini_set, error_reporting).

- Déclare des fonctions arithmétiques :

- addition(int $a, int $b): int

- division(int $a, int $b): float avec gestion d’exception en cas de division par zéro.

- Charge les utilitaires (require utils.php).

- Met en place un autoload pour les classes du dossier src.

- Instancie la classe Personne et appelle sa méthode salue().

## 2. Fichier Personne.php
- Classe Personne avec méthode salue() qui retourne un message de salutation.

## 3. Fichier utils.php
- Fonction bonjour($nom) qui retourne une salutation personnalisée.

## 🖥️ Example Execution

### Exploration des annotations standard :

- <img width="480" height="504" alt="image" src="https://github.com/user-attachments/assets/6c3ffa2d-f1da-4315-8932-6e61d8ec4d33" />
- <img width="960" height="1008" alt="image" src="https://github.com/user-attachments/assets/1c9c07d4-44d0-4eff-a791-85a1699e04a1" />

## 💡 Concepts Practiced

- Gestion des erreurs et exceptions en PHP.

- Autoloading des classes avec spl_autoload_register.

- Organisation du projet en public et src.

- Création de classes et fonctions utilitaires.

- Typage strict (declare(strict_types=1)).



