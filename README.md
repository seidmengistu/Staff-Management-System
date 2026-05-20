
````markdown
# Staff Management System

A web-based Staff Management System built with PHP for managing staff information, announcements, academic calendars, materials, borrowing records, and role-based user access.

This project was designed to support administrative and staff-related workflows in an organized way. It provides separate modules for administrators, staff members, and storekeepers, making it easier to manage daily institutional operations from one system.

## Features

### Admin Panel
- Admin dashboard
- Manage staff members
- Create and manage academic calendars
- Publish announcement messages
- View and update admin profile

### Staff Member Portal
- Staff dashboard
- View academic calendar
- View announcements
- Access materials information

### Storekeeper Module
- Storekeeper dashboard
- Manage materials
- Track borrowed materials
- Track returned materials
- Send and manage messages
- View academic calendar

### Authentication
- User login
- User registration
- Logout functionality
- Account management
- Role-based access structure

## Technologies Used

- PHP
- HTML
- CSS
- JavaScript
- Bootstrap/Admin template assets
- MySQL database

## Project Structure

```text
Staff-Management-System/
│
├── Admin/
│   ├── AdminDashboard.php
│   ├── AnnounceMessages/
│   ├── CreateAcadamicCalander/
│   ├── ManageStaffMember/
│   └── Profile/
│
├── StaffMembers/
│   ├── home1.php
│   ├── AcademicCalander/
│   ├── Announcements/
│   └── MaterialsInformation/
│
├── StoreKepper/
│   ├── home1.php
│   ├── AcademicCalander/
│   ├── BorrowMaterials/
│   ├── Materials/
│   ├── Message/
│   └── ReturnedMaterials/
│
├── includes/
│   ├── Auth/
│   ├── Layout/
│   ├── css/
│   ├── js/
│   ├── images/
│   ├── plugins/
│   ├── config.php
│   ├── homeMiddleware.php
│   └── notify.php
│
├── Auth/
├── Account.php
├── index.php
├── login.php
├── logout.php
├── signup.php
└── load.php
````

## Installation and Setup

### 1. Clone the repository

```bash
git clone https://github.com/seidmengistu/Staff-Management-System.git
```

### 2. Move the project to your local server directory

If you are using XAMPP, move the project folder to:

```text
htdocs/
```

Example:

```text
C:/xampp/htdocs/Staff-Management-System
```

### 3. Start Apache and MySQL

Open XAMPP or your local server environment and start:

* Apache
* MySQL

### 4. Create the database

Open phpMyAdmin:

```text
http://localhost/phpmyadmin
```

Create a new database for the project.

Example:

```text
staff_management_system
```

### 5. Configure database connection

Open the database configuration file:

```text
includes/config.php
```

Update the database credentials based on your local environment:

```php
$host = "localhost";
$user = "root";
$password = "";
$database = "staff_management_system";
```

### 6. Run the application

Open the project in your browser:

```text
http://localhost/Staff-Management-System
```

## Main User Roles

### Admin

The admin is responsible for managing staff members, announcements, academic calendars, and system-level operations.

### Staff Member

Staff members can access their dashboard, view announcements, check academic calendar information, and view materials information.

### Storekeeper

The storekeeper manages materials, borrowed items, returned items, and communication related to materials handling.

## Use Case

This system can be used by schools, colleges, universities, offices, or organizations that need a simple internal platform for managing staff-related activities and material records.

## Possible Future Improvements

* Add a modern responsive UI
* Improve form validation
* Add password hashing and stronger authentication
* Add user activity logs
* Add search and filtering for staff and materials
* Add report generation
* Add email notification support
* Improve database documentation
* Add API support for mobile or external systems

## Author

**Seid Mengistu**

GitHub: [seidmengistu](https://github.com/seidmengistu)

## License

This project is open for learning and portfolio purposes. You can update the license based on your preferred usage terms.


[1]: https://github.com/seidmengistu/Staff-Management-System/tree/master "GitHub - seidmengistu/Staff-Management-System at master · GitHub"
