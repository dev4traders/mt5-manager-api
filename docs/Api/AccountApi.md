# Swagger\Client\AccountApi

All URIs are relative to *http://localhost:6503/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountLoginGet**](AccountApi.md#accountloginget) | **GET** /account/{login} | Get account by user login

# **accountLoginGet**
> \Swagger\Client\Model\Account accountLoginGet($login)

Get account by user login

Get account by user login

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$login = "login_example"; // string | Login

try {
    $result = $apiInstance->accountLoginGet($login);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountLoginGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login** | **string**| Login |

### Return type

[**\Swagger\Client\Model\Account**](../Model/Account.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

