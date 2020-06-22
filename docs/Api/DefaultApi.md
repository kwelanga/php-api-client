# OpenAPI\Client\DefaultApi

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
[**getProducts**](DefaultApi.md#getProducts) | **GET** /products | Create New Product
[**getProductsId**](DefaultApi.md#getProductsId) | **GET** /products/{id} | Fetch Order Item
[**getStores**](DefaultApi.md#getStores) | **GET** /stores | Search/List Stores
[**getStoresId**](DefaultApi.md#getStoresId) | **GET** /stores/{id} | Fetch Store Item
[**getSupport**](DefaultApi.md#getSupport) | **GET** /support | Your GET endpoint
[**getTestmew**](DefaultApi.md#getTestmew) | **GET** /testmew | Test New Endpoint
[**getTestnew**](DefaultApi.md#getTestnew) | **GET** /testnew | Your GET endpoint
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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
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


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerProfile

> getCustomerProfile()

Get Customer/Store Profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->getCustomerProfile();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCustomerProfile: ', $e->getMessage(), PHP_EOL;
}
?>
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOrder

> \OpenAPI\Client\Model\InlineResponse200 getOrder($store_id, $limit, $order, $offset)

Search/List Orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | fetch orders by store/customer id
$limit = 56; // int | limit returned orders
$order = 'order_example'; // string | 
$offset = 56; // int | limit offset

try {
    $result = $apiInstance->getOrder($store_id, $limit, $order, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| fetch orders by store/customer id | [optional]
 **limit** | **int**| limit returned orders | [optional]
 **order** | **string**|  | [optional]
 **offset** | **int**| limit offset | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
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

[credentials](../../README.md#credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPing

> \OpenAPI\Client\Model\InlineResponse2002 getPing()

Your GET endpoint

api test ping endpoint, no auth required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
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

[**\OpenAPI\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPrincipals

> getPrincipals()

Search/List Principals

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->getPrincipals();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPrincipals: ', $e->getMessage(), PHP_EOL;
}
?>
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


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getProducts

> \OpenAPI\Client\Model\InlineResponse2001 getProducts($web_enabled, $status, $order)

Create New Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: credentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_enabled = 'web_enabled_example'; // string | filter response to include/exclude web enabled products - options: Y/N
$status = 'status_example'; // string | filter response to include/exclude deleted products - options: A/D, default : A
$order = 'order_example'; // string | 

try {
    $result = $apiInstance->getProducts($web_enabled, $status, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_enabled** | **string**| filter response to include/exclude web enabled products - options: Y/N | [optional]
 **status** | **string**| filter response to include/exclude deleted products - options: A/D, default : A | [optional]
 **order** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[credentials](../../README.md#credentials)

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


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
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


## getTestmew

> getTestmew()

Test New Endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->getTestmew();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTestmew: ', $e->getMessage(), PHP_EOL;
}
?>
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTestnew

> getTestnew()

Your GET endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->getTestnew();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTestnew: ', $e->getMessage(), PHP_EOL;
}
?>
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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
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


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
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


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
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


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
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


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

