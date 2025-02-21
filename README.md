# 📚 Gestion de Bibliothèque - Saint-Marc

## 📖 Description du projet
Ce projet est une application web développée en **Laravel** pour la Bibliothèque Municipale de la ville de Saint-Marc. L'objectif est de moderniser et digitaliser la gestion des livres et des emprunts.

## 🛠️ Fonctionnalités
### 🔐 Gestion de l'authentification
- Inscription des utilisateurs
- Connexion et déconnexion
- Affichage des profils des utilisateurs

### 📚 Gestion des livres
- Affichage de la liste des livres disponibles
- Ajout de nouveaux livres
- Modification et suppression des livres existants

### 📑 Gestion des emprunts
- Enregistrement des emprunts de livres
- Gestion des retours de livres

## 🚀 Installation
### Prérequis
- PHP >= 8.0
- Composer
- MySQL
- Laravel

### Étapes d’installation
1. **Cloner le dépôt**
   ```sh
   git clone https://github.com/votre-repo.git
   cd votre-repo
   ```
2. **Installer les dépendances**
   ```sh
   composer install
   ```
3. **Configurer l’environnement**
    - Copier le fichier `.env.example` et le renommer en `.env`
    - Modifier les informations de connexion à la base de données
   ```sh
   cp .env.example .env
   ```
4. **Générer la clé de l’application**
   ```sh
   php artisan key:generate
   ```
5. **Exécuter les migrations**
   ```sh
   php artisan migrate
   ```
6. **Lancer le serveur**
   ```sh
   php artisan serve
   ```
   L’application sera accessible sur `http://127.0.0.1:8000`

## 🧪 Tests
Pour exécuter les tests unitaires :
```sh
php artisan test
```

## 🤝 Contribuer
Les contributions sont les bienvenues !
1. Forker le projet
2. Créer une branche (`feature/nouvelle-fonctionnalite`)
3. Committer vos modifications (`git commit -m 'Ajout d'une nouvelle fonctionnalité'`)
4. Pousser la branche (`git push origin feature/nouvelle-fonctionnalite`)
5. Ouvrir une Pull Request

