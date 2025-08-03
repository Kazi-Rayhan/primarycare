# Primary Care Clinic Website

A modern, accessible medical clinic website built with Laravel 10, Filament v3, and Tailwind CSS. Features a comprehensive admin panel for managing providers, services, and patient resources.

## 🏥 Features

### Frontend
- **Responsive Design**: Mobile-first approach with Tailwind CSS
- **Dark/Light Mode**: Toggle between themes with localStorage persistence
- **Accessibility**: WCAG 2.1 compliant with high contrast, large text, and reduced motion options
- **Motion-Safe Animations**: Respects `prefers-reduced-motion` media query
- **Semantic HTML**: Proper heading hierarchy and ARIA labels

### Admin Panel (Filament v3)
- **Provider Management**: Add, edit, and manage medical providers
- **Service Management**: Create and organize clinic services
- **Patient Resources**: Manage forms, information pages, and external links
- **Settings Management**: Configure site settings and preferences

### Content Management
- **Dynamic Content**: All content is managed through the admin panel
- **File Uploads**: Support for PDF forms and documents
- **Rich Text Editor**: WYSIWYG editor for content creation
- **SEO-Friendly URLs**: Automatic slug generation for resources

## 🎨 Design System

### Color Palette
- **Light Purple**: `#D6C7F7` (Primary accent)
- **Blue**: `#3B82F6` (CTA buttons and links)
- **Silver**: `#C0C0C0` (Borders and backgrounds)
- **Black**: `#000000` (Text and headings)

### Typography
- **Font**: Inter (Google Fonts)
- **Responsive**: Fluid font sizes with proper scaling
- **Accessibility**: High contrast ratios and readable line heights

## 🚀 Installation

### Prerequisites
- PHP 8.2+
- Composer
- Node.js 18+
- MySQL/PostgreSQL

### 1. Clone the Repository
```bash
git clone <repository-url>
cd primarycare
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Environment Setup
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Database Configuration
Update your `.env` file with database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=primarycare
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 5. Run Migrations and Seeders
```bash
php artisan migrate
php artisan db:seed
```

### 6. Build Assets
```bash
npm run build
```

### 7. Create Admin User
```bash
php artisan make:filament-user
```

### 8. Start Development Server
```bash
php artisan serve
```

## 📁 Project Structure

```
primarycare/
├── app/
│   ├── Filament/Resources/          # Filament admin resources
│   ├── Models/                      # Eloquent models
│   └── Providers/                   # Service providers
├── database/
│   ├── migrations/                  # Database migrations
│   └── seeders/                     # Database seeders
├── resources/
│   ├── css/                         # Tailwind CSS
│   ├── js/                          # JavaScript
│   └── views/                       # Blade templates
├── routes/
│   └── web.php                      # Web routes
└── public/                          # Public assets
```

## 🎛️ Admin Panel

### Access
- **URL**: `http://your-domain/admin`
- **Default Email**: `sohojwareltd@gmail.com`
- **Password**: (set during installation)

### Features
1. **Provider Management**
   - Add/edit provider profiles
   - Upload profile photos
   - Manage specialties and availability
   - Toggle telehealth and new patient acceptance

2. **Service Management**
   - Create clinic services
   - Add descriptions and icons
   - Control display order
   - Toggle active status

3. **Patient Resources**
   - Information pages
   - Downloadable forms
   - External links
   - Rich text content

## ♿ Accessibility Features

### Built-in Accessibility
- **Skip Links**: Jump to main content
- **Focus Management**: Visible focus indicators
- **Semantic HTML**: Proper heading hierarchy
- **ARIA Labels**: Screen reader support

### User Controls
- **High Contrast Mode**: WCAG AAA compliant
- **Large Text**: 25% font size increase
- **Reduced Motion**: Disable animations
- **Dark Mode**: Inverted color scheme

### Keyboard Navigation
- **Tab Navigation**: Full keyboard support
- **Focus Rings**: Clear focus indicators
- **Escape Keys**: Close modals and panels

## 🎨 Customization

### Colors
Update colors in `tailwind.config.js`:
```javascript
colors: {
  'light-purple': '#D6C7F7',
  'blue': '#3B82F6',
  'silver': '#C0C0C0',
  'black': '#000000',
}
```

### Content
All content is managed through the Filament admin panel:
1. Log in to `/admin`
2. Navigate to desired section
3. Add/edit content
4. Changes appear immediately on the frontend

### Styling
- **CSS**: `resources/css/app.css`
- **Tailwind Config**: `tailwind.config.js`
- **Layout**: `resources/views/layouts/app.blade.php`

## 📱 Responsive Design

### Breakpoints
- **Mobile**: < 768px
- **Tablet**: 768px - 1024px
- **Desktop**: > 1024px

### Features
- **Mobile Navigation**: Hamburger menu
- **Touch-Friendly**: Large touch targets
- **Readable Text**: Minimum 16px font size
- **Proper Spacing**: Adequate padding and margins

## 🔧 Development

### Commands
```bash
# Start development server
php artisan serve

# Watch for changes
npm run dev

# Build for production
npm run build

# Run tests
php artisan test

# Clear caches
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

### Adding New Features
1. **Models**: Create in `app/Models/`
2. **Migrations**: Generate with `php artisan make:migration`
3. **Filament Resources**: Create with `php artisan make:filament-resource`
4. **Views**: Add to `resources/views/`
5. **Routes**: Define in `routes/web.php`

## 🚀 Deployment

### Production Checklist
- [ ] Set `APP_ENV=production`
- [ ] Configure database credentials
- [ ] Set up file storage (S3 recommended)
- [ ] Configure mail settings
- [ ] Set up SSL certificate
- [ ] Optimize assets: `npm run build`
- [ ] Run migrations: `php artisan migrate`
- [ ] Clear caches: `php artisan cache:clear`

### Environment Variables
```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com

DB_CONNECTION=mysql
DB_HOST=your-db-host
DB_DATABASE=your-database
DB_USERNAME=your-username
DB_PASSWORD=your-password

MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-email
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls
```

## 📊 Performance

### Optimization
- **Asset Compression**: Built-in Vite optimization
- **Image Optimization**: WebP support
- **Caching**: Laravel's built-in caching
- **CDN Ready**: Static asset optimization

### Monitoring
- **Error Logging**: Laravel's logging system
- **Performance**: Built-in profiling tools
- **Uptime**: Standard web server monitoring

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Add tests if applicable
5. Submit a pull request

## 📄 License

This project is licensed under the MIT License.

## 🆘 Support

For support and questions:
- **Email**: info@primarycareclinic.com
- **Documentation**: Check the admin panel help sections
- **Issues**: Use GitHub issues for bug reports

## 🏥 Clinic Information

**Primary Care Clinic**
- **Address**: 123 Main Street, City, State 12345
- **Phone**: (555) 123-4567
- **Email**: info@primarycareclinic.com
- **Hours**: Monday-Friday 8AM-6PM, Saturday 9AM-2PM

---

Built with ❤️ for healthcare providers and their patients.
