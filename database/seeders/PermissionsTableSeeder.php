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
                'title' => 'asset_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'asset_category_create',
            ],
            [
                'id'    => 19,
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'asset_category_show',
            ],
            [
                'id'    => 21,
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'asset_category_access',
            ],
            [
                'id'    => 23,
                'title' => 'asset_location_create',
            ],
            [
                'id'    => 24,
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => 25,
                'title' => 'asset_location_show',
            ],
            [
                'id'    => 26,
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => 27,
                'title' => 'asset_location_access',
            ],
            [
                'id'    => 28,
                'title' => 'asset_status_create',
            ],
            [
                'id'    => 29,
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => 30,
                'title' => 'asset_status_show',
            ],
            [
                'id'    => 31,
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => 32,
                'title' => 'asset_status_access',
            ],
            [
                'id'    => 33,
                'title' => 'asset_create',
            ],
            [
                'id'    => 34,
                'title' => 'asset_edit',
            ],
            [
                'id'    => 35,
                'title' => 'asset_show',
            ],
            [
                'id'    => 36,
                'title' => 'asset_delete',
            ],
            [
                'id'    => 37,
                'title' => 'asset_access',
            ],
            [
                'id'    => 38,
                'title' => 'assets_history_access',
            ],
            [
                'id'    => 39,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 40,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 41,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 42,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 43,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 44,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 45,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 46,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 47,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 48,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 49,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 50,
                'title' => 'task_create',
            ],
            [
                'id'    => 51,
                'title' => 'task_edit',
            ],
            [
                'id'    => 52,
                'title' => 'task_show',
            ],
            [
                'id'    => 53,
                'title' => 'task_delete',
            ],
            [
                'id'    => 54,
                'title' => 'task_access',
            ],
            [
                'id'    => 55,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 56,
                'title' => 'attribution_show',
            ],
            [
                'id'    => 57,
                'title' => 'attribution_access',
            ],
            [
                'id'    => 58,
                'title' => 'assignment_create',
            ],
            [
                'id'    => 59,
                'title' => 'assignment_edit',
            ],
            [
                'id'    => 60,
                'title' => 'assignment_show',
            ],
            [
                'id'    => 61,
                'title' => 'assignment_delete',
            ],
            [
                'id'    => 62,
                'title' => 'assignment_access',
            ],
            [
                'id'    => 63,
                'title' => 'inventaire_show',
            ],
            [
                'id'    => 64,
                'title' => 'inventaire_access',
            ],
            [
                'id'    => 65,
                'title' => 'supplier_create',
            ],
            [
                'id'    => 66,
                'title' => 'supplier_edit',
            ],
            [
                'id'    => 67,
                'title' => 'supplier_show',
            ],
            [
                'id'    => 68,
                'title' => 'supplier_delete',
            ],
            [
                'id'    => 69,
                'title' => 'supplier_access',
            ],
            [
                'id'    => 70,
                'title' => 'maintenance_request_create',
            ],
            [
                'id'    => 71,
                'title' => 'maintenance_request_edit',
            ],
            [
                'id'    => 72,
                'title' => 'maintenance_request_show',
            ],
            [
                'id'    => 73,
                'title' => 'maintenance_request_delete',
            ],
            [
                'id'    => 74,
                'title' => 'maintenance_request_access',
            ],
            [
                'id'    => 75,
                'title' => 'infrastructure_management_access',
            ],
            [
                'id'    => 76,
                'title' => 'infrastructure_create',
            ],
            [
                'id'    => 77,
                'title' => 'infrastructure_edit',
            ],
            [
                'id'    => 78,
                'title' => 'infrastructure_show',
            ],
            [
                'id'    => 79,
                'title' => 'infrastructure_delete',
            ],
            [
                'id'    => 80,
                'title' => 'infrastructure_access',
            ],
            [
                'id'    => 81,
                'title' => 'project_create',
            ],
            [
                'id'    => 82,
                'title' => 'project_edit',
            ],
            [
                'id'    => 83,
                'title' => 'project_show',
            ],
            [
                'id'    => 84,
                'title' => 'project_delete',
            ],
            [
                'id'    => 85,
                'title' => 'project_access',
            ],
            [
                'id'    => 86,
                'title' => 'report_create',
            ],
            [
                'id'    => 87,
                'title' => 'report_edit',
            ],
            [
                'id'    => 88,
                'title' => 'report_show',
            ],
            [
                'id'    => 89,
                'title' => 'report_delete',
            ],
            [
                'id'    => 90,
                'title' => 'report_access',
            ],
            [
                'id'    => 91,
                'title' => 'chef_projet_create',
            ],
            [
                'id'    => 92,
                'title' => 'chef_projet_edit',
            ],
            [
                'id'    => 93,
                'title' => 'chef_projet_show',
            ],
            [
                'id'    => 94,
                'title' => 'chef_projet_delete',
            ],
            [
                'id'    => 95,
                'title' => 'chef_projet_access',
            ],
            [
                'id'    => 96,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 97,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 98,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 99,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 100,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
