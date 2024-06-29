# Tafseel (تفصيل)
=====================
#### Task Management Web Application

[![Build Status](https://travis-ci.org/your-username/tafseel.svg?branch=master)](https://travis-ci.org/your-username/tafseel)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

## About Tafseel
---------------

Tafseel is a web-based task management application that helps you organize and prioritize your tasks, projects, and teams. With Tafseel, you can create and assign tasks, track progress, and collaborate with your team members.

## Features
------------

### Task Management

* Create and manage tasks with ease
* Assign tasks to team members and track progress
* Set deadlines and reminders for tasks

### Team Collaboration

* Invite team members to collaborate on tasks and projects
* Assign roles and permissions to team members
* Track team performance and progress

### Reporting and Analytics

* Generate detailed reports on task progress and performance
* Track team velocity and burndown rates
* Identify bottlenecks and areas for improvement

## Getting Started
-------------------
* Please Make sure you have installed PHP 8.2+, composer, Git and npm in your local Machine first
* Open Command Prompt and follow these installition steps.

### Installation Steps:

1. Clone the repository: `git clone https://github.com/mgogah/Task-Management-App.git`
2. Entering App folder: `cd Task-Management-App`
3. Install Required packages: `composer install`
4. Install dependencies: `npm install`
5. Create .env file By Renaming .env.example to .env
6. Generate key: `php artisan key:generate`
7. Linking storage: `php artisan storage:link`
8. Creating DB: `php artisan migrate`
9. Run the server: `php artisan serve`

### DB Configuration

* Tafseel uses SqLite by default so you don't need to install anything in your local machine


## Contributing
---------------

Contributions are welcome! If you'd like to contribute to Tafseel, please follow these steps:

1. Fork the repository: `git fork https://github.com/mgogah/Task-Management-App.git`
2. Create a new branch: `git checkout -b my-feature`
3. Make your changes and commit them: `git commit -m "My feature"`
4. Push your changes: `git push origin my-feature`
5. Create a pull request: `git request-pull origin my-feature`

## License
---------

Tafseel is licensed under the MIT License. See [LICENSE](LICENSE) for details.

## Authors
-----------

* [Your Name](https://github.com/mgogah)

## Acknowledgments
----------------
Tafseel is a web app built with Laravel web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

We'd like to thank everyone who has contributed to Tafseel, and we hope to continue growing and improving the application.

**Tafseel (تفصيل)**
=====================
## تهيئة النظام
* الرجاء تنصيب PHP 8.2+, composer, Git, npm قبل البدء في خطوات تشغيل التطبيق

### خطوات التنصيب

1. فتح موجه الاوامر CMD
2. احضار ملفات التطبيق بالامر: `git clone https://github.com/mgogah/Task-Management-App.git`
3. الدخول لمجلد التطبيق بالامر: `cd Task-Management-App`
4.  تنصيب باكجات التطبيق بالامر: `composer install`
5. تنصيب مكتبات بالامر: `npm install`
6. إعادة تسمية الملف .env.example الى .env
7. إنشاء مفتاح خاص بالتطبيق: `php artisan key:generate`
8. ربط مستودع التخزين: `php artisan storage:link`
9. إنشاء قاعدة البيانات: `php artisan migrate`
10. تشغيل التطبيق: `php artisan serve`
