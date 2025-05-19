# Mastering Polymorphic Relationships in Laravel

A comprehensive guide and implementation of polymorphic relationships in Laravel, demonstrating both one-to-many and many-to-many polymorphic relationships through a practical example.

<p align="center">
<br><br>
<img src="https://miro.medium.com/v2/resize:fit:700/1*B9DqS8UffgiQ9HjG5m_NYg.png" alt="Introduction" /><br>
</p>

<p align="center">
<br><br>
<img src="https://miro.medium.com/v2/resize:fit:700/1*r9leqAZTHuYZJ1NTMTmZYA.png" alt="Introduction" /><br>
</p>




more information at -
https://medium.com/@murilolivorato/mastering-polymorphic-relationships-in-laravel-a-comprehensive-guide-ff3bc3ef2b64

## Overview

This project demonstrates how to implement polymorphic relationships in Laravel using a blog-like application where:
- Posts and Videos can have Comments (one-to-many polymorphic)
- Posts and Videos can have Tags (many-to-many polymorphic)
- A single relationship structure can be reused across different models

## Features

- One-to-many polymorphic relationships (Comments)
- Many-to-many polymorphic relationships (Tags)
- RESTful API implementation
- Factory and Seeder setup
- Postman collections for API testing
- Comprehensive model relationships

## Prerequisites

- PHP 8.1 or higher
- Composer
- Laravel 10.x
- MySQL or another database system
- Postman (for API testing)

## Installation

1. Clone the repository:
```bash
git clone <your-repository-url>
cd polymorphic-example
```

2. Install dependencies:
```bash
composer install
```

3. Configure your environment:
```bash
cp .env.example .env
php artisan key:generate
```

4. Run migrations and seed the database:
```bash
php artisan migrate
php artisan db:seed
```

## Database Structure

### Tables
- `posts` - Stores blog posts
- `videos` - Stores video content
- `comments` - Stores comments (polymorphic)
- `tags` - Stores tags
- `taggables` - Polymorphic pivot table for tags

### Key Relationships

1. **One-to-Many Polymorphic (Comments)**
   - Posts can have many comments
   - Videos can have many comments
   - Comments belong to either posts or videos

2. **Many-to-Many Polymorphic (Tags)**
   - Posts can have many tags
   - Videos can have many tags
   - Tags can belong to many posts and videos



## PREREQUISITES

Before you begin, ensure you have met the following requirements:
- PHP >= 8.0
- Composer
- Node.js and npm
- A web server (e.g., Apache, Nginx)
- A database server (e.g., MySQL, PostgreSQL)

## INSTALLATION

1. Clone the repository:
    ```sh
    git clone https://github.com/murilolivorato/laravel-polymorphs-project.git
    cd laravel-polymorphs
    ```

2. Install PHP dependencies using Composer:
    ```sh
    composer install
    ```

3. Install JavaScript dependencies using npm:
    ```sh
    npm install
    ```

4. Copy the `.env.example` file to `.env` and configure your environment variables:
    ```sh
    cp .env.example .env
    ```

5. Generate an application key:
    ```sh
    php artisan key:generate
    ```

6. Run database migrations:
    ```sh
    php artisan migrate
    ```

## Usage

1. Start the local development server:
    ```sh
    php artisan serve
    ```

2. Access the application in your web browser at `http://localhost:8000`.

## Running Tests

To run the tests, use the following command:
```sh
php artisan test

```

## POSTMAN COLLECTION

### POSTS COLLECTION -
```
{
  "info": {
    "name": "PostController API",
    "_postman_id": "12345-67890-abcdef",
    "description": "Collection for PostController API endpoints",
    "schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json"
  },
  "item": [
    {
      "name": "Get All Posts",
      "request": {
        "method": "GET",
        "header": [],
        "url": {
          "raw": "{{base_url}}/api/posts",
          "host": ["{{base_url}}"],
          "path": ["api", "posts"]
        }
      }
    },
    {
      "name": "Create Post",
      "request": {
        "method": "POST",
        "header": [
          {
            "key": "Content-Type",
            "value": "application/json"
          }
        ],
        "body": {
          "mode": "raw",
          "raw": "{\n  \"title\": \"Sample Post\",\n  \"body\": \"This is a sample post body.\"\n}"
        },
        "url": {
          "raw": "{{base_url}}/api/posts",
          "host": ["{{base_url}}"],
          "path": ["api", "posts"]
        }
      }
    },
    {
      "name": "Get Post by ID",
      "request": {
        "method": "GET",
        "header": [],
        "url": {
          "raw": "{{base_url}}/api/posts/:id",
          "host": ["{{base_url}}"],
          "path": ["api", "posts", ":id"],
          "variable": [
            {
              "key": "id",
              "value": "1"
            }
          ]
        }
      }
    },
    {
      "name": "Update Post",
      "request": {
        "method": "PUT",
        "header": [
          {
            "key": "Content-Type",
            "value": "application/json"
          }
        ],
        "body": {
          "mode": "raw",
          "raw": "{\n  \"title\": \"Updated Post Title\",\n  \"body\": \"Updated post body content.\"\n}"
        },
        "url": {
          "raw": "{{base_url}}/api/posts/:id",
          "host": ["{{base_url}}"],
          "path": ["api", "posts", ":id"],
          "variable": [
            {
              "key": "id",
              "value": "1"
            }
          ]
        }
      }
    },
    {
      "name": "Delete Post",
      "request": {
        "method": "DELETE",
        "header": [],
        "url": {
          "raw": "{{base_url}}/api/posts/:id",
          "host": ["{{base_url}}"],
          "path": ["api", "posts", ":id"],
          "variable": [
            {
              "key": "id",
              "value": "1"
            }
          ]
        }
      }
    }
  ]
}
```
### COMMENTS COLLECTION

```
{
  "info": {
    "name": "CommentController API",
    "_postman_id": "12345-67890-abcdef",
    "description": "Collection for CommentController API endpoints",
    "schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json"
  },
  "item": [
    {
      "name": "Get All Comments",
      "request": {
        "method": "GET",
        "header": [],
        "url": {
          "raw": "{{base_url}}/api/comments",
          "host": ["{{base_url}}"],
          "path": ["api", "comments"]
        }
      }
    },
    {
      "name": "Create Comment",
      "request": {
        "method": "POST",
        "header": [
          {
            "key": "Content-Type",
            "value": "application/json"
          }
        ],
        "body": {
          "mode": "raw",
          "raw": "{\n  \"body\": \"This is a sample comment body.\"\n}"
        },
        "url": {
          "raw": "{{base_url}}/api/comments",
          "host": ["{{base_url}}"],
          "path": ["api", "comments"]
        }
      }
    },
    {
      "name": "Get Comment by ID",
      "request": {
        "method": "GET",
        "header": [],
        "url": {
          "raw": "{{base_url}}/api/comments/:id",
          "host": ["{{base_url}}"],
          "path": ["api", "comments", ":id"],
          "variable": [
            {
              "key": "id",
              "value": "1"
            }
          ]
        }
      }
    },
    {
      "name": "Update Comment",
      "request": {
        "method": "PUT",
        "header": [
          {
            "key": "Content-Type",
            "value": "application/json"
          }
        ],
        "body": {
          "mode": "raw",
          "raw": "{\n  \"body\": \"Updated comment body content.\"\n}"
        },
        "url": {
          "raw": "{{base_url}}/api/comments/:id",
          "host": ["{{base_url}}"],
          "path": ["api", "comments", ":id"],
          "variable": [
            {
              "key": "id",
              "value": "1"
            }
          ]
        }
      }
    },
    {
      "name": "Delete Comment",
      "request": {
        "method": "DELETE",
        "header": [],
        "url": {
          "raw": "{{base_url}}/api/comments/:id",
          "host": ["{{base_url}}"],
          "path": ["api", "comments", ":id"],
          "variable": [
            {
              "key": "id",
              "value": "1"
            }
          ]
        }
      }
    }
  ]
}
```
### tags COLLECTION

```
{
  "info": {
    "name": "TagController API",
    "_postman_id": "12345-67890-abcdef",
    "description": "Collection for TagController API endpoints",
    "schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json"
  },
  "item": [
    {
      "name": "Get All Tags",
      "request": {
        "method": "GET",
        "header": [],
        "url": {
          "raw": "{{base_url}}/api/tags",
          "host": ["{{base_url}}"],
          "path": ["api", "tags"]
        }
      }
    },
    {
      "name": "Create Tag",
      "request": {
        "method": "POST",
        "header": [
          {
            "key": "Content-Type",
            "value": "application/json"
          }
        ],
        "body": {
          "mode": "raw",
          "raw": "{\n  \"name\": \"Sample Tag\"\n}"
        },
        "url": {
          "raw": "{{base_url}}/api/tags",
          "host": ["{{base_url}}"],
          "path": ["api", "tags"]
        }
      }
    },
    {
      "name": "Get Tag by ID",
      "request": {
        "method": "GET",
        "header": [],
        "url": {
          "raw": "{{base_url}}/api/tags/:id",
          "host": ["{{base_url}}"],
          "path": ["api", "tags", ":id"],
          "variable": [
            {
              "key": "id",
              "value": "1"
            }
          ]
        }
      }
    },
    {
      "name": "Update Tag",
      "request": {
        "method": "PUT",
        "header": [
          {
            "key": "Content-Type",
            "value": "application/json"
          }
        ],
        "body": {
          "mode": "raw",
          "raw": "{\n  \"name\": \"Updated Tag Name\"\n}"
        },
        "url": {
          "raw": "{{base_url}}/api/tags/:id",
          "host": ["{{base_url}}"],
          "path": ["api", "tags", ":id"],
          "variable": [
            {
              "key": "id",
              "value": "1"
            }
          ]
        }
      }
    },
    {
      "name": "Delete Tag",
      "request": {
        "method": "DELETE",
        "header": [],
        "url": {
          "raw": "{{base_url}}/api/tags/:id",
          "host": ["{{base_url}}"],
          "path": ["api", "tags", ":id"],
          "variable": [
            {
              "key": "id",
              "value": "1"
            }
          ]
        }
      }
    }
  ]
}
```
### videos COLLECTION

```
{
  "info": {
    "name": "VideoController API",
    "_postman_id": "12345-67890-abcdef",
    "description": "Collection for VideoController API endpoints",
    "schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json"
  },
  "item": [
    {
      "name": "Get All Videos",
      "request": {
        "method": "GET",
        "header": [],
        "url": {
          "raw": "{{base_url}}/api/videos",
          "host": ["{{base_url}}"],
          "path": ["api", "videos"]
        }
      }
    },
    {
      "name": "Create Video",
      "request": {
        "method": "POST",
        "header": [
          {
            "key": "Content-Type",
            "value": "application/json"
          }
        ],
        "body": {
          "mode": "raw",
          "raw": "{\n  \"title\": \"Sample Video\",\n  \"description\": \"This is a sample video description.\"\n}"
        },
        "url": {
          "raw": "{{base_url}}/api/videos",
          "host": ["{{base_url}}"],
          "path": ["api", "videos"]
        }
      }
    },
    {
      "name": "Get Video by ID",
      "request": {
        "method": "GET",
        "header": [],
        "url": {
          "raw": "{{base_url}}/api/videos/:id",
          "host": ["{{base_url}}"],
          "path": ["api", "videos", ":id"],
          "variable": [
            {
              "key": "id",
              "value": "1"
            }
          ]
        }
      }
    },
    {
      "name": "Update Video",
      "request": {
        "method": "PUT",
        "header": [
          {
            "key": "Content-Type",
            "value": "application/json"
          }
        ],
        "body": {
          "mode": "raw",
          "raw": "{\n  \"title\": \"Updated Video Title\",\n  \"description\": \"Updated video description.\"\n}"
        },
        "url": {
          "raw": "{{base_url}}/api/videos/:id",
          "host": ["{{base_url}}"],
          "path": ["api", "videos", ":id"],
          "variable": [
            {
              "key": "id",
              "value": "1"
            }
          ]
        }
      }
    },
    {
      "name": "Delete Video",
      "request": {
        "method": "DELETE",
        "header": [],
        "url": {
          "raw": "{{base_url}}/api/videos/:id",
          "host": ["{{base_url}}"],
          "path": ["api", "videos", ":id"],
          "variable": [
            {
              "key": "id",
              "value": "1"
            }
          ]
        }
      }
    }
  ]
}
```
## 👥 Author

For questions, suggestions, or collaboration:
- **Author**: Murilo Livorato
- **GitHub**: [murilolivorato](https://github.com/murilolivorato)
- **linkedIn**: https://www.linkedin.com/in/murilo-livorato-80985a4a/

<div align="center">
  <h3>⭐ Star This Repository ⭐</h3>
  <p>Your support helps us improve and maintain this project!</p>
  <a href="https://github.com/murilolivorato/laravel-polymorphs-project/stargazers">
    <img src="https://img.shields.io/github/stars/murilolivorato/laravel-polymorphs-project?style=social" alt="GitHub Stars">
  </a>
</div>


