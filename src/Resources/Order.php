<?php

namespace DigitalSign\Sdk\Resources;

use DigitalSign\Sdk\Requests\CertificateCreateRequest;
use DigitalSign\Sdk\Requests\CertificateDetailRequest;
use DigitalSign\Sdk\Requests\CertificateReissueRequest;
use DigitalSign\Sdk\Requests\CertificateUpdateDcvRequest;

class Order extends AbstractResource
{
    /**
     * 证书下单接口
     *
     * @param CertificateCreateRequest $certificateCreateRequest
     * @return \DigitalSign\Sdk\Scheme\CertificateDetailScheme
     *
     * @link https://www.digital-sign.com.cn/document/cert-issue
     */
    public function certificateCreate(CertificateCreateRequest $certificateCreateRequest)
    {
        return $this->client->post('certificate/create', $certificateCreateRequest->toArray());
    }

 
     /**
      * 证书重签接口
      *
      * @param CertificateReissueRequest $certificateReissueRequest
      * @return \DigitalSign\Sdk\Scheme\CertificateDetailScheme
      * @link https://www.digital-sign.com.cn/document/cert-reissue
      */
     public function certificateReissue(CertificateReissueRequest $certificateReissueRequest)
     {
         return $this->client->post('certificate/reissue', $certificateReissueRequest->toArray());
    }

    /**
     * 证书查询接口
     *
     * @param CertificateDetailRequest $certificateDetailRequest
     * @return \DigitalSign\Sdk\Scheme\Certificate\DnsDCV[]|\DigitalSign\Sdk\Scheme\Certificate\EmailDCV[]|\DigitalSign\Sdk\Scheme\Certificate\HttpDCV[]|\DigitalSign\Sdk\Scheme\Certificate\HttpsDCV[]
     * @link https://www.digital-sign.com.cn/document/cert-detail
     */
    public function certificateDetail(CertificateDetailRequest $certificateDetailRequest)
    {
        return $this->client->get('certificate/detail', $certificateDetailRequest->toArray());
    }

    /**
     * 证书更新 DCV 接口
     *
     * @param CertificateUpdateDcvRequest $certificateUpdateDcvRequest
     * @return \DigitalSign\Sdk\Scheme\Certificate\DnsDCV[]|\DigitalSign\Sdk\Scheme\Certificate\EmailDCV[]|\DigitalSign\Sdk\Scheme\Certificate\HttpDCV[]|\DigitalSign\Sdk\Scheme\Certificate\HttpsDCV[]
     * @link https://www.digital-sign.com.cn/document/cert-update-dcv
     */
    public function certificateUpdateDcv(CertificateUpdateDcvRequest $certificateUpdateDcvRequest)
    {
        return $this->client->post('certificate/update-dcv', $certificateUpdateDcvRequest->toArray());
    }
}