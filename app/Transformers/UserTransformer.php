<?php

namespace App\Transformers;

use App\Models\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    public function transform(User $user)
    {
        return [
            'id' => $user->id,
            'organization' => $user->avatar,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'full_name' => $user->full_name,
            'avatar' => $user->status,
            'email' => $user->email,
            'created_at' => $user->created_at,
            'created_at_format' => $user->created_at_format,
            'updated_at' => $user->updated_at,
            'updated_at_format' => $user->updated_at_format,
            'domain' => $user->domain,
            'status' => $user->status,
            'chargebee_plan_id' => $user->chargebee_plan_id,
            'enable_media_addon' => $user->enable_media_addon,
            'enable_group_addon' => $user->enable_group_addon,
            'enable_domain_addon' => $user->enable_domain_addon,
            'trial_days' => $user->trial_days,
            'trial_full' => $user->trial_full,
            'is_expired' => $user->is_expired,
            'expired_at' => $user->expired_at,
            'expired_at_format' => $user->expired_at_format,
            'subscribed_at' => $user->subscribed_at,
            'subscribed_at_format' => $user->subscribed_at_format,
        ];
    }
}
