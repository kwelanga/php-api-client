# KwelangaAPI\DefaultApi

All URIs are relative to *https://api.kwelangasolutions.co.za/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOrderId**](DefaultApi.md#deleteOrderId) | **DELETE** /orders/{id} | Delete Order Item
[**deletePrincipalsId**](DefaultApi.md#deletePrincipalsId) | **DELETE** /principals/{id} | Delete Principal Item
[**deleteProductsId**](DefaultApi.md#deleteProductsId) | **DELETE** /products/{id} | Delete Product Item
[**deleteStoresId**](DefaultApi.md#deleteStoresId) | **DELETE** /stores/{id} | Delete Store Item
[**getCustomerProfile**](DefaultApi.md#getCustomerProfile) | **GET** /customer/profile | Get Customer/Store Profile
[**getOrder**](DefaultApi.md#getOrder) | **GET** /orders | Search/List Orders
[**getOrderId**](DefaultApi.md#getOrderId) | **GET** /orders/{id} | Fetch Order Item
[**getPing**](DefaultApi.md#getPing) | **GET** /ping | Your GET endpoint
[**getPrincipals**](DefaultApi.md#getPrincipals) | **GET** /principals | Search/List Principals
[**getPrincipalsId**](DefaultApi.md#getPrincipalsId) | **GET** /principals/{id} | Fetch Principal Item
[**getProducts**](DefaultApi.md#getProducts) | **GET** /products | Search/List Products
[**getProductsId**](DefaultApi.md#getProductsId) | **GET** /products/{id} | Fetch Order Item
[**getStores**](DefaultApi.md#getStores) | **GET** /stores | Search/List Stores
[**getStoresId**](DefaultApi.md#getStoresId) | **GET** /stores/{id} | Fetch Store Item
[**getSupport**](DefaultApi.md#getSupport) | **GET** /support | Your GET endpoint
[**getUser**](DefaultApi.md#getUser) | **GET** /user | Your GET endpoint
[**getUserSettings**](DefaultApi.md#getUserSettings) | **GET** /user/settings | Fetch User Settings
[**postCustomerLogin**](DefaultApi.md#postCustomerLogin) | **POST** /customer/login | 
[**postCustomerProfile**](DefaultApi.md#postCustomerProfile) | **POST** /customer/profile | Create Customer/Store Profile
[**postOrder**](DefaultApi.md#postOrder) | **POST** /orders | Create New Order
[**postPrincipals**](DefaultApi.md#postPrincipals) | **POST** /principals | Create New Principal
[**postProducts**](DefaultApi.md#postProducts) | **POST** /products | Create New Product
[**postStores**](DefaultApi.md#postStores) | **POST** /stores | Create New Store
[**putCustomerProfile**](DefaultApi.md#putCustomerProfile) | **PUT** /customer/profile | Update Customer/Store Profile
[**putOrderId**](DefaultApi.md#putOrderId) | **PUT** /orders/{id} | Update Order Item
[**putPrincipalsId**](DefaultApi.md#putPrincipalsId) | **PUT** /principals/{id} | Update Principal Item
[**putProductsId**](DefaultApi.md#putProductsId) | **PUT** /products/{id} | Update Product Item
[**putStoresId**](DefaultApi.md#putStoresId) | **PUT** /stores/{id} | Update Store Item
[**putUserSettings**](DefaultApi.md#putUserSettings) | **PUT** /user/settings | Update User Settings



## deleteOrderId

> deleteOrderId($id)

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
$id = 'id_example'; // string | 

try {
    $apiInstance->deleteOrderId($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteOrderId: ', $e->getMessage(), PHP_EOL;
}
?>
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deletePrincipalsId

> deletePrincipalsId($id)

Delete Principal Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: principal
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('principal', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('principal', 'Bearer');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->deletePrincipalsId($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deletePrincipalsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[credentials](../../README.md#credentials), [principal](../../README.md#principal)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteProductsId

> deleteProductsId($id)

Delete Product Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: principal
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('principal', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('principal', 'Bearer');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->deleteProductsId($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteProductsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[credentials](../../README.md#credentials), [principal](../../README.md#principal)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteStoresId

> deleteStoresId($id)

Delete Store Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: principal
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('principal', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('principal', 'Bearer');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->deleteStoresId($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteStoresId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[credentials](../../README.md#credentials), [principal](../../README.md#principal)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerProfile

> object getCustomerProfile()

Get Customer/Store Profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: principal
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('principal', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('principal', 'Bearer');


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
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[credentials](../../README.md#credentials), [principal](../../README.md#principal)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOrder

> object getOrder($order, $search, $start, $length, $draw)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOrderId

> getOrderId($id)

Fetch Order Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: principal
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('principal', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('principal', 'Bearer');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->getOrderId($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOrderId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[credentials](../../README.md#credentials), [principal](../../README.md#principal)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPing

> object getPing()

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
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPrincipals

> getPrincipals($order, $search, $start, $length, $draw)

Search/List Principals

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: principal
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('principal', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('principal', 'Bearer');


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
    $apiInstance->getPrincipals($order, $search, $start, $length, $draw);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPrincipals: ', $e->getMessage(), PHP_EOL;
}
?>
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

void (empty response body)

### Authorization

[credentials](../../README.md#credentials), [principal](../../README.md#principal)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPrincipalsId

> getPrincipalsId($id)

Fetch Principal Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: principal
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('principal', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('principal', 'Bearer');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->getPrincipalsId($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPrincipalsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[credentials](../../README.md#credentials), [principal](../../README.md#principal)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getProducts

> \KwelangaAPI\Model\InlineResponse200 getProducts($order, $search, $start, $length, $draw)

Search/List Products

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: principal
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('principal', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('principal', 'Bearer');


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
?>
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

[**\KwelangaAPI\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[credentials](../../README.md#credentials), [principal](../../README.md#principal)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getProductsId

> getProductsId($id)

Fetch Order Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: principal
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('principal', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('principal', 'Bearer');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->getProductsId($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProductsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[credentials](../../README.md#credentials), [principal](../../README.md#principal)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getStores

> getStores()

Search/List Stores

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: principal
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('principal', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('principal', 'Bearer');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getStores();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getStores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[credentials](../../README.md#credentials), [principal](../../README.md#principal)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getStoresId

> getStoresId($id)

Fetch Store Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: principal
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('principal', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('principal', 'Bearer');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->getStoresId($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getStoresId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[credentials](../../README.md#credentials), [principal](../../README.md#principal)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSupport

> getSupport()

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
?>
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUser

> getUser()

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
    $apiInstance->getUser();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUserSettings

> getUserSettings()

Fetch User Settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: principal
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('principal', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('principal', 'Bearer');


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
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[credentials](../../README.md#credentials), [principal](../../README.md#principal)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postCustomerLogin

> postCustomerLogin($username, $password)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: principal
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('principal', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('principal', 'Bearer');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | 
$password = 'password_example'; // string | 

try {
    $apiInstance->postCustomerLogin($username, $password);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postCustomerLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**|  | [optional]
 **password** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[credentials](../../README.md#credentials), [principal](../../README.md#principal)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postCustomerProfile

> postCustomerProfile()

Create Customer/Store Profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: principal
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('principal', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('principal', 'Bearer');


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
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[credentials](../../README.md#credentials), [principal](../../README.md#principal)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postOrder

> postOrder()

Create New Order

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
    $apiInstance->postOrder();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postOrder: ', $e->getMessage(), PHP_EOL;
}
?>
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postPrincipals

> postPrincipals()

Create New Principal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: principal
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('principal', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('principal', 'Bearer');


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
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[credentials](../../README.md#credentials), [principal](../../README.md#principal)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postProducts

> postProducts()

Create New Product

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
    $apiInstance->postProducts();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postProducts: ', $e->getMessage(), PHP_EOL;
}
?>
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postStores

> postStores()

Create New Store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: principal
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('principal', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('principal', 'Bearer');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->postStores();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postStores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[credentials](../../README.md#credentials), [principal](../../README.md#principal)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putCustomerProfile

> putCustomerProfile()

Update Customer/Store Profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: principal
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('principal', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('principal', 'Bearer');


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
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[credentials](../../README.md#credentials), [principal](../../README.md#principal)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putOrderId

> putOrderId($id)

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
$id = 'id_example'; // string | 

try {
    $apiInstance->putOrderId($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putOrderId: ', $e->getMessage(), PHP_EOL;
}
?>
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putPrincipalsId

> putPrincipalsId($id)

Update Principal Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: principal
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('principal', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('principal', 'Bearer');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->putPrincipalsId($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putPrincipalsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[credentials](../../README.md#credentials), [principal](../../README.md#principal)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putProductsId

> putProductsId($id)

Update Product Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: principal
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('principal', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('principal', 'Bearer');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->putProductsId($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putProductsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[credentials](../../README.md#credentials), [principal](../../README.md#principal)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putStoresId

> putStoresId($id)

Update Store Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: principal
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('principal', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('principal', 'Bearer');


$apiInstance = new KwelangaAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->putStoresId($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putStoresId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[credentials](../../README.md#credentials), [principal](../../README.md#principal)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putUserSettings

> putUserSettings()

Update User Settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = KwelangaAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: principal
$config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKey('principal', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KwelangaAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('principal', 'Bearer');


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
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[credentials](../../README.md#credentials), [principal](../../README.md#principal)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

