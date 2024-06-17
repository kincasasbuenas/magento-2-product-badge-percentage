# Product Badge Percentage for Magento 2

## How to install

### 1. Install via composer (recommend)

I recommend you to install Kinuz_ProductBadgePercentage module via composer. It is easy to install, update and maintaince.

Run the following command in Magento 2 root folder.

#### 1.1 Install

```
composer require kinuz/product-badge-percentage
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy -f
```

Run compile if your store in Production mode:

```
php bin/magento setup:di:compile
```

### 2. Copy and paste

If you don't want to install via composer, you can use this way. 

- Download [the latest version here](https://github.com/kincasasbuenas/magento-2-product-badge-percentage/archive/master.zip) 
- Extract `master.zip` file to `app/code/Kinuz/ProductBadgePercentage` ; You should create a folder path `app/code/Kinuz/ProductBadgePercentage` if not exist.
- Go to Magento root folder and run upgrade command line to install `Kinuz_ProductBadgePercentage`:

```
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

### 2. Configuration

Go to section Stores > Configuration > Kinuz > Product Badge Percentage

1. Enable to module

![preview catalog product view](https://raw.githubusercontent.com/kincasasbuenas/images/main/pbp_setting.png)

### 3. Preview module active

Show badge percentage if product has especial price.

![preview catalog product view](https://raw.githubusercontent.com/kincasasbuenas/images/main/badge_cv_active.png)

![preview product view](https://raw.githubusercontent.com/kincasasbuenas/images/main/badge_cp_active.png)

