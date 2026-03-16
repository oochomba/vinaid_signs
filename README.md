# Vinaid E-Commerce Platform

A comprehensive e-commerce web application built with Laravel 12, featuring a modern admin panel and customer-facing storefront.

## 🚀 Features

### Admin Panel
- **Dashboard**: Overview of customer contacts, banners, and system metrics
- **User Management**: Admin user creation, editing, and role assignment
- **Product Management**: Complete CRUD operations for products with image uploads
- **Category Management**: Hierarchical category system with subcategories
- **Banner Management**: Dynamic banner system for homepage sliders
- **Mockup Management**: Product mockup templates
- **Page Management**: Static page content management
- **System Settings**: SMTP configuration and general system settings
- **Role & Permission System**: Granular access control using Spatie Laravel Permission

### Customer Frontend
- **Product Catalog**: Browse products by category with filtering
- **Product Details**: Detailed product pages with image galleries
- **Contact System**: Contact forms with email notifications
- **Newsletter Subscription**: Email subscription with verification
- **Static Pages**: About, FAQ, Terms & Conditions, Privacy Policy
- **Portfolio/Projects**: Showcase section for products

### Technical Features
- **Shopping Cart**: Persistent cart functionality
- **Authentication**: Separate admin and customer authentication
- **Email System**: Configurable SMTP for notifications
- **SEO Optimization**: Meta tags management for products and pages
- **Responsive Design**: Mobile-friendly interface
- **Image Management**: Multiple product images with sorting
- **Search Functionality**: Product search capabilities

## 🛠️ Technology Stack

- **Backend**: Laravel 12.x
- **Frontend**: Blade Templates, Vite
- **Database**: MySQL
- **Authentication**: Laravel Sanctum
- **Permissions**: Spatie Laravel Permission
- **Shopping Cart**: DarrylDecode Cart
- **Notifications**: PHP Flasher
- **JavaScript Libraries**:
  - Axios for API calls
  - SweetAlert2 for alerts
  - Lightbox2 for image galleries

## 📋 Requirements

- PHP ^8.2
- Composer
- Node.js & npm
- MySQL 8.0+
- Laravel 12.x

## 🚀 Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd vinaid1.4
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment Configuration**
   ```bash
   cp .env.example .env
   ```
   Configure your database and other environment variables in `.env`

5. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

6. **Database Setup**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

7. **Build Assets**
   ```bash
   npm run build
   # or for development
   npm run dev
   ```

8. **Start the Application**
   ```bash
   php artisan serve
   ```

## 📁 Project Structure

```
vinaid1.4/
├── app/
│   ├── Http/Controllers/
│   │   ├── Admin/          # Admin panel controllers
│   │   └── Frontend/       # Customer-facing controllers
│   ├── Models/             # Eloquent models
│   ├── Mail/               # Email templates
│   └── Middleware/         # Custom middleware
├── database/
│   ├── migrations/         # Database migrations
│   └── sql/               # SQL dumps
├── public/
│   ├── assets/            # Compiled assets
│   └── uploads/           # User uploaded files
├── resources/
│   ├── css/               # Stylesheets
│   ├── js/                # JavaScript files
│   └── views/             # Blade templates
│       └── v2/            # Version 2 templates
├── routes/
│   ├── web.php            # Web routes
│   └── api.php            # API routes
└── config/                # Configuration files
```

## 🔧 Configuration

### Database
Update your `.env` file with database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=vinaid_ecommerce
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### Mail Configuration
Configure SMTP settings in the admin panel or directly in `.env`:
```env
MAIL_MAILER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=587
MAIL_USERNAME=your_email@domain.com
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
```

### File Uploads
The application supports file uploads for:
- Product images
- Category images
- Banner images
- Mockup files

Upload directories are configured in `config/filesystems.php`

## 🎨 Frontend Development

### Building Assets
```bash
# Development mode with hot reload
npm run dev

# Production build
npm run build

# Watch mode
npm run watch
```

### Key Frontend Libraries
- **Axios**: For AJAX requests
- **SweetAlert2**: For beautiful alert dialogs
- **Lightbox2**: For image galleries
- **Owl Carousel**: For sliders and carousels

## 🔐 Authentication & Authorization

### Admin Access
- Default admin login: `/admin`
- Uses separate guard (`auth:admin`)
- Role-based permissions using Spatie Laravel Permission

### Customer Access
- Customer registration and login
- Protected routes using `auth:customer` middleware

## 📧 Email Templates

The application includes several email templates:
- Contact form notifications
- Newsletter subscription confirmations
- Password reset emails
- General subscription emails

Templates are located in `app/Mail/`

## 🗄️ Database Schema

### Key Tables
- `users` - Customer users
- `admins` - Admin users
- `products` - Product catalog
- `categories` - Product categories
- `product_images` - Product image gallery
- `banners` - Homepage banners
- `orders` - Customer orders
- `contacts` - Customer contact messages
- `subscribers` - Newsletter subscribers

## 🧪 Testing

Run the test suite:
```bash
php artisan test
```

## 📦 Deployment

1. **Optimize for Production**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

2. **Set Environment**
   ```bash
   APP_ENV=production
   APP_DEBUG=false
   ```

3. **Database Migration**
   ```bash
   php artisan migrate --force
   ```

4. **Asset Compilation**
   ```bash
   npm run build
   ```

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Add tests if applicable
5. Submit a pull request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🆘 Support

For support and questions:
- Create an issue in the repository
- Contact the development team
- Check the documentation

## 🔄 Version History

### Version 1.4
- Latest stable release
- Enhanced admin panel
- Improved frontend design
- Bug fixes and performance improvements

---

**Built with ❤️ using Laravel**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
