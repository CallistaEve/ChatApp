# 💬 ChatApp

A simple real-time chat application built with **SwiftUI (iOS)** and **Laravel API Backend**.

This project was created as a portfolio project to demonstrate full-stack mobile development, including:

- iOS Frontend (SwiftUI)
- REST API Backend (Laravel)
- SQLite Database
- Message Storage & Retrieval
- User-to-User Messaging

---

## 📱 Features

### Current Features

✅ Send Messages

✅ Retrieve Chat History

✅ Store Messages in Database

✅ Laravel REST API

✅ SwiftUI Chat Interface

✅ Message Bubbles

✅ Timestamp Display

✅ Receiver Information Header

---

## 🛠 Tech Stack

### Frontend
- SwiftUI
- MVVM Architecture
- URLSession
- Codable

### Backend
- Laravel 12
- PHP
- REST API
- Eloquent ORM

### Database
- SQLite

---

## 📂 Project Structure

```text
ChatApp/
│
├── chat-frontend/
│   ├── SwiftUI Application
│   ├── Views
│   ├── Models
│   └── Networking
│
└── chat-backend/
    ├── Laravel API
    ├── Controllers
    ├── Models
    ├── Migrations
    └── Database
```

---

## 🚀 API Endpoints

### Send Message

```http
POST /api/send-message
```

Request Body:

```json
{
    "sender_id": 1,
    "receiver_id": 2,
    "message": "Hello John!"
}
```

Response:

```json
{
    "status": "success",
    "data": {
        "id": 1,
        "sender_id": 1,
        "receiver_id": 2,
        "message": "Hello John!"
    }
}
```

---

## 📸 Screenshots

### Chat Screen

(Add screenshots here later)

---

## 🔧 Setup

### Backend

```bash
cd chat-backend

composer install

php artisan migrate

php artisan serve
```

Backend runs at:

```text
http://127.0.0.1:8000
```

---

### Frontend

```bash
Open ChatApp.xcodeproj
```

Run the application using:

```text
iPhone Simulator
```

Make sure the API base URL points to the Laravel backend.

---

## 🎯 Learning Objectives

This project helped me learn:

- SwiftUI Development
- REST API Integration
- Laravel Backend Development
- Database Design
- JSON Serialization
- API Testing with Postman
- Git & GitHub Workflow

---

## 📌 Future Improvements

- [ ] User Authentication
- [ ] Login Screen
- [ ] Registration Screen
- [ ] Profile Picture Support
- [ ] Read Receipts
- [ ] Typing Indicator
- [ ] Online Status
- [ ] Real-time Messaging (WebSockets)
- [ ] Push Notifications
- [ ] Dark Mode
- [ ] Message Search

---

## 👩‍💻 Author

**Evelyn Callista Yaurentius**

GitHub:
https://github.com/CallistaEve
