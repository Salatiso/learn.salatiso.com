**1. Create the Directory**

First, create a directory for the Sesotho language files within your `resources/lang` directory:

```
resources/
└── lang/
    └── st/  <-- Create this directory
        ├── auth.php
        ├── pagination.php
        ├── passwords.php
        ├── validation.php
        └── messages.php  <-- You can create more files as needed
```

**2. Create the Language Files**

Now, create the following PHP files within the `st` directory and add the corresponding Sesotho translations.

**resources/lang/st/auth.php**

```php
<?php

return [
    'failed' => 'Ha li nyalelane le mangolo a rona a netefatso.',
    'password' => 'Password ha e nepahetse.',
    'throttle' => 'Liteko tse ngata haholo. Ka kopo leka hape ka mor\'a metsotsoana e :seconds.',
    'login' => 'Kena',
    'register' => 'Ingolise',
    'name' => 'Lebitso',
    'email' => 'Imeile',
    'password' => 'Password',
    'confirm_password' => 'Netefatsa Password',
    'remember_me' => 'Nkhumbule',
    'forgot_your_password' => 'O lebetse password ya hao?',
    'reset_password' => 'Seta Botjha Password',
    'send_password_reset_link' => 'Romela kgokahanyo ya ho seta botjha password',
    'old_password' => 'Password ya Kgale',
    'new_password' => 'Password e Ntjha',
    'confirm_new_password' => 'Netefatsa Password e Ntjha',
    'update_password' => 'Ntlafatsa Password',
];
```

**resources/lang/st/pagination.php**

```php
<?php

return [
    'previous' => '&laquo; E fetileng',
    'next' => 'E latelang &raquo;',
];
```

**resources/lang/st/passwords.php**

```php
<?php

return [
    'reset' => 'Password ya hao e hlomilwe botjha!',
    'sent' => 'Re rometse sehokelo sa ho seta botjha password ya hao ka imeile!',
    'throttled' => 'Ka kopo emela pele o leka hape.',
    'token' => 'Token ena ya ho seta botjha password ha se ya nepa.',
    'user' => "Ha re kgone ho fumana mosebelisi ya nang le aterese ena ya imeile.",
];
```

**resources/lang/st/validation.php**

```php
<?php

return [
    'accepted' => 'The :attribute e tlameha ho amohelwa.',
    'accepted_if' => 'The :attribute e tlameha ho amohelwa ha :other e le :value.',
    'active_url' => 'The :attribute hase URL e sebetsang.',
    'after' => 'The :attribute e tlameha ho ba letsatsi kamora :date.',
    'after_or_equal' => 'The :attribute e tlameha ho ba letsatsi kamora kapa ho lekana le :date.',
    'alpha' => 'The :attribute e ka ba le ditlhaku feela.',
    'alpha_dash' => 'The :attribute e ka ba le ditlhaku, dinomoro, le makhutšoanyane feela.',
    'alpha_num' => 'The :attribute e ka ba le ditlhaku le dinomoro feela.',
    'array' => 'The :attribute e tlameha ho ba lethathamo.',
    'before' => 'The :attribute e tlameha ho ba letsatsi pele ho :date.',
    'before_or_equal' => 'The :attribute e tlameha ho ba letsatsi pele kapa ho lekana le :date.',
    'between' => [
        'numeric' => 'The :attribute e tlameha ho ba pakeng tsa :min le :max.',
        'file' => 'The :attribute e tlameha ho ba pakeng tsa :min le :max kilobytes.',
        'string' => 'The :attribute e tlameha ho ba pakeng tsa :min le :max di-character.',
        'array' => 'The :attribute e tlameha ho ba le pakeng tsa :min le :max dintho.',
    ],
    'boolean' => 'Tšimo ea :attribute e tlameha ho ba nnete kapa leshano.',
    'confirmed' => 'Netefatso ea :attribute ha e tšoane.',
    'current_password' => 'Password ha e nepahetseng.',
    'date' => 'The :attribute hase letsatsi le nepahetseng.',
    'date_equals' => 'The :attribute e tlameha ho ba letsatsi le lekanang le :date.',
    'date_format' => 'The :attribute ha e tsamellane le sebopeho :format.',
    'declined' => 'The :attribute e tlameha ho hanoa.',
    'declined_if' => 'The :attribute e tlameha ho hanoa ha :other e le :value.',
    'different' => 'The :attribute le :other li tlameha ho fapana.',
    'digits' => 'The :attribute e tlameha ho ba lipalo tse :digits.',
    'digits_between' => 'The :attribute e tlameha ho ba pakeng tsa :min le :max lipalo.',
    'email' => 'The :attribute e tlameha ho ba aterese ea imeile e nepahetseng.',
    'ends_with' => 'The :attribute e tlameha ho qala ngokulandelayo: :values.',
    'enum' => 'The :attribute e khethiloeng ha e nepahetseng.',
    'exists' => 'The :attribute e khethiloeng ha e nepahetseng.',
    'file' => 'The :attribute e tlameha ho ba faele.',
    'filled' => 'Tšimo ea :attribute e tlameha ho ba le boleng.',
     'gt' => [
        'numeric' => 'The :attribute e tlameha ho ba kholo ho :value.',
        'file' => 'The :attribute e tlameha ho ba kholo ho :value kilobytes.',
        'string' => 'The :attribute e tlameha ho ba kholo ho :value characters.',
        'array' => 'The :attribute e tlameha ho ba le lintho tse fetang :value.',
    ],
    'gte' => [
        'numeric' => 'The :attribute e tlameha ho ba kholo kapa ho lekana le :value.',
        'file' => 'The :attribute e tlameha ho ba kholo kapa ho lekana le :value kilobytes.',
        'string' => 'The :attribute e tlameha ho ba kholo kapa ho lekana le :value characters.',
        'array' => 'The :attribute e tlameha ho ba le lintho tse ngata kapa tse lekanang le :value.',
    ],
    'image' => 'The :attribute e tlameha ho ba setshwantsho.',
    'in' => 'The :attribute e khethiloeng ha e nepahetseng.',
    'in_array' => 'Insimu ea :attribute ha e yo ho :other.',
    'integer' => 'The :attribute kumele kube inombolo.',
    'ip' => 'The :attribute kumele kube yidilesi ye-IP evumelekile.',
    'ipv4' => 'The :attribute kumele kube yidilesi ye-IPv4 evumelekile.',
    'ipv6' => 'The :attribute kumele kube yidilesi ye-IPv6 evumelekile.',
    'json' => 'The :attribute kumele kube yisinge seJSON esivumelekile.',
    'lt' => [
        'numeric' => 'The :attribute kumele ibe tlase ho :value.',
        'file' => 'The :attribute kumele ibe tlase ho :value kilobytes.',
        'string' => 'The :attribute kumele ibe tlase ho :value abalinganiswa.',
        'array' => 'The :attribute kumele ibe nezinto ezingaphantsi kwe :value.',
    ],
    'lte' => [
        'numeric' => 'The :attribute kumele ibe tlase kapa ilingane no :value.',
        'file' => 'The :attribute kumele ibe tlase kapa ilingane no :value kilobytes.',
        'string' => 'The :attribute kumele ibe tlase kapa ilingane no :value abalinganiswa.',
        'array' => 'The :attribute kumele ibe nezinto ezingaphantsi noma ezilingana ne :value.',
    ],
    'mac_address' => 'The :attribute kumele kube aterese yeMAC evumelekile.',
    'max' => [
        'numeric' => 'The :attribute ayinakuba kholo ho :max.',
        'file' => 'The :attribute ayinakuba kholo ho :max kilobytes.',
        'string' => 'The :attribute ayinakuba kholo ho :max abalinganiswa.',
        'array' => 'The :attribute ayinakuba nezinto ezingaphezu kwe :max.',
    ],
    'mimes' => 'The :attribute kumele kube ifayela lolu hlobo: :values.',
    'mimetypes' => 'The :attribute kumele kube ifayela lolu hlobo: :values.',
    'min' => [
        'numeric' => 'The :attribute kumele ibe ncane kune :min.',
        'file' => 'The :attribute kumele ibe ncane kune :min kilobytes.',
        'string' => 'The :attribute kumele ibe ncane kune :min abalinganiswa.',
        'array' => 'I :attribute kumele ibe nezinto ezingaphezu kwe :min.',
    ],
    'multiple_of' => 'The :attribute kumele ibe isiphindaphindo se :value.',
    'not_in' => 'The :attribute ekhethiweyo ayilungile.',
    'not_regex' => 'Ifomethi ye :attribute ayilungile.',
    'nullable' => 'Insimu ye :attribute ingaba null.',
    'numeric' => 'The :attribute kumele kube inombolo.',
    'password' => 'Iphasiwedi ayilungile.',
    'present' => 'Insimu ye :attribute kumele ibekhona.',
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
    'required_without_all' => 'Insimu ye :attribute iyadingeka lapho kungekho nanye kwezi :values.',
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
