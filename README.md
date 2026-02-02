# Site E-Commerce Cosmetique

A modern e-commerce platform for cosmetics built with WordPress.

## Overview

This is a professional WordPress-based e-commerce website specialized in selling cosmetic products. The platform includes product catalogs, shopping cart functionality, payment processing, and customer management.

## Features

- **Product Catalog**: Browse and search cosmetic products
- **Shopping Cart**: Add products to cart and manage quantities
- **Secure Checkout**: Safe payment processing
- **Customer Accounts**: User registration and order history
- **Product Reviews**: Customer ratings and reviews
- **Responsive Design**: Mobile-friendly interface
- **WordPress Admin**: Easy content management

## Requirements

### Minimum
- PHP 7.2.24 or higher
- MySQL 5.5.5 or higher
- Apache/Nginx web server with mod_rewrite support

### Recommended
- PHP 8.3 or higher
- MySQL 8.0 or MariaDB 10.6 or higher
- HTTPS/SSL certificate
- Modern web browsers

## Installation

1. **Upload Files**
   - Extract the project files to your web server directory

2. **Configure Database**
   - Copy `wp-config-sample.php` to `wp-config.php`
   - Edit the database credentials:
     ```php
     define('DB_NAME', 'your_database_name');
     define('DB_USER', 'your_database_user');
     define('DB_PASSWORD', 'your_database_password');
     define('DB_HOST', 'localhost');
     ```

3. **Run Installation**
   - Open `wp-admin/install.php` in your browser
   - Follow the setup wizard
   - Create your admin account

4. **Configure Store**
   - Access WordPress admin dashboard
   - Configure WooCommerce settings
   - Add your cosmetic products
   - Set up payment methods

## Project Structure

```
.
├── wp-admin/           # WordPress admin files
├── wp-content/         # Themes, plugins, uploads
│   ├── themes/        # Theme files
│   ├── plugins/       # Plugin files
│   └── uploads/       # User uploads (images, etc.)
├── wp-includes/       # WordPress core includes
├── wp-config.php      # Database configuration
├── index.php          # Main entry point
└── README.md          # This file
```

## Plugins Used

- **WooCommerce**: E-commerce functionality
- **Product Add-ons**: Customizable product options
- **Payment Gateway**: Secure payment processing
- **SEO Plugin**: Search engine optimization

## Themes

The site uses a custom/premium theme optimized for cosmetics e-commerce with:
- Professional product display
- User-friendly checkout
- Mobile responsive design
- Fast loading times

## Security

- Keep WordPress and all plugins updated
- Use strong passwords
- Enable two-factor authentication
- Regular backups
- HTTPS/SSL enabled
- Secure payment processing

## Backup & Maintenance

### Regular Backups
```bash
# Backup database
mysqldump -u username -p database_name > backup.sql

# Backup files
tar -czf website-backup.tar.gz wp-content wp-config.php
```

### Updates
- Check for WordPress updates regularly
- Update plugins and themes
- Test updates in staging environment first

## Support

For help with:
- **WordPress**: [WordPress.org Documentation](https://wordpress.org/documentation/)
- **WooCommerce**: [WooCommerce Documentation](https://docs.woocommerce.com/)
- **Technical Issues**: Check server logs or contact hosting support

## License

This WordPress installation uses the GPL (GNU General Public License) version 2.
See [license.txt](license.txt) for details.

## Development

### Local Development
Use a local server environment like:
- XAMPP
- WAMP
- Local by Flywheel
- Docker

### Git Workflow
```bash
# Clone repository
git clone https://github.com/nourhb/site-e-commerce-cosmetique-wp.git

# Create feature branch
git checkout -b feature/your-feature

# Commit changes
git commit -am "Description of changes"

# Push to GitHub
git push origin feature/your-feature
```

## Contact

For inquiries about this e-commerce platform, please contact the development team.

---

**Last Updated**: February 2026
