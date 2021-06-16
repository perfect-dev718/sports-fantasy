<?php

// get full name of user
function getFullName($user) {
    return $user->first_name . " ". $user->last_name;
}
