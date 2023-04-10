# D4T\TradesApi

All URIs are relative to *http://localhost:6503/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**positionsUserLoginGet**](TradesApi.md#positionsUserLoginGet) | **GET** /positions/{user_login} | Get list of user positions
[**tradesUserLoginGet**](TradesApi.md#tradesUserLoginGet) | **GET** /trades/{user_login} | Get list of user trades


# **positionsUserLoginGet**
> \D4T\MT5ManagerModels\ArrayOfPositions positionsUserLoginGet($token, $user_login)

Get list of user positions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\Api\TradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$user_login = "user_login_example"; // string | The name that needs to be fetched for.

try {
    $result = $apiInstance->positionsUserLoginGet($token, $user_login);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradesApi->positionsUserLoginGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **user_login** | **string**| The name that needs to be fetched for. |

### Return type

[**\D4T\MT5ManagerModels\ArrayOfPositions**](../Model/ArrayOfPositions.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tradesUserLoginGet**
> \D4T\MT5ManagerModels\ArrayOfTrades tradesUserLoginGet($token, $user_login, $days_back, $types)

Get list of user trades

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\Api\TradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$user_login = "user_login_example"; // string | The name that needs to be fetched for.
$days_back = "days_back_example"; // string | Days Back
$types = "types_example"; // string | Types

try {
    $result = $apiInstance->tradesUserLoginGet($token, $user_login, $days_back, $types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradesApi->tradesUserLoginGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **user_login** | **string**| The name that needs to be fetched for. |
 **days_back** | **string**| Days Back |
 **types** | **string**| Types |

### Return type

[**\D4T\MT5ManagerModels\ArrayOfTrades**](../Model/ArrayOfTrades.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

