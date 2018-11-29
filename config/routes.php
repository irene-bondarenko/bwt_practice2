<?php

return array(

    'site/worker/create' => 'siteWorker/create',
    'site/worker/update/([0-9]+)' => 'siteWorker/update/$1',
    'site/worker/delete/([0-9]+)' => 'siteWorker/delete/$1',
    'site/worker' => 'siteWorker/index',

    // Главная страница
    'index.php' => 'siteWorker/index', // actionIndex в SiteWorkerController
    '' => 'site_worker/index', // actionIndex в SiteWorkerController
);
