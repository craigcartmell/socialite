<?php namespace Laravel\Socialite\Two;

use Laravel\Socialite\AbstractUser;

class User extends AbstractUser
{

    /**
     * The user's access token.
     *
     * @var string
     */
    public $token;

    /**
     * The user's refresh token.
     *
     * @var string
     */
    public $refreshToken;

    /**
     * Set the token on the user.
     *
     * @param  string  $token
     * @return $this
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Set the refresh token on the user.
     *
     * @param  string  $refreshToken
     * @return $this
     */
    public function setRefreshToken($refreshToken)
    {
        $this->refreshToken = $refreshToken;

        return $this;
    }
}
