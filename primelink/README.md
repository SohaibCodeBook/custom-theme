# PrimeLink Corporate – WordPress Theme

## Installation

1. Upload the entire `primelink` folder to `/wp-content/themes/` on your server.
2. Log into WordPress admin → Appearance → Themes → Activate **PrimeLink Corporate**.
3. Go to Appearance → Menus → Create a new menu named **Primary Navigation** and assign it to the **Primary Navigation** location. Add pages: Home, About Us, Services, Engineering Solutions, Outlets, IT Services, Contact.
4. Create the following WordPress Pages and assign the correct page template:
   - **Home** → set as Front Page (Settings → Reading → Static page → Front page)
   - **About Us** → Template: About Us
   - **Services** → Template: Services
   - **Engineering Solutions** → Template: Engineering Solutions
   - **Outlets** → Template: Outlets
   - **IT Services** → Template: IT Services
   - **Contact** → Template: Contact
5. Go to Settings → Reading → ensure "Front page displays: A static page" is set to **Home**.

## Screenshot

To generate `screenshot.png` for the WordPress theme selector, open `screenshot.svg` in a browser, screenshot it at 1200×900, and save as `screenshot.png` in the theme root. Or use any placeholder PNG.

## Performance Notes

- All images use lazy loading and `loading="lazy"`.
- JavaScript is deferred (loaded in footer).
- No jQuery dependency – pure vanilla JS.
- Google Fonts loaded with `display=swap`.
- Minimal plugin requirements.

## Contact Forms

Forms submit via WordPress AJAX to `info@primelink.com.lk`. Make sure your hosting has outgoing mail (SMTP) configured. Install a lightweight SMTP plugin (e.g. WP Mail SMTP) if needed.

## Recommended Plugins (optional, keep lightweight)

- **WP Mail SMTP** – ensures form emails are delivered
- **Yoast SEO** or **Rank Math** – SEO meta tags
- **Smush** or **ShortPixel** – additional image compression
- **W3 Total Cache** or **LiteSpeed Cache** – page caching

## Logo

Replace with your own logo via Appearance → Customize → Site Identity → Logo.
The SVG logo is at `assets/images/logo.svg`.

## Facebook Page

Update the Facebook link in `footer.php` once the official page URL is confirmed.

---

**Ceylon PrimeLink Holdings (Pvt) Ltd**  
54A, Sanasa Ideal Shopping Complex, Colombo Road, Gampaha 10019, Sri Lanka  
info@primelink.com.lk | +94 775 860 868
