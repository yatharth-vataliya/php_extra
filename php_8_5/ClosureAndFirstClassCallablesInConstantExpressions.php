<?php

// Before PHP 8.5

final class PostsController
{
    #[AccessControl(
        new Expression('request.user === post.getAuthor()'),
    )]
    public function update(
        Request $request,
        Post $post,
    ): Response {
        // ...
    }
}

// IN PHP 8.5

final class PostsController
{
    #[AccessControl(static function (
        Request $request,
        Post $post,
    ): bool {
        return $request->user === $post->getAuthor();
    })]
    public function update(
        Request $request,
        Post $post,
    ): Response {
        // ...
    }
}

function my_array_filter(
    array $array,
    Closure $callback = static function ($item): bool { return !empty($item); },
) {
    $result = [];
 
    foreach ($array as $item) {
        if ($callback($item)) {
            $result[] = $item;
        }
    }
 
    return $result;
}
 
my_array_filter([
    0, 1, 2,
    '', 'foo', 'bar',
]); // [1, 2, "foo", "bar"]
