**1. Create the Directory**

First, create a directory for the isiSwazi language files within your `resources/lang` directory:

```
resources/
└── lang/
    └── ss/  <-- Create this directory
        ├── auth.php
        ├── pagination.php
        ├── passwords.php
        ├── validation.php
        └── messages.php  <-- You can create more files as needed
```

**2. Create the Language Files**

Now, create the following PHP files within the `ss` directory and add the corresponding isiSwazi translations.

**resources/lang/ss/auth.php**

```php
<?php

return [
    'failed' => 'Lamagama la awahambelani nemininingwane yetfu.',
    'password' => 'Iphasiwedi ayilungile.',
    'throttle' => 'Ulinge kakhulu. Ngicela uzame godu ngemuva kwa :seconds seconds.',
    'login' => 'Ngena',
    'register' => 'Bhalisa',
    'name' => 'Libito',
    'email' => 'I-imeyili',
    'password' => 'Iphasiwedi',
    'confirm_password' => 'Qinisekisa Iphasiwedi',
    'remember_me' => 'Ngikhumbule',
    'forgot_your_password' => 'Ulibele iphasiwedi yakho?',
    'reset_password' => 'Setha kabusha Iphasiwedi',
    'send_password_reset_link' => 'Tfumela i-linki yekusetha kabusha iphasiwedi',
    'old_password' => 'Iphasiwedi Lendzala',
    'new_password' => 'Iphasiwedi Lensha',
    'confirm_new_password' => 'Qinisekisa Iphasiwedi Lensha',
    'update_password' => 'Gucula Iphasiwedi',
];
```

**resources/lang/ss/pagination.php**

```php
<?php

return [
    'previous' => '&laquo; Lokwedlule',
    'next' => 'Lokulandelako &raquo;',
];
```

**resources/lang/ss/passwords.php**

```php
<?php

return [
    'reset' => 'Iphasiwedi yakho isethwe kabusha!',
    'sent' => 'Sithumele isixhumanisi sokusetha kabusha iphasiwedi yakho nge-imeyili!',
    'throttled' => 'Ngiyacela ulinde ungakazami futhi.',
    'token' => 'Leli thokeni lokusetha kabusha iphasiwedi alilungile.',
    'user' => "Asikakghoni kuthola umsebenzisi onalelo kheli le-imeyili.",
];
```

**resources/lang/ss/validation.php**

```php
<?php

return [
    'accepted' => 'I :attribute kufanele yamukelwe.',
    'accepted_if' => 'I :attribute kufanele yamukelwe lapho i :other iyiyo :value.',
    'active_url' => 'I :attribute ayisi URL evumelekile.',
    'after' => 'I :attribute kufanele kube lusuku olungemuva kwe :date.',
    'after_or_equal' => 'I :attribute kufanele kube lusuku olungemuva noma olulingana ne :date.',
    'alpha' => 'I :attribute ingaba nezinhlamvu zamagama kuphela.',
    'alpha_dash' => 'I :attribute ingaba nezinhlamvu zamagama, izinombolo, nama-dash kuphela.',
    'alpha_num' => 'I :attribute ingaba nezinhlamvu zamagama nezinombolo kuphela.',
    'array' => 'I :attribute kufanele kube uhlu.',
    'before' => 'I :attribute kufanele kube lusuku olungaphambi kwe :date.',
    'before_or_equal' => 'I :attribute kufanele kube lusuku olungaphambi noma olulingana ne :date.',
    'between' => [
        'numeric' => 'I :attribute kufanele ibe phakathi kwe :min na :max.',
        'file' => 'I :attribute kufanele ibe phakathi kwe :min na :max kilobytes.',
        'string' => 'I :attribute kufanele ibe phakathi kwe :min na :max abalinganiswa.',
        'array' => 'I :attribute kufanele ibe nezinto eziphakathi kwe :min na :max.',
    ],
    'boolean' => 'Insimu ye :attribute kufanele kube yiqiniso noma amanga.',
    'confirmed' => 'Ukuqinisekiswa kwe :attribute akuhambisani.',
    'current_password' => 'Iphasiwedi ayilungile.',
    'date' => 'I :attribute akulona uhlobo lwedethi oluvumelekile.',
    'date_equals' => 'I :attribute kufanele kube usuku olulingana no :date.',
    'date_format' => 'I :attribute ayihambelani nefomethi :format.',
    'declined' => 'I :attribute kufanele yenqatshwe.',
    'declined_if' => 'I :attribute kufanele yenqatshwe lapho :other iyiyo :value.',
    'different' => 'I :attribute ne :other kufanele zihluke.',
    'digits' => 'I :attribute kufanele kube amadijithi angu :digits.',
    'digits_between' => 'I :attribute kufanele ibe phakathi kwe :min na :max amadijithi.',
    'email' => 'I :attribute kufanele kube ikheli le-imeyili elivumelekile.',
    'ends_with' => 'I :attribute kufanele iqale ngokulandelayo: :values.',
    'enum' => 'I :attribute ekhethiweyo ayilungile.',
    'exists' => 'I :attribute ekhethiweyo ayilungile.',
    'file' => 'I :attribute kufanele kube ifayela.',
    'filled' => 'Insimu ye :attribute kufanele igcwaliswe.',
     'gt' => [
        'numeric' => 'I :attribute kufanele ibe nkulu kune :value.',
        'file' => 'I :attribute kufanele ibe nkulu kune :value kilobytes.',
        'string' => 'I :attribute kufanele ibe nkulu kune :value abalinganiswa.',
        'array' => 'I :attribute kufanele ibe nezinto ezingaphezu kwe :value.',
    ],
    'gte' => [
        'numeric' => 'I :attribute kufanele ibe nkulu noma ilingane ne :value.',
        'file' => 'I :attribute kufanele ibe nkulu noma ilingane ne :value kilobytes.',
        'string' => 'I :attribute kufanele ibe nkulu noma ilingane no :value abalinganiswa.',
        'array' => 'I :attribute kufanele ibe nezinto ezingaphezu noma ezilingana ne :value.',
    ],
    'image' => 'I :attribute kufanele kube isithombe.',
    'in' => 'I :attribute ekhethiweyo ayilungile.',
    'in_array' => 'Insimu ye :attribute ayikho ku :other.',
    'integer' => 'I :attribute kufanele kube inombolo.',
    'ip' => 'I :attribute kufanele kube ikheli le-IP elivumelekile.',
    'ipv4' => 'I :attribute kufanele kube ikheli le-IPv4 elivumelekile.',
    'ipv6' => 'I :attribute kufanele kube ikheli le-IPv6 elivumelekile.',
    'json' => 'I :attribute kufanele kube yisinge seJSON esivumelekile.',
    'lt' => [
        'numeric' => 'I :attribute kufanele ibe ngaphansi kwe :value.',
        'file' => 'I :attribute kufanele ibe ngaphansi kwe :value kilobytes.',
        'string' => 'I :attribute kufanele ibe ngaphansi ko :value abalinganiswa.',
        'array' => 'I :attribute kufanele ibe nezinto ezingaphansi kwe :value.',
    ],
    'lte' => [
        'numeric' => 'I :attribute kufanele ibe ngaphansi noma ilingane no :value.',
        'file' => 'I :attribute kufanele ibe ngaphansi noma ilingane ne :value kilobytes.',
        'string' => 'I :attribute kufanele ibe ngaphansi noma ilingane no :value abalinganiswa.',
        'array' => 'I :attribute kufanele ibe nezinto ezingaphansi noma ezilingana ne :value.',
    ],
    'mac_address' => 'I :attribute kufanele kube ikheli leMAC elivumelekile.',
    'max' => [
        'numeric' => 'I :attribute ayinakuba nkulu kune :max.',
        'file' => 'I :attribute ayinakuba nkulu kune :max kilobytes.',
        'string' => 'I :attribute ayinakuba nkulu kune :max abalinganiswa.',
        'array' => 'I :attribute ayinakuba nezinto ezingaphezu kwe :max.',
    ],
    'mimes' => 'I :attribute kufanele kube ifayela lohlobo: :values.',
    'mimetypes' => 'I :attribute kufanele kube ifayela lohlobo: :values.',
    'min' => [
        'numeric' => 'I :attribute kufanele ibe ncane kune :min.',
        'file' => 'I :attribute kufanele ibe ncane kune :min kilobytes.',
        'string' => 'I :attribute kufanele ibe ncane kune :min abalinganiswa.',
        'array' => 'I :attribute kufanele ibe nezinto ezingaphezu kwe :min.',
    ],
    'multiple_of' => 'I :attribute kufanele kube isiphindaphindo se :value.',
    'not_in' => 'I :attribute ekhethiweyo ayilungile.',
    'not_regex' => 'Ifomethi ye :attribute ayilungile.',
    'nullable' => 'Insimu ye :attribute ingaba null.',
    'numeric' => 'I :attribute kufanele kube inombolo.',
    'password' => 'Iphasiwedi ayilungile.',
    'present' => 'Insimu ye :attribute kufanele ibekhona.',
    'prohibited' => 'Insimu ye :attribute ayivunyelwe.',
    'prohibited_if' => 'Insimu ye :attribute ayivunyelwe lapho i :other iyiyo :value.',
    'prohibited_unless' => 'Insimu ye :attribute ayivunyelwe ngaphandle kokuthi i :other iku :values.',
    'regex' => 'Ifomethi ye :attribute ayilungile.',
    'required' => 'Insimu ye :attribute iyadingeka.',
    'required_if' => 'Insimu ye :attribute iyadingeka lapho i :other iyiyo :value.',
    'required_unless' => 'Insimu ye :attribute iyadingeka ngaphandle kokuthi i :other iku :values.',
    'required_with' => 'Insimu ye :attribute iyadingeka lapho kukhona i :values.',
    'required_with_all' => 'Insimu ye :attribute iyadingeka lapho kukhona i :values.',
    'required_without' => 'Insimu ye :attribute iyadingeka lapho kungekho i :values.',
    'required_without_all' => 'Insimu ye :attribute iyadingeka lapho kungekho nanye ya :values.',
    'same' => 'I :attribute ne :other kufanele zifane.',
    'size' => [
        'numeric' => 'I :attribute kufanele ibe ngu :size.',
        'file' => 'I :attribute kufanele ibe ngu :size kilobytes.',
        'string' => 'I :attribute kufanele ibe ngu :size abalinganiswa.',
        'array' => 'I :attribute kufanele ibe nezinto ezingama :size.',
    ],
    'starts_with' => 'I :attribute kufanele iqale ngokulandelayo: :values.',
    'string' => 'I :attribute kufanele kube uchungechunge.',
    'timezone' => 'I :attribute kufanele ibe yindawo yesikhathi esebenzayo.',
    'unique' => 'I :attribute isivele ithathiwe.',
    'uploaded' => 'I :attribute yehlulekile ukulayisha.',
    'url' => 'Ifomethi ye :attribute ayilungile.',
    'uuid' => 'I :attribute kufanele kube yi-UUID evumelekile.',
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
