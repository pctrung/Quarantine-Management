<?php

// config sidebar navigation option
$documentRoot = 'http://localhost:8080/QuarantineManager-Website';

return [
  'document root' => $documentRoot,
  'navigation' => [
    'admin' => [
      'home' => [
        'title' => 'Thống kê',
        'name'  => 'home',
        'icon'  => 'fas fa-chart-area',
        'link'  => $documentRoot . '/admin/home/index',
      ],
      'quarantine' => [
        'title' => 'Người cách ly',
        'name'  => 'quarantine',
        'icon'  => 'fas fa-user-shield',
        'link'  => $documentRoot . '/admin/quarantine/index',
      ],
      'room' => [
        'title' => 'Phòng bệnh',
        'name'  => 'room',
        'icon'  => 'fas fa-procedures',
        'link'  => $documentRoot . '/admin/room/index',
      ],
      'user' => [
        'title' => 'Tài khoản',
        'name'  => 'user',
        'icon'  => 'fas fa-users',
        'link'  => $documentRoot . '/admin/user/index',
      ],
      'report' => [
        'title' => 'Báo cáo',
        'name'  => 'report',
        'icon'  => 'fas fa-flag',
        'link'  => $documentRoot . '/admin/report/index',
        'subitems' => [
          [
            'title' => 'Tình hình ca nhiễm',
            'name'  => 'report1',
            'icon'  => 'fas fa-viruses',
            'link'  => $documentRoot . '/admin/report/index',
          ],
          [
            'title' => 'Tình hình tiếp nhận',
            'name'  => 'report2',
            'icon'  => 'fas fa-hospital-user',
            'link'  => $documentRoot . '/admin/report/index',
          ],
        ],
      ],
    ],
  ],
];
