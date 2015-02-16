<?php

namespace Traditional\Bundle\UserBundle\Event;

use SimpleBus\Message\Name\NamedMessage;
use Traditional\Bundle\UserBundle\Entity\User;

class UserRegistered implements NamedMessage
{
    /**
     * @var User
     */
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function user()
    {
        return $this->user;
    }

    public static function messageName()
    {
        return 'user_registered';
    }
}
