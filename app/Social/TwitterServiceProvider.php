<?php

namespace App\Social;

use App\User;

class TwitterServiceProvider extends AbstractServiceProvider
{
    /**
     *  Handle Facebook response
     *
     *  @return Illuminate\Http\Response
     */
    public function handle()
    {
        dd($this->provider->user());
        $user = $this->provider->fields([
            'first_name',
            'last_name',
            'email',
            'gender',
            'verified',
        ])->user();

        $existingUser = User::whereEmail($user->email)->orWhere('settings->twitter_id', $user->id)->first();

        if ($existingUser) {
            $settings = $existingUser->settings;

            if (! isset($settings['twitter_id'])) {
                $settings['twitter_id'] = $user->id;
                $existingUser->settings = $settings;
                $existingUser->save();
            }

            return $this->login($existingUser);
        }

        $newUser = $this->register([
            'first_name' => $user->user['first_name'],
            'last_name' => $user->user['last_name'],
            'email' => $user->email,
            'gender' => ucfirst($user->user['gender']),
            'settings' => [
                'twitter_id' => $user->id,
            ]
        ]);

        return $this->login($newUser);
    }
}