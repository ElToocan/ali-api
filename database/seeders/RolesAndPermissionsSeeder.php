<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $salesman = Role::create(['name' =>'alizon-salesman']);

        $purchaser = Role::create(['name' =>'alizon-purchaser']);

        $orderPicker = Role::create(['name' =>'alizon-order-picker']);


        foreach(['customer','order','category'] as $model) {
            Permission::create(['name' => 'viewAny-'.$model]);
        }

        foreach(['create','read','update', 'delete'] as $permission) {
            Permission::create(['name' => $permission.'-customer']);
        }

        foreach(['create','read','update', 'delete'] as $permission) {
            Permission::create(['name' => $permission.'-order']);
        }

        foreach(['create','read','update', 'delete'] as $permission) {
            Permission::create(['name' => $permission.'-category']);
        }




        //Customer
        $salesman->givePermissionTo('viewAny-customer');
        $salesman->givePermissionTo('create-customer');
        $salesman->givePermissionTo('read-customer');
        $salesman->givePermissionTo('update-customer');

        $purchaser->givePermissionTo('viewAny-customer');
        $purchaser->givePermissionTo('read-customer');

        $orderPicker->givePermissionTo('read-customer');
        $orderPicker->givePermissionTo('viewAny-customer');

        //Order
        $salesman->givePermissionTo('viewAny-order');
        $salesman->givePermissionTo('create-order');
        $salesman->givePermissionTo('read-order');
        $salesman->givePermissionTo('update-order');

        $purchaser->givePermissionTo('viewAny-order');
        $purchaser->givePermissionTo('read-order');

        $orderPicker->givePermissionTo('viewAny-order');
        $orderPicker->givePermissionTo('read-order');
        $orderPicker->givePermissionTo('update-order');

        //Category
        $salesman->givePermissionTo('viewAny-category');
        $salesman->givePermissionTo('read-category');

        $purchaser->givePermissionTo('viewAny-category');
        $purchaser->givePermissionTo('create-category');
        $purchaser->givePermissionTo('read-category');
        $purchaser->givePermissionTo('update-category');
        $purchaser->givePermissionTo('delete-category');

        $orderPicker->givePermissionTo('viewAny-category');
        $orderPicker->givePermissionTo('read-category');
        $orderPicker->givePermissionTo('update-category');


        foreach(\App\Models\User::where('email','LIKE','saler%')->get() as $user) {
            $user->assignRole($salesman);
        }

        foreach(\App\Models\User::where('email','LIKE','purchaser%')->get() as $user) {
            $user->assignRole($purchaser);
        }

        foreach(\App\Models\User::where('email','LIKE','orderPicker%')->get() as $user) {
            $user->assignRole($orderPicker);
        }

    }
}
