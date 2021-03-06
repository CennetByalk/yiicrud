<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Kedi Sahiplendirme Ilanları</h1>
    <br>
</p>

![proje_1](https://user-images.githubusercontent.com/77549225/105215688-3f2c8a80-5b5a-11eb-93d7-f8fb5998f4a3.PNG)





• XAMPP kullanmak
------------------------

![xampp](https://user-images.githubusercontent.com/77549225/105217390-77cd6380-5b5c-11eb-9eec-dff75cedb610.PNG)






• PhpMyAdmin kullanmak
-------------------------

![phpmyadmin_1](https://user-images.githubusercontent.com/77549225/105217464-90d61480-5b5c-11eb-90aa-caaf71cafbe5.PNG)

![phpmyadmin_0](https://user-images.githubusercontent.com/77549225/105217475-94699b80-5b5c-11eb-9e45-88e4dfa25a0e.PNG)






• ARAYÜZ
-------------------------
![proje_1](https://user-images.githubusercontent.com/77549225/105215688-3f2c8a80-5b5a-11eb-93d7-f8fb5998f4a3.PNG)





•‘Oku’ butona bastıktan sonra
![proje_2](https://user-images.githubusercontent.com/77549225/105217541-ab0ff280-5b5c-11eb-9f40-2e7a43a0cee5.PNG)





•‘İlanı ekle’ butona bastıktan sonra
![proje_2_2](https://user-images.githubusercontent.com/77549225/105217626-c8dd5780-5b5c-11eb-925f-541c22f4c6fb.PNG)





•‘İlanı kaydet’ butona bastıktan sonra
![proje_3](https://user-images.githubusercontent.com/77549225/105217728-e90d1680-5b5c-11eb-9d88-5b2c133fcd6c.PNG)
![proje_4](https://user-images.githubusercontent.com/77549225/105217770-f5916f00-5b5c-11eb-83ef-d6bf4558f116.PNG)





•‘Güncelle’ butona bastıktan sonra
![proje_5](https://user-images.githubusercontent.com/77549225/105217843-122da700-5b5d-11eb-9cd0-a6770e597a5d.PNG)
![proje_4_1](https://user-images.githubusercontent.com/77549225/105217862-178af180-5b5d-11eb-80a6-a71a9f540c73.PNG)





•‘Kaldır’ butona bastıktan sonra
![proje_6](https://user-images.githubusercontent.com/77549225/105217878-1c4fa580-5b5d-11eb-8e29-3ad616638e4c.PNG)




• KODLAR
-------------------------
![1](https://user-images.githubusercontent.com/77549225/105218995-97fe2200-5b5e-11eb-927e-1930531f2530.PNG)





•‘İlanı ekle’, ‘ Oku’, ‘ Güncelle’ ve ‘Kaldır’ butonları için fonksiyonlar yazdım 
![2](https://user-images.githubusercontent.com/77549225/105219002-9c2a3f80-5b5e-11eb-96cb-ea4e28e820f8.PNG)

![2_1](https://user-images.githubusercontent.com/77549225/105219014-a0565d00-5b5e-11eb-9537-4f4b12c830a2.PNG)

![3](https://user-images.githubusercontent.com/77549225/105219025-a3e9e400-5b5e-11eb-90ab-3282f47351d2.PNG)





•PhpMyAdmin de oluşturduğum tablo ile bağladım
![4](https://user-images.githubusercontent.com/77549225/105219036-a6e4d480-5b5e-11eb-9f79-81f6aec4e184.PNG)


INSTALLATION
------------

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
composer create-project --prefer-dist yiisoft/yii2-app-basic basic
~~~

Now you should be able to access the application through the following URL, assuming `basic` is the directory
directly under the Web root.

~~~
http://localhost/basic/web/
~~~

### Install from an Archive File

Extract the archive file downloaded from [yiiframework.com](http://www.yiiframework.com/download/) to
a directory named `basic` that is directly under the Web root.

Set cookie validation key in `config/web.php` file to some random secret string:

```php
'request' => [
    // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
    'cookieValidationKey' => '<secret random string goes here>',
],
```

You can then access the application through the following URL:

~~~
http://localhost/basic/web/
~~~


### Install with Docker

Update your vendor packages

    docker-compose run --rm php composer update --prefer-dist
    
Run the installation triggers (creating cookie validation code)

    docker-compose run --rm php composer install    
    
Start the container

    docker-compose up -d
    
You can then access the application through the following URL:

    http://127.0.0.1:8000

**NOTES:** 
- Minimum required Docker engine version `17.04` for development (see [Performance tuning for volume mounts](https://docs.docker.com/docker-for-mac/osxfs-caching/))
- The default configuration uses a host-volume in your home directory `.docker-composer` for composer caches


CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.
- Refer to the README in the `tests` directory for information specific to basic application tests.


TESTING
-------

Tests are located in `tests` directory. They are developed with [Codeception PHP Testing Framework](http://codeception.com/).
By default there are 3 test suites:

- `unit`
- `functional`
- `acceptance`

Tests can be executed by running

```
vendor/bin/codecept run
```

The command above will execute unit and functional tests. Unit tests are testing the system components, while functional
tests are for testing user interaction. Acceptance tests are disabled by default as they require additional setup since
they perform testing in real browser. 


### Running  acceptance tests

To execute acceptance tests do the following:  

1. Rename `tests/acceptance.suite.yml.example` to `tests/acceptance.suite.yml` to enable suite configuration

2. Replace `codeception/base` package in `composer.json` with `codeception/codeception` to install full featured
   version of Codeception

3. Update dependencies with Composer 

    ```
    composer update  
    ```

4. Download [Selenium Server](http://www.seleniumhq.org/download/) and launch it:

    ```
    java -jar ~/selenium-server-standalone-x.xx.x.jar
    ```

    In case of using Selenium Server 3.0 with Firefox browser since v48 or Google Chrome since v53 you must download [GeckoDriver](https://github.com/mozilla/geckodriver/releases) or [ChromeDriver](https://sites.google.com/a/chromium.org/chromedriver/downloads) and launch Selenium with it:

    ```
    # for Firefox
    java -jar -Dwebdriver.gecko.driver=~/geckodriver ~/selenium-server-standalone-3.xx.x.jar
    
    # for Google Chrome
    java -jar -Dwebdriver.chrome.driver=~/chromedriver ~/selenium-server-standalone-3.xx.x.jar
    ``` 
    
    As an alternative way you can use already configured Docker container with older versions of Selenium and Firefox:
    
    ```
    docker run --net=host selenium/standalone-firefox:2.53.0
    ```

5. (Optional) Create `yii2basic_test` database and update it by applying migrations if you have them.

   ```
   tests/bin/yii migrate
   ```

   The database configuration can be found at `config/test_db.php`.


6. Start web server:

    ```
    tests/bin/yii serve
    ```

7. Now you can run all available tests

   ```
   # run all available tests
   vendor/bin/codecept run

   # run acceptance tests
   vendor/bin/codecept run acceptance

   # run only unit and functional tests
   vendor/bin/codecept run unit,functional
   ```

### Code coverage support

By default, code coverage is disabled in `codeception.yml` configuration file, you should uncomment needed rows to be able
to collect code coverage. You can run your tests and collect coverage with the following command:

```
#collect coverage for all tests
vendor/bin/codecept run --coverage --coverage-html --coverage-xml

#collect coverage only for unit tests
vendor/bin/codecept run unit --coverage --coverage-html --coverage-xml

#collect coverage for unit and functional tests
vendor/bin/codecept run functional,unit --coverage --coverage-html --coverage-xml
```

You can see code coverage output under the `tests/_output` directory.
