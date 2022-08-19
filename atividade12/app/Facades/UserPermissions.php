<?php

    namespace App\Facades;

    use App\Models\Permission;

    class UserPermissions {
        public static function loadPermissions($user_role) {
            $sess = Array();
            $perm = Permission::with('rule')->where('role_id', $user_role)->get();

            foreach($perm as $item) {
                $sess[$item->rule->name] = (boolean) $item->permissao;
            }

            session(['user_permissions' => $sess]);
        }

        public static function isAuthorized($rule) {
            $permissions = session('user_permissions');
            return $permissions[$rule];
        }
    }