# D4T\MT5Sdk\SymbolApi

All URIs are relative to *http://localhost:6503/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**symbolsGet**](SymbolApi.md#symbolsGet) | **GET** /symbols/ | Get list of market symbols


# **symbolsGet**
> \D4T\MT5Sdk\Models\ArrayOfSymbols symbolsGet($token)

Get list of market symbols

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT5Sdk\Api\SymbolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token

try {
    $result = $apiInstance->symbolsGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SymbolApi->symbolsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |

### Return type

[**\D4T\MT5Sdk\Models\ArrayOfSymbols**](../Model/ArrayOfSymbols.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

