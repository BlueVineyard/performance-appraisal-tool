# Performance Appraisal Tool

A web application designed to facilitate the evaluation of staff members in educational institutions, specifically Adventist schools. The tool provides a structured approach to performance assessment across three key areas:

1. Commitment to Professional Practice
2. Commitment to Professional Behaviour
3. Commitment to Mission

## Features

-   Multi-step form for performance evaluation
-   Rating system (1-10 scale) for various performance criteria
-   Optional comments for each rating
-   Summary view of all ratings and comments
-   Responsive design for various devices
-   User authentication system (login, registration, password reset)
-   Supervisor Dashboard for managing appraisals, staff, and reports

## Technology Stack

### Backend

-   Laravel 10+
-   PHP 8.1+
-   MySQL/MariaDB

### Frontend

-   Blade templating
-   Tailwind CSS
-   Vanilla JavaScript
-   Vite (Laravel's default build tool)

## Project Structure

### Key Directories

-   `app/` - Application code
    -   `Http/Controllers/` - Request handlers
    -   `Models/` - Data models
    -   `Providers/` - Service providers
-   `resources/` - Frontend assets
    -   `views/` - Blade templates
        -   `components/` - Reusable UI components
            -   `appraisal/` - Performance appraisal specific components
    -   `css/` - Stylesheets
    -   `js/` - JavaScript files
-   `routes/` - Application routes
-   `public/` - Publicly accessible files
-   `database/` - Database migrations and seeders

### JavaScript Modules

The application uses several JavaScript modules to handle different aspects of functionality:

-   `app.js` - Main entry point that imports all other JavaScript modules
-   `multistep.js` - Manages the multi-step form navigation and validation
-   `rating.js` - Handles the star rating system functionality
-   `tabs.js` - Controls the tab navigation in the summary view
-   `summary.js` - Manages the summary view rendering and submission
-   `edit.js` - Handles editing of submitted responses

## Supervisor Dashboard

The application includes a Supervisor Dashboard that serves as a central hub for managing the performance appraisal process:

### Dashboard Features

-   **Overview Cards**: Quick access to key areas of the application

    -   Appraisals card with direct link to the Supervisor Questionnaire
    -   Staff management card for viewing and managing staff members
    -   Reports card for generating and viewing performance reports

-   **Recent Activity**: Timeline of recent actions in the system

    -   Completed appraisals
    -   Staff additions
    -   Report generation

-   **Navigation**: Easy access to all parts of the application
    -   User dropdown menu with links to the Dashboard and Questionnaire
    -   Intuitive card-based navigation to different sections

### Implementation

-   Built with Tailwind CSS for responsive design
-   Clean, modern UI with cards and activity timeline
-   Integrated with the existing authentication system
-   Connected to the Supervisor Questionnaire for seamless workflow

## Authentication System

The application includes a complete authentication system with the following features:

### User Management

-   User registration with name, email, and password
-   User login with email and password
-   User logout functionality
-   "Remember me" functionality for persistent login
-   Password reset via email
-   Protected routes with middleware

### Data Storage

User details are stored in the following database tables:

-   `users` - Stores user information:

    -   id (primary key)
    -   name
    -   email (unique)
    -   email_verified_at (nullable timestamp)
    -   password (hashed)
    -   remember_token
    -   created_at, updated_at timestamps

-   `password_reset_tokens` - Manages password reset requests:

    -   email (primary key)
    -   token
    -   created_at timestamp

-   `sessions` - Handles user sessions:
    -   id (primary key)
    -   user_id (foreign key to users table)
    -   ip_address
    -   user_agent
    -   payload
    -   last_activity

### Implementation

-   Uses Laravel's built-in authentication features
-   Custom views with Tailwind CSS styling
-   Form validation for all inputs
-   Secure password hashing
-   CSRF protection for all forms
-   Route middleware for authentication ('auth' and 'guest')
-   Smart redirects based on authentication status

## Recent Improvements

### Authentication Enhancements

-   Implemented logout functionality using Laravel Livewire Actions
-   Added middleware protection to routes based on authentication status
-   Fixed authentication flow to ensure proper redirects after login, registration, and logout
-   Added a smart root route that redirects based on authentication status
-   Prevented redirect loops in the authentication flow

### JavaScript Enhancements

-   Created a proper `app.js` file that imports all JavaScript modules
-   Added defensive programming with null checks in all JavaScript files
-   Made the `renderSummary` function available globally
-   Ensured correct order of imports in app.js
-   Added DOMContentLoaded event listeners to all JavaScript files

### Component Refactoring

-   Created reusable Blade components for all UI elements
-   Reduced code duplication significantly
-   Improved maintainability of the codebase

## Setup Instructions

### Requirements

-   PHP 8.1+
-   Composer
-   Node.js and NPM
-   MySQL/MariaDB

### Installation

1. Clone the repository

    ```
    git clone [repository-url]
    ```

2. Install PHP dependencies

    ```
    composer install
    ```

3. Install JavaScript dependencies

    ```
    npm install
    ```

4. Set up environment variables

    ```
    cp .env.example .env
    ```

    Then edit the `.env` file to configure your database and other settings.

5. Generate application key

    ```
    php artisan key:generate
    ```

6. Run migrations

    ```
    php artisan migrate
    ```

7. Compile assets

    ```
    npm run dev
    ```

8. Serve the application
    ```
    php artisan serve
    ```

## Development Guidelines

### JavaScript Best Practices

-   Always wrap code in DOMContentLoaded event listeners
-   Check if elements exist before trying to manipulate them
-   Make functions available globally when needed by other scripts
-   Use conditional checks before calling functions that might not be available
-   Maintain the correct import order in app.js (summary.js must be imported before multistep.js)

### Component Usage

-   Use the existing components in the `resources/views/components/appraisal` directory
-   Follow the established naming conventions and prop patterns
-   Preserve class names and data attributes that are used by JavaScript

## Contributors

[Rohan T George](https://github.com/19Rohan97/)
