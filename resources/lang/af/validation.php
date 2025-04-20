**1. Create the Directory**

First, create a directory for the Afrikaans language files within your `resources/lang` directory:

```
resources/
└── lang/
    └── af/  <-- Create this directory
        ├── auth.php
        ├── pagination.php
        ├── passwords.php
        └── validation.php
        └── messages.php  <-- You can create more files as needed
```

**2. Create the Language Files**

Now, create the following PHP files within the `af` directory and add the corresponding Afrikaans translations.

**resources/lang/af/auth.php**

```php
<?php

return [
    'failed' => 'Hierdie geloofsbriewe stem nie ooreen met ons rekords nie.',
    'password' => 'Die wagwoord is verkeerd.',
    'throttle' => 'Te veel aanmeldpogings. Probeer asseblief weer oor :seconds sekondes.',
    'login' => 'Teken in',
    'register' => 'Registreer',
    'name' => 'Naam',
    'email' => 'E-pos',
    'password' => 'Wagwoord',
    'confirm_password' => 'Bevestig Wagwoord',
    'remember_me' => 'Onthou my',
    'forgot_your_password' => 'Jou wagwoord vergeet?',
    'reset_password' => 'Herstel Wagwoord',
    'send_password_reset_link' => 'Stuur wagwoord herstel skakel',
    'old_password' => 'Ou Wagwoord',
    'new_password' => 'Nuwe Wagwoord',
    'confirm_new_password' => 'Bevestig Nuwe Wagwoord',
    'update_password' => 'Opdateer Wagwoord',
];
```

**resources/lang/af/pagination.php**

```php
<?php

return [
    'previous' => '&laquo; Vorige',
    'next' => 'Volgende &raquo;',
];
```

**resources/lang/af/passwords.php**

```php
<?php

return [
    'reset' => 'Jou wagwoord is herstel!',
    'sent' => 'Ons het jou wagwoord herstel skakel per e-pos gestuur!',
    'throttled' => 'Wag asseblief voordat jy weer probeer.',
    'token' => 'Hierdie wagwoord herstel teken is ongeldig.',
    'user' => "Ons kan nie 'n gebruiker met daardie e-pos adres vind nie.",
];
```

**resources/lang/af/validation.php**

```php
<?php

return [
    'accepted' => 'Die :attribute moet aanvaar word.',
    'accepted_if' => 'Die :attribute moet aanvaar word wanneer :other :value is.',
    'active_url' => 'Die :attribute is nie 'n geldige URL nie.',
    'after' => 'Die :attribute moet 'n datum na :date wees.',
    'after_or_equal' => 'Die :attribute moet 'n datum na of gelyk aan :date wees.',
    'alpha' => 'Die :attribute mag slegs letters bevat.',
    'alpha_dash' => 'Die :attribute mag slegs letters, syfers, strepies en onderstrepe bevat.',
    'alpha_num' => 'Die :attribute mag slegs letters en syfers bevat.',
    'array' => 'Die :attribute moet 'n skikking wees.',
    'before' => 'Die :attribute moet 'n datum voor :date wees.',
    'before_or_equal' => 'Die :attribute moet 'n datum voor of gelyk aan :date wees.',
    'between' => [
        'numeric' => 'Die :attribute moet tussen :min en :max wees.',
        'file' => 'Die :attribute moet tussen :min en :max kilobytes wees.',
        'string' => 'Die :attribute moet tussen :min en :max karakters wees.',
        'array' => 'Die :attribute moet tussen :min en :max items hê.',
    ],
    'boolean' => 'Die :attribute veld moet waar of onwaar wees.',
    'confirmed' => 'Die :attribute bevestiging stem nie ooreen nie.',
    'current_password' => 'Die wagwoord is verkeerd.',
    'date' => 'Die :attribute is nie 'n geldige datum nie.',
    'date_equals' => 'Die :attribute moet 'n datum gelyk aan :date wees.',
    'date_format' => 'Die :attribute stem nie ooreen met die formaat :format nie.',
    'declined' => 'Die :attribute moet geweier word.',
    'declined_if' => 'Die :attribute moet geweier word wanneer :other :value is.',
    'different' => 'Die :attribute en :other moet verskil.',
    'digits' => 'Die :attribute moet :digits syfers wees.',
    'digits_between' => 'Die :attribute moet tussen :min en :max syfers wees.',
    'email' => 'Die :attribute moet 'n geldige e-pos adres wees.',
    'ends_with' => 'Die :attribute moet eindig met een van die volgende: :values.',
    'enum' => 'Die geselekteerde :attribute is ongeldig.',
    'exists' => 'Die geselekteerde :attribute is ongeldig.',
    'file' => 'Die :attribute moet 'n lêer wees.',
    'filled' => 'Die :attribute veld moet 'n waarde hê.',
    'gt' => [
        'numeric' => 'Die :attribute moet groter as :value wees.',
        'file' => 'Die :attribute moet groter as :value kilobytes wees.',
        'string' => 'Die :attribute moet groter as :value karakters wees.',
        'array' => 'Die :attribute moet meer as :value items hê.',
    ],
    'gte' => [
        'numeric' => 'Die :attribute moet groter as of gelyk aan :value wees.',
        'file' => 'Die :attribute moet groter as of gelyk aan :value kilobytes wees.',
        'string' => 'Die :attribute moet groter as of gelyk aan :value karakters wees.',
        'array' => 'Die :attribute moet :value items of meer hê.',
    ],
    'image' => 'Die :attribute moet 'n beeld wees.',
    'in' => 'Die geselekteerde :attribute is ongeldig.',
    'in_array' => 'Die :attribute veld bestaan ​​nie in :other nie.',
    'integer' => 'Die :attribute moet 'n heelgetal wees.',
    'ip' => 'Die :attribute moet 'n geldige IP-adres wees.',
    'ipv4' => 'Die :attribute moet 'n geldige IPv4-adres wees.',
    'ipv6' => 'Die :attribute moet 'n geldige IPv6-adres wees.',
    'json' => 'Die :attribute moet 'n geldige JSON-string wees.',
    'lt' => [
        'numeric' => 'Die :attribute moet minder as :value wees.',
        'file' => 'Die :attribute moet minder as :value kilobytes wees.',
        'string' => 'Die :attribute moet minder as :value karakters wees.',
        'array' => 'Die :attribute moet minder as :value items hê.',
    ],
    'lte' => [
        'numeric' => 'Die :attribute moet minder as of gelyk aan :value wees.',
        'file' => 'Die :attribute moet minder as of gelyk aan :value kilobytes wees.',
        'string' => 'Die :attribute moet minder as of gelyk aan :value karakters wees.',
        'array' => 'Die :attribute moet nie meer as :value items hê nie.',
    ],
    'mac_address' => 'Die :attribute moet 'n geldige MAC-adres wees.',
    'max' => [
        'numeric' => 'Die :attribute mag nie groter as :max wees nie.',
        'file' => 'Die :attribute mag nie groter as :max kilobytes wees nie.',
        'string' => 'Die :attribute mag nie groter as :max karakters wees nie.',
        'array' => 'Die :attribute mag nie meer as :max items hê nie.',
    ],
    'mimes' => 'Die :attribute moet 'n lêer van die tipe :values wees.',
    'mimetypes' => 'Die :attribute moet 'n lêer van die tipe :values wees.',
    'min' => [
        'numeric' => 'Die :attribute moet minstens :min wees.',
        'file' => 'Die :attribute moet minstens :min kilobytes wees.',
        'string' => 'Die :attribute moet minstens :min karakters wees.',
        'array' => 'Die :attribute moet minstens :min items hê.',
    ],
    'multiple_of' => 'Die :attribute moet 'n veelvoud van :value wees.',
    'not_in' => 'Die geselekteerde :attribute is ongeldig.',
    'not_regex' => 'Die :attribute formaat is ongeldig.',
    'nullable' => 'Die :attribute veld kan nulbaar wees.',
    'numeric' => 'Die :attribute moet 'n nommer wees.',
    'password' => 'Die wagwoord is verkeerd.',
    'present' => 'Die :attribute veld moet teenwoordig wees.',
    'prohibited' => 'Die :attribute veld is verbode.',
    'prohibited_if' => 'Die :attribute veld is verbode wanneer :other :value is.',
    'prohibited_unless' => 'Die :attribute veld is verbode tensy :other in :values is.',
    'regex' => 'Die :attribute formaat is ongeldig.',
    'required' => 'Die :attribute veld word vereis.',
    'required_if' => 'Die :attribute veld word vereis wanneer :other :value is.',
    'required_unless' => 'Die :attribute veld word vereis tensy :other in :values is.',
    'required_with' => 'Die :attribute veld word vereis wanneer :values teenwoordig is.',
    'required_with_all' => 'Die :attribute veld word vereis wanneer :values teenwoordig is.',
    'required_without' => 'Die :attribute veld word vereis wanneer :values nie teenwoordig is nie.',
    'required_without_all' => 'Die :attribute veld word vereis wanneer nie een van :values teenwoordig is nie.',
    'same' => 'Die :attribute en :other moet ooreenstem.',
    'size' => [
        'numeric' => 'Die :attribute moet :size wees.',
        'file' => 'Die :attribute moet :size kilobytes wees.',
        'string' => 'Die :attribute moet :size karakters wees.',
        'array' => 'Die :attribute moet :size items bevat.',
    ],
    'starts_with' => 'Die :attribute moet begin met een van die volgende: :values.',
    'string' => 'Die :attribute moet 'n string wees.',
    'timezone' => 'Die :attribute moet 'n geldige sone wees.',
    'unique' => 'Die :attribute is reeds geneem.',
    'uploaded' => 'Die :attribute kon nie oplaai nie.',
    'url' => 'Die :attribute formaat is ongeldig.',
    'uuid' => 'Die :attribute moet 'n geldige UUID wees.',
    'custom' => [
        'email' => [
            'required' => 'Die e-pos adres word vereis.',
            'email' => 'Voer 'n geldige e-pos adres in.',
        ],
        'password' => [
            'required' => 'Die wagwoord word vereis.',
            'min' => 'Die wagwoord moet minstens 8 karakters wees.',
            'confirmed' => 'Die wagwoord bevestiging stem nie ooreen nie.',
        ],
    ],
    'attributes' => [
        'name' => 'naam',
        'email' => 'e-pos',
        'password' => 'wagwoord',
    ],
];
```
