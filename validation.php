<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute harus disetujui.',
    'accepted_if' => ':attribute harus disetujui ketika :other berisi :value.',
    'active_url' => ':attribute URL tidak valid.',
    'after' => ':attribute harus berupa tanggal setelah :date.',
    'after_or_equal' => ':attribute harus berupa tanggal setelah atau sama dengan :date.',
    'alpha' => ':attribute hanya dapat berupa alphabet atau huruf.',
    'alpha_dash' => ':attribute hanya dapat berupa alphabet, angka, tanda hubung dan garis bawah.',
    'alpha_num' => ':attribute hanya dapat berupa alphabet dan angka.',
    'array' => ':attribute hanya dapat berupa array.',
    'ascii' => ':attribute hanya berisi karakter dan simbol alfanumerik tunggal.',
    'before' => ':attribute hanya dapat berupa tanggal sebelum :date.',
    'before_or_equal' => ':attribute harus berupa tanggal sebelum atau sama dengan :date.',
    'between' => [
        'array' => ':attribute harus memiliki variabel diantara :min hingga :max.',
        'file' => ':attribute ukurannya harus diantara :min hingga :max kilobytes.',
        'numeric' => ':attribute harus dalam diantara :min hingga :max.',
        'string' => ':attribute jumlah karakternya harus diantara :min hingga :max.',
    ],
    'boolean' => ':attribute isinya harus berupa pilihan benar atau salah.',
    'can' => ':attribute berisi isi yang tidak terautentikasi.',
    'confirmed' => 'konfirmasi :attribute tidak cocok.',
    'current_password' => 'password salah.',
    'date' => ':attribute tidak berupa tanggal yang valid.',
    'date_equals' => ':attribute harus berupa tanggal yang sama dengan :date.',
    'date_format' => ':attribute tidak cocok dengan format :format.',
    'decimal' => ':attribute harus memiliki :decimal desimal.',
    'declined' => ':attribute harus ditolak.',
    'declined_if' => ':attribute harus ditolak ketika :other berisi :value.',
    'different' => ':attribute dan :other harus berbeda.',
    'digits' => ':attribute harus memiliki :digits jumlah karakter.',
    'digits_between' => ':attribute harus memiliki jumlah karakter diantara :min hingga :max.',
    'dimensions' => ':attribute dimensi gambarnya tidak valid.',
    'distinct' => ':attribute terdapat isi yang terduplikat.',
    'doesnt_end_with' => ':attribute tidak boleh diakhiri dengan: :values.',
    'doesnt_start_with' => ':attribute tidak boleh diawali dengan: :values.',
    'email' => ':attribute harus berupa email yang valid.',
    'ends_with' => ':attribute harus berakhiran dengan: :values.',
    'enum' => ':attribute yang terpilih tidak valid.',
    'exists' => ':attribute yang dipilih tidak valid.',
    'file' => ':attribute harus berupa file.',
    'filled' => ':attribute harus terisi.',
    'gt' => [
        'array' => ':attribute harus lebih dari :value variabel.',
        'file' => ':attribute harus lebih dari :value kilobytes.',
        'numeric' => ':attribute harus lebih dari :value.',
        'string' => ':attribute harus lebih :value karakter.',
    ],
    'gte' => [
        'array' => ':attribute harus memiliki :value variable atau lebih.',
        'file' => ':attribute harus lebih atau sama dengan :value kilobytes.',
        'numeric' => ':attribute harus lebih atau sama dengan :value.',
        'string' => ':attribute harus lebih atau berjumlah :value karakter.',
    ],
    'image' => ':attribute harus berupa gambar.',
    'in' => ':attribute yang terpilih tidak valid.',
    'in_array' => ':attribute tidak terdapat pada :other.',
    'integer' => ':attribute harus berupa angka.',
    'ip' => ':attribute harus berupa alamat IP yang valid.',
    'ipv4' => ':attribute harus berupa alamat IPv4 yang valid.',
    'ipv6' => ':attribute harus berupa alamat IPv6 yang valid.',
    'json' => ':attribute harus berupa JSON yang valid.',
    'lowercase' => ':attribute harus berupa huruf kecil.',
    'lt' => [
        'array' => ':attribute harus kurang dari :value variabel.',
        'file' => ':attribute harus kurang dari :value kilobytes.',
        'numeric' => ':attribute harus kurang dari :value.',
        'string' => ':attribute harus kurang dari :value karakter.',
    ],
    'lte' => [
        'array' => ':attribute harus kurang dari :value variabel.',
        'file' => ':attribute harus kurang dari atau sama dengan :value kilobytes.',
        'numeric' => ':attribute harus kurang dari atau sama dengan :value.',
        'string' => ':attribute harus kurang dari atau sama dengan :value karakter.',
    ],
    'mac_address' => ':attribute harus berisi alamat MAC yang valid.',
    'max' => [
        'array' => ':attribute harus kurang dari than :max variabel.',
        'file' => ':attribute harus kurang dari :max kilobytes.',
        'numeric' => ':attribute harus kurang dari :max.',
        'string' => ':attribute harus kurang dari :max karakter.',
    ],
    'max_digits' => ':attribute tidak boleh lebih dari :max digit.',
    'mimes' => ':attribute harus memiliki ektensi file: :values.',
    'mimetypes' => ':attribute harus memiliki ektensi file: :values.',
    'min' => [
        'array' => ':attribute minimal harus :min variabel.',
        'file' => ':attribute minimal harus :min kilobytes.',
        'numeric' => ':attribute minimal harus :min.',
        'string' => ':attribute minimal harus :min karakter.',
    ],
    'min_digits' => ':attribute harus berisi minimal :min digit.',
    'missing' => ':attribute harus dikosongi.',
    'missing_if' => ':attribute harus kosong ketika :other berisi :value.',
    'missing_unless' => ':attribute harus kosong kecuali :other berisi :value.',
    'missing_with' => ':attribute harus kosong ketika :values terisi.',
    'missing_with_all' => ':attribute harus kosong ketika :values terisi.',
    'multiple_of' => ':attribute harus berisi kelipatan dari :value.',
    'not_in' => ':attribute yang terpilih tidak valid.',
    'not_regex' => ':attribute format tidak valid.',
    'numeric' => ':attribute harus berupa angka.',
    'password' => [
        'letters' => ':attribute harus berisi paling sedikit satu huruf.',
        'mixed' => ':attribute harus berisi paling sedikit satu huruf besar dan satu huruf kecil.',
        'numbers' => ':attribute harus berisi paling sedikit satu angka.',
        'symbols' => ':attribute harus berisi paling sedikit satu simbol.',
        'uncompromised' => ':attribute yang diberikan muncul di kebocoran data. Pilih :attribute yang berbeda.',
    ],
    'present' => ':attribute harus ada.',
    'prohibited' => ':attribute dilarang diisi.',
    'prohibited_if' => ':attribute dilarang diisi ketika :other berisi :value.',
    'prohibited_unless' => ':attribute dilarang terisi kecuali :other berisi :values.',
    'prohibits' => ':attribute melarang :other terisi.',
    'regex' => ':attribute format tidak valid.',
    'required' => ':attribute harus diisi.',
    'required_array_keys' => ':attribute harus berisi entri untuk: :values.',
    'required_if' => ':attribute harus diisi ketika :other berisi :value.',
    'required_if_accepted' => ':attribute dibutuhkan ketika :other disetujui.',
    'required_unless' => ':attribute harus diisi kecuali :other terdapat pada :values.',
    'required_with' => ':attribute harus diisi ketika :values ada.',
    'required_with_all' => ':attribute harus diisi ketika :values ada.',
    'required_without' => ':attribute harus diisi ketika :values tidak ada.',
    'required_without_all' => ':attribute harus diisi ketika tidak terdapat :values.',
    'same' => ':attribute dan :other harus sama.',
    'size' => [
        'numeric' => ':attribute harus :size.',
        'file' => ':attribute harus :size kilobytes.',
        'string' => ':attribute harus :size karakter.',
        'array' => ':attribute harus terdapat :size variabel.',
    ],
    'starts_with' => ':attribute harus dimulai dengan: :values.',
    'string' => ':attribute harus berupa teks.',
    'timezone' => ':attribute harus berupa zona yang valid.',
    'unique' => ':attribute sudah ada.',
    'uploaded' => ':attribute gagal diupload.',
    'uppercase' => ':attribute harus berupa huruf besar.',
    'url' => ':attribute format tidak valid.',
    'ulid' => ':attribute harus berupa ULID yang valid.',
    'uuid' => ':attribute harus berupa UUID yang valid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
