# LARAVEL POLYMORPHS PROJECT

This project is a Laravel-based application that demonstrates the use of polymorphic relationships. It includes various resources such as posts, comments, tags, and videos, and provides a RESTful API for managing these resources.

more information at -

https://medium.com/@murilolivorato/mastering-polymorphic-relationships-in-laravel-a-comprehensive-guide-ff3bc3ef2b64

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
