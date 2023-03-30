# Swagger\Client\UserApi

All URIs are relative to *http://localhost:6503/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**updateUser**](UserApi.md#updateuser) | **POST** /user/update | Update user
[**userAddPost**](UserApi.md#useraddpost) | **POST** /user/add | Create user
[**userDepositPost**](UserApi.md#userdepositpost) | **POST** /user/deposit | Deposit account
[**userResetPwdPost**](UserApi.md#userresetpwdpost) | **POST** /user/reset_pwd | Reset password
[**userUserLoginDelete**](UserApi.md#useruserlogindelete) | **DELETE** /user/{user_login} | Delete user
[**userUserLoginGet**](UserApi.md#useruserloginget) | **GET** /user/{user_login} | Get user by user login
[**userWithdrawPost**](UserApi.md#userwithdrawpost) | **POST** /user/withdraw | Withdraw account
[**usersGroupGet**](UserApi.md#usersgroupget) | **GET** /users/{group} | Get list of users

# **updateUser**
> updateUser($body)

Update user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\User(); // \Swagger\Client\Model\User | {"login": 1, "password":"new_pwd", "name":"new_name"}

try {
    $apiInstance->updateUser($body);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\User**](../Model/User.md)| {&quot;login&quot;: 1, &quot;password&quot;:&quot;new_pwd&quot;, &quot;name&quot;:&quot;new_name&quot;} |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userAddPost**
> \Swagger\Client\Model\UserReturnType userAddPost($body)

Create user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\User(); // \Swagger\Client\Model\User | {"password_investor":"123456Aa","password":"123456Aa", "name":"test", "email": "test@test.com","group":"demo\demoforex","leverage":100}

try {
    $result = $apiInstance->userAddPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\User**](../Model/User.md)| {&quot;password_investor&quot;:&quot;123456Aa&quot;,&quot;password&quot;:&quot;123456Aa&quot;, &quot;name&quot;:&quot;test&quot;, &quot;email&quot;: &quot;test@test.com&quot;,&quot;group&quot;:&quot;demo\demoforex&quot;,&quot;leverage&quot;:100} |

### Return type

[**\Swagger\Client\Model\UserReturnType**](../Model/UserReturnType.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userDepositPost**
> userDepositPost($body)

Deposit account

Deposit account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BalanceType(); // \Swagger\Client\Model\BalanceType | {"login": 1, "amount":1, "type": 3, "comment": "F.Management"}

try {
    $apiInstance->userDepositPost($body);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userDepositPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BalanceType**](../Model/BalanceType.md)| {&quot;login&quot;: 1, &quot;amount&quot;:1, &quot;type&quot;: 3, &quot;comment&quot;: &quot;F.Management&quot;} |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userResetPwdPost**
> userResetPwdPost($body)

Reset password

Reset password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ResetPwdType(); // \Swagger\Client\Model\ResetPwdType | {"login": 1, "password":"new_pwd", "change_investor":0}

try {
    $apiInstance->userResetPwdPost($body);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userResetPwdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ResetPwdType**](../Model/ResetPwdType.md)| {&quot;login&quot;: 1, &quot;password&quot;:&quot;new_pwd&quot;, &quot;change_investor&quot;:0} |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userUserLoginDelete**
> userUserLoginDelete($user_login)

Delete user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_login = "user_login_example"; // string | The login that needs to be deleted

try {
    $apiInstance->userUserLoginDelete($user_login);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userUserLoginDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_login** | **string**| The login that needs to be deleted |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userUserLoginGet**
> \Swagger\Client\Model\User userUserLoginGet($user_login)

Get user by user login

Deposit account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_login = "user_login_example"; // string | The name that needs to be fetched. Use 3 for testing.

try {
    $result = $apiInstance->userUserLoginGet($user_login);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userUserLoginGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_login** | **string**| The name that needs to be fetched. Use 3 for testing. |

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userWithdrawPost**
> userWithdrawPost($body)

Withdraw account

Withdraw account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BalanceType(); // \Swagger\Client\Model\BalanceType | {"login": 1, "amount":1, "type": 3, "comment": "F.Management"}

try {
    $apiInstance->userWithdrawPost($body);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userWithdrawPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BalanceType**](../Model/BalanceType.md)| {&quot;login&quot;: 1, &quot;amount&quot;:1, &quot;type&quot;: 3, &quot;comment&quot;: &quot;F.Management&quot;} |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersGroupGet**
> \Swagger\Client\Model\ArrayOfCachedLogins usersGroupGet($group)

Get list of users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group = "group_example"; // string | Group name

try {
    $result = $apiInstance->usersGroupGet($group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->usersGroupGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| Group name |

### Return type

[**\Swagger\Client\Model\ArrayOfCachedLogins**](../Model/ArrayOfCachedLogins.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

