<?php

namespace Helper;

use Github\Client;
use Github\ResultPager;

/**
 * Class GithubApiHelper
 * @package Helper
 */
class GithubApiHelper {

    /** @var  Client $client */
    private $client;

    /**
     * GithubApiHelper constructor.
     */
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @param $repo
     * @return array|mixed|null
     */
    public function getRepoByName($repo) {
        try {
            $organizationApi = $this->client->api('organization');
            $paginator  = new ResultPager($this->client);
            $parameters = array($repo);
            return $paginator->fetchAll($organizationApi, 'repositories', $parameters);
        } catch (\Exception $e) {
            return null;
        }
    }

}