<?php

$app->post('/api/AirVisual/getCity', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey','country','city','state']);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $requiredParams = ['apiKey'=>'key','country'=>'country','city'=>'city','state'=>'state'];
    $optionalParams = [];
    $bodyParams = [
       'query' => ['key','state','city','country']
    ];

    $data = \Models\Params::createParams($requiredParams, $optionalParams, $post_data['args']);

    

    $client = $this->httpClient;
    $query_str = "http://api.airvisual.com/v2/city";

    

    $requestParams = \Models\Params::createRequestBody($data, $bodyParams);
    $requestParams['headers'] = [];

    $result = \Models\RequestFacade::makeRequest($client,$query_str,$requestParams);

    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);


});