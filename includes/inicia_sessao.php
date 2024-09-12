<?php
if(session_status() != PHP_SESSION_ACTIVE)
{
    session_cache_expire(60);
    session_start();
}
