# Swagger\Client\InitApi

All URIs are relative to *http://localhost:6503/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**initGet**](InitApi.md#initget) | **GET** /init/ | Init manager

# **initGet**
> \Swagger\Client\Model\InitReturnType initGet($server, $login, $password, $timeout)

Init manager

Init manager

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InitApi(
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
    echo 'Exception when calling InitApi->initGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InitReturnType**](../Model/InitReturnType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

