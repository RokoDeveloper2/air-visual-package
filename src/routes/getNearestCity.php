
<?php
$app->post('/api/Wunderlist/getAvatar', function ($request, $response) {
    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['clientId','accessToken','userId']);

        if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
            return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
        } else {
            $post_data = $validateRes;
        }

    $requiredParams = ['clientId'=>'client_id','accessToken'=>'access_token','userId' => 'user_id' ];
    $optionalParams = [];
    $bodyParams = ['query' => ['user_id']];
    $data = \Models\Params::createParams($requiredParams, $optionalParams, $post_data['args']);

    $client = $this->httpClient;
    $query_str = "https://a.wunderlist.com/api/v1/avatar";
    $requestParams = \Models\Params::createRequestBody($data, $bodyParams);
    $requestParams['headers'] = ["X-Access-Token"=>"{$data['access_token']}", "X-Client-ID"=>"{$data['client_id']}"];

    $fileParams = array('fileName' => 'test.png');

    $result = \Models\RequestFacade::makeRequest($client,$query_str,$requestParams);

     return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});
