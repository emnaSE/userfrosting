<?php
/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @copyright Copyright (c) 2019 Alexander Weissman
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/LICENSE.md (MIT License)
 */

/**
 * Modern Standard Arabic message token translations for the 'admin' sprinkle.
 *
 * @author Alexander Weissman and Abdullah Seba
 */
return [
    'ACTIVITY' => [
        1 => 'نشاط',
        2 => 'أنشطة',

       'LAST' => 'النشاط الاخير',
       'PAGE' => 'قائمة من أنشطة المستخدم',
       'TIME' => 'وقت نشاط'
    ],

    'CACHE' => [
        'CLEAR'             => 'مسح ذاكرة التخزين',
        'CLEAR_CONFIRM'     => 'هل أنت متأكد أنك تريد مسح ذاكرة التخزين بالموقع؟',
        'CLEAR_CONFIRM_YES' => 'نعم، إمسح ذاكرة التخزين',
        'CLEARED'           => 'تم مسح ذاكرة التخزين بنجاح'
    ],

    'DASHBOARD'             => 'لوحة القيادة',
    'NO_FEATURES_YET'       => 'لا يبدو أن أي ميزات تم إعدادها لهذا الحساب حتى الآن. ربما لم يتم تنفيذها بعد، أو ربما شخص نسي أن يعطيك الوصول. في كلتا الحالتين، نحن سعداء أن يكون لك على متن!',
    'DELETE_MASTER'         => 'لا يمكنك حذف الحساب الرئيسي',
    'DELETION_SUCCESSFUL'   => 'المستعمل <strong>{{user_name}}</strong> حذف بنجاح',
    'DETAILS_UPDATED'       => 'جدد تفاصيل الحساب للمستخدم <strong>{{user_name}}</strong>',
    'DISABLE_MASTER'        => 'لا يمكنك تعطيل الحساب الرئيسي',
    'DISABLE_SUCCESSFUL'    => 'حساب المستخدم <strong>{{user_name}}</strong> عطيل بنجاح',

    'ENABLE_SUCCESSFUL' => 'حساب المستخدم <strong>{{user_name}}</strong> مكين بنجاح',

    'GROUP' => [
        1 => 'مجموعة',
        2 => 'مجموعات',

        'CREATE'            => 'إنشاء مجموعة',
        'DELETE'            => 'حذف مجموعة',
        'DELETE_CONFIRM'    => 'هل أنت متأكد أنك تريد حذف مجموعة <strong>{{name}}</strong>?',
        'DELETE_YES'        => 'نعم، إحذف مجموعة',
        'EDIT'              => 'تعديل مجموعة',
        'ICON'              => 'رمز المجموعة',
        'ICON_EXPLAIN'      => 'رمز المستخدمين في المجموعه',
        'INFO_PAGE'         => 'صفحة معلومات المجموعة ل {{name}}',
        //"MANAGE"        => "Manage group",
        'NAME'             => 'أسم المجموعة',
        'NAME_EXPLAIN'     => 'ادخال اسم للمجموعة',
        'PAGE_DESCRIPTION' => 'قائمة المجموعات لموقعك يوفر أدوات لإدارة التحرير وحذف مجموعات'
    ],

    'MANUALLY_ACTIVATED'    => 'تم تفعيل حساب{{user_name}}',
    'MASTER_ACCOUNT_EXISTS' => 'الحساب الرئيسي موجود بالفعل',
    'MIGRATION'             => [
        'REQUIRED'          => 'تحديث قاعدة البيانات مطلوب'
    ],

    'PERMISSION' => [
        1 => 'الإذن',
        2 => 'مأذونيات',

        'ASSIGN_NEW'        => 'تعيين إذن جديد',
        'HOOK_CONDITION'    => 'الظروف',
        'MANAGE'            => 'إدارة المأذونات',
        'PAGE_DESCRIPTION'  => 'قائمة المأذونات لموقعك',
        'UPDATE'            => 'تحديث المأذونات'
    ],

    'ROLE' => [
        1 => 'وظيفة',
        2 => 'وظائف',

        'ASSIGN_NEW'        => 'تعيين دور جديد',
        'CREATE'            => 'إنشاء دور',
        'DELETE'            => 'حذف دور',
        'DELETE_CONFIRM'    => 'هل أنت متأكد أنك تريد حذف الدور <strong>{{name}}</strong>?',
        'DELETE_YES'        => 'نعم، حذف دور',
        'EDIT'              => 'إدارة دور',
        'INFO_PAGE'         => 'صفحة معلومات دور {{name}}',
        'MANAGE'            => 'إدارة الوظائف',
        'NAME'              => 'اسم',
        'NAME_EXPLAIN'      => 'أدخل اسما للدور',
        'PAGE_DESCRIPTION'  => 'قائمة الوظائف لموقعك',
        'UPDATED'           => 'تحديث الوظائف'
    ],

    'SYSTEM_INFO' => [
        '@TRANSLATION'  => 'معلومات الجهاز',

        'DB_NAME'       => 'اسم قاعدة البيانات',
        'DB_VERSION'    => 'إصدار قاعدة البيانات',
        'DIRECTORY'     => 'دليل المشروع',
        'PHP_VERSION'   => 'الإصدار PHP',
        'SERVER'        => 'برنامج الخادم',
        'SPRINKLES'     => 'sprinkles المحمل',
        'UF_VERSION'    => 'إصدار UserFrosting',
        'URL'           => 'رابط قاعدة الموقع'
    ],

    'USER' => [
        1 => 'مستخدم',
        2 => 'المستخدمين',

        'ADMIN' => [
            'CHANGE_PASSWORD'    => 'تغيير كلمة المرور للمستخدم',
            'SEND_PASSWORD_LINK' => 'إرسال المستخدم وصلة من شأنها أن تسمح لهم لاختيار كلمة المرور الخاصة بهم',
            'SET_PASSWORD'       => 'تعيين كلمة المرور الخاصة بالمستخدم'
        ],

        'ACTIVATE'          => 'تفعيل المستخدم',
        'CREATE'            => 'إنشاء مستخدم',
        'DELETE'            => 'مسح المستخدم',
        'DELETE_CONFIRM'    => 'هل أنت متأكد أنك تريد حذف المستخدم <strong>{{name}}</strong>?',
        'DELETE_YES'        => 'نعم، حذف المستخدم',
        'DISABLE'           => 'تعطيل المستخدم ',
        'EDIT'              => 'إدارة المستخدم',
        'ENABLE'            => 'تمكين المستخدم',
        'INFO_PAGE'         => 'صفحة معلومات المستخدم {{name}}',
        'PAGE_DESCRIPTION'  => 'قائمة المستخدمين لموقعك',
        'LATEST'            => 'أحدث المستخدمين',
        'VIEW_ALL'          => 'عرض جميع المستخدمين'
    ],
    'X_USER' => [
        0 => 'لا يوجد اي مستخدمين',
        1 => '{{plural}} مستخدم',
        2 => '{{plural}} المستخدمين'
    ]
];
