# Bookmarker

Simple Laravel PHP Rest API to store your bookmarks in your database.

##[Try this API]

## Installation

If you don't want to develop or you already have laravel and composer installed simply go to step 5.

#### 1. Install Composer

With curl:
```
curl -sS https://getcomposer.org/installer | php
```

Without curl:
```
php -r "readfile('https://getcomposer.org/installer');" | php
```

####2. Allow yourself to use `composer` instead of `php composer.phar`

```
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
```

####3. Make sure to place the `~/.composer/vendor/bin` directory in your `PATH`
Simply open ``~/.bashrc and add:

```
export PATH="$PATH:~/.composer/vendor/bin"
```

reload your .bashrc like: `source ~/.bashrc`

####4. Installing Laravel

Simply execute: `composer global require "laravel/installer=~1.1"`

####5. (Fork &) Clone this Repository

`git clone git@github.com:DominikAngerer/BookmarkerAPI.git`

####6. `.env` File

Change the database attributes to fit your environment

####7. Execute `php artisan migrate` in the root of this application.

This will generate the whole database tables. You will then have a `bookmarks`, `migrations`, `password_resets` and a `users` table, but only the `bookmarks` table is currently in use.

####8. Starting this Laravel application

There are two ways for doing this. You can start your application simply by accessing a path like, if you have it uploaded on your local tomcat:

```
http://localhost/your-laravel-app/public/
```

But I would tell you to do it by simply execute:

```
php artisan serve
```

in your command line and visit: `http://localhost:8000/`.


## API Documentation:
#### GET `/bookmarks/`

Retrieve list of Bookmarks

Response (200 - OK):

```
{
  "bookmarks": [
    {
      "id": "1",
      "title": "Google",
      "url": "http://www.google.com",
      "tags": "Search Engine"
    },
    {
      "id": "2",
      "title": "Bing",
      "url": "http://www.bing.com",
      "tags": "Search Engine"
    },
    {
      "id": "3",
      "title": "Youtube",
      "url": "http://www.youtube.com",
      "tags": "Video Sharing Platform"
    }
  ]
}
```

#### GET `/bookmarks/{id}`

Retrieve a specific bookmark

Response: (200 - OK):

```
{
  "bookmark": {
      "id": "1",
      "title": "Google",
      "url": "http://www.google.com",
      "tags": "Search Engine"
    }
}
```

#### POST `/bookmarks/`

Add a new bookmark

Request:
```
{
  "bookmark": {
      "title": "Vimeo",
      "url": "http://www.vimeo.com",
      "tags": "Video Sharing Platform"
    }
}
```

Response: (200 - OK):
```
{
  "bookmark": {
  	  "id": 4,
      "title": "Vimeo",
      "url": "http://www.vimeo.com",
      "tags": "Video Sharing Platform"
    }
}
```

#### DELETE `/bookmarks/{id}`

Removes a specific bookmark

Response (204 - No Content)


## Version: 0.1.0


[Try this API]:http://api.bookmarker.dominikangerer.com/
