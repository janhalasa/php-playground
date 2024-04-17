# Session

This demo shows how to
* keep authenticated user info in [$_SESSION](https://www.php.net/manual/en/book.session.php),
* redirect after each POST request,
* reuse PHP code in multiple source files,
* displaying errors after invalid requests.

## HTTP Session

`$_SESSION` is an array that is shared between requests on the server. The session is identified by the cookie `PHPSESSID`. So each session is unique to an open browser.

The session is typically used to keep data about the authenticated user, but it can store any basic or complex data structures that we want to keep safe or we don't want to send them to a browser and back.

To use the HTTP Session, it's necessary to call `session_start()` before sending any content from the PHP script. 

## Redirect after POST

All requests that modify a server state, should be submited with the POST HTTP method. If we return an HTML page right away, browser displays it, but if a user tries to reload the page, the browser displays a warning - reloading the page would result in resending the POST request. That's why it's necessary to make a redirect `header('Location: some-page.php')` after each POST request.

## Code reuse

Probably the easiest way to reuse a code in PHP scripts is to include a PHP file in other source files. For example, if there is some common initialization code for each request processing, it can be place in a separate source file and included at the beginning of each PHP file that needs it:
```PHP
<?php require_once('init.php'); ?>
```
See the official docs for the [require_once](https://www.php.net/manual/en/function.require-once.php) function.

## Displaying errors

After sending invalid credentials or when trying to access private pages without authentication, applications should display an error message. These error messages can be indicate by URL parameters. For example:
```
http://localhost/login-form.php?error=invalid-credentials
```
The `error` parameter value can be read found in `$_GET['error']`.