# InvoicePro 🧾

**InvoicePro** is a modern invoice generator built with Laravel, Livewire, and Filament.
It allows users to create, manage, and download professional invoices easily.

---

## ✨ Features

* 🧾 Create invoices  (client, items, totals)
* 🎨 Multiple professional invoice templates
* 📄 Download invoices as PDF
* 👤 User registration & login (Filament-based auth)
* ⚡ Fast UI with Livewire
* 📱 Responsive design (works on mobile & desktop)

---

## 🚀 Tech Stack

* Laravel 12
* Livewire
* Filament Admin Panel
* SQLite (default, can change to MySQL)

---

## 📦 Installation

### 1. Clone the project

```bash
git clone https://github.com/AhmadAlabrash/invoice-generator.git
cd invoicepro
```

---

### 2. Install dependencies

```bash
composer install
npm install
```

---

### 3. Setup environment

```bash
cp .env.example .env
php artisan key:generate
```

---

### 4. Run migrations

```bash
php artisan migrate
```

---

### 5. Seed templates (IMPORTANT)

```bash
php artisan db:seed --class=TemplateSeeder
```

> ⚠️ Without this step, PDF download will fail because templates table will be empty.

---

### 6. Run the app

```bash
php artisan serve
npm run dev
```

Open:

```
http://127.0.0.1:8000
```

---

## 👤 Authentication

This project uses **Filament authentication**.

* Login: `/admin/login`
* Register: `/admin/register`
* Dashboard: `/admin`

Users can:

* Register directly
* Login
* Access the dashboard

---

## 🧾 Creating Invoices

1. Login to dashboard
2. Go to invoice page
3. Fill in:

   * Company info
   * Client info
   * Items
4. Click **Download PDF**

---

## ⚠️ Common Issues

### ❌ PDF download error (FOREIGN KEY constraint)

**Cause:**
Templates table is empty.

**Fix:**

```bash
php artisan db:seed --class=TemplateSeeder
```

---

### ❌ Attempt to read property "slug" on null

**Cause:**
Invoice has no template assigned.

**Fix:**
Ensure:

* Templates exist
* `template_id` is set correctly

---

## 📁 Project Structure (Important Parts)

```
app/
 ├── Filament/
 │   ├── Resources/
 │   ├── Pages/
 ├── Models/
 │   ├── Invoice.php
 │   ├── Template.php
 │   ├── User.php

resources/
 ├── views/
 │   ├── components/
 │   │   └── invoice-renderer.blade.php
 │   ├── templates/
```

---

## 🔐 Notes

* All users currently can access Filament panel
* You can restrict access later using roles (e.g. `is_admin`)

---

## 💡 Future Improvements

* User roles (admin / client)
* Invoice history per user
* Payment tracking
* Email sending
* Custom branding upload

---


## 📄 License

This project is open-source and available under the MIT License.
