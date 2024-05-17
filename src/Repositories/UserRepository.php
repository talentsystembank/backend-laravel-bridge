<?php
/**
 * Project backend-laravel-bridge
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 18/5/24
 * Time: 02:31
 */

namespace App\Repositories;

if ( ! class_exists('App\Repositories\UserRepository')) {
    class UserRepository extends \nguyenanhung\AllTalentBank\Backend\MasterCoreService\Repository\UserRepository
    {

    }
}
