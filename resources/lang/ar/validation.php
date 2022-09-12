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

    'accepted'             => 'خانة :attribute يجب قبولها.',
    'active_url'           => 'خانة :attribute ليست رابطا صالحًا.',
    'after'                => 'خانة :attribute يجب أن تكون تاريخًا بعد :date.',
    'after_or_equal'       => 'خانة :attribute يجب أن تكون تاريخًا بعد أو يساوي :date.',
    'alpha'                => 'خانة :attribute قد تحتوي على أحرف فقط.',
    'alpha_dash'           => 'خانة :attribute يمكن أن تحتوي فقط على أحرف وأرقام وشرطات.',
    'alpha_num'            => 'خانة :attribute قد تحتوي فقط على أحرف وأرقام.',
    'array'                => 'خانة :attribute يجب أن تكون مصفوفة.',
    'before'               => 'خانة :attribute يجب أن تكون تاريخ قبل :date.',
    'before_or_equal'      => 'خانة :attribute يجب أن تكون تاريخًا يسبق أو يساوي :date.',
    'between'              => [
        'numeric' => 'خانة :attribute يجب أن تكون بين :min و :max.',
        'file'    => 'خانة :attribute يجب أن تكون بين :min و :max كيلوبايت.',
        'string'  => 'خانة :attribute يجب أن تكون بين :min و :max حرف.',
        'array'   => 'خانة :attribute يجب أن تكون بين :min و :max عنصر.',
    ],
    'boolean'              => 'خانة :attribute يجب أن تكون صح أو خطأ.',
    'confirmed'            => 'خانة :attribute التأكيد غير متطابق.',
    'date'                 => 'خانة :attribute هذا ليس تاريخ صحيح.',
    'date_format'          => 'خانة :attribute لا يتطابق مع الشكل :format.',
    'different'            => 'خانة :attribute و :other يجب أن تكونا مختلفتين.',
    'digits'               => 'خانة :attribute يجب أن تكون :digits أرقام.',
    'digits_between'       => 'خانة :attribute يجب أن تكون بين :min و :max أرقام.',
    'dimensions'           => 'خانة :attribute أبعاد الصورة غير صالحة.',
    'distinct'             => 'خانة :attribute له قيمة مكررة.',
    'email'                => 'خانة :attribute يجب أن تكون عنوان بريد إلكتروني صالح.',
    'exists'               => 'الخانة المختارة :attribute غير صالحة.',
    'file'                 => 'خانة :attribute يجب أن تكون ملفًا.',
    'filled'               => 'خانة :attribute يجب أن تكون قيمة.',
    'image'                => 'خانة :attribute يجب أن تكون صورة.',
    'in'                   => 'الخانة المختارة :attribute غير صالحة.',
    'in_array'             => 'خانة :attribute غير موجودة في :other.',
    'integer'              => 'خانة :attribute يجب أن تكون عددا.',
    'ip'                   => 'خانة :attribute يجب أن تكون عنوان IP صالحًا.',
    'ipv4'                 => 'خانة :attribute يجب أن تكون عنوان IPv4 صالحًا.',
    'ipv6'                 => 'خانة :attribute يجب أن تكون عنوان IPv6 صالحًا.',
    'json'                 => 'خانة :attribute يجب أن تكون سلسلة JSON صالحة.',
    'max'                  => [
        'numeric' => 'خانة :attribute قد لا تكون أكبر من :max.',
        'file'    => 'خانة :attribute قد لا تكون أكبر من :max كيلوبايت.',
        'string'  => 'خانة :attribute قد لا تكون أكبر من :max حرف.',
        'array'   => 'خانة :attribute قد لا تحتوي على أكثر من :max عنصر.',
    ],
    'mimes'                => 'خانة :attribute يجب أن تكون ملفًا من النوع: :values.',
    'mimetypes'            => 'خانة :attribute يجب أن تكون ملفًا من النوع: :values.',
    'min'                  => [
        'numeric' => 'خانة :attribute يجب أن تكون على الأقل :min.',
        'file'    => 'خانة :attribute يجب أن تكون على الأقل :min كيلوبايت.',
        'string'  => 'خانة :attribute يجب أن تكون على الأقل :min حرف.',
        'array'   => 'خانة :attribute يجب أن تحتوي على الأقل :min عنصر.',
    ],
    'not_in'               => 'الخانة المختارة :attribute غير صالحة.',
    'numeric'              => 'خانة :attribute يجب أن تكون رقما.',
    'present'              => 'خانة :attribute يجب أن تكون حاضر.',
    'regex'                => 'خانة :attribute ذات تنسيق غير صالح.',
    'required'             => 'خانة :attribute مطلوبة.',
    'required_if'          => 'خانة :attribute مطلوبة عندما :other يكون :value.',
    'required_unless'      => 'خانة :attribute مطلوبة ما لم :other يكون بين :values.',
    'required_with'        => 'خانة :attribute مطلوبة عندما :values يكون حاضر.',
    'required_with_all'    => 'خانة :attribute مطلوبة عندما :values يكون حاضر.',
    'required_without'     => 'خانة :attribute مطلوبة عندما :values يكون غير حاضر.',
    'required_without_all' => 'خانة :attribute مطلوبة عندما لا تكون :values يكونوا حاضر',
    'same'                 => 'خانة :attribute و :other يجب أن تتطابق.',
    'size'                 => [
        'numeric' => 'خانة :attribute يجب أن تكون :size.',
        'file'    => 'خانة :attribute يجب أن تكون :size كيلوبايت.',
        'string'  => 'خانة :attribute يجب أن تكون :size حرف.',
        'array'   => 'خانة :attribute يجب أن تحتوي :size عنصر.',
    ],
    'string'               => 'خانة :attribute يجب أن تكون سلسلة من الحروف.',
    'timezone'             => 'خانة :attribute يجب أن تكون منطقة صالحة.',
    'unique'               => 'خانة :attribute لقد أُخذت بالفعل.',
    'uploaded'             => 'خانة :attribute فشلت في التحميل.',
    'url'                  => 'خانة :attribute ذات تنسيق غير صالح.',
    'recaptcha' => 'خانة :attribute خطأ!',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
		'email' => 'البريد الالكتروني',
		'Email' => 'البريد الالكتروني',
		'password' => 'كلمة المرور',
		'fname' => 'الاسم الاول',
		'lname' => 'الاسم الاخير',
		'mobile' => 'الهاتف المحمول',
		'country_id' => 'الدولة',
		'password_confirmation' => 'تاكيد كلمة مرور',
		'type' => 'النوع',
		'country' => 'الدولة',
		'reciever_id' => 'المتلقي',
		'message' => 'الرسالة',
		'zone' => 'المنطقة',
		'appointment' => 'الحجز',
		'tutor' => 'المعلم',
		'amount' => 'المبلغ',
		'payment_method' => 'طريقة الدفع',
		'description' => 'الوصف',
		'currency' => 'العملة',
		'firstname' => 'الاسم الاول',
		'lastname' => 'الاسم الاخير',
		'Firstname' => 'الاسم الاول',
		'Lastname' => 'الاسم الاخير',
		'metadata' => 'المعلومات',
		'phonenumber' => 'رقم الهاتف',
		'redirect_url' => 'رابط العودة',
		'ref' => 'الرقم المرجعي',
		'logo' => 'اللوجو',
		'title' => 'العنوان',
		'page' => 'الصفحة',
		'name' => 'الاسم',
		'tx_ref' => 'الرقم المرجعي',
		'user_id' => 'المستخدم',
		'coupon' => 'القسيمة',
		'detail' => 'التفصيل',
		'country_residence' => 'بلد الاقامة',
		'time_zone_id' => 'منطقة التوقيت',
		'Language' => 'اللغة',
		'Level' => 'المستوى',
		'specialty' => 'التخصص',
		'user_img' => 'الصورة الشخصية',
		'headline' => 'العنوان',
		'tab' => 'التبويب',
		'youtube_url' => 'رابط اليوتيوب',
		'uploadVideo' => 'تحميل فيديو',
		'Sun' => 'الاحد',
		'Mon' => 'الاثنين',
		'Tue' => 'الثلاثاء',
		'Wed' => 'الاربعاء',
		'Thu' => 'الخميس',
		'Fri' => 'الجمعة',
		'Sat' => 'السبت',
		'file' => 'الملف',
		'PricePerHour' => 'السعر بالساعة',
		'account_number' => 'رقم الحساب',
		'iban' => 'رقم الحساب المصرفي الدولي',
		'account_name' => 'اسم الحساب',
		'url' => 'الرابط',
		'oldPassword' => 'كلمة المرور القديمة',
		'vPassword' => 'تاكيد كلمة مرور',
		'university' => 'الجامعة',
		'degree' => 'الدرجة',
		'from' => 'من',
		'to' => 'الى',
		'educationId' => 'التعليم',
		'company' => 'الشركة',
		'experienceId' => 'الخبرة',
		'certificate' => 'الشهادة',
		'issuedBy' => 'الصادر عنه',
		'certificateId' => 'الشهادة',
		'college' => 'الكلية',
		'date' => 'التاريخ',
		'time' => 'الوقت',
		'sort' => 'الترتيب',
		'searchWord' => 'كلمة البحث',
		'checkbox' => 'اللغة الام',
		'recipientId' => 'المتلقي',
		'review' => 'التعليق',
		'userId' => 'المستخدم',
		'tutorId' => 'المعلم',
		'starsValue' => 'بداية القيمة',
		'hour' => 'الساعة',
		'language' => 'اللغة',
		'lessons' => 'الدرس',
		'vocabulary' => 'الكلمات',
		'correction' => 'التصحيح',
		'objective' => 'المجال',
		'homework' => 'الواجب المنزلي',
		'material' => 'المواد',
		'status_id' => 'الحالة',
		'Reson' => 'السبب',
		'tutor_id' => 'المعلم',
		'package_id' => 'الباقة',
		'passwordConfirmation' => '',
		'number' => 'الرقم',
		'Name' => 'الاسم',
		'CompanyName' => 'اسم الشركة',
		'VatNumber' => 'رقم الضريبة',
		'Address' => 'العنوان',
		'old_lesson_id' => 'الدرس القديم',
		'student' => 'الطالب',
		'start_date' => 'اليوم الاول',
		'end_date' => 'اليوم الاخير',
		'start_time' => 'الوقت الاول',
		'end_time' => 'الوقت الاخير',
		'radio' => 'شهري',
		'allDay' => 'كل الايام',
		
		'Languages.*.language' => 'اللغة',
		'Languages.*.level' => 'المستوى',
		'preferredStudentAge.*' => 'عمر الطالب المفضل',
		'preferredStudentLevel.*' => 'مستوى الطالب المفضل',
		'notification.*' => 'الاشعارات',
		'slots.*' => 'الحجوزات',
		'specialties.*' => 'التخصصات',
		'country.*' => 'الدول',
		'residences.*' => 'بلدان الاقامة',
		'Language.*' => 'اللغة',
		'times.*' => 'الاوقات',
		'days.*' => 'التواريخ',
		'title.*' => 'العناوين',
		'Sunday.*' => 'الاحد',
		'Monday.*' => 'الاثنين',
		'Tuesday.*' => 'الثلاثاء',
		'Wednesday.*' => 'الاربعاء',
		'Thursday.*' => 'الخميس',
		'Friday.*' => 'الجمعة',
		'Saturday.*' => 'السبت',
		
	],

];
