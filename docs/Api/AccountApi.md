# D4T\AccountApi

All URIs are relative to *http://localhost:6503/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountLoginGet**](AccountApi.md#accountLoginGet) | **GET** /account/{login} | Get account by user login


# **accountLoginGet**
> \D4T\MT5ManagerModels\Account accountLoginGet($token, $login)

Get account by user login



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$login = "login_example"; // string | Login

try {
    $result = $apiInstance->accountLoginGet($token, $login);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountLoginGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **login** | **string**| Login |

### Return type

[**\D4T\MT5ManagerModels\Account**](../Model/Account.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

