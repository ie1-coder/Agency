# Agency – A Refined Laravel Implementation

This project is a fully modular and visually enhanced adaptation of the *Start Bootstrap Agency* theme, rebuilt using **Laravel Blade** and **Bootstrap 5**. It is engineered for developers, designers, and creative professionals seeking a portfolio or agency website that balances aesthetic elegance with technical clarity. The interface features a refined dark palette, controlled typographic hierarchy, subtle interactive transitions, and a consistent golden accent (`#fed136`) that unifies the visual language across all sections.

No database is required. The entire structure leverages Laravel’s templating system to deliver a clean, maintainable, and scalable frontend experience.

---

## Key Features

- **Modular Blade Architecture**: Layout, navigation, footer, and page-specific content are cleanly separated for maintainability.
- **Multi-Page Structure**: Dedicated views for Home, Services, Portfolio, About, Team, and Contact—all accessible via named Laravel routes.
- **Fully Responsive**: Optimized for all device sizes using Bootstrap 5’s responsive grid.
- **Enhanced Visual Design**:
  - Deep background tones (`#121212` and `#1e1e1e`) for visual depth
  - Subtle hover animations and elevation effects on cards and buttons
  - Consistent use of `#fed136` for interactive elements and section accents
- **Professional Typography**:
  - **Montserrat** for headings (clean, bold, uppercase)
  - **Roboto Slab** for body text (serif, highly legible, refined)
- **Integrated SB Forms**: The contact form is pre-wired for activation via Start Bootstrap’s form service, with client-side validation and success/error handling.
- **Reusable Components**: The team section is implemented as a Blade component, enabling reuse across pages without duplication.

---

## Project Structure

/resources
└── views/
├── layouts/
│ └── app.blade.php # Base HTML structure
├── partials/
│ ├── nav.blade.php # Responsive navbar with active-state detection
│ └── footer.blade.php # Global footer with social links
└── pages/
├── home.blade.php # Hero section with gradient overlay
├── services.blade.php
├── portfolio.blade.php # Interactive grid with modal project details
├── about.blade.php # Animated vertical timeline
├── team.blade.php # Blade component: reusable team member cards
└── contact.blade.php # SB Forms–ready contact form
--
/public
├── css/styles.css # Custom, cohesive stylesheet
├── js/scripts.js
└── assets/ # Images, logos, and icons (CC0 licensed)

---

## Getting Started

### Requirements
- PHP 8.0 or higher
- Composer
- Basic familiarity with Laravel Blade

### Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/agency.git
   cd agency
2. Install dependencies:
   composer install
3. Configure the environment:
    cp .env.example .env
    php artisan key:generate
4. Launch the local server:
    php artisan serve
   The application will be accessible at http://127.0.0.1:8000. No database setup or migrations are necessary.

Contact Form Activation
The contact form is integrated with SB Forms, a service provided by Start Bootstrap.

To enable form submissions:

Visit https://startbootstrap.com/solution/contact-forms
Begin the 10-day free trial (no credit card required)
Copy your API token from the dashboard
Replace the placeholder in resources/views/pages/contact.blade.php:

data-sb-form-api-token="your_actual_token_here"

All submissions will be securely processed and available for review in your SB Forms account.

# Typography and Fonts
The project loads fonts directly from Google Fonts:

* Montserrat (weights 400 and 700) for all headings and navigation elements
* Roboto Slab (weights 300 and 400) for paragraph text and subheadings
Font files are served via optimized WOFF2 formats with unicode-range support for Latin, Latin Extended, Cyrillic, Greek, and Vietnamese character sets, ensuring fast, efficient loading.

# Design Philosophy
This implementation adheres to the principle that clarity is the highest form of elegance. Every visual decision—spacing, color, motion, hierarchy—is made to support content, not distract from it. The dark theme provides contrast and focus; the golden accent signals interactivity without overwhelming; animations are purposeful, not decorative.

# Assets and Licensing

* All imagery and icons are sourced from the original Start Bootstrap Agency theme under the CC0 1.0 Universal (CC0 1.0) Public Domain Dedication.
* Font assets are served via Google Fonts and remain subject to their respective licensing terms.
* The base template is adapted under the MIT License.
* Custom enhancements and structural modifications are proprietary but released under the same permissive license.

# License
This work is derived from the Start Bootstrap Agency theme, originally licensed under the MIT License.

Copyright © 2025 Izzdden S. R. Alnouno


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files, to deal in the software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the software, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.


#  Author
. Izzdden S. R. Alnouno
. Email: azalden12390@gmail.com
. GitHub: https://github.com/ie1-coder

