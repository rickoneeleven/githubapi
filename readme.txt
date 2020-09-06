i had to go into /home/loopnova/domains/githubapi.loopnova.test/public_html/vendor/knplabs/github-api/lib/Github/Api/User.php and add:
    public function events($username)
    {
        return $this->get('/users/'.rawurlencode($username).'/events');
    }

under the show method. this file isn't tracked by git for some reason (vendor?)
