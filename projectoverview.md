# Vinaid E-Commerce Platform - Project Overview

## Project Description

Vinaid is a comprehensive e-commerce web application built with Laravel 12, designed to provide a full-featured online shopping experience. The platform includes both an admin panel for management and a customer-facing storefront for browsing and purchasing products.

## Technology Stack

### Backend
- **Framework**: Laravel 12.x
- **PHP Version**: ^8.2
- **Database**: MySQL 8.0+
- **Authentication**: Laravel Sanctum (API authentication)
- **Permissions**: Spatie Laravel Permission (role-based access control)
- **Shopping Cart**: DarrylDecode Cart
- **Notifications**: PHP Flasher

### Frontend
- **Build Tool**: Vite
- **Templates**: Blade Templates
- **JavaScript Libraries**:
  - Axios (HTTP client)
  - SweetAlert2 (alerts and modals)
  - Lightbox2 (image galleries)

### Development Tools
- **Testing**: PHPUnit
- **Code Quality**: Laravel Pint
- **Package Management**: Composer (PHP), npm (Node.js)

## Key Features

### Admin Panel
- Dashboard with analytics and metrics
- User management with role assignment
- Product management (CRUD operations)
- Category and subcategory management
- Banner management for homepage
- Mockup template management
- Static page content management
- SMTP configuration
- System settings

### Customer Frontend
- Product catalog with category filtering
- Detailed product pages with image galleries
- Shopping cart functionality
- Contact forms with email notifications
- Newsletter subscription system
- Static pages (About, FAQ, Terms, Privacy)
- Portfolio/showcase section

### Technical Features
- SEO optimization with meta tags
- Responsive design
- Image upload and management
- Search functionality
- Email notifications
- Role-based permissions

## Project Structure

```
vinaid_signs/
├── app/                    # Laravel application code
│   ├── Console/           # Artisan commands
│   ├── Exceptions/        # Exception handlers
│   ├── Http/              # Controllers, Middleware
│   ├── Mail/              # Email templates
│   ├── Models/            # Eloquent models
│   └── Providers/         # Service providers
├── bootstrap/             # Laravel bootstrap files
├── config/                # Configuration files
├── database/              # Migrations, seeders, factories
├── public/                # Public assets and uploads
├── resources/             # Views, CSS, JS
│   ├── css/
│   ├── js/
│   └── views/
├── routes/                # Route definitions
├── storage/               # File storage
├── tests/                 # Test files
├── vendor/                # Composer dependencies
├── artisan               # Laravel CLI
├── composer.json         # PHP dependencies
├── package.json          # Node.js dependencies
├── phpunit.xml           # Test configuration
├── vite.config.js        # Vite configuration
└── README.md             # Project documentation
```

## Database Models

- **User**: User accounts (admin/customer)
- **Admin**: Admin-specific user data
- **ProductModel**: Product information
- **CategoryModel/SubCategoryModel**: Product categorization
- **ProductColorModel/ProductSizeModel**: Product variants
- **ProductImageModel**: Product images
- **OrderModel/OrderItemModel**: Order management
- **BannerModel**: Homepage banners
- **ContactModel**: Contact form submissions
- **SubscriberModel**: Newsletter subscribers
- **SettingModel**: System settings
- **SMTPModel**: Email configuration
- **DiscountCodeModel**: Discount codes
- **ShippingChargeModel**: Shipping rates
- **PageModel**: Static pages
- **MockupModel**: Product mockups

## Installation & Setup

For detailed installation instructions, please refer to the [README.md](README.md) file.

### Quick Setup
1. Install dependencies: `composer install && npm install`
2. Configure environment: `cp .env.example .env`
3. Generate key: `php artisan key:generate`
4. Run migrations: `php artisan migrate`
5. Seed database: `php artisan db:seed`
6. Build assets: `npm run build`
7. Start server: `php artisan serve`

## Development

- **Development Server**: `npm run dev` (Vite dev server)
- **Build Production**: `npm run build`
- **Run Tests**: `./vendor/bin/phpunit`
- **Code Formatting**: `./vendor/bin/pint`

## Contributing

This project follows standard Laravel development practices. Ensure all tests pass before submitting changes.

## License

This project is licensed under the MIT License.