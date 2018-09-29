<?php

use Faker\Factory;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Role;
use App\Permission;
use App\Degree;
class AdminSeeder extends DatabaseSeeder
{

    public function run()
    {

        $admin = User::where('email','=','admin@admin.com')->first();
        if($admin == null){
            $admin = new User();
            $admin->email = 'admin@admin.com';
            $admin->name = 'Admin';
            $admin->password = bcrypt("1");
            $admin->save();
        }


        if($admin->profile == null){
            $profile = new \App\Profile();
            $profile->user_id = $admin->id;
            $profile->save();
        }

        $user = User::where('email','=','user@user.com')->first();
        if($user == null) {
            $user = new User();
            $user->email = 'user@user.com';
            $user->name = 'User';
            $user->password = bcrypt("1");
            $user->save();
        }

        //Create Service Provider

        $usersp = User::where('email','=','reysp@gmail.com')->first();
        if($usersp == null) {
            $usersp = new User();
            $usersp->email = 'reysp@gmail.com';
            $usersp->name = 'Rey SP';
            $usersp->password = bcrypt("1");
            $usersp->save();
        }
        $deg = new Degree();
        $deg->medical_education_level = "Diploma in General Medicine and Surgery";
        $deg->health_institution_name = "King Abdulaziz University";
        $deg->issuing_country = "Philippines";
        $deg->degree_name = "Test Degree";
        $deg->status = "active";
        
        $deg->user_id = $usersp->id;
        $deg->save();

        $deg = new Degree();
        $deg->diploma_education_level = "Diploma in General Medicine and Surgery";
        $deg->health_institution_name = "King Abdulaziz University";
        $deg->issuing_country = "Philippines";
        $deg->degree_name = "Test Degree";
        $deg->status = "active";
        
        $deg->user_id = $usersp->id;
        $deg->save();



        if($user->profile == null){
            $profile = new \App\Profile();
            $profile->user_id = $user->id;
            $profile->save();
        }

        if($usersp->profile == null){
            $profile = new \App\Profile();
            $profile->user_id = $usersp->id;
            $profile->save();
        }

        //Creating Roles
        $admin_role = Role::firstOrcreate(['name' => 'admin']);
        $user_role = Role::firstOrcreate(['name' => 'user']);
        $serviceprovider_role = Role::firstOrcreate(['name' => 'serviceprovider']);

        $permission = Permission::firstOrcreate(['name' => 'All Permission']);

        if(!$admin->hasRole('admin')){
            $admin->assignRole('admin');
            $admin_role->givePermissionTo($permission);
        }
        if(!$user->hasRole('user')){
            $user->assignRole('user');
        }

        if(!$usersp->hasRole('serviceprovider')){
            $usersp->assignRole('serviceprovider');
            $serviceprovider_role->givePermissionTo($permission);
        }



        //Assigning default permissions to Admin
        $blog_add = Permission::firstOrCreate([
            'name' => 'add-blog'
        ]);
        $blog_view = Permission::firstOrCreate([
            'name' => 'view-blog'
        ]);
        $blog_edit = Permission::firstOrCreate([
            'name' => 'edit-blog'
        ]);
        $blog_delete = Permission::firstOrCreate([
            'name' => 'delete-blog'
        ]);


         //Assigning default permissions to Admin
         $deg_add = Permission::firstOrCreate([
            'name' => 'add-degrees'
        ]);
        $deg_view = Permission::firstOrCreate([
            'name' => 'view-degrees'
        ]);
        $deg_edit = Permission::firstOrCreate([
            'name' => 'edit-degrees'
        ]);
        $deg_delete = Permission::firstOrCreate([
            'name' => 'delete-degrees'
        ]);


        if(!$usersp->hasPermission($blog_add)){
            $admin_role->givePermissionTo($blog_add);
        }

        if(!$usersp->hasPermission($blog_view)) {
            $admin_role->givePermissionTo($blog_view);
        }

        if(!$usersp->hasPermission($blog_edit)) {
            $admin_role->givePermissionTo($blog_edit);
        }

        if(!$usersp->hasPermission($blog_delete)) {
            $admin_role->givePermissionTo($blog_delete);
        }

        //SP

        if(!$admin->hasPermission($deg_add)){
            $serviceprovider_role->givePermissionTo($deg_add);
        }

        if(!$admin->hasPermission($deg_view)) {
            $serviceprovider_role->givePermissionTo($deg_view);
        }

        if(!$admin->hasPermission($deg_edit)) {
            $serviceprovider_role->givePermissionTo($deg_edit);
        }

        if(!$admin->hasPermission($deg_delete)) {
            $serviceprovider_role->givePermissionTo($deg_delete);
        }


        $blog_category_add = Permission::firstOrCreate([
            'name' => 'add-blog-category'
        ]);
        $blog_category_view = Permission::firstOrCreate([
            'name' => 'view-blog-category'
        ]);
        $blog_category_edit = Permission::firstOrCreate([
            'name' => 'edit-blog-category'
        ]);
        $blog_category_delete = Permission::firstOrCreate([
            'name' => 'delete-blog-category'
        ]);

        if(!$admin->hasPermission($blog_category_add)) {
            $admin_role->givePermissionTo($blog_category_add);
        }
        if(!$admin->hasPermission($blog_category_view)) {
            $admin_role->givePermissionTo($blog_category_view);
        }
        if(!$admin->hasPermission($blog_category_edit)) {
            $admin_role->givePermissionTo($blog_category_edit);
        }
        if(!$admin->hasPermission($blog_category_delete)) {
            $admin_role->givePermissionTo($blog_category_delete);
        }

        $this->command->info('Admin User created with username admin@admin.com and password admin');
    }

}