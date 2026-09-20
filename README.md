# Online Typing Master

A web-based application designed to enhance users' typing skills through structured practice sessions, timed tests, and real-time competitive typing challenges. Built as a final year capstone project for the BS in Information Technology programme at Bahauddin Zakariya University, Multan.

## Overview

Online Typing Master provides an interactive environment for users of all levels — from beginners to advanced typists — to improve their typing speed and accuracy through three core modules:

- **Practice Mode** — Customizable exercises for building speed and accuracy over time.
- **Typing Test** — Timed performance evaluation with detailed reports on words per minute (WPM), accuracy, and error analysis.
- **Typing Competition** — Real-time multiplayer typing contests between users, encouraging healthy competition and skill improvement.

Additional features include performance tracking with historical progress charts, an interactive leaderboard, and an admin dashboard for managing users, tests, and competitions.

## Tech Stack

- **Backend:** PHP (CodeIgniter 3 — MVC framework)
- **Database:** MySQL
- **Frontend:** Bootstrap, jQuery, AJAX
- **Architecture:** Model-View-Controller (MVC)

## Project Structure
application/
├── controllers/ # Site, User, Test, Setting, Email
├── models/ # SiteModel, UserModel, TestModel, SettingModel
├── views/ # User-facing pages + admin dashboard views
└── config/ # CodeIgniter configuration

assets/ # CSS, JS, images, third-party libraries
typing_master.sql # Database schema


## Database Schema

The application uses 7 core tables:
- `user` — user accounts and authentication
- `test` — typing test definitions
- `user_test` — individual test attempts and results
- `compition` — competition sessions
- `typing_lessons` — structured practice content
- `settings` — application configuration
- `message` — user/admin messaging

## Key Responsibilities

- Designed the system architecture and relational database schema
- Implemented the MVC structure and controller logic for all core modules
- Built real-time WPM/accuracy calculation using JavaScript/AJAX
- Developed a responsive, Bootstrap-based user interface
- Performed functional testing and debugging across all modules

## Author

**Muhammad Naveed & Ameer Hamza**
BS in Information Technology, Bahauddin Zakariya University (2020–2024)
