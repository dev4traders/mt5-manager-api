# D4T\MT5Sdk\TradeApi

All URIs are relative to */v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dealsUserLoginGet**](TradeApi.md#dealsuserloginget) | **GET** /deals/{user_login} | Get list of user deals
[**ordersUserLoginGet**](TradeApi.md#ordersuserloginget) | **GET** /orders/{user_login} | Get list of user orders
[**positionsUserLoginGet**](TradeApi.md#positionsuserloginget) | **GET** /positions/{user_login} | Get list of user positions

# **dealsUserLoginGet**
> \D4T\MT5Sdk\Models\Deal[] dealsUserLoginGet($user_login, $days_back)

Get list of user deals

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = D4T\MT5Sdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new D4T\MT5Sdk\MT5Manager\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_login = "user_login_example"; // string | The name that needs to be fetched for.
$days_back = "days_back_example"; // string | Days Back

try {
    $result = $apiInstance->dealsUserLoginGet($user_login, $days_back);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->dealsUserLoginGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_login** | **string**| The name that needs to be fetched for. |
 **days_back** | **string**| Days Back |

### Return type

[**\D4T\MT5Sdk\Models\Deal[]**](../Model/Deal.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersUserLoginGet**
> \D4T\MT5Sdk\Models\Order[] ordersUserLoginGet($user_login, $days_back, $types)

Get list of user orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = D4T\MT5Sdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new D4T\MT5Sdk\MT5Manager\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_login = "user_login_example"; // string | The name that needs to be fetched for.
$days_back = "days_back_example"; // string | Days Back
$types = "types_example"; // string | Types

try {
    $result = $apiInstance->ordersUserLoginGet($user_login, $days_back, $types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->ordersUserLoginGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_login** | **string**| The name that needs to be fetched for. |
 **days_back** | **string**| Days Back |
 **types** | **string**| Types |

### Return type

[**\D4T\MT5Sdk\Models\Order[]**](../Model/Order.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **positionsUserLoginGet**
> \D4T\MT5Sdk\Models\Position[] positionsUserLoginGet($user_login)

Get list of user positions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = D4T\MT5Sdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new D4T\MT5Sdk\MT5Manager\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_login = "user_login_example"; // string | The name that needs to be fetched for.

try {
    $result = $apiInstance->positionsUserLoginGet($user_login);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->positionsUserLoginGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_login** | **string**| The name that needs to be fetched for. |

### Return type

[**\D4T\MT5Sdk\Models\Position[]**](../Model/Position.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

