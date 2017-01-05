# DAMPP (XAMPP on Docker)

Or how to run Apache+PHP, MySQL, PHPMyAdmin and Tomcat with a single `docker-compose up`.

## Features

* Run PHP and Java web apps with MySQL support
* Manage MySQL databases with ease thanks to PHPMyAdmin
* Isolated Docker containers for each server
* Perl free! (_who's using it nowadays [on web projects] ?_)
* ...anything else to add?

## Steps

### Prerequisites

* Docker 1.24+
* Docker Compose 1.9.0+
* OS of your choice (tested on Ubuntu 16.04 LTS x64)

```
$ git clone https://bitbucket.org/cgrs/dampp.git
$ cd dampp
$ docker-compose up [-d]
```

Put all your PHP work on `www/`. Tomcat goes on `webapps/`.

_I've added a sample files, just to test the setup and to keep
the folder structure._

## Notes

Feel free to modify anything to your own likings.

I'd accept merge requests as long as they're bugfixes. I'll leave feature requests apart just because this is a personal project.

## License

MIT License

Copyright (c) 2017 Carlos González

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.