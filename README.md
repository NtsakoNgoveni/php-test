# Product Retrieval System Documentation

This documentation provides an overview and usage guide for a PHP-based product retrieval system. The system is designed to retrieve product details from a Google Sheet using the Google Sheets API.


## Getting Started

1. **Google Sheets Integration:**
   - Enable the Google Sheets API.
   - Create a Google Cloud Platform project, enable the Sheets API, and generate API credentials (`credentials.json`).
   - Share the target Google Sheet with the service account email provided in the credentials.

2. **PHP Dependencies:**
   - Install the required PHP dependencies using Composer:
     ```bash
     composer install
     ```

3. **Usage:**
   - Include the necessary PHP files in your project.
   - Call the `start_get_product` function in `main.php` with the appropriate parameters to retrieve product details.
   - Ensure to remove or comment code below the **comment this** comment in all files

```php
include("main.php");

// Replace with your Google Sheet ID and desired product ID
start_get_product("YOUR_GOOGLE_SHEET_ID", YOUR_PRODUCT_ID);
```

## Example

An example usage of the system is included within the provided PHP code. Uncomment the example code to test the functionality.

```php
// Uncomment the following lines for testing
/*
$products = get_products_data("YOUR_GOOGLE_SHEET_ID");
$product = get_product($products, YOUR_PRODUCT_ID);
print_r($product);
*/
```

## Note

- Ensure that the necessary PHP and Google Sheets API dependencies are correctly configured before using the system.
- Replace placeholder values with actual Google Sheet ID and product ID.

