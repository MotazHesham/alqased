<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'slider_create',
            ],
            [
                'id'    => 18,
                'title' => 'slider_edit',
            ],
            [
                'id'    => 19,
                'title' => 'slider_show',
            ],
            [
                'id'    => 20,
                'title' => 'slider_delete',
            ],
            [
                'id'    => 21,
                'title' => 'slider_access',
            ],
            [
                'id'    => 22,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 23,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 24,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 25,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 26,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 27,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 28,
                'title' => 'setting_edit',
            ],
            [
                'id'    => 29,
                'title' => 'setting_access',
            ],
            [
                'id'    => 30,
                'title' => 'project_create',
            ],
            [
                'id'    => 31,
                'title' => 'project_edit',
            ],
            [
                'id'    => 32,
                'title' => 'project_show',
            ],
            [
                'id'    => 33,
                'title' => 'project_delete',
            ],
            [
                'id'    => 34,
                'title' => 'project_access',
            ],
            [
                'id'    => 35,
                'title' => 'product_create',
            ],
            [
                'id'    => 36,
                'title' => 'product_edit',
            ],
            [
                'id'    => 37,
                'title' => 'product_show',
            ],
            [
                'id'    => 38,
                'title' => 'product_delete',
            ],
            [
                'id'    => 39,
                'title' => 'product_access',
            ],
            [
                'id'    => 40,
                'title' => 'partner_create',
            ],
            [
                'id'    => 41,
                'title' => 'partner_edit',
            ],
            [
                'id'    => 42,
                'title' => 'partner_show',
            ],
            [
                'id'    => 43,
                'title' => 'partner_delete',
            ],
            [
                'id'    => 44,
                'title' => 'partner_access',
            ],
            [
                'id'    => 45,
                'title' => 'contact_create',
            ],
            [
                'id'    => 46,
                'title' => 'contact_edit',
            ],
            [
                'id'    => 47,
                'title' => 'contact_show',
            ],
            [
                'id'    => 48,
                'title' => 'contact_delete',
            ],
            [
                'id'    => 49,
                'title' => 'contact_access',
            ],
            [
                'id'    => 50,
                'title' => 'work_location_create',
            ],
            [
                'id'    => 51,
                'title' => 'work_location_edit',
            ],
            [
                'id'    => 52,
                'title' => 'work_location_show',
            ],
            [
                'id'    => 53,
                'title' => 'work_location_delete',
            ],
            [
                'id'    => 54,
                'title' => 'work_location_access',
            ],
            [
                'id'    => 55,
                'title' => 'general_setting_access',
            ],
            [
                'id'    => 56,
                'title' => 'subscribe_create',
            ],
            [
                'id'    => 57,
                'title' => 'subscribe_edit',
            ],
            [
                'id'    => 58,
                'title' => 'subscribe_show',
            ],
            [
                'id'    => 59,
                'title' => 'subscribe_delete',
            ],
            [
                'id'    => 60,
                'title' => 'subscribe_access',
            ],
            [
                'id'    => 61,
                'title' => 'clients_review_create',
            ],
            [
                'id'    => 62,
                'title' => 'clients_review_edit',
            ],
            [
                'id'    => 63,
                'title' => 'clients_review_show',
            ],
            [
                'id'    => 64,
                'title' => 'clients_review_delete',
            ],
            [
                'id'    => 65,
                'title' => 'clients_review_access',
            ],
            [
                'id'    => 66,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
