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

## Recent Improvements

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

## License

[License information]

## Contributors

[List of contributors]
