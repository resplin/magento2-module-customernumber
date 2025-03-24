# magento2-module-customernumber
Magento2 module for adding Customer Number attribute

# Magento 2 Customer Number Extension
``esplin_customernumber``

## Overview
The **Magento 2 Customer Number** extension introduces a new alphanumeric attribute, `Customer Number`, for customer accounts. This attribute serves as a unique identifier that can be mapped to external CRM or ERP systems, addressing a limitation in Open Source Magento where such an attribute is not natively available.

## Features
- **Adds a `Customer Number` attribute** to the Magento 2 customer entity.
- **Automatically appears in the Admin Customer Grid**, allowing for easy sorting and filtering.
- **Exposed via REST API**, ensuring seamless integration with external systems.
- **Supports alphanumeric values**, making it ideal for mapping to third-party applications.

## Installation
### Using Composer
1. Navigate to your Magento root directory.
2. Run the following commands:
   ```sh
   composer require esplin/module-customernumber
   bin/magento module:enable Esplin_CustomerNumber
   bin/magento setup:upgrade
   bin/magento cache:flush
   ```

## Configuration
No additional configuration is required. The `Customer Number` attribute is automatically available in:
- **Admin Panel:** Under `Customers > All Customers`, as a column in the customer grid.
- **API Responses:** Included in Customer-related REST API endpoints.

## API Usage
The `Customer Number` attribute is included in Magento's customer API responses. Example:
```json
{
  "id": 1,
  "email": "customer@example.com",
  "firstname": "John",
  "lastname": "Doe",
  "custom_attributes": [
    {
      "attribute_code": "customer_number",
      "value": "CUST-12345"
    }
  ]
}
```

## Compatibility
- Magento Open Source 2.4.x and later.
- Compatible with PHP 7.4 and 8.x.

## Support
For issues or feature requests, please open an issue in this repository.
