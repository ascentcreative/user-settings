<?php

function UserSetting($name, $context=null, $user=null) {
    return AscentCreative\UserSettings\Models\Setting::get(name: $name, context: $context, user_id: $user);
}