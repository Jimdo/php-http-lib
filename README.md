[![CircleCI](https://circleci.com/gh/Jimdo/php-http-lib/tree/master.svg?style=svg)](https://circleci.com/gh/Jimdo/php-http-lib/tree/master)

# php-http-lib

This repository is a library of http clients - Response, Request and Session.

# Makefile

The library code provides a Makefile:

```
$ make help
bootstrap    Install composer
update       Update composer packages
tests        Execute test suite
```

# Download

$ https://packagist.org/packages/jimdo/http

$ composer require jimdo/http

# Developement setup

```
# Clone the repository

$ git clone git@github.com:Jimdo/php-http-lib.git

# Install composer and project dependencies

$ make bootstrap

# Requirements for test-driven

$ (xDebug) phpbrew ext install xdebug
```

## Useful methods in the `Request` Object

- <i>__construct(queryParams, formData, sessionData)</i> - The construct is the field where the query params and form data need to fill in as an array. The third one is a session object.
- <i>getQueryParams()</i> - Returns query params as an array if available
- <i>getFormData()</i> - Returns information from the form as an array
- <i>getSessionData()</i> - Returns session data as an array

## Useful methods in the `Response` Object

- <i>addBody()</i> - Attach html code to one string for the correct body format
- <i>addHeader()</i> - Add one header to the Response Headers
- <i>render()</i> - Render header and body into correct html output code

## `Session` Object

The Session Object handles with magic properties and methods.

- Set properties via __construct or define properties with the session object

```
(example)
1. $session = new Session(["foo" => "bar"]);
2. $session->foo = "bar";
```

- Get properties

```
(example)
$session = new Session(["foo" => "bar"]);

$data = $session->foo;
```