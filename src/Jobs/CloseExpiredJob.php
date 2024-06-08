<?php

namespace App\Jobs;

if ( ! class_exists('App\Jobs\CloseExpiredJob')) {
    final class CloseExpiredJob extends
        \nguyenanhung\AllTalentBank\Backend\MasterCoreService\Jobs\MasterCloseExpiredJob
    {
    }
}
