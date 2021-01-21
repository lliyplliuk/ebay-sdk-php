<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace lliyplliuk\eBaySDK\ResolutionCaseManagement\Services;

class ResolutionCaseManagementService extends \lliyplliuk\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementBaseService
{
    const API_VERSION = '1.3.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\GetVersionRequest $request
     * @return \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\GetVersionResponse
     */
    public function getVersion(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\GetVersionRequest $request)
    {
        return $this->getVersionAsync($request)->wait();
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\GetVersionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVersionAsync(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\GetVersionRequest $request)
    {
        return $this->callOperationAsync(
            'getVersion',
            $request,
            '\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\GetVersionResponse'
        );
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\GetUserCasesRequest $request
     * @return \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\GetUserCasesResponse
     */
    public function getUserCases(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\GetUserCasesRequest $request)
    {
        return $this->getUserCasesAsync($request)->wait();
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\GetUserCasesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUserCasesAsync(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\GetUserCasesRequest $request)
    {
        return $this->callOperationAsync(
            'getUserCases',
            $request,
            '\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\GetUserCasesResponse'
        );
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\GetEBPCaseDetailRequest $request
     * @return \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\GetEBPCaseDetailResponse
     */
    public function getEBPCaseDetail(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\GetEBPCaseDetailRequest $request)
    {
        return $this->getEBPCaseDetailAsync($request)->wait();
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\GetEBPCaseDetailRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEBPCaseDetailAsync(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\GetEBPCaseDetailRequest $request)
    {
        return $this->callOperationAsync(
            'getEBPCaseDetail',
            $request,
            '\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\GetEBPCaseDetailResponse'
        );
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\GetActivityOptionsRequest $request
     * @return \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\GetActivityOptionsResponse
     */
    public function getActivityOptions(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\GetActivityOptionsRequest $request)
    {
        return $this->getActivityOptionsAsync($request)->wait();
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\GetActivityOptionsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getActivityOptionsAsync(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\GetActivityOptionsRequest $request)
    {
        return $this->callOperationAsync(
            'getActivityOptions',
            $request,
            '\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\GetActivityOptionsResponse'
        );
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\IssueFullRefundRequest $request
     * @return \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\IssueFullRefundResponse
     */
    public function issueFullRefund(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\IssueFullRefundRequest $request)
    {
        return $this->issueFullRefundAsync($request)->wait();
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\IssueFullRefundRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function issueFullRefundAsync(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\IssueFullRefundRequest $request)
    {
        return $this->callOperationAsync(
            'issueFullRefund',
            $request,
            '\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\IssueFullRefundResponse'
        );
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ProvideTrackingInfoRequest $request
     * @return \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ProvideTrackingInfoResponse
     */
    public function provideTrackingInfo(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ProvideTrackingInfoRequest $request)
    {
        return $this->provideTrackingInfoAsync($request)->wait();
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ProvideTrackingInfoRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function provideTrackingInfoAsync(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ProvideTrackingInfoRequest $request)
    {
        return $this->callOperationAsync(
            'provideTrackingInfo',
            $request,
            '\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ProvideTrackingInfoResponse'
        );
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\OfferOtherSolutionRequest $request
     * @return \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\OfferOtherSolutionResponse
     */
    public function offerOtherSolution(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\OfferOtherSolutionRequest $request)
    {
        return $this->offerOtherSolutionAsync($request)->wait();
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\OfferOtherSolutionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function offerOtherSolutionAsync(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\OfferOtherSolutionRequest $request)
    {
        return $this->callOperationAsync(
            'offerOtherSolution',
            $request,
            '\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\OfferOtherSolutionResponse'
        );
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\EscalateToCustomerSupportRequest $request
     * @return \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\EscalateToCustomerSupportResponse
     */
    public function escalateToCustomerSupport(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\EscalateToCustomerSupportRequest $request)
    {
        return $this->escalateToCustomerSupportAsync($request)->wait();
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\EscalateToCustomerSupportRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function escalateToCustomerSupportAsync(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\EscalateToCustomerSupportRequest $request)
    {
        return $this->callOperationAsync(
            'escalateToCustomerSupport',
            $request,
            '\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\EscalateToCustomerSupportResponse'
        );
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\AppealToCustomerSupportRequest $request
     * @return \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\AppealToCustomerSupportResponse
     */
    public function appealToCustomerSupport(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\AppealToCustomerSupportRequest $request)
    {
        return $this->appealToCustomerSupportAsync($request)->wait();
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\AppealToCustomerSupportRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function appealToCustomerSupportAsync(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\AppealToCustomerSupportRequest $request)
    {
        return $this->callOperationAsync(
            'appealToCustomerSupport',
            $request,
            '\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\AppealToCustomerSupportResponse'
        );
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\OfferPartialRefundRequest $request
     * @return \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\OfferPartialRefundResponse
     */
    public function offerPartialRefund(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\OfferPartialRefundRequest $request)
    {
        return $this->offerPartialRefundAsync($request)->wait();
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\OfferPartialRefundRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function offerPartialRefundAsync(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\OfferPartialRefundRequest $request)
    {
        return $this->callOperationAsync(
            'offerPartialRefund',
            $request,
            '\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\OfferPartialRefundResponse'
        );
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\IssuePartialRefundRequest $request
     * @return \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\IssuePartialRefundResponse
     */
    public function issuePartialRefund(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\IssuePartialRefundRequest $request)
    {
        return $this->issuePartialRefundAsync($request)->wait();
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\IssuePartialRefundRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function issuePartialRefundAsync(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\IssuePartialRefundRequest $request)
    {
        return $this->callOperationAsync(
            'issuePartialRefund',
            $request,
            '\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\IssuePartialRefundResponse'
        );
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ProvideShippingInfoRequest $request
     * @return \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ProvideShippingInfoResponse
     */
    public function provideShippingInfo(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ProvideShippingInfoRequest $request)
    {
        return $this->provideShippingInfoAsync($request)->wait();
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ProvideShippingInfoRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function provideShippingInfoAsync(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ProvideShippingInfoRequest $request)
    {
        return $this->callOperationAsync(
            'provideShippingInfo',
            $request,
            '\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ProvideShippingInfoResponse'
        );
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ProvideReturnInfoRequest $request
     * @return \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ProvideReturnInfoResponse
     */
    public function provideReturnInfo(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ProvideReturnInfoRequest $request)
    {
        return $this->provideReturnInfoAsync($request)->wait();
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ProvideReturnInfoRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function provideReturnInfoAsync(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ProvideReturnInfoRequest $request)
    {
        return $this->callOperationAsync(
            'provideReturnInfo',
            $request,
            '\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ProvideReturnInfoResponse'
        );
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ProvideRefundInfoRequest $request
     * @return \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ProvideRefundInfoResponse
     */
    public function provideRefundInfo(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ProvideRefundInfoRequest $request)
    {
        return $this->provideRefundInfoAsync($request)->wait();
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ProvideRefundInfoRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function provideRefundInfoAsync(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ProvideRefundInfoRequest $request)
    {
        return $this->callOperationAsync(
            'provideRefundInfo',
            $request,
            '\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\ProvideRefundInfoResponse'
        );
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\UploadDocumentsRequest $request
     * @return \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\UploadDocumentsResponse
     */
    public function uploadDocuments(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\UploadDocumentsRequest $request)
    {
        return $this->uploadDocumentsAsync($request)->wait();
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\UploadDocumentsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadDocumentsAsync(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\UploadDocumentsRequest $request)
    {
        return $this->callOperationAsync(
            'uploadDocuments',
            $request,
            '\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\UploadDocumentsResponse'
        );
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\OfferRefundUponReturnRequest $request
     * @return \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\OfferRefundUponReturnResponse
     */
    public function offerRefundUponReturn(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\OfferRefundUponReturnRequest $request)
    {
        return $this->offerRefundUponReturnAsync($request)->wait();
    }

    /**
     * @param \lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\OfferRefundUponReturnRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function offerRefundUponReturnAsync(\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\OfferRefundUponReturnRequest $request)
    {
        return $this->callOperationAsync(
            'offerRefundUponReturn',
            $request,
            '\lliyplliuk\eBaySDK\ResolutionCaseManagement\Types\OfferRefundUponReturnResponse'
        );
    }
}
