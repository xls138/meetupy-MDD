<?php

// @formatter:off
/**
 * Custom IDE stubs for the gaps laravel-ide-helper cannot generate.
 *
 * intelephense (and PhpStorm) prefer workspace definitions over vendor ones,
 * so redeclaring a vendor interface here augments resolution. The `auth()`
 * helper's conditional docblock resolves no-arg calls to this Factory
 * contract, which lacks the guard methods proxied via AuthManager::__call.
 *
 * Never loaded at runtime.
 */

namespace Illuminate\Contracts\Auth
{
    /**
     * @method \App\Models\User|null user()
     * @method bool check()
     * @method bool guest()
     * @method int|string|null id()
     * @method void logout()
     */
    interface Factory
    {
        /**
         * @param  \UnitEnum|string|null  $name
         * @return Guard|StatefulGuard
         */
        public function guard($name = null);

        /**
         * @param  \UnitEnum|string|null  $name
         * @return void
         */
        public function shouldUse($name);
    }
}
