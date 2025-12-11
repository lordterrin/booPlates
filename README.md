# booPlates

booPlates is a compact but feature-rich Laravel project built to showcase practical full-stack development skills.  
It demonstrates modern PHP backend design, Blade templating, authentication, image uploads, dynamic UI rendering, and responsive front-end behavior.

---

## 🚀 Features Demonstrated

### **Laravel Framework**
- Controllers for page rendering, form handling, and route logic  
- Eloquent Models with mass-assignment protection, custom queries, and relational structure  
- Blade templating with layouts, partials, and dynamic content injection  
- Custom `ViewServiceProvider` with view composers to supply global layout data  
- Named routes, dynamic route parameters, and route constraints  
- Authentication usage (`auth()->id()`) and user-scoped data  
- Server-side file uploads with validation and storage management  
- Database design with lookup tables, foreign keys, and unique constraints  
- Use of `php artisan` commands for models, controllers, migrations, and providers  

---

## 🗄️ Database & Data Flow
- Lookup table (`state_names`) for static state metadata (name, code, moniker)  
- User upload table (`states`) linking users to images via foreign keys  
- Distinct state tracking to limit one upload per user per state  
- Automatic file replacement when users re-upload images  
- Computation of user progress (uploaded state count vs total states)

---

## 🌐 Frontend Development (JavaScript + CSS)
### JavaScript (ES6)
- DOM manipulation via `querySelector`, `for…of`, and classList API  
- Event-driven UI for file selection, drag-and-drop, and auto-upload  
- Client-side image previews using `FileReader`  
- SVG manipulation for interactive map highlighting  
- Passing PHP data into JS using `@json()`  
- Device detection via `matchMedia` for mobile vs desktop behavior  

### CSS / Layout
- Responsive flexbox layout for main content and sidebar  
- Mobile-first design adjustments  
- SVG styling and state-coloring logic  
- Polished drag-and-drop upload box  
- Utility classes for dynamic state highlighting  

---

## 📱 Mobile vs Desktop Behavior
- Conditional UI flows based on device width  
- Client-side redirects for mobile upload workflow  
- Differing visual layouts for map interactions and upload screens  

---

## 🔐 OAuth & External Services
- Google OAuth login flow  
- Handling of tokens, sessions, and secure redirects  

---

## 🧰 Development Tools & Commands
- Extensive use of `php artisan`:
  - `make:model`
  - `make:controller`
  - `make:migration`
  - `make:provider`
- `storage:link` for serving uploaded files  
- Organized project structure following modern Laravel conventions  

---

## 🧠 Additional Engineering Concepts
- Custom helper logic (user rank system based on uploads)  
- DRY principles with shared providers instead of duplicated controller logic  
- Strict validation for file size and image type  
- Safe deletion of old uploads upon overrides  
- Passing shared sidebar data without controller repetition  

---

booPlates is intentionally small in scope but wide in surface area.  
It shows competence not just in Laravel as a framework, but in the entire ecosystem of modern full-stack development: backend design, UI logic, interactive JavaScript, mobile optimization, authentication flows, and database modeling.
