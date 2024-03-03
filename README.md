# php-secure-session
Test project to test secure cookie sessions.
Note: in both cases the PHPSESSID is transmitted in none secure HTTP:// connection. But in the second case the cookie is __not__ included in the next request where in the first case the session cookie is inluded.
To test this make sure you disable settings like HTTPS-only on your browser or disable auto redirect to HTTP to HTTPS on your server. Like forinstance here [http://php-secure-session.go321.eu](http://php-secure-session.go321.eu/index2.php)
## index.php
The none secured local server (Apache 2.4.54.2 / PHP 8.3.3 / Windows 10) responds with:
```
HTTP/1.1 200 OK
Date: Sun, 03 Mar 2024 10:33:39 GMT
Server: Apache/2.4.54 (Win64) PHP/8.3.3 mod_fcgid/2.3.10-dev
X-Powered-By: PHP/8.3.3
Set-Cookie: PHPSESSID=nfjkdm7n6a5kn4crt7s1ifmv2m; path=/; domain=php-secure-session.localhost; secure; HttpOnly; SameSite=Strict
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: no-store, no-cache, must-revalidate
Pragma: no-cache
Content-Length: 12
Keep-Alive: timeout=5, max=100
Connection: Keep-Alive
Content-Type: text/html; charset=UTF-8
```
The count goes up with every refresh => session cookie was transmitted and stored

## index2.php
The none secured local server (Apache 2.4.54.2 / PHP 8.2.1 / Windows 10) responds with:
```
HTTP/1.1 200 OK
Date: Sun, 03 Mar 2024 10:34:03 GMT
Server: Apache/2.4.54 (Win64) PHP/8.3.3 mod_fcgid/2.3.10-dev
X-Powered-By: PHP/8.3.3
Set-Cookie: __Secure-PHPSESSID=4sej3ihsnnvls6on1bk0gl8tdk; path=/; domain=php-secure-session.localhost; secure; HttpOnly; SameSite=Strict
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: no-store, no-cache, must-revalidate
Pragma: no-cache
Content-Length: 12
Keep-Alive: timeout=5, max=100
Connection: Keep-Alive
Content-Type: text/html; charset=UTF-8
```
In this case the browser notifies that
![image](https://github.com/theking2/php-secure-session/assets/1612152/062c9615-b909-4c9c-8ef2-c812ef6f69b3)

The count stays 1 => session cookie was transmitted and but _not_ stored.


Server: Windows 10
Apache: 2.4.54.2
PHP: 8.3.3
php.ini all defaults;
