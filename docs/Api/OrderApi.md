# Swagger\Client\OrderApi

All URIs are relative to *http://localhost:6503/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**positionsUserLoginGet**](OrderApi.md#positionsuserloginget) | **GET** /positions/{user_login} | Get list of user positions
[**tradesUserLoginGet**](OrderApi.md#tradesuserloginget) | **GET** /trades/{user_login} | Get list of user trades

# **positionsUserLoginGet**
> \Swagger\Client\Model\ArrayOfPositions positionsUserLoginGet($user_login)

Get list of user positions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\OrderApi(
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
    echo 'Exception when calling OrderApi->positionsUserLoginGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_login** | **string**| The name that needs to be fetched for. |

### Return type

[**\Swagger\Client\Model\ArrayOfPositions**](../Model/ArrayOfPositions.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tradesUserLoginGet**
> \Swagger\Client\Model\ArrayOfTrades tradesUserLoginGet($user_login, $days_back, $types)

Get list of user trades

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_login = "user_login_example"; // string | The name that needs to be fetched for.
$days_back = "days_back_example"; // string | Days Back
$types = "types_example"; // string | Types

try {
    $result = $apiInstance->tradesUserLoginGet($user_login, $days_back, $types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->tradesUserLoginGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ArrayOfTrades**](../Model/ArrayOfTrades.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

