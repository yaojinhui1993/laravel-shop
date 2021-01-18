<?php

return [
    'alipay' => [
        'app_id' => '2021000117601748',
        'notify_url' => 'http://larvelshop.test/payment/alipay/return',
        // 'notify_url' => 'http://requestbin.net/r/sst3n6ss',
        'return_url' => 'http://laravelshop.test/payment/alipay/return',
        'ali_public_key' => app_path('cert/alipayCertPublicKey_RSA2.crt'),
        'app_cert_public_key' => app_path('cert/appCertPublicKey_2021000117601748.crt'),
        'alipay_root_cert' => app_path('cert/alipayRootCert.crt'),
        'private_key' => 'MIIEowIBAAKCAQEAkAnW2YB6Js+ldLg/OboDtN0OBzurzGvdW4tW2Vm492hrq/6dpNfqijuuwaNuX5fOiTV9BmmzZHlCWxJwqkGIj4PzmN22ESG/kxhXecrIeF4VUDdyXlBbU5MTx1KE80XFaoBf/lsnTCtPqcMuF/aylby1rzf9O5c4kuZdK6CEYs2jaraYKNgLS298O+1g4Q3s78eQQxybRbEn1XMVmL+5mO+0lUHzecmWDJ27ttO38j10NCnd64MaP0mHzOqjSDSbU2U5G/azEnCM8+7E0sI7AtP8qTNAC2CUMH4geJZOYGR3wXJdg7PGQiHHPN+ftg/sXO2Flk5YTaCT0Xj8SFWVxwIDAQABAoIBADnGuJemIVlQEV4wSawuIS57PRVJqi/lVHVT/xJQGxGioQ3so+9rbHjmV8L0e2F80yvWeMAJxhuXSDafvvGMN+rZUu0Ogel9UAsAyJXh8WfW1VXH5+hM81UiudxKDWpHoliGBftRNQIonVvLHsIeAqRtfbM7EijFD7xdCyJk0LWQjLucd3PURvdKs+aJJpsYGIrmxNSTwosBlP21BS8aXG3R/zdRZwrP8zSN/1KGK1D20zVTdzXxjoBxjI0BrZsxMgfhufYRaHX9sgVVetYcTbZ11j1TSPb8jdg08xByYqOqty8LRV2FjlYtK8///Bx/8Tz+BENZ2cFK3AiK+HENK4ECgYEAyFdlS5SEAcgpMBc+lhPMp2SypH0LPRe2imXwiItwX2x2MJ5/Wel+4tPyj32IHK73/wtnoHc369ipXZYErZlxqxNZmBoFiJTeLKLQQdElzy75X1sOTVuie5XGbrV9X6XZe1MMwIUU9jjaccIKBvoDEP+4mEFuiO+YXhXPMkfN2fsCgYEAuA4WD399sJZEeXkBjnYDOQyRktmd12ntNxLcHXM3PqvJ8ZCyaUxx+/Ejk/1o65eza7Evf5U9lQ/Warwin4x+kFZKP2Sd0hKf2pmnoAfGJEhd/x/uWjOpe1fYxc8ynI55RgkYSYydc16NRjzcpWO+MY7rD0kNBhrU+T6iJQkLlaUCgYEAtEjxfvJHWNMnPX+tcqCeqoSTvjJIytFsE19o9XeFyFlygo4fTGozJSxWO4pb0nQh+AHrXxvp1vNCdlVqIE7VW34uQhIoqKBOzxw1DQWJYMiE4KqwVC0CKvS9fSMVj91PuQsjjpw0IN9ItNZI775MxB9bnqhDMDdshj5aFoVHWcECgYAgzhnufznG3LGtuPynCK/AXlYgB3uTpoSqWUk0UpHZMMNYtAKotABo+Gzv9q3Zt/s5yaX+pnoIdH8yHQBK0b7JOSgYrnVWuQ0W6GYxJtGRK/jc/TL9jtG5c0nmz+xkbRx+eCaFDXQO2R5zE2v8ao++w4tv+QRCP0wQdLJvyXHwJQKBgAWTnEzDtz8Kf/z+HzJKxvuwRT7Zi5WLN5/vOk6inH7Efb/pyW9sXD3AWaDQQCeYSsRKpMhUdBru1ZI/tsK8AC+ciIpcyg5i9ApVoaaRjtaAxRNdadNeAvNHYSWstgS+9RrXAg1n3aB2f7+Vmz1n+qQqCxQuuloLYIrkO3EPKTNI',
        'log' => [
            'file' => storage_path('logs/alipay.log'),
            'level' => 'debug',
            'type' => 'single',
        ],
        'http' => [
            'timeout' => 5.0,
            'connect_timeout' => 5.0,
        ],
        'mode' => 'dev',
    ],
    'wechat' => [
        'app_id' => '',
        'mch_id' => '',
        'key' => '',
        'cert_client' => '',
        'cert_key' => '',
        'log' => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
