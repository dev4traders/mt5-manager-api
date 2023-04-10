# D4T\MT5Sdk\UserApi

All URIs are relative to *http://localhost:6503/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteUser**](UserApi.md#deleteUser) | **DELETE** /user/{user_login} | Delete user
[**updateUser**](UserApi.md#updateUser) | **POST** /user/update | Update user
[**userAddPost**](UserApi.md#userAddPost) | **POST** /user/add | Create user
[**userDepositPost**](UserApi.md#userDepositPost) | **POST** /user/deposit | Deposit account
[**userResetPwdPost**](UserApi.md#userResetPwdPost) | **POST** /user/reset_pwd | Reset password
[**userUserLoginGet**](UserApi.md#userUserLoginGet) | **GET** /user/{user_login} | Get user by user login
[**userWithdrawPost**](UserApi.md#userWithdrawPost) | **POST** /user/withdraw | Withdraw account
[**usersBulkAddPost**](UserApi.md#usersBulkAddPost) | **POST** /users/bulk_add | Create users
[**usersBulkBalancePost**](UserApi.md#usersBulkBalancePost) | **POST** /users/bulk_balance | bulk balance
[**usersBulkUpdatePost**](UserApi.md#usersBulkUpdatePost) | **POST** /users/bulk_update | bulk update
[**usersBulkWithdrawPost**](UserApi.md#usersBulkWithdrawPost) | **POST** /users/bulk_withdraw | bulk withdraw
[**usersGroupGet**](UserApi.md#usersGroupGet) | **GET** /users/{group} | Get list of users
[**usersUploadPost**](UserApi.md#usersUploadPost) | **POST** /users/upload | Upload account in csv


# **deleteUser**
> deleteUser($token, $user_login)

Delete user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT5Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$user_login = "user_login_example"; // string | The login that needs to be deleted

try {
    $apiInstance->deleteUser($token, $user_login);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **user_login** | **string**| The login that needs to be deleted |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUser**
> updateUser($token, $body)

Update user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT5Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$body = new \D4T\MT5Sdk\Models\User(); // \D4T\MT5Sdk\Models\User | {\"login\": 1, \"password\":\"new_pwd\", \"name\":\"new_name\"}

try {
    $apiInstance->updateUser($token, $body);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **body** | [**\D4T\MT5Sdk\Models\User**](../Model/User.md)| {\&quot;login\&quot;: 1, \&quot;password\&quot;:\&quot;new_pwd\&quot;, \&quot;name\&quot;:\&quot;new_name\&quot;} |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userAddPost**
> \D4T\MT5Sdk\Models\UserReturnType userAddPost($token, $body)

Create user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT5Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$body = new \D4T\MT5Sdk\Models\User(); // \D4T\MT5Sdk\Models\User | {\"password_investor\":\"123456Aa\",\"password\":\"123456Aa\", \"name\":\"test\", \"email\": \"test@test.com\",\"group\":\"demo\\demoforex\",\"leverage\":100}

try {
    $result = $apiInstance->userAddPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **body** | [**\D4T\MT5Sdk\Models\User**](../Model/User.md)| {\&quot;password_investor\&quot;:\&quot;123456Aa\&quot;,\&quot;password\&quot;:\&quot;123456Aa\&quot;, \&quot;name\&quot;:\&quot;test\&quot;, \&quot;email\&quot;: \&quot;test@test.com\&quot;,\&quot;group\&quot;:\&quot;demo\\demoforex\&quot;,\&quot;leverage\&quot;:100} |

### Return type

[**\D4T\MT5Sdk\Models\UserReturnType**](../Model/UserReturnType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userDepositPost**
> userDepositPost($token, $body)

Deposit account



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT5Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$body = new \D4T\MT5Sdk\Models\BalanceType(); // \D4T\MT5Sdk\Models\BalanceType | {\"login\": 1, \"amount\":1, \"type\": 3, \"comment\": \"F.Management\"}

try {
    $apiInstance->userDepositPost($token, $body);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userDepositPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **body** | [**\D4T\MT5Sdk\Models\BalanceType**](../Model/BalanceType.md)| {\&quot;login\&quot;: 1, \&quot;amount\&quot;:1, \&quot;type\&quot;: 3, \&quot;comment\&quot;: \&quot;F.Management\&quot;} |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userResetPwdPost**
> userResetPwdPost($token, $body)

Reset password

Reset password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT5Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$body = new \D4T\MT5Sdk\Models\ResetPwdType(); // \D4T\MT5Sdk\Models\ResetPwdType | {\"login\": 1, \"password\":\"new_pwd\", \"change_investor\":0}

try {
    $apiInstance->userResetPwdPost($token, $body);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userResetPwdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **body** | [**\D4T\MT5Sdk\Models\ResetPwdType**](../Model/ResetPwdType.md)| {\&quot;login\&quot;: 1, \&quot;password\&quot;:\&quot;new_pwd\&quot;, \&quot;change_investor\&quot;:0} |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userUserLoginGet**
> \D4T\MT5Sdk\Models\User userUserLoginGet($token, $user_login)

Get user by user login



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT5Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$user_login = "user_login_example"; // string | The name that needs to be fetched. Use 3 for testing.

try {
    $result = $apiInstance->userUserLoginGet($token, $user_login);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userUserLoginGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **user_login** | **string**| The name that needs to be fetched. Use 3 for testing. |

### Return type

[**\D4T\MT5Sdk\Models\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userWithdrawPost**
> userWithdrawPost($token, $body)

Withdraw account

Withdraw account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT5Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$body = new \D4T\MT5Sdk\Models\BalanceType(); // \D4T\MT5Sdk\Models\BalanceType | {\"login\": 1, \"amount\":1, \"type\": 3, \"comment\": \"F.Management\"}

try {
    $apiInstance->userWithdrawPost($token, $body);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userWithdrawPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **body** | [**\D4T\MT5Sdk\Models\BalanceType**](../Model/BalanceType.md)| {\&quot;login\&quot;: 1, \&quot;amount\&quot;:1, \&quot;type\&quot;: 3, \&quot;comment\&quot;: \&quot;F.Management\&quot;} |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersBulkAddPost**
> usersBulkAddPost($token, $body)

Create users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT5Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$body = new \D4T\MT5Sdk\Models\Users(); // \D4T\MT5Sdk\Models\Users | {\"groupname\":\"demohfx-usd\",\"password\":\"123456Aa\", \"firstname\":\"test\", \"firstname\":\"test\", \"email\": \"test@test.com\"}

try {
    $apiInstance->usersBulkAddPost($token, $body);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->usersBulkAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **body** | [**\D4T\MT5Sdk\Models\Users**](../Model/Users.md)| {\&quot;groupname\&quot;:\&quot;demohfx-usd\&quot;,\&quot;password\&quot;:\&quot;123456Aa\&quot;, \&quot;firstname\&quot;:\&quot;test\&quot;, \&quot;firstname\&quot;:\&quot;test\&quot;, \&quot;email\&quot;: \&quot;test@test.com\&quot;} |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersBulkBalancePost**
> usersBulkBalancePost($token, $upfile)

bulk balance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT5Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$upfile = "/path/to/file.txt"; // \SplFileObject | File in CSV format

try {
    $apiInstance->usersBulkBalancePost($token, $upfile);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->usersBulkBalancePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **upfile** | **\SplFileObject**| File in CSV format |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersBulkUpdatePost**
> \D4T\MT5Sdk\Models\ReturnType usersBulkUpdatePost($token, $upfile)

bulk update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT5Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$upfile = "/path/to/file.txt"; // \SplFileObject | File in CSV format

try {
    $result = $apiInstance->usersBulkUpdatePost($token, $upfile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->usersBulkUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **upfile** | **\SplFileObject**| File in CSV format |

### Return type

[**\D4T\MT5Sdk\Models\ReturnType**](../Model/ReturnType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersBulkWithdrawPost**
> \D4T\MT5Sdk\Models\ReturnType usersBulkWithdrawPost($token, $upfile)

bulk withdraw

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT5Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$upfile = "/path/to/file.txt"; // \SplFileObject | File in CSV format

try {
    $result = $apiInstance->usersBulkWithdrawPost($token, $upfile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->usersBulkWithdrawPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **upfile** | **\SplFileObject**| File in CSV format |

### Return type

[**\D4T\MT5Sdk\Models\ReturnType**](../Model/ReturnType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersGroupGet**
> \D4T\MT5Sdk\Models\ArrayOfCachedLogins usersGroupGet($token, $group)

Get list of users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT5Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$group = "group_example"; // string | Group name

try {
    $result = $apiInstance->usersGroupGet($token, $group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->usersGroupGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **group** | **string**| Group name |

### Return type

[**\D4T\MT5Sdk\Models\ArrayOfCachedLogins**](../Model/ArrayOfCachedLogins.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersUploadPost**
> \D4T\MT5Sdk\Models\ReturnType usersUploadPost($token, $upfile)

Upload account in csv

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT5Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$upfile = "/path/to/file.txt"; // \SplFileObject | File in CSV format

try {
    $result = $apiInstance->usersUploadPost($token, $upfile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->usersUploadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **upfile** | **\SplFileObject**| File in CSV format |

### Return type

[**\D4T\MT5Sdk\Models\ReturnType**](../Model/ReturnType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

