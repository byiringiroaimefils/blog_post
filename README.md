# Simple Blog Application

A basic Laravel blog application that demonstrates CRUD operations for managing blog posts.

## Features

- Create new blog posts
- View all posts with pagination
- Edit existing posts
- Delete posts
- Form validation
- Flash messages for user feedback
- Responsive design

## Project Structure

```
├── app
│   └── Http
│       └── Controllers
│           └── PostController.php    # Handles all post-related operations
├── database
│   └── migrations
│       └── create_posts_table.php   # Database schema for posts
├── resources
│   └── views
│       ├── layouts
│       │   └── app.blade.php        # Main layout template
│       └── posts
│           ├── create.blade.php     # Create post form
│           ├── edit.blade.php       # Edit post form
│           └── index.blade.php      # List all posts
└── routes
    └── web.php                      # Route definitions
```

## Routes

- `GET /` - Redirects to posts index
- `GET /posts` - Display all posts
- `GET /posts/create` - Show create post form
- `POST /posts` - Store a new post
- `GET /posts/{post}/edit` - Show edit form
- `PUT /posts/{post}` - Update post
- `DELETE /posts/{post}` - Delete post

## Database Schema

The posts table contains the following fields:

```php
Schema::create('posts', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->text('content');
    $table->timestamps();
});
```

## Validation Rules

Posts are validated with the following rules:
- Title: Required, minimum 3 characters
- Content: Required

## Views

- `layouts/app.blade.php` - Main layout with CSS styling
- `posts/index.blade.php` - Lists all posts with edit/delete options
- `posts/create.blade.php` - Form for creating new posts
- `posts/edit.blade.php` - Form for editing existing posts

## Styling

The application includes a custom CSS file (`public/css/posts.css`) that provides:
- Responsive container layout
- Form styling
- Alert messages
- Button styles
- Post card layout

## Error Handling

- Form validation errors are displayed to users
- Success/error messages shown after operations
- Confirmation dialog before post deletion

## Usage

1. Create a new post using the "Add New Post" button
2. View all posts on the index page
3. Edit posts using the "Edit" button
4. Delete posts using the "Delete" button (requires confirmation)

## Dependencies

- Laravel 12.0.1
- PHP 8.2.12

This documentation provides a comprehensive overview of the blog application's structure, features, and functionality. It can help new developers understand the project quickly and serve as a reference for maintaining or extending the application.