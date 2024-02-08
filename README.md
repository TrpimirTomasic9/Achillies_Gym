# Achilles Gym

## WordPress Theme for Gym

The Achilles Gym project originated in college as an assignment for the subject **CMS Systems**.

The project's theme was to create a WordPress theme for a gym, utilizing custom post types, taxonomies, and custom meta-boxes.

The website showcases all the knowledge acquired about using **WordPress**, which utilizes **PHP** programming language and **MySQL** for the database.

[![My Skills](https://skills.thijs.gg/icons?i=wordpress,php,mysql)](https://skills.thijs.gg)

---

### Administrative Interface

- The **Program** custom post type includes the **Equipment** custom post type, connected via a custom meta-box.
- The **Trainer** custom post type includes the **Program** custom post type, also connected via a custom meta-box.
- There is also the **Interest** custom post type.
- Each custom post type has its unique taxonomy.

---

### On the website, you can:

- Browse through points of interest.
- Explore programs, their trainers, and equipment.
- View trainers and their programs.
- View equipment and the associated programs.
- Find gym locations on the map.

---

## Project Setup

You need to install [XAMPP](https://www.apachefriends.org) and run **Apache** and **MySQL** through it.

Then, paste the **Achilles-Gym** folder into `C:\xampp\htdocs\` and rename it to `achilles_gym`.

Link to access the database: [http://localhost/phpmyadmin/index.php](http://localhost/phpmyadmin/index.php).

In **phpMyAdmin**, create a database named `achilles_gym` (Character Set should be **Collation**), and then import `achilles_gym_final.sql` located in the project's root.

Link to access the application: [http://localhost/achilles_gym/wp-admin/](http://localhost/achilles_gym/wp-admin/).
