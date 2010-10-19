MooTools Template
=================

1. Clone it
2. Open up `.gitmodules` and delete the stuff you don't want
3. Add some stuff you do (make sure it works with packager)
4. `$ git submodule init`
5. `$ git submodule update`
6. Require the files you need with `/build.php` during development
7. Build static files before deploying to production.

Isn't it great?!

    <script src="/build.php?scripts=Core/Element,Core/Request"></script>

More coming ...
