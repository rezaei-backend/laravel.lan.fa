# laravel.lan.fa
Persian language for Laravel framework
```text
    laravel/
    └── resources/
    └── lang/
        └── fa/
            ├── auth.php
            ├── pagination.php
            ├── passwords.php
            └── validation.php
            
            
how to use ?    


    into your laravel project go to the this address: \resources\lang and past our fa.json and fa directory in there.
    then in your laravel project go to the this address: \config and open app.php then search for 'locale' => 'en' and change it to 'locale' => 'fa'
    done.






<div dir="rtl">

#راهنمای نصب                                     



    -ابتدا در پروژه لاراولی خود به این مسیر \resources\lang بروید و سپس نسبت به نگارش لاراول خود پوشه fa این پکیج را آنجا کپی/پیست کنید.
    -حالا در پروژه لاراول خود به مسیر \config بروید و فایل app.php را باز کنید. در آن فایل دنبال عبارت 'locale' => 'en' بگردید و آن را به 'locale' => 'fa' تغییر دهید.
    -حالا تمام پیغام ها و ایمیل های پروژه لاراول شما فارسی شده است!
    
    
    
#افزودن ترجمه کلمات جدید



    کافیست به فایل validation.php بروید 
    در قسمت attributes میتوانید کلمه انگلیسی و ترجمه آن را وارد کنید. 
    *برای نمونه => 
      "name"                      => "نام",

</div>
