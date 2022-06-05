<?php

function UserSetting($name) {
    return AscentCreative\UserSettings\Models\Setting::get($name);
}