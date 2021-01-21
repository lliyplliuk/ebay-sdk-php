<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\BusinessPoliciesManagement\Services;

class BusinessPoliciesManagementService extends \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementBaseService
{
    const API_VERSION = '1.0.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\GetVersionRequest $request
     * @return \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\GetVersionResponse
     */
    public function getVersion(\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\GetVersionRequest $request)
    {
        return $this->getVersionAsync($request)->wait();
    }

    /**
     * @param \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\GetVersionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVersionAsync(\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\GetVersionRequest $request)
    {
        return $this->callOperationAsync(
            'getVersion',
            $request,
            '\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\GetVersionResponse'
        );
    }

    /**
     * @param \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileRequest $request
     * @return \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileResponse
     */
    public function removeProfile(\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileRequest $request)
    {
        return $this->removeProfileAsync($request)->wait();
    }

    /**
     * @param \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeProfileAsync(\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileRequest $request)
    {
        return $this->callOperationAsync(
            'removeProfile',
            $request,
            '\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileResponse'
        );
    }

    /**
     * @param \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileRequest $request
     * @return \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileResponse
     */
    public function addSellerProfile(\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileRequest $request)
    {
        return $this->addSellerProfileAsync($request)->wait();
    }

    /**
     * @param \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addSellerProfileAsync(\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileRequest $request)
    {
        return $this->callOperationAsync(
            'addSellerProfile',
            $request,
            '\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileResponse'
        );
    }

    /**
     * @param \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\GetSellerProfilesRequest $request
     * @return \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\GetSellerProfilesResponse
     */
    public function getSellerProfiles(\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\GetSellerProfilesRequest $request)
    {
        return $this->getSellerProfilesAsync($request)->wait();
    }

    /**
     * @param \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\GetSellerProfilesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSellerProfilesAsync(\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\GetSellerProfilesRequest $request)
    {
        return $this->callOperationAsync(
            'getSellerProfiles',
            $request,
            '\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\GetSellerProfilesResponse'
        );
    }

    /**
     * @param \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\SetSellerProfileRequest $request
     * @return \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\SetSellerProfileResponse
     */
    public function setSellerProfile(\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\SetSellerProfileRequest $request)
    {
        return $this->setSellerProfileAsync($request)->wait();
    }

    /**
     * @param \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\SetSellerProfileRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setSellerProfileAsync(\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\SetSellerProfileRequest $request)
    {
        return $this->callOperationAsync(
            'setSellerProfile',
            $request,
            '\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\SetSellerProfileResponse'
        );
    }

    /**
     * @param \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesRequest $request
     * @return \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesResponse
     */
    public function removeSellerProfiles(\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesRequest $request)
    {
        return $this->removeSellerProfilesAsync($request)->wait();
    }

    /**
     * @param \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeSellerProfilesAsync(\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesRequest $request)
    {
        return $this->callOperationAsync(
            'removeSellerProfiles',
            $request,
            '\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesResponse'
        );
    }

    /**
     * @param \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesRequest $request
     * @return \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesResponse
     */
    public function consolidateShippingProfiles(\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesRequest $request)
    {
        return $this->consolidateShippingProfilesAsync($request)->wait();
    }

    /**
     * @param \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function consolidateShippingProfilesAsync(\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesRequest $request)
    {
        return $this->callOperationAsync(
            'consolidateShippingProfiles',
            $request,
            '\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesResponse'
        );
    }

    /**
     * @param \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusRequest $request
     * @return \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusResponse
     */
    public function getConsolidationJobStatus(\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusRequest $request)
    {
        return $this->getConsolidationJobStatusAsync($request)->wait();
    }

    /**
     * @param \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getConsolidationJobStatusAsync(\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusRequest $request)
    {
        return $this->callOperationAsync(
            'getConsolidationJobStatus',
            $request,
            '\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusResponse'
        );
    }

    /**
     * @param \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\RemoveOverridesRequest $request
     * @return \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\RemoveOverridesResponse
     */
    public function removeOverrides(\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\RemoveOverridesRequest $request)
    {
        return $this->removeOverridesAsync($request)->wait();
    }

    /**
     * @param \lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\RemoveOverridesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeOverridesAsync(\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\RemoveOverridesRequest $request)
    {
        return $this->callOperationAsync(
            'removeOverrides',
            $request,
            '\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Types\RemoveOverridesResponse'
        );
    }
}
