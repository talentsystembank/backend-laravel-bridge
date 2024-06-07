<?php

/**
 * Project backend-laravel-bridge
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 07/06/2024
 * Time: 09:23
 */

namespace App\Repositories;

if (!class_exists('App\Repositories\FAQRepository')) {
    class FAQRepository extends \nguyenanhung\AllTalentBank\Backend\MasterCoreService\Repository\FAQRepository
    {

    }
}