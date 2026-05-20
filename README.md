# Laundry App - React Native

A clean and modern mobile app UI for a laundry service, built with React Native and Expo.

This project is focused on creating a smooth user experience for customers who want to explore laundry services, view service details, and move through the app using a simple mobile-friendly interface. The current version mainly focuses on the UI design, navigation flow, and screen structure.

## About the Project

The idea behind this app is simple: make laundry service booking feel easy, fast, and clear for users.

The app includes a home screen, product/service details screen, cart screen, search screen, and profile screen. It also uses bottom tab navigation to make the main sections easy to access.

This project can be extended into a complete laundry booking app with features like user authentication, order tracking, payment, service scheduling, and API integration.

## Features

- Clean React Native mobile UI
- Expo-based project setup
- Bottom tab navigation
- Home screen for laundry services
- Product/service detail screen
- Cart screen structure
- Search and profile screen structure
- Custom fonts using Expo Font
- Organized folder structure for screens, components, constants, and navigation
- Ready to be extended with backend APIs and payment integration

## Tech Stack

- React Native
- Expo
- JavaScript
- React Navigation
- Expo Font
- Expo Splash Screen
- Axios
- Stripe React Native
- React Native Gesture Handler
- React Native Screens

## Project Structure

```bash
React-Native-Laundary_app-
│
├── assets/              # Images, fonts, and static files
├── components/          # Reusable UI components
├── constants/           # Colors, sizes, and app constants
├── navigation/          # Bottom tab navigation
├── screens/             # Main app screens
│   ├── Home.jsx
│   ├── ProductDetails.jsx
│   ├── Cart.jsx
│   ├── Search.jsx
│   └── Profile.jsx
│
├── App.js               # Main app entry file
├── package.json         # Project dependencies and scripts
└── app.json             # Expo configuration

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
