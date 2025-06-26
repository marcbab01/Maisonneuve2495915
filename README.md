Nom d'utilisateur: mobabin1993@gmail.com
Mot de passe: abc123456

Nom d'utilisateur: isaac05@example.com
Mot de passe: 111111111

🧾 Description du projet
Ce projet Laravel est une plateforme destinée aux étudiants d’un établissement scolaire. Il permet aux utilisateurs (authentifiés) de :

🔐 Se connecter via une interface sécurisée

📝 Publier des articles

👨‍🎓 Inscrire de nouveaux étudiants

📁 Partager des fichiers (uploads / téléchargements)

🚀 Fonctionnalités principales
🔐 Authentification
Formulaire de connexion basé sur le système d’authentification Laravel (Auth::routes())

Middleware auth appliqué aux pages restreintes

📝 Publication d’articles
Création, affichage et suppression d’articles

Les articles sont liés à l’utilisateur qui les publie

👨‍🎓 Gestion des étudiants
Formulaire pour inscrire un nouvel étudiant

Validation des données (nom, prénom, ville, etc.)

Interface de consultation de la liste des étudiants

📁 Partage de fichiers
Possibilité pour les utilisateurs d’uploader des fichiers (PDF, images, etc.)

Fichiers liés à l’utilisateur et/ou à un article

Gestion du stockage dans storage/app/public

⚙️ Technologies utilisées
Framework principal: Laravel 10

Base de données: MySQL

Frontend: Blade + Bootstrap (ou Tailwind CSS)

Stockage: Système de fichiers Laravel avec public disk