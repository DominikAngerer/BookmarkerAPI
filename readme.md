# Bookmarker

Simple Laravel PHP Rest API to store your bookmarks in your database.

##[Try this API]

### API Documentation:
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


[Try this API]:http://api.bookmarker.dominikangerer.com/
