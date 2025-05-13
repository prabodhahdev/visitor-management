# 🧾 Visitx – Visitor Management System

Visitx is a web-based Visitor Management System developed using **PHP Laravel**. It provides an efficient and secure platform to manage visitors to an organization. The system supports two types of users: **Admin** and **Receptionist**. The admin can manage receptionists, departments, and visitors, while receptionists can track visitor progress, add or edit visitors, and manage their own profile.

---

## 🚀 Features

### 👤 **Admin Panel**
- Secure Admin login
- Manage Receptionists:
  - Add, Edit, and Delete Receptionists
- Manage Departments:
  - Add, Edit, and Delete Departments
- Manage Visitors:
  - Add, Edit, and Delete Visitor information
- View all visitor records and track visitor activity

### 🧑‍💼 **Receptionist Panel**
- Secure Receptionist login using email & password
- Add new visitors with detailed information:
  - Name, Email, Mobile, Address, Department, Reason for visit, etc.
- Edit visitor information
- Track visitor progress:
  - Who arrived, whom they are meeting, the reason for visit, entry and exit times
- View and update Receptionist profile information

---

## 🏗️ Built With
- **Laravel 10+** – The PHP Framework for Web Artisans
- **MySQL** – Database management system
- **Bootstrap 5** – Front-end framework for responsive design
- **Blade Templating** – Laravel’s templating engine
- **PHP 8** – Server-side scripting language
- **jQuery & DataTables** – For handling dynamic table data

---

## ⚙️ Installation

### Prerequisites
- PHP 8.0 or higher
- Composer (for managing PHP dependencies)
- MySQL or MariaDB for the database
- Laravel 10+

### Installation Steps

1. **Clone the repository:**
   ```bash
     git clone https://github.com/prabodhahdev/visitor-management
   cd visitor-management
2. **Install dependencies using Composer:**
   ```bash
     composer install

3. **Set up environment variables:
Copy .env.example to .env and configure your database settings:**
   ```bash
     cp .env.example .env

4. **Generate the application key:**
   ```bash
   php artisan key:generate

5. **Run the migrations to set up the database tables:**
   ```bash
   php artisan migrate

6. **Start the Laravel development server:**
   ```bash
   php artisan serve

7. **Start the Laravel development server:**
    ```bash
   Open your browser and go to http://127.0.0.1:8000.

## 👨‍💼 Usage

### 🔐 Admin Features

Admins can log in to the admin panel using their credentials. Once logged in, they have full control over the system:

- **Manage Receptionists**  
  Add, edit, and delete receptionist accounts who will handle visitor data.

- **Manage Departments**  
  Create and update department details within the organization.

- **Manage Visitors**  
  View, add, edit, and track visitor details, including who they are visiting, the reason for the visit, and timestamps for entry and exit.

---

### 🧑‍💼 Receptionist Features

Receptionists can log in using their registered email and password. Once logged in, they can perform the following operations:

- **Add Visitors**  
  Record visitor information such as name, contact details, department to visit, reason for visit, time of arrival, etc.

- **Edit Visitor Information**  
  Modify existing visitor records in case of updates or corrections.

- **Track Visitor Progress**  
  Monitor who arrived, who they came to meet, purpose of visit, entry time, and leave time.

- **Update Profile**  
  Edit their personal profile information, including name, contact, and password.


