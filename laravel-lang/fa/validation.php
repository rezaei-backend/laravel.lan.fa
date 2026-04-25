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

    // خطاهای عمومی اعتبارسنجی
    "accepted"             => ":attribute باید پذیرفته شده باشد.",
    "accepted_if"          => "زمانی که :other برابر :value است، :attribute باید پذیرفته شده باشد.",
    "active_url"           => "آدرس :attribute معتبر نیست (یک URL فعال نمی‌باشد).",
    "after"                => ":attribute باید تاریخی بعد از :date باشد.",
    "after_or_equal"       => ":attribute باید تاریخی بعد از یا برابر :date باشد.",
    "alpha"                => ":attribute باید فقط شامل حروف الفبا باشد.",
    "alpha_dash"           => ":attribute باید فقط شامل حروف الفبا، اعداد، خط تیره (-) و زیرخط (_) باشد.",
    "alpha_num"            => ":attribute باید فقط شامل حروف الفبا و اعداد باشد.",
    "array"                => ":attribute باید از نوع آرایه (array) باشد.",
    "ascii"                => ":attribute باید فقط شامل کاراکترهای تک‌بایتی (ASCII) باشد.",
    "before"               => ":attribute باید تاریخی قبل از :date باشد.",
    "before_or_equal"      => ":attribute باید تاریخی قبل از یا برابر :date باشد.",
    "between"              => [
        "array"   => ":attribute باید بین :min و :max آیتم (قلم) داشته باشد.",
        "file"    => ":attribute باید بین :min و :max کیلوبایت حجم داشته باشد.",
        "numeric" => ":attribute باید بین :min و :max باشد.",
        "string"  => ":attribute باید بین :min و :max کاراکتر باشد.",
    ],
    "boolean"              => "فیلد :attribute فقط می‌تواند true (صحیح) یا false (غلط) باشد.",
    "can"                  => "شما مجوز انجام این عمل را در فیلد :attribute ندارید.",
    "confirmed"            => "تأییدیه (confirmation) :attribute مطابقت ندارد.",
    "contains"             => "فیلد :attribute یک مقدار معتبر را شامل نمی‌شود.",
    "current_password"     => "رمز عبور فعلی صحیح نمی‌باشد.",
    "date"                 => ":attribute یک تاریخ معتبر نیست.",
    "date_equals"          => ":attribute باید تاریخی برابر با :date باشد.",
    "date_format"          => ":attribute با فرمت (الگوی) :format مطابقت ندارد.",
    "decimal"              => ":attribute باید دارای :decimal رقم اعشار باشد.",
    "declined"             => ":attribute باید رد (declined) شود.",
    "declined_if"          => "زمانی که :other برابر :value است، :attribute باید رد (declined) شود.",
    "different"            => ":attribute و :other باید متفاوت باشند.",
    "digits"               => ":attribute باید دقیقاً :digits رقم باشد.",
    "digits_between"       => ":attribute باید بین :min و :max رقم باشد.",
    "dimensions"           => "ابعاد (اندازه) تصویر :attribute نامعتبر است.",
    "distinct"             => "فیلد :attribute دارای مقدار تکراری است.",
    "doesnt_end_with"      => ":attribute نباید با یکی از این مقادیر تمام شود: :values.",
    "doesnt_start_with"    => ":attribute نباید با یکی از این مقادیر شروع شود: :values.",
    "email"                => "فرمت :attribute باید یک آدرس ایمیل معتبر باشد.",
    "ends_with"            => ":attribute باید با یکی از این مقادیر تمام شود: :values.",
    "enum"                 => ":attribute انتخاب شده، معتبر نیست (مقدار نامعتبر).",
    "exists"               => ":attribute انتخاب شده، معتبر نمی‌باشد.",
    "extensions"           => ":attribute باید دارای یکی از پسوندهای :values باشد.",
    "file"                 => ":attribute باید از نوع فایل (file) باشد.",
    "filled"               => "فیلد :attribute نمی‌تواند خالی باشد (الزامی است).",
    "gt"                   => [
        "array"   => ":attribute باید بیشتر از :value آیتم داشته باشد.",
        "file"    => ":attribute باید بزرگتر از :value کیلوبایت باشد.",
        "numeric" => ":attribute باید بزرگتر از :value باشد.",
        "string"  => ":attribute باید بیشتر از :value کاراکتر باشد.",
    ],
    "gte"                  => [
        "array"   => ":attribute باید بیشتر یا برابر :value آیتم داشته باشد.",
        "file"    => ":attribute باید بزرگتر یا برابر :value کیلوبایت باشد.",
        "numeric" => ":attribute باید بزرگتر یا برابر :value باشد.",
        "string"  => ":attribute باید بیشتر یا برابر :value کاراکتر باشد.",
    ],
    "hex_color"            => "فیلد :attribute باید یک رنگ معتبر در فرمت هگزادسیمال (hex) باشد.",
    "image"                => ":attribute باید از نوع تصویر (image) باشد.",
    "in"                   => ":attribute انتخاب شده، معتبر نمی‌باشد.",
    "in_array"             => "فیلد :attribute در :other وجود ندارد.",
    "integer"              => ":attribute باید از نوع عدد صحیح (integer) باشد.",
    "ip"                   => ":attribute باید آدرس IP معتبر باشد.",
    "ipv4"                 => ":attribute باید آدرس IPv4 معتبر باشد.",
    "ipv6"                 => ":attribute باید آدرس IPv6 معتبر باشد.",
    "json"                 => ":attribute باید یک رشته معتبر JSON باشد.",
    "list"                 => "فیلد :attribute باید یک لیست (list) معتبر باشد.",
    "lowercase"            => "فیلد :attribute باید با حروف کوچک (lowercase) باشد.",
    "lt"                   => [
        "array"   => ":attribute باید کمتر از :value آیتم داشته باشد.",
        "file"    => ":attribute باید کوچکتر از :value کیلوبایت باشد.",
        "numeric" => ":attribute باید کوچکتر از :value باشد.",
        "string"  => ":attribute باید کمتر از :value کاراکتر باشد.",
    ],
    "lte"                  => [
        "array"   => ":attribute باید کمتر یا برابر :value آیتم داشته باشد.",
        "file"    => ":attribute باید کوچکتر یا برابر :value کیلوبایت باشد.",
        "numeric" => ":attribute باید کوچکتر یا برابر :value باشد.",
        "string"  => ":attribute باید کمتر یا برابر :value کاراکتر باشد.",
    ],
    "mac_address"          => ":attribute باید یک آدرس MAC معتبر باشد.",
    "max"                  => [
        "array"   => ":attribute نباید بیشتر از :max آیتم داشته باشد.",
        "file"    => "حجم :attribute نباید بیشتر از :max کیلوبایت باشد.",
        "numeric" => ":attribute نباید بزرگتر از :max باشد.",
        "string"  => ":attribute نباید بیشتر از :max کاراکتر باشد.",
    ],
    "max_digits"           => ":attribute نباید بیشتر از :max رقم داشته باشد.",
    "mimes"                => "فرمت (نوع) :attribute باید یکی از :values باشد.",
    "mimetypes"            => "فرمت (نوع) :attribute باید یکی از :values باشد.",
    "min"                  => [
        "array"   => ":attribute نباید کمتر از :min آیتم داشته باشد.",
        "file"    => ":attribute نباید کوچکتر از :min کیلوبایت باشد.",
        "numeric" => ":attribute نباید کوچکتر از :min باشد.",
        "string"  => ":attribute نباید کمتر از :min کاراکتر باشد.",
    ],
    "min_digits"           => ":attribute باید حداقل :min رقم داشته باشد.",
    "missing"              => "فیلد :attribute نباید در داده‌های ورودی وجود داشته باشد.",
    "missing_if"           => "زمانی که :other برابر :value است، فیلد :attribute نباید وجود داشته باشد.",
    "missing_unless"       => "مگر اینکه :other برابر :value باشد، فیلد :attribute نباید وجود داشته باشد.",
    "missing_with"         => "اگر :values وجود دارد، فیلد :attribute نباید وجود داشته باشد.",
    "missing_with_all"     => "اگر :values وجود دارند، فیلد :attribute نباید وجود داشته باشد.",
    "multiple_of"          => ":attribute باید مضربی از :value باشد.",
    "not_in"               => ":attribute انتخاب شده، معتبر نیست.",
    "not_regex"            => "فرمت :attribute معتبر نیست.",
    "numeric"              => ":attribute باید شامل عدد (numeric) باشد.",
    "password"             => [
        "letters"       => ":attribute باید حداقل شامل یک حرف باشد.",
        "mixed"         => ":attribute باید حداقل شامل یک حرف بزرگ و یک حرف کوچک باشد.",
        "numbers"       => ":attribute باید حداقل شامل یک عدد باشد.",
        "symbols"       => ":attribute باید حداقل شامل یک کاراکتر نمادین (symbol) باشد.",
        "uncompromised"  => ":attribute وارد شده در یک نشتی داده‌ای ظاهر شده است. لطفا یک :attribute دیگر انتخاب کنید.",
    ],
    "present"              => "فیلد :attribute باید در داده‌های ورودی موجود باشد (present).",
    "present_if"           => "زمانی که :other برابر :value است، فیلد :attribute باید موجود باشد.",
    "present_unless"       => "مگر اینکه :other برابر :value باشد، فیلد :attribute باید موجود باشد.",
    "present_with"         => "اگر :values وجود دارد، فیلد :attribute باید موجود باشد.",
    "present_with_all"     => "اگر :values وجود دارند، فیلد :attribute باید موجود باشد.",
    "prohibited"           => "فیلد :attribute ممنوع (prohibited) است.",
    "prohibited_if"        => "زمانی که :other برابر :value است، فیلد :attribute ممنوع است.",
    "prohibited_unless"    => "مگر اینکه :other در :values باشد، فیلد :attribute ممنوع است.",
    "prohibits"            => "فیلد :attribute مانع از وجود فیلد :other می‌شود.",
    "regex"                => "فرمت :attribute معتبر نمی‌باشد.",
    "required"             => "فیلد :attribute الزامی است.",
    "required_array_keys"  => "فیلد :attribute باید شامل کلیدها/مقادیری برای :values باشد.",
    "required_if"          => "زمانی که :other برابر :value است، فیلد :attribute الزامی می‌باشد.",
    "required_if_accepted" => "زمانی که :other پذیرفته شده است، فیلد :attribute الزامی می‌باشد.",
    "required_unless"      => "مگر اینکه :other در :values باشد، فیلد :attribute الزامی است.",
    "required_with"        => "زمانی که :values موجود است، فیلد :attribute الزامی می‌باشد.",
    "required_with_all"    => "زمانی که :values موجود است، فیلد :attribute الزامی می‌باشد.",
    "required_without"     => "زمانی که :values موجود نیست، فیلد :attribute الزامی است.",
    "required_without_all" => "زمانی که هیچکدام از :values موجود نیست، فیلد :attribute الزامی می‌باشد.",
    "same"                 => ":attribute و :other باید دقیقاً برابر (مشابه) باشند.",
    "size"                 => [
        "array"   => ":attribute باید دقیقاً :size آیتم داشته باشد.",
        "file"    => ":attribute باید برابر :size کیلوبایت باشد.",
        "numeric" => ":attribute باید برابر :size باشد.",
        "string"  => ":attribute باید دقیقاً :size کاراکتر باشد.",
    ],
    "starts_with"          => ":attribute باید با یکی از این مقادیر شروع شود: :values.",
    "string"               => ":attribute باید از نوع رشته (string) باشد.",
    "timezone"             => "فیلد :attribute باید یک منطقه زمانی (timezone) صحیح باشد.",
    "ulid"                 => "فیلد :attribute باید یک ULID معتبر باشد.",
    "unique"               => ":attribute قبلاً انتخاب شده است و تکراری می‌باشد.",
    "uploaded"             => "آپلود فایل :attribute با شکست مواجه شد (خطا در بارگذاری).",
    "uppercase"            => "فیلد :attribute باید با حروف بزرگ (uppercase) باشد.",
    "url"                  => "فرمت آدرس (URL) :attribute اشتباه و نامعتبر است.",
    "uuid"                 => ":attribute باید یک UUID معتبر باشد.",


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

    'custom' => array(
        'adult_id' => array(
            'required' => 'Please choose some parents!',
        ),
        'group_id' => array(
            'required' => 'Please choose a group or choose temp!',
        ),
    ),

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
    // ========== اطلاعات پایه و کاربر ==========
    "id"                            => "شناسه",
    "uuid"                          => "شناسه یکتا",
    "slug"                          => "نامک",
    "token"                         => "نشانه",
    "key"                           => "کلید",
    "value"                         => "مقدار",
    "type"                          => "نوع",
    "status"                        => "وضعیت",
    "sort"                          => "ترتیب",
    "order"                         => "مرتب‌سازی",
    "position"                      => "موقعیت",

    // ========== کاربر و احراز هویت ==========
    "name"                          => "نام",
    "firstName"                     => "نام",
    "first_name"                    => "نام",
    "last_name"                     => "نام خانوادگی",
    "lastName"                      => "نام خانوادگی",
    "family"                        => "نام خانوادگی",
    "fullname"                      => "نام کامل",
    "username"                      => "نام کاربری",
    "email"                         => "پست الکترونیکی",
    "password"                      => "رمز عبور",
    "password_confirmation"         => "تاییدیه رمز عبور",
    "user_id"                       => "کاربر",
    "author"                        => "نویسنده",
    "author_id"                     => "نویسنده",
    "editor"                        => "ویرایشگر",
    "avatar"                        => "آواتار",
    "website"                       => "وبسایت",
    "instagram"                     => "اینستاگرام",
    "telegram"                      => "تلگرام",
    "twitter"                       => "توییتر",
    "linkedin"                      => "لینکدین",
    "github"                        => "گیت‌هاب",

    // ========== اطلاعات تماس و آدرس ==========
    "phone"                         => "تلفن",
    "mobile"                        => "تلفن همراه",
    "cellphone"                     => "تلفن همراه",
    "address"                       => "نشانی",
    "postal_code"                   => "کد پستی",
    "city"                          => "شهر",
    "country"                       => "کشور",

    // ========== تاریخ و زمان ==========
    "date"                          => "تاریخ",
    "time"                          => "زمان",
    "day"                           => "روز",
    "month"                         => "ماه",
    "year"                          => "سال",
    "hour"                          => "ساعت",
    "minute"                        => "دقیقه",
    "second"                        => "ثانیه",
    "start_date"                    => "تاریخ شروع",
    "end_date"                      => "تاریخ پایان",
    "published_at"                  => "تاریخ انتشار",
    "created_at"                    => "تاریخ ایجاد",
    "updated_at"                    => "تاریخ بروزرسانی",
    "deleted_at"                    => "تاریخ حذف",
    "expired_at"                    => "منقضی می‌شود در",

    // ========== وضعیت‌های باینری و ویژه ==========
    "is_active"                     => "فعال",
    "is_visible"                    => "قابل مشاهده",
    "is_published"                  => "منتشر شده",
    "is_deleted"                    => "حذف شده",
    "is_featured"                   => "ویژه",

    // ========== محتوا و توضیحات ==========
    "title"                         => "عنوان کالا",
    "text"                          => "متن",
    "content"                       => "محتوا",
    "description"                   => "توضیحات",
    "descriptions"                  => "توضیحات",
    "discription"                   => "توضیحات",
    "excerpt"                       => "گزیده (خلاصه)",
    "body"                          => "متن اصلی",
    "comment"                       => "نظر",
    "summary"                       => "خلاصه",
    "notes"                         => "یادداشت‌ها",
    "reason"                        => "دلیل",
    "result"                        => "نتیجه",

    // ========== فایل و رسانه ==========
    "file"                          => "فایل",
    "image"                         => "تصویر",
    "photo"                         => "تصویر",
    "photos"                        => "تصاویر",
    "logo"                          => "لوگو",
    "icon"                          => "آیکون",
    "banner"                        => "بنر",
    "thumbnail"                     => "بندانگشتی",
    "video"                         => "ویدئو",
    "audio"                         => "صوت",
    "link"                          => "لینک",
    "url"                           => "آدرس اینترنتی",

    // ========== فروشگاهی و محصول ==========
    "price"                         => "قیمت",
    "total_price"                   => "قیمت کل",
    "discount"                      => "تخفیف",
    "quantity"                      => "تعداد",
    "stock"                         => "موجودی",
    "available"                     => "موجود",
    "size"                          => "اندازه",
    "weight"                        => "وزن",
    "color"                         => "رنگ",
    "brand"                         => "برند",
    "model"                         => "مدل",
    "sku"                           => "کد انبار",

    // ========== دسته‌بندی و ارتباطات ==========
    "cat_id"                        => "دسته‌بندی",
    "category_id"                   => "دسته‌بندی",
    "parent_id"                     => "والد",
    "reference_id"                  => "ارجاع",
    "priority_id"                   => "اولویت",
    "tag"                           => "تگ‌ها",

    // ========== آمار و اطلاعات سیستمی ==========
    "view_count"                    => "تعداد بازدید",
    "like_count"                    => "تعداد لایک",
    "comment_count"                 => "تعداد نظرات",
    "ip_address"                    => "آدرس آی‌پی",
    "user_agent"                    => "مرورگر",

	// ========== پسورد و امنیت ==========
	"current_password"              => "رمز عبور فعلی",
	"new_password"                  => "رمز عبور جدید",
	"old_password"                  => "رمز عبور قدیمی",
	"confirm_password"              => "تکرار رمز عبور",
	"captcha"                       => "کد امنیتی",
	"otp"                           => "رمز یکبار مصرف",
	"verification_code"             => "کد تأیید",
	
	// ========== عکس و رسانه (تکمیل شده) ==========
	"cover"                         => "تصویر کاور",
	"cover_image"                   => "تصویر شاخص",
	"gallery"                       => "گالری",
	"attachment"                    => "پیوست",
	
	// ========== فیلدهای رایج فرم‌ها ==========
	"message"                       => "پیام",
	"subject"                       => "موضوع",
	"reply"                         => "پاسخ",
	"search"                        => "جستجو",
	"filter"                        => "فیلتر",
	"sort_by"                       => "مرتب‌سازی بر اساس",
	"per_page"                      => "تعداد در هر صفحه",
	
	// ========== فیلدهای مالی ==========
	"tax"                           => "مالیات",
	"shipping_cost"                 => "هزینه ارسال",
	"subtotal"                      => "جمع جزئی",
	"grand_total"                   => "جمع کل",
	"transaction_id"                => "شناسه تراکنش",
	"payment_method"                => "روش پرداخت",
	"invoice_number"                => "شماره فاکتور",
	
	// ========== فیلدهای کسب و کار ==========
	"company"                       => "شرکت",
	"job_title"                     => "عنوان شغلی",
	"department"                    => "دپارتمان",
	"national_code"                 => "کد ملی",
	"national_id"                   => "شماره ملی",
	"vat_number"                    => "شماره اقتصادی",
	// ========== سایر ==========
	"age"                           => "سن",
	"sex"                           => "جنسیت",
	"gender"                        => "جنسیت",
],
];
