# KwelangaAPI\DefaultApi

All URIs are relative to https://api.kwelangasolutions.co.za/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOrderId()**](DefaultApi.md#deleteOrderId) | **DELETE** /orders/{id} | Delete Order Item
[**deletePrincipalsId()**](DefaultApi.md#deletePrincipalsId) | **DELETE** /principals/{id} | Delete Principal Item
[**deleteProductsId()**](DefaultApi.md#deleteProductsId) | **DELETE** /products/{id} | Delete Product Item
[**deleteStoresId()**](DefaultApi.md#deleteStoresId) | **DELETE** /stores/{id} | Delete Store Item
[**getCustomerProfile()**](DefaultApi.md#getCustomerProfile) | **GET** /customer/profile | Get Customer/Store Profile
[**getOrder()**](DefaultApi.md#getOrder) | **GET** /orders | Search/List Orders
[**getOrderId()**](DefaultApi.md#getOrderId) | **GET** /orders/{id} | Fetch Order Item
[**getPing()**](DefaultApi.md#getPing) | **GET** /ping | Your GET endpoint
[**getPrincipals()**](DefaultApi.md#getPrincipals) | **GET** /principals | Search/List Principals
[**getPrincipalsId()**](DefaultApi.md#getPrincipalsId) | **GET** /principals/{id} | Fetch Principal Item
[**getProducts()**](DefaultApi.md#getProducts) | **GET** /products | Search/List Products
[**getProductsId()**](DefaultApi.md#getProductsId) | **GET** /products/{id} | Fetch Product Item
[**getStores()**](DefaultApi.md#getStores) | **GET** /stores | Search/List Stores
[**getStoresId()**](DefaultApi.md#getStoresId) | **GET** /stores/{id} | Fetch Store Item
[**getSupport()**](DefaultApi.md#getSupport) | **GET** /support | Your GET endpoint
[**getUser()**](DefaultApi.md#getUser) | **GET** /user | Your GET endpoint
[**getUserSettings()**](DefaultApi.md#getUserSettings) | **GET** /user/settings | Fetch User Settings
[**getVerifyProductPrice()**](DefaultApi.md#getVerifyProductPrice) | **GET** /verify_product_price/{id} | Verify Price for Product &amp; Quantity by Chain
[**postCustomerLogin()**](DefaultApi.md#postCustomerLogin) | **POST** /customer/login | 
[**postCustomerProfile()**](DefaultApi.md#postCustomerProfile) | **POST** /customer/profile | Create Customer/Store Profile
[**postOrder()**](DefaultApi.md#postOrder) | **POST** /orders | Create New Order
[**postPrincipals()**](DefaultApi.md#postPrincipals) | **POST** /principals | Create New Principal
[**postProducts()**](DefaultApi.md#postProducts) | **POST** /products | Create New Product
[**postStores()**](DefaultApi.md#postStores) | **POST** /stores | Create New Store
[**postUserLogin()**](DefaultApi.md#postUserLogin) | **POST** /user | 
[**postUsersVerifyLogin()**](DefaultApi.md#postUsersVerifyLogin) | **POST** /users/verify_login | Verify User Login
[**putCustomerProfile()**](DefaultApi.md#putCustomerProfile) | **PUT** /customer/profile | Update Customer/Store Profile
[**putOrderId()**](DefaultApi.md#putOrderId) | **PUT** /orders/{id} | Update Order Item
[**putPrincipalsId()**](DefaultApi.md#putPrincipalsId) | **PUT** /principals/{id} | Update Principal Item
[**putProductsId()**](DefaultApi.md#putProductsId) | **PUT** /products/{id} | Update Product Item
[**putStoresId()**](DefaultApi.md#putStoresId) | **PUT** /stores/{id} | Update Store Item
[**putUserSettings()**](DefaultApi.md#putUserSettings) | **PUT** /user/settings | Update User Settings


## `deleteOrderId()`

```php
deleteOrderId($id)
```

Delete Order Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->deleteOrderId($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteOrderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePrincipalsId()`

```php
deletePrincipalsId($id)
```

Delete Principal Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->deletePrincipalsId($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deletePrincipalsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProductsId()`

```php
deleteProductsId($id)
```

Delete Product Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->deleteProductsId($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteProductsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteStoresId()`

```php
deleteStoresId($id)
```

Delete Store Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->deleteStoresId($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteStoresId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerProfile()`

```php
getCustomerProfile(): object
```

Get Customer/Store Profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCustomerProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCustomerProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($order, $search, $start, $length, $draw): object
```

Search/List Orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = new \stdClass; // object | order[column]=direction eg: order[code]=desc
$search = new \stdClass; // object | //  eg:  search[GLOBAL] = '*fadfsad*'   //global regex search     //  eg:  search[GLOBAL] = '136'   //global STRICT search, eg: looking for any full numbers that match     //  eg:  search[column] = 'hello'   //column strict search
$start = 3.4; // float | Paging first record indicator. This is the start point in the current data set, default 1
$length = 3.4; // float | -1 = all records, default 50 for mobile first
$draw = 3.4; // float | used as an indicator to distinguish between requests, default: 0

try {
    $result = $apiInstance->getOrder($order, $search, $start, $length, $draw);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | [**object**](../Model/.md)| order[column]&#x3D;direction eg: order[code]&#x3D;desc | [optional]
 **search** | [**object**](../Model/.md)| //  eg:  search[GLOBAL] &#x3D; &#39;*fadfsad*&#39;   //global regex search     //  eg:  search[GLOBAL] &#x3D; &#39;136&#39;   //global STRICT search, eg: looking for any full numbers that match     //  eg:  search[column] &#x3D; &#39;hello&#39;   //column strict search | [optional]
 **start** | **float**| Paging first record indicator. This is the start point in the current data set, default 1 | [optional]
 **length** | **float**| -1 &#x3D; all records, default 50 for mobile first | [optional]
 **draw** | **float**| used as an indicator to distinguish between requests, default: 0 | [optional]

### Return type

**object**

### Authorization

[credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderId()`

```php
getOrderId($id)
```

Fetch Order Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->getOrderId($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOrderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPing()`

```php
getPing(): object
```

Your GET endpoint

api test ping endpoint, no auth required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getPing();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPrincipals()`

```php
getPrincipals($order, $search, $start, $length, $draw): \KwelangaAPI\Model\InlineResponse2005
```

Search/List Principals

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = new \stdClass; // object | order[column]=direction eg: order[code]=desc
$search = new \stdClass; // object | //  eg:  search[GLOBAL] = '*fadfsad*'   //global regex search     //  eg:  search[GLOBAL] = '136'   //global STRICT search, eg: looking for any full numbers that match     //  eg:  search[column] = 'hello'   //column strict search
$start = 3.4; // float | Paging first record indicator. This is the start point in the current data set, default 1
$length = 3.4; // float | -1 = all records, default 50 for mobile first
$draw = 3.4; // float | used as an indicator to distinguish between requests, default: 0

try {
    $result = $apiInstance->getPrincipals($order, $search, $start, $length, $draw);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPrincipals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | [**object**](../Model/.md)| order[column]&#x3D;direction eg: order[code]&#x3D;desc | [optional]
 **search** | [**object**](../Model/.md)| //  eg:  search[GLOBAL] &#x3D; &#39;*fadfsad*&#39;   //global regex search     //  eg:  search[GLOBAL] &#x3D; &#39;136&#39;   //global STRICT search, eg: looking for any full numbers that match     //  eg:  search[column] &#x3D; &#39;hello&#39;   //column strict search | [optional]
 **start** | **float**| Paging first record indicator. This is the start point in the current data set, default 1 | [optional]
 **length** | **float**| -1 &#x3D; all records, default 50 for mobile first | [optional]
 **draw** | **float**| used as an indicator to distinguish between requests, default: 0 | [optional]

### Return type

[**\KwelangaAPI\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPrincipalsId()`

```php
getPrincipalsId($id)
```

Fetch Principal Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->getPrincipalsId($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPrincipalsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProducts()`

```php
getProducts($order, $search, $start, $length, $draw): \KwelangaAPI\Model\InlineResponse2001
```

Search/List Products

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = new \stdClass; // object | order[column]=direction eg: order[code]=desc
$search = new \stdClass; // object | //  eg:  search[GLOBAL] = '*fadfsad*'   //global regex search     //  eg:  search[GLOBAL] = '136'   //global STRICT search, eg: looking for any full numbers that match     //  eg:  search[column] = 'hello'   //column strict search
$start = 3.4; // float | Paging first record indicator. This is the start point in the current data set, default 1
$length = 3.4; // float | -1 = all records, default 50 for mobile first
$draw = 3.4; // float | used as an indicator to distinguish between requests, default: 0

try {
    $result = $apiInstance->getProducts($order, $search, $start, $length, $draw);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | [**object**](../Model/.md)| order[column]&#x3D;direction eg: order[code]&#x3D;desc | [optional]
 **search** | [**object**](../Model/.md)| //  eg:  search[GLOBAL] &#x3D; &#39;*fadfsad*&#39;   //global regex search     //  eg:  search[GLOBAL] &#x3D; &#39;136&#39;   //global STRICT search, eg: looking for any full numbers that match     //  eg:  search[column] &#x3D; &#39;hello&#39;   //column strict search | [optional]
 **start** | **float**| Paging first record indicator. This is the start point in the current data set, default 1 | [optional]
 **length** | **float**| -1 &#x3D; all records, default 50 for mobile first | [optional]
 **draw** | **float**| used as an indicator to distinguish between requests, default: 0 | [optional]

### Return type

[**\KwelangaAPI\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductsId()`

```php
getProductsId($id): \KwelangaAPI\Model\InlineResponse2002
```

Fetch Product Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getProductsId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProductsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\KwelangaAPI\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStores()`

```php
getStores($order, $search, $start, $length, $draw): \KwelangaAPI\Model\InlineResponse2003
```

Search/List Stores

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = new \stdClass; // object | order[column]=direction eg: order[code]=desc
$search = new \stdClass; // object | //  eg:  search[GLOBAL] = '*fadfsad*'   //global regex search     //  eg:  search[GLOBAL] = '136'   //global STRICT search, eg: looking for any full numbers that match     //  eg:  search[column] = 'hello'   //column strict search
$start = 3.4; // float | Paging first record indicator. This is the start point in the current data set, default 1
$length = 3.4; // float | -1 = all records, default 50 for mobile first
$draw = 3.4; // float | used as an indicator to distinguish between requests, default: 0

try {
    $result = $apiInstance->getStores($order, $search, $start, $length, $draw);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getStores: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | [**object**](../Model/.md)| order[column]&#x3D;direction eg: order[code]&#x3D;desc | [optional]
 **search** | [**object**](../Model/.md)| //  eg:  search[GLOBAL] &#x3D; &#39;*fadfsad*&#39;   //global regex search     //  eg:  search[GLOBAL] &#x3D; &#39;136&#39;   //global STRICT search, eg: looking for any full numbers that match     //  eg:  search[column] &#x3D; &#39;hello&#39;   //column strict search | [optional]
 **start** | **float**| Paging first record indicator. This is the start point in the current data set, default 1 | [optional]
 **length** | **float**| -1 &#x3D; all records, default 50 for mobile first | [optional]
 **draw** | **float**| used as an indicator to distinguish between requests, default: 0 | [optional]

### Return type

[**\KwelangaAPI\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStoresId()`

```php
getStoresId($id)
```

Fetch Store Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->getStoresId($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getStoresId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupport()`

```php
getSupport()
```

Your GET endpoint

Get support contact information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getSupport();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSupport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUser()`

```php
getUser(): object
```

Your GET endpoint

test login creds and fetch user information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserSettings()`

```php
getUserSettings()
```

Fetch User Settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getUserSettings();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getUserSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVerifyProductPrice()`

```php
getVerifyProductPrice($id, $quantity, $chain_code): \KwelangaAPI\Model\InlineResponse2006
```

Verify Price for Product & Quantity by Chain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | product ID
$quantity = 56; // int
$chain_code = 'chain_code_example'; // string

try {
    $result = $apiInstance->getVerifyProductPrice($id, $quantity, $chain_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getVerifyProductPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| product ID |
 **quantity** | **int**|  |
 **chain_code** | **string**|  | [optional]

### Return type

[**\KwelangaAPI\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCustomerLogin()`

```php
postCustomerLogin($username, $password)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string
$password = 'password_example'; // string

try {
    $apiInstance->postCustomerLogin($username, $password);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postCustomerLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**|  | [optional]
 **password** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCustomerProfile()`

```php
postCustomerProfile()
```

Create Customer/Store Profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->postCustomerProfile();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postCustomerProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postOrder()`

```php
postOrder($post_order): \KwelangaAPI\Model\InlineResponse200
```

Create New Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_order = new \KwelangaAPI\Model\PostOrder(); // \KwelangaAPI\Model\PostOrder

try {
    $result = $apiInstance->postOrder($post_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_order** | [**\KwelangaAPI\Model\PostOrder**](../Model/PostOrder.md)|  | [optional]

### Return type

[**\KwelangaAPI\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPrincipals()`

```php
postPrincipals()
```

Create New Principal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->postPrincipals();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postPrincipals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProducts()`

```php
postProducts()
```

Create New Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->postProducts();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStores()`

```php
postStores($post_store): \KwelangaAPI\Model\InlineResponse2004
```

Create New Store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_store = new \KwelangaAPI\Model\PostStore(); // \KwelangaAPI\Model\PostStore

try {
    $result = $apiInstance->postStores($post_store);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postStores: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_store** | [**\KwelangaAPI\Model\PostStore**](../Model/PostStore.md)|  | [optional]

### Return type

[**\KwelangaAPI\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUserLogin()`

```php
postUserLogin()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->postUserLogin();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postUserLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUsersVerifyLogin()`

```php
postUsersVerifyLogin(): \KwelangaAPI\Model\InlineResponse2007
```

Verify User Login

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->postUsersVerifyLogin();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postUsersVerifyLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\KwelangaAPI\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCustomerProfile()`

```php
putCustomerProfile()
```

Update Customer/Store Profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->putCustomerProfile();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putCustomerProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putOrderId()`

```php
putOrderId($id)
```

Update Order Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->putOrderId($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putOrderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPrincipalsId()`

```php
putPrincipalsId($id)
```

Update Principal Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->putPrincipalsId($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putPrincipalsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putProductsId()`

```php
putProductsId($id)
```

Update Product Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->putProductsId($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putProductsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putStoresId()`

```php
putStoresId($id)
```

Update Store Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->putStoresId($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putStoresId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putUserSettings()`

```php
putUserSettings()
```

Update User Settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->putUserSettings();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putUserSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
