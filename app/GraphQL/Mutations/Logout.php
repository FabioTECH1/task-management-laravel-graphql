<?php

namespace App\GraphQL\Mutations;

final class Logout
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        $user = request()->user();
        $user->currentAccessToken()->delete();
        return true;
        // $user->tokens()->where('id', $user->currentaccesstoken()->id)->delete();
    }
}
