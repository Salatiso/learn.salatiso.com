**1. Create the Directory**

First, create a directory for the isiNdebele language files within your `resources/lang` directory:

```
resources/
└── lang/
    └── nr/  <-- Create this directory
        ├── auth.php
        ├── pagination.php
        ├── passwords.php
        ├── validation.php
        └── messages.php  <-- You can create more files as needed
```

**2. Create the Language Files**

Now, create the following PHP files within the `nr` directory and add the corresponding isiNdebele translations.

**resources/lang/nr/auth.php**

```php
<?php

return [
    'failed' => 'Amagama lawo awahambisani nemininingwane esinayo.',
    'password' => 'Iphasiwedi ayilunganga.',
    'throttle' => 'Ulinge kanengi. Ngiyacela ukuthi uzame godu ngemva kwe :seconds seconds.',
    'login' => 'Ngena',
    'register' => 'Bhalisa',
    'name' => 'Ibizo',
    'email' => 'I-imeyili',
    'password' => 'Iphasiwedi',
    'confirm_password' => 'Qinisekisa Iphasiwedi',
    'remember_me' => 'Ngikhumbule',
    'forgot_your_password' => 'Ulibele iphasiwedi yakho?',
    'reset_password' => 'Setha Iphasiwedi Godu',
    'send_password_reset_link' => 'Thumela i-linki yokusetha iphasiwedi godu',
    'old_password' => 'Iphasiwedi Elidala',
    'new_password' => 'Iphasiwedi Elitjha',
    'confirm_new_password' => 'Qinisekisa Iphasiwedi Elitjha',
    'update_password' => 'Gadzirisa Iphasiwedi',
];
```

**resources/lang/nr/pagination.php**

```php
<?php

return [
    'previous' => '&laquo; Okudluleko',
    'next' => 'Okulandelako &raquo;',
];
```

**resources/lang/nr/passwords.php**

```php
<?php

return [
    'reset' => 'Iphasiwedi yakho isethwe godu!',
    'sent' => 'Sithumele i-linki yokusetha iphasiwedi yakho godu nge-imeyili!',
    'throttled' => 'Ngiyacela ulinde ungakazami godu.',
    'token' => 'Ithokheni leli lokusetha iphasiwedi godu ali lona.',
    'user' => "Asikghoni ukuthola umsebenzisi onekheli leli le-imeyili.",
];
```

**resources/lang/nr/validation.php**

```php
<?php

return [
    'accepted' => 'I :attribute kumele yamukelwe.',
    'accepted_if' => 'I :attribute kumele yamukelwe lapho i :other iyiyo :value.',
    'active_url' => 'I :attribute ayisi URL evumelekile.',
    'after' => 'I :attribute kumele kube lusuku olungemva kwe :date.',
    'after_or_equal' => 'I :attribute kumele kube lusuku olungemva kumbe olulingana ne :date.',
    'alpha' => 'I :attribute ingaba namahlamvu kuphela.',
    'alpha_dash' => 'I :attribute ingaba namahlamvu, iinomboro, nama dash kuphela.',
    'alpha_num' => 'I :attribute ingaba namahlamvu neenomboro kuphela.',
    'array' => 'I :attribute kumele kube lilunga.',
    'before' => 'I :attribute kumele kube lusuku olungaphambi kwe :date.',
    'before_or_equal' => 'I :attribute kumele kube lusuku olungaphambi kumbe olulingana ne :date.',
    'between' => [
        'numeric' => 'I :attribute kumele ibe phakathi kwe :min na :max.',
        'file' => 'I :attribute kumele ibe phakathi kwe :min na :max kilobytes.',
        'string' => 'I :attribute kumele ibe phakathi kwe :min na :max abalinganiswa.',
        'array' => 'I :attribute kumele ibe nezinto eziphakathi kwe :min na :max.',
    ],
    'boolean' => 'Umkhakha we :attribute kumele ube yiqiniso kumbe amanga.',
    'confirmed' => 'Isiqinisekiso se :attribute asihambisani.',
    'current_password' => 'Iphasiwedi ayilungile.',
    'date' => 'I :attribute alisilo uhlobo lwedethi oluvumelekile.',
    'date_equals' => 'I :attribute kumele kube lusuku olulingana no :date.',
    'date_format' => 'I :attribute ayihambelani nefomethi :format.',
    'declined' => 'I :attribute kumele yenqatshwe.',
    'declined_if' => 'I :attribute kumele yenqatshwe lapho :other iyiyo :value.',
    'different' => 'I :attribute ne :other kumele zihluke.',
    'digits' => 'I :attribute kumele kube amadijithi angu :digits.',
    'digits_between' => 'I :attribute kumele ibe phakathi kwe :min na :max amadijithi.',
    'email' => 'I :attribute kumele kube ikheli le-imeyili elivumelekile.',
    'ends_with' => 'I :attribute kumele iphele ngokulandelayo: :values.',
    'enum' => 'I :attribute ekhethiweyo ayilungile.',
    'exists' => 'I :attribute ekhethiweyo ayilungile.',
    'file' => 'I :attribute kumele kube ifayela.',
    'filled' => 'Insimu ye :attribute kumele igcwaliswe.',
     'gt' => [
        'numeric' => 'I :attribute kumele ibe nkulu kune :value.',
        'file' => 'I :attribute kumele ibe nkulu kune :value kilobytes.',
        'string' => 'I :attribute kumele ibe nkulu kune :value abalinganiswa.',
        'array' => 'I :attribute kumele ibe nezinto ezingaphezu kwe :value.',
    ],
    'gte' => [
        'numeric' => 'I :attribute kumele ibe nkulu kumbe ilingane ne :value.',
        'file' => 'I :attribute kumele ibe nkulu kumbe ilingane ne :value kilobytes.',
        'string' => 'I :attribute kumele ibe nkulu kumbe ilingane no :value abalinganiswa.',
        'array' => 'I :attribute kumele ibe nezinto ezingaphezu kumbe ezilingana ne :value.',
    ],
    'image' => 'I :attribute kumele kube isithombe.',
    'in' => 'I :attribute ekhethiweyo ayilungile.',
    'in_array' => 'Insimu ye :attribute ayikho ku :other.',
    'integer' => 'I :attribute kumele kube yinomboro.',
    'ip' => 'I :attribute kumele kube ikheli le-IP elivumelekile.',
    'ipv4' => 'I :attribute kumele kube ikheli le-IPv4 elivumelekile.',
    'ipv6' => 'I :attribute kumele kube ikheli le-IPv6 elivumelekile.',
    'json' => 'I :attribute kumele kube yisinge seJSON esivumelekile.',
    'lt' => [
        'numeric' => 'I :attribute kumele ibe ngaphansi kwe :value.',
        'file' => 'I :attribute kumele ibe ngaphansi kwe :value kilobytes.',
        'string' => 'I :attribute kumele ibe ngaphansi ko :value abalinganiswa.',
        'array' => 'I :attribute kumele ibe nezinto ezingaphansi kwe :value.',
    ],
    'lte' => [
        'numeric' => 'I :attribute kumele ibe ngaphansi kumbe ilingane no :value.',
        'file' => 'I :attribute kumele ibe ngaphansi kumbe ilingane no :value kilobytes.',
        'string' => 'I :attribute kumele ibe ngaphansi kumbe ilingane no :value abalinganiswa.',
        'array' => 'I :attribute kumele ibe nezinto ezingaphansi kumbe ezilingana ne :value.',
    ],
    'mac_address' => 'I :attribute kumele kube ikheli leMAC elivumelekile.',
    'max' => [
        'numeric' => 'I :attribute ayikwazi ukuba nkulu kune :max.',
        'file' => 'I :attribute ayikwazi ukuba nkulu kune :max kilobytes.',
        'string' => 'I :attribute ayikwazi ukuba nkulu kune :max abalinganiswa.',
        'array' => 'I :attribute ayikwazi ukuba nezinto ezingaphezu kwe :max.',
    ],
    'mimes' => 'I :attribute kumele kube ifayela lohlobo: :values.',
    'mimetypes' => 'I :attribute kumele kube ifayela lohlobo: :values.',
    'min' => [
        'numeric' => 'I :attribute kumele ibe ncane kune :min.',
        'file' => 'I :attribute kumele ibe ncane kune :min kilobytes.',
        'string' => 'I :attribute kumele ibe ncane kune :min abalinganiswa.',
        'array' => 'I :attribute kumele ibe nezinto ezingaphezu kwe :min.',
    ],
    'multiple_of' => 'I :attribute kumele kube isiphindaphindo se :value.',
    'not_in' => 'I :attribute ekhethiweyo ayilungile.',
    'not_regex' => 'Ifomethi ye :attribute ayilungile.',
    'nullable' => 'Insimu ye :attribute ingaba null.',
    'numeric' => 'I :attribute kumele kube inombolo.',
    'password' => 'Iphasiwedi ayilungile.',
    'present' => 'Insimu ye :attribute kumele ibekhona.',
    'prohibited' => 'Insimu ye :attribute ayivunyelwe.',
    'prohibited_if' => 'Insimu ye :attribute ayivunyelwi lapho i :other iyiyo :value.',
    'prohibited_unless' => 'Insimu ye :attribute ayivunyelwi ngaphandle kokuthi i :other iku :values.',
    'regex' => 'Ifomethi ye :attribute ayilungile.',
    'required' => 'Insimu ye :attribute iyadingeka.',
    'required_if' => 'Insimu ye :attribute iyadingeka lapho i :other iyiyo :value.',
    'required_unless' => 'Insimu ye :attribute iyadingeka ngaphandle kokuthi i :other iku :values.',
    'required_with' => 'Insimu ye :attribute iyadingeka lapho kukhona i :values.',
    'required_with_all' => 'Insimu ye :attribute iyadingeka lapho kukhona i :values.',
    'required_without' => 'Insimu ye :attribute iyadingeka lapho kungekho i :values.',
    'required_without_all' => 'Insimu ye :attribute iyadingeka lapho kungekho nanye ya :values.',
    'same' => 'I :attribute ne :other kumele zifane.',
    'size' => [
        'numeric' => 'I :attribute kumele ibe ngu :size.',
        'file' => 'I :attribute kumele ibe ngu :size kilobytes.',
        'string' => 'I :attribute kumele ibe ngu :size abalinganiswa.',
        'array' => 'I :attribute kumele ibe nezinto ezingama :size.',
    ],
    'starts_with' => 'I :attribute kumele iqale ngokulandelayo: :values.',
    'string' => 'I :attribute kumele kube uchungechunge.',
    'timezone' => 'I :attribute kumele ibe yindawo yesikhathi esebenzayo.',
    'unique' => 'I :attribute isivele ithathiwe.',
    'uploaded' => 'I :attribute yehlulekile ukulayisha.',
    'url' => 'Ifomethi ye :attribute ayilungile.',
    'uuid' => 'I :attribute kumele kube yi-UUID evumelekile.',
    'custom' => [
        'email' => [
            'required' => 'Ikheli le-imeyili liyadingeka.',
            'email' => 'Faka ikheli le-imeyili elivumelekile.',
        ],
        'password' => [
            'required' => 'Iphasiwedi iyadingeka.',
            'min' => 'Iphasiwedi kumele ibe nobuncane bezinhlamvu eziyi-8.',
            'confirmed' => 'Iphasiwedi ayihambisani nokuqinisekiswa.',
        ],
    ],
    'attributes' => [
        'name' => 'igama',
        'email' => 'i-imeyili',
        'password' => 'iphasiwedi',
    ],
];
```
