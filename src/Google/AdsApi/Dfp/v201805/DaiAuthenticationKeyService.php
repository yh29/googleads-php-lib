<?php

namespace Google\AdsApi\Dfp\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DaiAuthenticationKeyService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201805\\ObjectValue',
      'ActivateDaiAuthenticationKeys' => 'Google\\AdsApi\\Dfp\\v201805\\ActivateDaiAuthenticationKeys',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201805\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201805\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201805\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201805\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201805\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201805\\CommonError',
      'DaiAuthenticationKeyAction' => 'Google\\AdsApi\\Dfp\\v201805\\DaiAuthenticationKeyAction',
      'DaiAuthenticationKeyActionError' => 'Google\\AdsApi\\Dfp\\v201805\\DaiAuthenticationKeyActionError',
      'DaiAuthenticationKey' => 'Google\\AdsApi\\Dfp\\v201805\\DaiAuthenticationKey',
      'DaiAuthenticationKeyPage' => 'Google\\AdsApi\\Dfp\\v201805\\DaiAuthenticationKeyPage',
      'Date' => 'Google\\AdsApi\\Dfp\\v201805\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201805\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateValue',
      'DeactivateDaiAuthenticationKeys' => 'Google\\AdsApi\\Dfp\\v201805\\DeactivateDaiAuthenticationKeys',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201805\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201805\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201805\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201805\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201805\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201805\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201805\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201805\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201805\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201805\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201805\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201805\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201805\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201805\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201805\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201805\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201805\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201805\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201805\\Value',
      'createDaiAuthenticationKeysResponse' => 'Google\\AdsApi\\Dfp\\v201805\\createDaiAuthenticationKeysResponse',
      'getDaiAuthenticationKeysByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201805\\getDaiAuthenticationKeysByStatementResponse',
      'performDaiAuthenticationKeyActionResponse' => 'Google\\AdsApi\\Dfp\\v201805\\performDaiAuthenticationKeyActionResponse',
      'updateDaiAuthenticationKeysResponse' => 'Google\\AdsApi\\Dfp\\v201805\\updateDaiAuthenticationKeysResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201805/DaiAuthenticationKeyService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Creates new {@link DaiAuthenticationKey} objects.
     *
     * <p>The following fields are required:
     *
     * <ul>
     * <li>{@link DaiAuthenticationKey#name}
     * </ul>
     *
     * @param \Google\AdsApi\Dfp\v201805\DaiAuthenticationKey[] $daiAuthenticationKeys
     * @return \Google\AdsApi\Dfp\v201805\DaiAuthenticationKey[]
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function createDaiAuthenticationKeys(array $daiAuthenticationKeys)
    {
      return $this->__soapCall('createDaiAuthenticationKeys', array(array('daiAuthenticationKeys' => $daiAuthenticationKeys)))->getRval();
    }

    /**
     * Gets a {@link DaiAuthenticationKeyPage} of {@link DaiAuthenticationKey} objects that satisfy
     * the given {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link DaiAuthenticationKey#id}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link DaiAuthenticationKey#status}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link DaiAuthenticationKey#name}</td>
     * </tr>
     * </table>
     *
     * authentication keys
     *
     * @param \Google\AdsApi\Dfp\v201805\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201805\DaiAuthenticationKeyPage
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function getDaiAuthenticationKeysByStatement(\Google\AdsApi\Dfp\v201805\Statement $filterStatement)
    {
      return $this->__soapCall('getDaiAuthenticationKeysByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link DaiAuthenticationKey} objects that match the given {@link
     * Statement#query}.
     *
     * <p>DAI authentication keys cannot be deactivated if there are active {@link LiveStreamEvent}s
     * or Content Sources that are using them.
     *
     * events
     *
     * @param \Google\AdsApi\Dfp\v201805\DaiAuthenticationKeyAction $daiAuthenticationKeyAction
     * @param \Google\AdsApi\Dfp\v201805\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201805\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function performDaiAuthenticationKeyAction(\Google\AdsApi\Dfp\v201805\DaiAuthenticationKeyAction $daiAuthenticationKeyAction, \Google\AdsApi\Dfp\v201805\Statement $filterStatement)
    {
      return $this->__soapCall('performDaiAuthenticationKeyAction', array(array('daiAuthenticationKeyAction' => $daiAuthenticationKeyAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link DaiAuthenticationKey} objects.
     *
     * @param \Google\AdsApi\Dfp\v201805\DaiAuthenticationKey[] $daiAuthenticationKeys
     * @return \Google\AdsApi\Dfp\v201805\DaiAuthenticationKey[]
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function updateDaiAuthenticationKeys(array $daiAuthenticationKeys)
    {
      return $this->__soapCall('updateDaiAuthenticationKeys', array(array('daiAuthenticationKeys' => $daiAuthenticationKeys)))->getRval();
    }

}
