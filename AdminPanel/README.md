# Admin Panel

This project is a fully functional admin panel built with PHP. It provides a user-friendly interface for managing users and their profiles, along with a dashboard for displaying relevant statistics.

## Project Structure

```
AdminPanel
├── src
│   ├── controllers
│   │   └── UserController.php
│   ├── models
│   │   └── User.php
│   ├── views
│   │   ├── dashboard.php
│   │   ├── profile.php
│   │   └── partials
│   │       ├── header.php
│   │       └── footer.php
│   ├── images
│   │   ├── logo.svg
│   │   └── profile_picture
│   │       └── default.png
│   └── config
│       └── database.php
├── public
│   ├── index.php
│   ├── profile.php
│   └── assets
│       ├── css
│       │   └── custom.css
│       └── js
│           └── custom.js
├── .gitignore
├── composer.json
└── README.md
```

## Features

- **User Management**: Create, update, delete, and view user profiles.
- **Dashboard**: Overview of user statistics and other relevant information.
- **Responsive Design**: The admin panel is designed to be responsive and user-friendly.

## Installation

1. Clone the repository:
   ```
   git clone <repository-url>
   ```

2. Navigate to the project directory:
   ```
   cd AdminPanel
   ```

3. Install dependencies using Composer:
   ```
   composer install
   ```

4. Configure the database settings in `src/config/database.php`.

5. Start the local server (e.g., using XAMPP or built-in PHP server):
   ```
   php -S localhost:8000 -t public
   ```

6. Access the admin panel in your web browser at `http://localhost:8000`.

## Usage

- Navigate to the dashboard to view user statistics.
- Use the user management features to create or edit user profiles.
- Customize the appearance of the admin panel by modifying the CSS in `public/assets/css/custom.css`.

## Contributing

Contributions are welcome! Please submit a pull request or open an issue for any enhancements or bug fixes.

## License

This project is licensed under the MIT License. See the LICENSE file for more details.