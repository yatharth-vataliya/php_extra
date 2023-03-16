<?php

namespace Assert {

    use Attribute;

    #[Attribute]
    class All
    {
        public function __construct(public $notNull, public $length)
        {
        }
    }

    class NotNull
    {

    }

    class Length
    {
        public function __construct($min)
        {
        }
    }
}

namespace NotAssert {

#PHP < 8.1
    class User
    {
        /**
         * @Assert\All({
         *     @Assert\NotNull,
         *     @Assert\Length(min=5)
         * })
         */
        public string $name = '';
    }

#PHP 8.1
    class UserAgain
    {
        #[\Assert\All(
            new \Assert\NotNull,
            new \Assert\Length(min: 5))
        ]
        public string $name = '';
    }
}