<?php

namespace Controller;

use Helper\GithubApiHelper;

/**
 * Class SiteController
 * @package Controller
 */
class SiteController extends BaseController
{

    /**
     * @return array|mixed|null
     */
    public function indexAction () {
        $gitHubApi = new GithubApiHelper();
        $repos = $gitHubApi->getRepoByName('symfony');
        return $this->render('site/index.html', array('repos' => $repos));
    }

}