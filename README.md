# Minimalistic Image Gallery

A simple, minimalistic image gallery application built with Laravel 12, showcasing the integration of Filament for an intuitive administration panel, Spatie Media Library for robust media management, and Flowbite for a modern and responsive user interface.

## Features

* **Image Upload & Management:** Easily upload, categorize, and manage your images through a user-friendly administration interface.
* **Intuitive Admin Panel:** Powered by Filament PHP, providing a beautiful and efficient dashboard for all your gallery management needs.
* **Efficient Media Handling:** Leverages Spatie Media Library for reliable and optimized storage and retrieval of image files.
* **Modern UI with Flowbite:** A clean, responsive, and visually appealing front-end built with Flowbite, ensuring a great user experience on any device.
* **Simple & Minimalistic Design:** Focuses on presenting your images beautifully without unnecessary clutter.

## Technologies Used

This project highlights the seamless integration and power of the following technologies:

* **Laravel 12:** The robust and elegant PHP framework providing the foundation for the application.
* **Filament:** A TALL stack admin panel for Laravel, offering a rapid development experience for the gallery's backend. It simplifies the creation of forms, tables, and pages for managing images and other data.
* **Spatie Media Library:** An essential package for handling file uploads and associated media. It provides a flexible way to attach files to models, generate thumbnails, and manage conversions, making image management efficient and scalable.
* **Flowbite:** A popular open-source collection of UI components built on top of Tailwind CSS. It empowers the frontend with pre-designed, interactive elements, ensuring a consistent and modern look and feel for the gallery.

## Installation

1.  **Clone the repository:**
    ```bash
    git clone <your-repository-url>
    cd minimalistic-image-gallery
    ```
2.  **Install Composer dependencies:**
    ```bash
    composer install
    ```
3.  **Copy and configure your `.env` file:**
    ```bash
    cp .env.example .env
    ```
    Edit your `.env` file and set your database credentials:
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.01
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```
4.  **Generate an application key:**
    ```bash
    php artisan key:generate
    ```
5.  **Run database migrations:**
    ```bash
    php artisan migrate
    ```
6.  **Create a symbolic link for storage (for Spatie Media Library):**
    ```bash
    php artisan storage:link
    ```
    *(Note: On Ubuntu servers, you would typically use `ln -s storage/app/public public/storage` if `php artisan storage:link` has issues or for manual creation.)*
7.  **Run the development server:**
    ```bash
    php artisan serve
    ```

## Usage

- Navigate to `http://127.0.0.1:8000` (or your chosen port) in your browser to view the gallery.
- Access the Filament admin panel at `http://127.0.0.1:8000/admin`. You'll need to create a user to log in to the admin panel.

### Creating a Filament Admin User

To create an admin user for the Filament panel via the terminal, run:

```bash
php artisan make:filament-user
```

## Contributing

Contributions are welcome! Please feel free to open issues or submit pull requests.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

Author: [Samuel Njau](https://samuel.eucossa.com)