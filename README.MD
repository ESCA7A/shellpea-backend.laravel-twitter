# **Twitters**

### description
project as part of learning the laravel framework


[@author](https://github.com/ESCA7A)
### how to deploy

1. clone the repository first
```
# cloning repo
#
✘ [esca7a@manjaro] ~/:$ git clone git@github.com:ESCA7A/twitter-laravel.git example
#Cloning into 'example'...
```
2. go to directory 
```
#Receiving objects: 100% (2834/2834), 17.84 MiB | 5.71 MiB/s, done.
#Resolving deltas: 100% (711/711), done.
#
 [esca7a@manjaro] ~/:$ cd example
```
- [x] **the project includes support for a small number of short commands for convenience**
3. run `bin/help` in terminal

```
 ✘ [esca7a@manjaro] ~/example 🌴refactoring :$ bin/help
 #   
 #  +----------------------------------------------------------------+
 #  |             Use the following CLI commands                     |
 #  +----------------------------------------------------------------+
 #  | bin/artisan                | run alias 'php artisan <commands>'|
 #  | bin/fixperm                | fix bin directory permissions     |
 #  | bin/install                | quick install depends & configure |
 #  | bin/mysql                  | enter to database by short command|
 #  | bin/start                  | start migrations & seed           |
 #  +----------------------------------------------------------------+
```

4. **check the required dependencies**
    
    | DEPENDS  | VERSION |
    |:---------|:-------:|
    | PHP      | \>=7.4  |
    | composer |   2.*   |
    | npm      |   8.*   |
    | nodejs   |    >=12     |


5. run `bin/install`
```
✘ [esca7a@manjaro] ~/example 🌴refactoring :$ bin/install   
#
#   +---------------------+
#   | Installing depends  |
#   +---------------------+
#
#   Installing dependencies from lock file (including require-dev)
#   Verifying lock file contents can be installed on current platform.
#   Package operations: 108 installs, 0 updates, 0 removals
#   - Installing symfony/polyfill-mbstring (v1.26.0): Extracting archive
#   - Installing fruitcake/php-cors (v1.2.0): Extracting archive
#   - Installing psr/http-message (1.0.1): Extracting archive
#   - Installing psr/http-client (1.0.1): Extracting archive
```

6. go to .env and add database configuration 

```
    DB_DATABASE=laravel_engine
    DB_USERNAME=twitter
    DB_PASSWORD=twitter
```

7. run `bin/start` in terminal

```
 ✘ [esca7a@manjaro] ~/example 🌴refactoring :$ bin/start
 #   INFO  Nothing to migrate.
 #
 #   INFO  Seeding database.
 #
 #   +---------------------------------------------------------+
 #   | migrations completed successfully. Starting the server  |
 #   +---------------------------------------------------------+
 #
 #  > dev
 #  > vite
```

8. open [twitters](http://127.0.0.1:8000/) in browser
