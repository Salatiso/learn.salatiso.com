**1. Create the Directory**

First, create a directory for the isiTsonga language files within your `resources/lang` directory:

```
resources/
└── lang/
    └── ts/  <-- Create this directory
        ├── auth.php
        ├── pagination.php
        ├── passwords.php
        ├── validation.php
        └── messages.php  <-- You can create more files as needed
```

**2. Create the Language Files**

Now, create the following PHP files within the `ts` directory and add the corresponding isiTsonga translations.

**resources/lang/ts/auth.php**

```php
<?php

return [
    'failed' => 'Leswi a swi yelanisi na vumbhoni bya hina.',
    'password' => 'Password a yi lulamanga.',
    'throttle' => 'U ringete ngopfu. Ndza kombela u ringeta nakambe endzhaku ka :seconds seconds.',
    'login' => 'Nghena',
    'register' => 'Tsalisa',
    'name' => 'Vito',
    'email' => 'Imeili',
    'password' => 'Password',
    'confirm_password' => 'Qinisekisa Password',
    'remember_me' => 'Ndzi tsundzuke',
    'forgot_your_password' => 'U rivale password ya wena?',
    'reset_password' => 'Setha Password Nakambe',
    'send_password_reset_link' => 'Rhumela link yo setha password nakambe',
    'old_password' => 'Password ya Khale',
    'new_password' => 'Password Leyintshwa',
    'confirm_new_password' => 'Qinisekisa Password Leyintshwa',
    'update_password' => 'Opdate Password',
];
```

**resources/lang/ts/pagination.php**

```php
<?php

return [
    'previous' => '&laquo; Leswi hundzeke',
    'next' => 'Leswi landzelaka &raquo;',
];
```

**resources/lang/ts/passwords.php**

```php
<?php

return [
    'reset' => 'Password ya wena yi sethiwe nakambe!',
    'sent' => 'Hi rhume link yo setha password ya wena nakambe hi imeili!',
    'throttled' => 'Ndzapfa u yimela kambe u nga si ringeta nakambe.',
    'token' => 'Thokheni leyi ya ku setha password nakambe a hi ya vhukuma.',
    'user' => "A hi koti ku kuma mutirhisi loyi a nga na adiresi leyi ya imeili.",
];
```

**resources/lang/ts/validation.php**

```php
<?php

return [
    'accepted' => 'The :attribute yi fanele ku amukelwa.',
    'accepted_if' => 'The :attribute yi fanele ku amukelwa loko :other yi ri :value.',
    'active_url' => 'The :attribute a hi URL leyinene.',
    'after' => 'The :attribute yi fanele ku va siku endzhaku ka :date.',
    'after_or_equal' => 'The :attribute yi fanele ku va siku endzhaku kumbe ku ringana na :date.',
    'alpha' => 'The :attribute yi nga ha va na maletere ntsena.',
    'alpha_dash' => 'The :attribute yi nga ha va na maletere, tinomboro, na swi dash ntsena.',
    'alpha_num' => 'The :attribute yi nga ha va na maletere na tinomboro ntsena.',
    'array' => 'The :attribute yi fanele ku va nxaxamelo.',
    'before' => 'The :attribute yi fanele ku va siku emahlweni ka :date.',
    'before_or_equal' => 'The :attribute yi fanele ku va siku emahlweni kumbe ku ringana na :date.',
    'between' => [
        'numeric' => 'The :attribute yi fanele ku va exikarhi ka :min na :max.',
        'file' => 'The :attribute yi fanele ku va exikarhi ka :min na :max kilobytes.',
        'string' => 'The :attribute yi fanele ku va exikarhi ka :min na :max characters.',
        'array' => 'The :attribute yi fanele ku va na swilo swa le xikarhi ka :min na :max.',
    ],
    'boolean' => 'The :attribute field yi fanele ku va ntiyiso kumbe mavunwa.',
    'confirmed' => 'The :attribute confirmation ayi fambelani.',
    'current_password' => 'Password ayi lulamanga.',
    'date' => 'The :attribute a hi muxaka wa siku lowu faneleke.',
    'date_equals' => 'The :attribute yi fanele ku va siku leri ringanaka na :date.',
    'date_format' => 'The :attribute ayi fambelani na endlelo :format.',
    'declined' => 'The :attribute yi fanele ku aliwa.',
    'declined_if' => 'The :attribute yi fanele ku aliwa loko :other yi ri :value.',
    'different' => 'The :attribute na :other swi fanele ku hambana.',
    'digits' => 'The :attribute yi fanele ku va tidijiti ta :digits.',
    'digits_between' => 'The :attribute yi fanele ku va exikarhi ka :min na :max tidijiti.',
    'email' => 'The :attribute yi fanele ku va adiresi ya imeili leyinene.',
    'ends_with' => 'The :attribute yi fanele ku hela hi xin\'wana xa leswi landzelaka: :values.',
    'enum' => 'The :attribute leyi hlawuriweke a yi lulamanga.',
    'exists' => 'The :attribute leyi hlawuriweke a yi lulamanga.',
    'file' => 'The :attribute yi fanele ku va fayela.',
    'filled' => 'The :attribute field yi fanele ku tata.',
     'gt' => [
        'numeric' => 'The :attribute yi fanele ku va yikulu ka :value.',
        'file' => 'The :attribute yi fanele ku va yikulu ka :value kilobytes.',
        'string' => 'The :attribute yi fanele ku va yikulu ka :value characters.',
        'array' => 'The :attribute yi fanele ku va na swilo swo tala ku tlula :value.',
    ],
    'gte' => [
        'numeric' => 'The :attribute yi fanele ku ba yikulu kumbe ku ringana na :value.',
        'file' => 'The :attribute yi fanele ku ba yikulu kumbe ku ringana na :value kilobytes.',
        'string' => 'The :attribute yi fanele ku ba yikulu kumbe ku ringana na :value characters.',
        'array' => 'The :attribute yi fanele ku va na swilo swo tala kumbe leswi ringanaka na :value.',
    ],
    'image' => 'The :attribute yi fanele ku va xifaniso.',
    'in' => 'The :attribute leyi hlawuriweke a yi lulamanga.',
    'in_array' => 'The :attribute field ayi kona eka :other.',
    'integer' => 'The :attribute kumele kuva integer.',
    'ip' => 'The :attribute kumele kuva adiresi ya IP leyinene.',
    'ipv4' => 'The :attribute kumele kuva adiresi ya IPv4 leyinene.',
    'ipv6' => 'The :attribute kumele kuva adiresi ya IPv6 leyinene.',
    'json' => 'The :attribute kumele kuva string ya JSON leyinene.',
    'lt' => [
        'numeric' => 'The :attribute kumele kuva yitsongo kune :value.',
        'file' => 'The :attribute kumele kuva yitsongo kune :value kilobytes.',
        'string' => 'The :attribute kumele kuva yitsongo kune :value characters.',
        'array' => 'The :attribute kumele kuva na swilo switsongo kune :value.',
    ],
    'lte' => [
        'numeric' => 'The :attribute kumele kuva yitsongo kumbe ku lingana na :value.',
        'file' => 'The :attribute kumele kuva yitsongo kumbe ku lingana na :value kilobytes.',
        'string' => 'The :attribute kumele kuva yitsongo kumbe ku lingana na :value characters.',
        'array' => 'The :attribute kumele kuva na swilo switsongo kumbe leswi linganaka na :value.',
    ],
    'mac_address' => 'The :attribute kumele kuva adiresi ya MAC leyinene.',
    'max' => [
        'numeric' => 'The :attribute ayi nge vuyi yi ku yi kulukumba kune :max.',
        'file' => 'The :attribute ayi nge vuyi yi ku yi kulukumba kune :max kilobytes.',
        'string' => 'The :attribute ayi nge vuyi yi ku yi kulukumba kune :max characters.',
        'array' => 'The :attribute ayi nge vuyi yi ku yi na swilo swo tala ku tlula :max.',
    ],
    'mimes' => 'The :attribute kumele kuva fayela la mofuta: :values.',
    'mimetypes' => 'The :attribute kumele kube fayela la mofuta: :values.',
    'min' => [
        'numeric' => 'The :attribute kumele ibe nyane kune :min.',
        'file' => 'The :attribute kumele ibe ncane kune :min kilobytes.',
        'string' => 'The :attribute kumele ibe ncane kune :min abalinganiswa.',
        'array' => 'I :attribute kumele ibe nezinto ezingaphezu kwe :min.',
    ],
    'multiple_of' => 'The :attribute kumele ibe ngokuphindhaphinda ka :value.',
    'not_in' => 'The :attribute ekhethiweyo a ili kuhle.',
    'not_regex' => 'Ifomethi ya :attribute ayilungile.',
    'nullable' => 'Insimu ya :attribute ingaba null.',
    'numeric' => 'The :attribute kumele kube inombolo.',
    'password' => 'Iphasiwedi ayilungile.',
    'present' => 'Insimu ya :attribute kumele ibekhona.',
    'prohibited' => 'Insimu ya :attribute ayivunyelwi.',
    'prohibited_if' => 'Insimu ya :attribute ayivunyelwi lapho i :other iyiyo :value.',
    'prohibited_unless' => 'Insimu ya :attribute ayivunyelwi ngaphandle kokuthi i :other iku :values.',
    'regex' => 'Ifomethi ya :attribute ayilungile.',
    'required' => 'Insimu ya :attribute iyadingeka.',
    'required_if' => 'Insimu ya :attribute iyadingeka lapho i :other iyiyo :value.',
    'required_unless' => 'Insimu ya :attribute iyadingeka ngaphandle kokuthi i :other iku :values.',
    'required_with' => 'Insimu ya :attribute iyadingeka lapho kukhona i :values.',
    'required_with_all' => 'Insimu ya :attribute iyadingeka lapho kukhona i :values.',
    'required_without' => 'Insimu ya :attribute iyadingeka lapho kungekho i :values.',
    'required_without_all' => 'Insimu ya :attribute iyadingeka lapho kungekho nanye ya :values.',
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
