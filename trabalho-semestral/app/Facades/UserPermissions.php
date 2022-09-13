<?php

    namespace App\Facades;

    use App\Models\Permission;

    class UserPermissions {
        public static function loadPermissions($user_role) {
            $sess = Array();
            $perm = Permission::with('resource')->where('role_id', $user_role)->get();

            foreach($perm as $item) {
                $sess[$item->resource->name] = (boolean) $item->permission;
            }

            session(['user_permissions' => $sess]);
        }

        public static function isAuthorized($resource) {
            $permissions = session('user_permissions');
            return $permissions[$resource];
        }
    }