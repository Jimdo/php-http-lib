[![CircleCI](https://circleci.com/gh/Jimdo/php-http-lib/tree/master.svg?style=svg)](https://circleci.com/gh/Jimdo/php-http-lib/tree/master)

# php-http-lib

This repository is a libary of http clients - Response, Request and Session.

# Makefile

The libary code provides a Makefile:

```
$ make help
bootstrap    Install composer
update       Update composer packages
tests        Execute test suite
```

# Download

WIP - Download Link will follow via composer.org.

# Developement setup

```
# Clone the repository

$ git clone git@github.com:Jimdo/php-http-lib.git

# Install composer and project dependencies

$ make bootstrap
```

## Useful methods in the `Request` Object

- <i>__construct(queryParams, formData, sessionData)</i> - The construct is the field where the query params, form data and session data need to fill in as an array
- <i>getQueryParams()</i> - Returns query params as an array if available
- <i>getFormData()</i> - Returns information from the form as an array
- <i>getSessionData()</i> - Returns session data as an array



## Useful methods in the `Response` Object

- <i>addBody()</i> - Attach html code to one string for the correct body format
- <i>addHeader()</i> - Add one header to the Response Headers
- <i>render()</i> - Render header and body into correct html output code