# LSPU Events Management System 🎓📅

A web-based system for managing university events at LSPU (Laguna State Polytechnic University). Built with plain PHP and MySQL, it handles event records end-to-end — from login and registration, to creating, editing, and searching events, to generating printable PDF reports.

Designed for real-world administrative use, this system prioritizes:

- 📅 Straightforward management of event records
- 🔐 Simple, account-based access to the system
- 📄 On-demand PDF reporting for record-keeping
- 🧱 A lightweight, dependency-light PHP setup

Current production version: **v1**

🔗 **Live Demo:** _Not deployed yet — currently runs locally._

## 🌍 Project Overview

The LSPU Events Management System gives staff a central place to log in, register events, keep them up to date, search through them, and export reports as PDFs — replacing manual, paper-based event tracking.

## 🧩 Core Features

- 🔐 **Login, Register, and Forgot Password** — account access and recovery
- 📅 **Event management** (`events.php`, `submit.php`) — create and list events
- ✏️ **Edit events** (`edit.php` → `doedit.php`) — update existing event records
- 🗑️ **Delete events** (`delete.php` → `dodelete.php`) — remove event records
- 🔎 **Search** (`search.php`) — find events quickly
- 📄 **PDF report generation** (`report.php`, `createpdf.php`) — powered by the TCPDF library
- 🧩 **Shared layout includes** — `header.php`, `footer.php`, `sidebar.php` for consistent page structure

## 🔄 Core Flow

```
Login / Register (with Forgot Password recovery)
        ↓
   Events Dashboard (events.php)
        ↓
   Submit New Event (submit.php)  ──┐
   Edit Event (edit.php → doedit.php) ├─→ Database (via dbconnect.php)
   Delete Event (delete.php → dodelete.php) ──┘
        ↓
   Search Events (search.php)
        ↓
   Generate PDF Report (report.php → createpdf.php, via TCPDF)
```

## 📋 Database Schema Reference

The database schema/dump is provided in `symbols.sql`. Based on the application's PHP files, the system centers on:

- **Users** — accounts for login/registration/password recovery
- **Events** — event records (created via `submit.php`, updated via `doedit.php`, removed via `dodelete.php`)

## 🧱 System Architecture

```
Browser
   ↓
PHP Pages (login, register, events, edit, delete, search, report)
   ↓
dbconnect.php → MySQL Database (symbols.sql schema)
   ↓
TCPDF Library → PDF Report Generation (createpdf.php)
```

## 📁 Project Structure

```
LSPUevents_Management_System/
├── assets/              # Logo, favicon, and branding images
├── tcpdf/               # Vendored TCPDF library (third-party PDF generation)
├── index.php            # Entry point
├── login.php / register.php / logout.php / forgotpassword.php
├── header.php / footer.php / sidebar.php   # Shared layout includes
├── events.php / submit.php                 # List & create events
├── edit.php / doedit.php                   # Edit flow
├── delete.php / dodelete.php               # Delete flow
├── search.php           # Event search
├── report.php / createpdf.php              # PDF report generation
├── dbconnect.php        # Database connection
├── fetch.php            # Data fetching endpoint
├── symbols.sql          # Database schema/dump
└── README.md
```

## 🛠️ Tech Stack

- **Language:** PHP (procedural, no framework)
- **Database:** MySQL
- **PDF Generation:** [TCPDF](https://tcpdf.org/) library (vendored under `tcpdf/`)
- **Frontend:** HTML/CSS via shared `header.php` / `footer.php` / `sidebar.php` includes
- **Version Control:** Git, GitHub

## ▶️ Running Locally

1. Clone the repo
2. Place the project folder in your local server's web root (e.g. `htdocs` for XAMPP)
3. Create a MySQL database and import `symbols.sql`
4. Update the credentials in `dbconnect.php` to match your local database
5. Start your local server (e.g. Apache via XAMPP/WAMP) and MySQL
6. Visit `http://localhost/LSPUevents_Management_System/` in your browser

## 🚀 Future Roadmap

- ✅ Login, registration, and password recovery
- ✅ Event creation, editing, and deletion
- ✅ Event search
- ✅ PDF report generation via TCPDF
- 🔜 Role-based access (admin vs. staff/organizer accounts)
- 🔜 Event categories/filtering on the dashboard
- 🔜 Email notifications for upcoming events
- 🔜 Migrate to a framework-based structure for easier maintenance

## 🤝 Contributing

Pull requests welcome! Please:

- 🔒 Never commit real database credentials or `.vs`/IDE workspace files
- 🧱 Keep new pages consistent with the existing `header.php`/`footer.php`/`sidebar.php` layout pattern
- 📄 Avoid modifying vendored TCPDF files directly — update via the library's own releases instead
- 🧪 Test the full create → edit → delete → report flow before submitting changes

## About

A PHP and MySQL web system for managing LSPU university events, with login/registration, full event CRUD, search, and PDF report generation via TCPDF. 🎓📅

### Topics

`php` `mysql` `event-management` `tcpdf` `pdf-generation` `crud`

---

⭐ Stars · 👀 Watchers · 🍴 Forks
