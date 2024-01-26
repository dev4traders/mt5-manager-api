# Deal

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ticket** | **int** |  | [optional] 
**entry** | **int** | Deal Утекн:  * &#x60;0&#x60; - in market  * &#x60;1&#x60; - out of market  * &#x60;2&#x60; - reverse  * &#x60;3&#x60; - closed by  hedged position | [optional] 
**reason** | **int** | Deal Reason:  * &#x60;0&#x60; - deal placed manually  * &#x60;1&#x60; - deal placed by expert  * &#x60;2&#x60; - deal placed by dealer  * &#x60;3&#x60; - deal placed due SL  * &#x60;4&#x60; - deal placed due TP  * &#x60;16&#x60; - deal placed manually by mobile terminal  * &#x60;17&#x60; - deal placed manually by web terminal | [optional] 
**action** | **int** | Deal Action:  * &#x60;0&#x60; - buy  * &#x60;1&#x60; - sell  * &#x60;2&#x60; - deposit operation  * &#x60;3&#x60; - credit operation  * &#x60;4&#x60; - additional charges  * &#x60;5&#x60; - correction deals  * &#x60;6&#x60; - bonus  * &#x60;7&#x60; - commission | [optional] 
**type** | **int** | Deal Type:  * &#x60;0&#x60; - buy  * &#x60;1&#x60; - sell  * &#x60;6&#x60; - balance  * &#x60;7&#x60; - commission | [optional] 
**type_str** | **string** |  | [optional] 
**symbol** | **string** |  | [optional] 
**lots** | **float** |  | [optional] 
**time** | **string** |  | [optional] 
**price** | **float** |  | [optional] 
**comment** | **string** |  | [optional] 
**sl** | **float** |  | [optional] 
**tp** | **float** |  | [optional] 
**pl** | **float** |  | [optional] 
**commission** | **float** |  | [optional] 
**swap** | **float** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

