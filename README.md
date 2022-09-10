# module-example
-------
An example helloworld module for Magento 2 beginners

This module is created as an example to teach magento 2 beginners how to write a custom module.

# 1- Manual installation:

Create a new directory called MageSheet under the app/code folder in your application's home directory.

Copy the files you downloaded from GitHub to the app/code/MageSheet directory you just created.

### Run the following command in Magento 2 root folder.

```bash
php bin/magento module:enable MageSheet_Example --clear-static-content
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f

```

# 2- Install via composer

### Run the following command in Magento 2 root folder.

```bash
composer require yusufpangal/module-example
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy -f

```

### Run compile if your store in Product mode:

```bash
php bin/magento setup:di:compile
```