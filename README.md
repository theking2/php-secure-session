# php-secure-session
Test project to test secure cookie sessions
## index.php
The none secured local server (Apache 2.4.54.2 / PHP 8.2.1 / Windows 10) responds with:
```
HTTP/1.1 200 OK
Date: Sun, 03 Mar 2024 10:07:41 GMT
Server: Apache/2.4.54 (Win64) PHP/8.2.11 mod_fcgid/2.3.10-dev
X-Powered-By: PHP/8.2.11
Set-Cookie: PHPSESSID=o1u7o4vq0k2bccbeatvjd4jc3s; path=/; domain=example.com; secure; HttpOnly; SameSite=Strict
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: no-store, no-cache, must-revalidate
Pragma: no-cache
Content-Length: 0
Keep-Alive: timeout=5, max=100
Connection: Keep-Alive
Content-Type: text/html; charset=UTF-8
```
The count goes up with every refresh => session cookie was transmitted and stored

## index2.php
The none secured local server (Apache 2.4.54.2 / PHP 8.2.1 / Windows 10) responds with:
```
HTTP/1.1 200 OK
Date: Sun, 03 Mar 2024 10:14:22 GMT
Server: Apache/2.4.54 (Win64) PHP/8.2.11 mod_fcgid/2.3.10-dev
X-Powered-By: PHP/8.2.11
Set-Cookie: __Secure-PHPSESSID=ksl8m0oo3hrbt5buaj0ubhnk5n; path=/; domain=example.com; secure; HttpOnly; SameSite=Strict
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: no-store, no-cache, must-revalidate
Pragma: no-cache
Content-Length: 0
Keep-Alive: timeout=5, max=100
Connection: Keep-Alive
Content-Type: text/html; charset=UTF-8
```
In this case the browser notifies that
![image](https://github.com/theking2/php-secure-session/assets/1612152/062c9615-b909-4c9c-8ef2-c812ef6f69b3)

The count stays 1 => session cookie was transmitted and but _not_ stored.
