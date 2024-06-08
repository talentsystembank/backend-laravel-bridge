<?php

namespace App\Jobs;

if ( ! class_exists('App\Jobs\SyncNearestStationDataJob')) {
    final class SyncNearestStationDataJob extends
        \nguyenanhung\AllTalentBank\Backend\MasterCoreService\Jobs\MasterSyncNearestStationDataJob
    {
    }
}
