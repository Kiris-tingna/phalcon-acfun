## windows下载正确的 Phalcon 版本解压

```
    # Copy the file php_phalcon.dll to the PHP extensions at X:\wamp\bin\php\phpX.X.XX\ext
    # both:
    # 1) C:\wamp\bin\php\php5.5.12\php.ini
    # 2) C:\wamp\bin\apache\apache2.4.9\bin\php.ini
    
    extension=php_phalcon.dll
```

## ubuntu
```
#Ubuntu
    sudo apt-get install gcc make git-core libpcre3-dev php5-dev
    git clone git://github.com/phalcon/cphalcon.git
    cd cphalcon/build
    sudo ./install

#Ubuntu: Add this line in your php.ini
    extension=phalcon.so
```