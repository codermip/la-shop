<?php

return [
    'alipay' => [
        'app_id'         => '2016092600602742',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAtPkU59ZaLRIF4UAs6tSyj1Qav1Unqv4lTIyH/TGrx2LKP1sH7nVF8bwQLffSUln/1VWx27GwSLFXrojE8i1X0KF++K7AhBJQ9avd8I9YANLDtWbmwLcnCnGbjEQbIyknp93GxHWG+kJQYX9dwBfdLmrgoAxkwC+6aLJryferdy3g59dMHJXAvRuHzeuX5q0u9nyvWGnyPbejHWOqbaiXzCrV3cn+DuraeAHVv/Q3rJk1BB6d+03AKX2vlHEmCztYhbcq9WZOaULM4KKPCJ4DN1O5fU+v15CbexKBZZG7wyYPBLWw1ySzn5AeQLf9PW9/8mEmQ2AygMxAvfK/G/Q8aQIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAoIBzlWNiihgVuRo3O2byy9QrALh9q4IoSv7cLA9LfJ0Ey0BCjzkA9AJ+hSNxiNvoB8bd7xfsPPQL9aTwggwEqVFtNNiB9cAiAybA1U+u9uq6pJfvihgo0ZbNtvB8gsmNTjFt2iWBnTxEXTMGIDbhTdkaOw8XNdkFOspRz2JxN1VJffPuTM97Rj9EtfmMhK0OyWPz3H0abAvv2Xu+e13rjPyM9FOCsvZ3ienAS/j9rqsk5f70sg83MP3inM5YiRqwmHTKBtJf46IpmeTjX018XZraRvMECjbPm6TnZTBvMg8JelqIB6pBPY3vSMuNGJp+OHYIQkAd4+8LdD/yOT+4mwIDAQABAoIBAFH56Y8WiODhdk7pjeZAKahjwGcI098ChpPvYgL6+OI3zJgHRTejtNHsaDSWKsntD7DRKM+Sl212dJlNWi4B92uHlFCWeKJNNNIJPBp3LXUd5KBmnckZl9ecv4s9f0rJqOuUIXh3CaGGg6BajDlt7lt1lIkvpvow0xP4/BoBPLQ2g1RdNclR5q8arfkx2TxfEmkCmaRkUwYfrJH18HHpXnxkWgI8uINraoiuXOxCp+7cys4j4rmByPLSUMSN1laBVT6GAxXfDYwnbLwwuR5Cl5tsI84JgZUrhXkqP35FfgrAf+wkOl8WmPEMiyUxn65XzByYurLW1Q/y1IjWj7P40ukCgYEAzOjJH7t53JbOYUJ69Gf30snpDs0Z0OKo/otUTcwwDqDEmx9dtrXHZK60LyjGpTVzAOtv+69uxXLXTfkwSxjJS5fgW4zbnDdNhXDvmfhPA3RBm3r+7qEZEBU4TkinATfsVWZbTFCXN+kZv75twpgQytXDqXe+XBzf6gqCRKwkflcCgYEAyIUp32l/pyq3MBmUME/6PGMry2yZ85+uvmsoqxuwlCtoPQmQmdsHVdIveXw42j9pFwn2vb5F54JNrhuZ/gSRhFRSrWuEEJRU4RI9fxFyO5cQ8ouUBznjqDGOlpVrp1mlj/uFu+KB4MaG6/UgPcHNSD/91onS9L7G9fHR/JyW5V0CgYA5OTEhmXt4rOzJoIUxx+8fgJ+DMKfq+8FyBHrwlvs8uoztPR8wrScX6OoM2XhQHtMVCKrnQKDQpzeVYOepsSxV3f4b0wRpZdBSWa2v8/Ys4sSHpRuYjIixQxvMUOHCp1lqqAELGN6CEKjOMWH5m/nkiznvE6+njbDCbVjf0KsIVQKBgBRcqV7deLAB/24r+sdZJ8EAFQ9oLM33digx+4Q8oJa7Pa+NDBkDi+AkItwESEWpUMOdKGgmLTUQH1FBzkZkMl6srWSc2WFRnrjoQERqAh6Y/YiTsel18G9A8QjLjY4F5XEUioUEwEmR/1twneCHkI/4p48kmb5urQeGkdtED3KlAoGAYqbs5A7ObdjL4AJTTOqVQKVv9WfEZlr8sBnth8IaYHyOlxHAvFwUGTV9H7k/XGFiyOke6uRV42Tt0yoHc8tpFAty2GEEcrz4WGXWaZL6fboOHSA7EADWZy6VuwQ9/2FPlqZNkqVxoBUpUh/cg65GqjzKTTJVxRSR9uRB4Y9D9gQ=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
