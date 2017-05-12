<?php
return [
    'adminEmail' => 'admin@example.com',
    'slack' => [
        'client_id' => '140362440978.141042883270',
        'secret' => '2d7fb1df7a558647f8b6958f75c0f8cd',
        'access_url' => 'https://slack.com/api/oauth.access',
        'redirect_uri' => 'http://boartly.com/site/slack'
    ]
];

/**
 * slack test data
*   login json example
*   {
        "ok": true,
        "access_token": "xoxp-140362440978-141053567223-140452431285-51dbb1e4049098aab45ba3d7a271a8fb",
        "scope": "identify,channels:history,identity.basic",
        "user_id": "U451KGP6K",
        "team_name": "Boartly",
        "team_id": "T44ANCYUS"
    }
 *  event api example
*       {
           "token": "MZWoX1t1D3jhp0nFioXkyYsl",
           "team_id": "T44ANCYUS",
           "api_app_id": "A4518RZ7Y",
           "event": {
               "type": "message",
               "user": "U451KGP6K",
               "text": "test",
               "ts": "1487021004.000003",
               "channel": "C43L3AYJD",
               "event_ts": "1487021004.000003"
           },
           "type": "event_callback",
           "authed_users": [
               "U451KGP6K"
           ]
       }
 */
