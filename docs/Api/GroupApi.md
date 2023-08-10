# D4T\MT5Sdk\GroupApi

All URIs are relative to */v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**groupGroupNameGet**](GroupApi.md#groupgroupnameget) | **GET** /group/{group_name} | Get group by name
[**groupsGet**](GroupApi.md#groupsget) | **GET** /groups/ | Get list of groups

# **groupGroupNameGet**
> \D4T\MT5Sdk\Models\Group groupGroupNameGet($group_name)

Get group by name

Get group by name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = D4T\MT5Sdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new D4T\MT5Sdk\MT5Manager\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_name = "group_name_example"; // string | The name that needs to be fetched.

try {
    $result = $apiInstance->groupGroupNameGet($group_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->groupGroupNameGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_name** | **string**| The name that needs to be fetched. |

### Return type

[**\D4T\MT5Sdk\Models\Group**](../Model/Group.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsGet**
> string[] groupsGet()

Get list of groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = D4T\MT5Sdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new D4T\MT5Sdk\MT5Manager\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->groupsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->groupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

