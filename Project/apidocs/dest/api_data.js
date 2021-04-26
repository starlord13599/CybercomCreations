define({ "api": [
  {
    "type": "post",
    "url": "/user",
    "title": "To add new user",
    "name": "add-user",
    "group": "User",
    "parameter": {
      "fields": {
        "body": [
          {
            "group": "body",
            "type": "String",
            "optional": false,
            "field": "firstName",
            "description": "<p>First Name of the user</p>"
          },
          {
            "group": "body",
            "type": "String",
            "optional": false,
            "field": "lastName",
            "description": "<p>Last Name of the user</p>"
          },
          {
            "group": "body",
            "type": "Number",
            "optional": false,
            "field": "age",
            "description": "<p>Age of the user</p>"
          },
          {
            "group": "body",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>Email of the user</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Request-Example:",
          "content": "{\nfirstname:\"Deep\"\nlastname:\"Patel\"\nage:23\nemail:\"deep@gmail.com\"\n}",
          "type": "type"
        }
      ]
    },
    "success": {
      "fields": {
        "200": [
          {
            "group": "200",
            "type": "String",
            "optional": false,
            "field": "firstName",
            "description": "<p>First Name of the user</p>"
          },
          {
            "group": "200",
            "type": "String",
            "optional": false,
            "field": "lastName",
            "description": "<p>Last Name of the user</p>"
          },
          {
            "group": "200",
            "type": "Number",
            "optional": false,
            "field": "age",
            "description": "<p>Age of the user</p>"
          },
          {
            "group": "200",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>Email of the user</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "{\nfirstname:\"Deep\"\nlastname:\"Patel\"\nage:23\nemail:\"deep@gmail.com\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "apidocs/src/test.js",
    "groupTitle": "User"
  },
  {
    "type": "delete",
    "url": "/user/:id",
    "title": "To delete a user with specific id",
    "name": "delete-user",
    "group": "User",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>Unique <code>id</code> of the user</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Request-Example:",
          "content": "{\n    id: 123\n}",
          "type": "type"
        }
      ]
    },
    "success": {
      "fields": {
        "200": [
          {
            "group": "200",
            "type": "json",
            "optional": false,
            "field": "message",
            "description": "<p>The user with <code>id</code> deleted successfully</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "{\n    message : The user with <code>id</code> deleted successfully\n}",
          "type": "type"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "apidocs/src/test.js",
    "groupTitle": "User"
  },
  {
    "type": "get",
    "url": "/users",
    "title": "To get the all user",
    "name": "fetch-all-users",
    "group": "User",
    "success": {
      "fields": {
        "UserDetails": [
          {
            "group": "UserDetails",
            "type": "Object[]",
            "optional": false,
            "field": "firstname",
            "description": "<p>The firstname of the user</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "[\n{\nfirstname:\"JOhn\"\nlastname:\"Doe\"\nage:23\nemail:\"johndoe@gmail.com\"\n},{\nfirstname:\"Deep\"\nlastname:\"Patel\"\nage:23\nemail:\"deep@gmail.com\"\n}\n]",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error": [
          {
            "group": "Error",
            "optional": false,
            "field": "UserNotFound",
            "description": "<p>If the url don't return an user</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "apidocs/src/test.js",
    "groupTitle": "User"
  },
  {
    "type": "get",
    "url": "/users/:id",
    "title": "Fetch User with a spcific id",
    "name": "fetch-unique-user",
    "group": "User",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "id",
            "optional": false,
            "field": "id",
            "description": "<p>The unique <code>id</code></p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Request-Example:",
          "content": "{\n    id: 1234\n}",
          "type": "json"
        }
      ]
    },
    "success": {
      "fields": {
        "200": [
          {
            "group": "200",
            "type": "String",
            "optional": false,
            "field": "firstName",
            "description": "<p>First Name of the user</p>"
          },
          {
            "group": "200",
            "type": "String",
            "optional": false,
            "field": "lastName",
            "description": "<p>Last Name of the user</p>"
          },
          {
            "group": "200",
            "type": "Number",
            "optional": false,
            "field": "age",
            "description": "<p>Age of the user</p>"
          },
          {
            "group": "200",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>Email of the user</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "{\nfirstname:\"Deep\"\nlastname:\"Patel\"\nage:23\nemail:\"deep@gmail.com\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "apidocs/src/test.js",
    "groupTitle": "User"
  },
  {
    "type": "patch",
    "url": "/user/:id",
    "title": "To patch a user with specific id",
    "name": "patchs-user",
    "group": "User",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>Unique <code>id</code> of the user</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Request-Example:",
          "content": "{\n    id: 123\n}",
          "type": "type"
        }
      ]
    },
    "success": {
      "fields": {
        "200": [
          {
            "group": "200",
            "type": "json",
            "optional": false,
            "field": "message",
            "description": "<p>The user with <code>id</code> deleted successfully</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "{\n    message : The user with <code>id</code> deleted successfully\n}",
          "type": "type"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "apidocs/src/test.js",
    "groupTitle": "User"
  }
] });
