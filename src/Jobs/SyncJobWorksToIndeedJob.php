<?php

namespace App\Jobs;

if ( ! class_exists('App\Jobs\SyncJobWorksToIndeedJob')) {
    final class SyncJobWorksToIndeedJob extends
        \nguyenanhung\AllTalentBank\Backend\MasterCoreService\Jobs\MasterSyncJobWorksToIndeedJob
    {
    }
}
