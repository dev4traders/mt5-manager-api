# D4T\MT5Sdk\SymbolApi

All URIs are relative to *http://localhost:6503/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**symbolsGet**](SymbolApi.md#symbolsget) | **GET** /symbols/ | Get list of market symbols

# **symbolsGet**
> \D4T\MT5Sdk\Models\ArrayOfSymbols symbolsGet()

Get list of market symbols

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = D4T\MT5Sdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new D4T\MT5Sdk\MT5Manager\SymbolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->symbolsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SymbolApi->symbolsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\D4T\MT5Sdk\Models\ArrayOfSymbols**](../Model/ArrayOfSymbols.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

