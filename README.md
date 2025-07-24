<<<<<<< HEAD
# 🍽️ Projet Laravel – Plateforme de Gestion de Stands **"Eat&Drink"**

## Objectif du Projet
Développer une application web pour l'événement culinaire **Eat&Drink**, dans laquelle:
- Les exposants (entrepreneurs) peuvent s’inscrire, créer leur stand et ajouter des produits
- Les visiteurs peuvent consulter les stands et passer commande
- Les administrateurs peuvent gérer les accès et les activités

---

## Répartition du Travail – 3 Développeurs

### Vianney – Authentification & Gestion des Rôles
- Auth Laravel complète (login / register / reset)
- Rôles: `admin`, `entrepreneur_en_attente`, `entrepreneur_approuve`
- Middleware selon rôle
- Page de suivi pour les demandes
- Dashboard admin avec approbation / rejet
- Seeder pour création d’admin

**Dossiers clés**:
`app/Http/Middleware`, `routes/web.php`, `resources/views/auth/`, `database/seeders/`

---

### 🛒 Feliciano – Gestion des Stands & Produits
- Modèle `Stand` lié à l’utilisateur
- Formulaires de création/édition
- CRUD des produits (nom, description, prix, image)
- Validation côté back et front
- Dashboard entrepreneur

**Dossiers clés**:
`app/Models/Stand.php`, `resources/views/entrepreneur/`, `app/Http/Controllers/`

---

### Credo – Vitrine Publique & Commandes
- Page publique listant les stands approuvés
- Page de chaque stand avec ses produits
- Système de panier via session
- Soumission de commande sans paiement
- Modèle `Commande`
- Admin: consultation des commandes
- Bonus: envoi d’email à chaque commande

**Dossiers clés**:
`resources/views/public/`, `app/Models/Commande.php`, `app/Http/Controllers/PublicController.php`

---

## 🧱 Stack Technique

- **Framework :** Laravel (v10+)
- **Langages :** PHP, Blade, JavaScript (jQuery ou Alpine), HTML/CSS
- **Base de Données :** SQLite (recommandé pour démarrer) ou MySQL
- **Outils :** Laravel Breeze/Fortify pour auth, Laravel Mail pour notification

---

## ✅ Étapes recommandées

1. **Initialisation commune du projet Laravel**
2. **Création d’un repo GitHub partagé**
3. **Branche par développeur ou par module**
4. **Revue de code régulière et tests**
5. **Fusion progressive vers la branche principale (`main` ou `dev`)**

---

## 🔔 Communication

Utilisez un fichier `README_MODULE.md` dans chaque sous-dossier ou une section dans le README global pour signaler :
- Avancement
- Décisions techniques
- Routes ou APIs disponibles
=======
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
>>>>>>> 2e53d3f (Setting up  mail sending and adding some middlewares)



