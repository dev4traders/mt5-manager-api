# D4T\MT5Sdk\BasicApi

All URIs are relative to *http://localhost:6503/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**initGet**](BasicApi.md#initget) | **GET** /init/ | Init manager
[**pingGet**](BasicApi.md#pingget) | **GET** /ping/ | Ping API

# **initGet**
> \D4T\MT5Sdk\Models\InitReturnType initGet($server, $login, $password, $timeout)

Init manager

Init manager

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT5Sdk\MT5Manager\BasicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server = "server_example"; // string | MetaTrader5 server IP with port. Example: 127.0.0.1:443
$login = "login_example"; // string | MetaTrader manager login
$password = "password_example"; // string | MetaTrader manager password
$timeout = 1.2; // float | Connection timeout milliseconds

try {
    $result = $apiInstance->initGet($server, $login, $password, $timeout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicApi->initGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server** | **string**| MetaTrader5 server IP with port. Example: 127.0.0.1:443 |
 **login** | **string**| MetaTrader manager login |
 **password** | **string**| MetaTrader manager password |
 **timeout** | **float**| Connection timeout milliseconds | [optional]

### Return type

[**\D4T\MT5Sdk\Models\InitReturnType**](../Model/InitReturnType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pingGet**
> \D4T\MT5Sdk\Models\PingReturnType pingGet()

Ping API

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = D4T\MT5Sdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new D4T\MT5Sdk\MT5Manager\BasicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->pingGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicApi->pingGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\D4T\MT5Sdk\Models\PingReturnType**](../Model/PingReturnType.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

