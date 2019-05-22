<?php
/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @copyright Copyright (c) 2019 Alexander Weissman
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/LICENSE.md (MIT License)
 */

/**
 * Thai message token translations for the 'admin' sprinkle.
 *
 * @author Karuhut Komol
 */
return [
    'ACTIVITY' => [
        1 => 'กิจกรรม',
        2 => 'กิจกรรม',

       'LAST' => 'กิจกรรมล่าสุด',
       'PAGE' => 'รายการกิจกรรมของผู้ใช้',
       'TIME' => 'เวลาที่ทำกิจกรรม'
    ],

    'CACHE' => [
        'CLEAR'             => 'ล้างแคช',
        'CLEAR_CONFIRM'     => 'คุณแน่ใจหรือที่จะล้างแคชของเว็บ?',
        'CLEAR_CONFIRM_YES' => 'ใช่ ล้างแคชเลย',
        'CLEARED'           => 'ล้างแคชเรียบร้อยแล้ว!'
    ],

    'DASHBOARD'             => 'แผงควบคุม',
    'DELETE_MASTER'         => 'คุณไม่สามารถลบบัญชีหลักได้!',
    'DELETION_SUCCESSFUL'   => 'ลบผู้ใช้ <strong>{{user_name}}</strong> เรียบร้อยแล้ว',
    'DETAILS_UPDATED'       => 'ปรับปรุงรายระเอียดบัญชีให้กับ <strong>{{user_name}}</strong> แล้ว',
    'DISABLE_MASTER'        => 'คุณไม่สามารถปิดการใช้งานบัญชีหลัก!',
    'DISABLE_SUCCESSFUL'    => 'ปิดการใช้งานบัญชีของผู้ใช้ <strong>{{user_name}}</strong> เรียบร้อยแล้ว',

    'ENABLE_SUCCESSFUL' => 'เปิดการใช้งานบัญชีของผู้ใช้ <strong>{{user_name}}</strong> เรียบร้อยแล้ว',

    'GROUP' => [
        1 => 'กลุ่ม',
        2 => 'กลุ่ม',

        'CREATE'            => 'สร้างกลุ่ม',
        'DELETE'            => 'ลบกลุ่ม',
        'DELETE_CONFIRM'    => 'คุณแน่ใจหรือที่จะลบกลุ่ม <strong>{{name}}</strong>?',
        'DELETE_YES'        => 'ใช่ ลบกลุ่มนี้เลย',
        'EDIT'              => 'แก้ไขกลุ่ม',
        'ICON'              => 'ไอคอนกลุ่ม',
        'ICON_EXPLAIN'      => 'ไอคอนสำหรับสมาชิกกลุ่ม',
        'INFO_PAGE'         => 'หน้าข้อมูลกลุ่มสำหรับ {{name}}',
        //"MANAGE"        => "Manage group",
        'NAME'             => 'ชื่อกลุ่ม',
        'NAME_EXPLAIN'     => 'กรุณาตั้งชื่อสำหรับกลุ่มนี้',
        'PAGE_DESCRIPTION' => 'รายชื่อกลุ่มในเว็บของคุณ ประกอบไปด้วยเครื่องมือในการจัดการสำหรับการแก้ไขและลบกลุ่ม'
    ],

    'MANUALLY_ACTIVATED'    => 'บัญชีของ {{user_name}} ได้เปิดใช้งานเองแล้ว',
    'MASTER_ACCOUNT_EXISTS' => 'มีบัญชีหลักอยู่แล้ว!',
    'MIGRATION'             => [
        'REQUIRED'          => 'ต้องการการปรับปรุงฐานข้อมูล'
    ],

    'PERMISSION' => [
        1 => 'สิทธิการเข้าถึง',
        2 => 'สิทธิการเข้าถึง',

        'ASSIGN_NEW'        => 'กำหนดสิทธิการเข้าถึงใหม่',
        'HOOK_CONDITION'    => 'ข้อกำหนด/เงื่อนไข',
        'MANAGE'            => 'จัดการสิทธิการเข้าถึง',
        'PAGE_DESCRIPTION'  => 'รายการสิทธิการเข้าถึงในเว็บของคุณ ประกอบไปด้วยเครื่องมือในการจัดการสำหรับการแก้ไขและลบสิทธิการเข้าถึง',
        'UPDATE'            => 'ปรับปรุงสิทธิการเข้าถึง'
    ],

    'ROLE' => [
        1 => 'ตำแหน่ง',
        2 => 'ตำแหน่ง',

        'ASSIGN_NEW'        => 'กำหนดตำแหน่งใหม่',
        'CREATE'            => 'สร้างตำแหน่ง',
        'DELETE'            => 'ลบตำแหน่ง',
        'DELETE_CONFIRM'    => 'คุณแน่ใจหรือที่จะลบตำแหน่ง <strong>{{name}}</strong>?',
        'DELETE_YES'        => 'ใช่ ลบตำแหน่งนี้เลย',
        'EDIT'              => 'แก้ไขตำแหน่ง',
        'INFO_PAGE'         => 'หน้าข้อมูลตำแหน่งสำหรับ {{name}}',
        'MANAGE'            => 'จัดการตำแหน่ง',
        'NAME'              => 'ชื่อ',
        'NAME_EXPLAIN'      => 'กรุณาตั้งชื่อสำหรับตำแหน่งนี้',
        'PAGE_DESCRIPTION'  => 'รายชื่อตำแหน่งในเว็บของคุณ ประกอบไปด้วยเครื่องมือในการจัดการสำหรับแก้ไขและลบตำแหน่ง',
        'UPDATED'           => 'ปรับปรุงตำแหน่ง'
    ],

    'SYSTEM_INFO' => [
        '@TRANSLATION'  => 'ข้อมูลระบบ',

        'DB_NAME'       => 'ชื่อฐานข้อมูล',
        'DB_VERSION'    => 'เวอร์ชั่นฐานข้อมูล',
        'DIRECTORY'     => 'ไดเรกทอรีของโปรเจค',
        'PHP_VERSION'   => 'เวอร์ชั่น PHP',
        'SERVER'        => 'ซอฟต์แวร์เว็บเซิร์ฟเวอร์',
        'SPRINKLES'     => 'Sprinkles ที่ถูกโหลด',
        'UF_VERSION'    => 'เวอร์ชั่น UserFrosting',
        'URL'           => 'URL ของรากเว็บไซต์'
    ],

    'USER' => [
        1 => 'ผู้ใช้',
        2 => 'ผู้ใช้',

        'ADMIN' => [
            'CHANGE_PASSWORD'    => 'เปลี่ยนรหัสผ่านผู้ใช้',
            'SEND_PASSWORD_LINK' => 'ส่งลิงก์ที่จะอนุญาตให้ผู้ใช้เลือกรหัสผ่านเองให้กับผู้ใช้',
            'SET_PASSWORD'       => 'ตั้งรหัสผ่านของผู้ใช้เป็น'
        ],

        'ACTIVATE'          => 'เปิดใช้งานผู้ใช้',
        'CREATE'            => 'สร้างผู้ใช้',
        'DELETE'            => 'ลบผู้ใช้',
        'DELETE_CONFIRM'    => 'คุณแน่ใจหรือที่จะลบผู้ใช้ <strong>{{name}}</strong>?',
        'DELETE_YES'        => 'ใช่ ลบผู้ใช้นี้เลย',
        'DISABLE'           => 'ปิดการใช้งานผู้ใช้',
        'EDIT'              => 'แก้ไขผู้ใช้',
        'ENABLE'            => 'เปิดการใช้งานผู้ใช้',
        'INFO_PAGE'         => 'หน้าข้อมูลของผู้ใช้ {{name}}',
        'PAGE_DESCRIPTION'  => 'รายชื่อผู้ใช้ในเว็บของคุณ ประกอบไปด้วยเครื่องมือสำหรับการจัดการ รวมทั้งความสามารถในการแก้ไขรายละเอียดผู้ใช้ การเปิดใช้งานผู้ใช้ การเปิด/ปิดบัญชีผู้ใช้และอื่น ๆ',
        'LATEST'            => 'ผู้ใช้ล่าสุด',
        'VIEW_ALL'          => 'ดูผู้ใช้ทั้งหมด'
    ],
    'X_USER' => [
        0 => 'ไม่มีผู้ใช้',
        1 => '{{plural}} ผู้ใช้',
        2 => '{{plural}} ผู้ใช้'
    ]
];
