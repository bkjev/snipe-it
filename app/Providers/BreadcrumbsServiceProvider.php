<?php namespace App\Providers;

use App\Models\Accessory;
use App\Models\Asset;
use App\Models\AssetMaintenance;
use App\Models\AssetModel;
use App\Models\Category;
use App\Models\Company;
use App\Models\Component;
use App\Models\Consumable;
use App\Models\CustomField;
use App\Models\Department;
use App\Models\Depreciation;
use App\Models\Group;
use App\Models\License;
use App\Models\LicenseSeat;
use App\Models\Location;
use App\Models\Manufacturer;
use App\Models\PredefinedKit;
use App\Models\Statuslabel;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Tabuna\Breadcrumbs\Breadcrumbs;
use Tabuna\Breadcrumbs\Trail;

class BreadcrumbsServiceProvider extends ServiceProvider
{
/**
* Handles the resource routes for first-class objects
*
* @return void
*/
    public function boot()
    {

        // Default home
        Breadcrumbs::for('home', fn (Trail $trail) =>
        $trail->push('<x-icon type="home" /><span class="sr-only">'.trans('general.dashboard').'</span>', route('home'))
        );

        /**
         * Asset Breadcrumbs
         */


            if ((request()->is('hardware*')) && (request()->status!='')) {
                Breadcrumbs::for('hardware.index', fn (Trail $trail) =>
                $trail->parent('home', route('home'))
                    ->push(trans('general.assets'), route('hardware.index'))
                    ->push(request()->status.' Assets', route('hardware.index', ['status' => request()->status]))
                );

            } else {
                Breadcrumbs::for('hardware.index', fn (Trail $trail) =>
                $trail->parent('home', route('home'))
                    ->push(trans('general.assets'), route('hardware.index'))
                );
            }




        Breadcrumbs::for('hardware.create', fn (Trail $trail) =>
        $trail->parent('hardware.index', route('hardware.index'))
        ->push(trans('general.create'), route('hardware.create'))
        );

        Breadcrumbs::for('hardware.show', fn (Trail $trail, Asset $asset) =>
        $trail->parent('hardware.index', route('hardware.index'))
            ->push($asset->asset_tag, route('home'))
        );

        Breadcrumbs::for('hardware.edit', fn (Trail $trail, Asset $asset) =>
        $trail->parent('hardware.index', route('hardware.index'))
            ->push(trans('general.breadcrumb_button_actions.edit_item', ['name' => $asset->asset_tag]), route('home'))
        );

        // Non-resource routes
        Breadcrumbs::for('hardware.checkout.create', fn(Trail $trail, Asset $asset) => $trail
            ->parent('hardware.show', $asset)
            ->push(trans('general.checkout'), null)
        );



        /**
         * Asset Model Breadcrumbs
         */
        Breadcrumbs::for('models.index', fn (Trail $trail) =>
        $trail->parent('hardware.index', route('hardware.index'))
            ->push(trans('general.asset_models'), route('models.index'))
        );

        Breadcrumbs::for('models.create', fn (Trail $trail) =>
        $trail->parent('models.index', route('models.index'))
            ->push(trans('general.create'), route('home'))
        );

        Breadcrumbs::for('models.show', fn (Trail $trail, AssetModel $model) =>
        $trail->parent('models.index', route('models.index'))
            ->push($model->name, route('home'))
        );

        Breadcrumbs::for('models.edit', fn (Trail $trail, AssetModel $model) =>
        $trail->parent('models.index', route('models.index'))
            ->push(trans('general.breadcrumb_button_actions.edit_item', ['name' => $model->name]), route('home'))
        );


        /**
         * Accessories Breadcrumbs
         */
        Breadcrumbs::for('accessories.index', fn (Trail $trail) =>
        $trail->parent('home', route('home'))
            ->push(trans('general.accessories'), route('accessories.index'))
        );

        Breadcrumbs::for('accessories.create', fn (Trail $trail) =>
        $trail->parent('accessories.index', route('accessories.index'))
            ->push(trans('general.create'), route('home'))
        );

        Breadcrumbs::for('accessories.show', fn (Trail $trail, Accessory $accessory) =>
        $trail->parent('accessories.index', route('accessories.index'))
            ->push($accessory->name, route('home'))
        );

        Breadcrumbs::for('accessories.edit', fn (Trail $trail, Accessory $accessory) =>
        $trail->parent('accessories.index', route('accessories.index'))
            ->push(trans('general.breadcrumb_button_actions.edit_item', ['name' => $accessory->name]), route('home'))
        );


        /**
         * Categories Breadcrumbs
         */
        Breadcrumbs::for('categories.index', fn (Trail $trail) =>
        $trail->parent('home', route('home'))
            ->push(trans('general.categories'), route('categories.index'))
        );

        Breadcrumbs::for('categories.create', fn (Trail $trail) =>
        $trail->parent('categories.index', route('categories.index'))
            ->push(trans('general.create'), route('home'))
        );

        Breadcrumbs::for('categories.show', fn (Trail $trail, Category $category) =>
        $trail->parent('categories.index', route('categories.index'))
            ->push($category->name, route('home'))
        );

        Breadcrumbs::for('categories.edit', fn (Trail $trail, Category $category) =>
        $trail->parent('categories.index', route('categories.index'))
            ->push(trans('general.breadcrumb_button_actions.edit_item', ['name' => $category->name]), route('home'))
        );



        /**
         * Company Breadcrumbs
         */
        Breadcrumbs::for('companies.index', fn (Trail $trail) =>
        $trail->parent('home', route('home'))
            ->push(trans('general.companies'), route('companies.index'))
        );

        Breadcrumbs::for('companies.create', fn (Trail $trail) =>
        $trail->parent('companies.index', route('companies.index'))
            ->push(trans('general.create'), route('home'))
        );

        Breadcrumbs::for('companies.show', fn (Trail $trail, Company $company) =>
        $trail->parent('companies.index', route('companies.index'))
            ->push($company->name, route('home'))
        );

        Breadcrumbs::for('companies.edit', fn (Trail $trail, Company $company) =>
        $trail->parent('companies.index', route('companies.index'))
            ->push(trans('general.breadcrumb_button_actions.edit_item', ['name' => $company->name]), route('home'))
        );


        /**
         * Components Breadcrumbs
         */
        Breadcrumbs::for('components.index', fn (Trail $trail) =>
        $trail->parent('home', route('home'))
            ->push(trans('general.components'), route('components.index'))
        );

        Breadcrumbs::for('components.create', fn (Trail $trail) =>
        $trail->parent('components.index', route('components.index'))
            ->push(trans('general.create'), route('home'))
        );

        Breadcrumbs::for('components.show', fn (Trail $trail, Component $component) =>
        $trail->parent('components.index', route('components.index'))
            ->push($component->name, route('home'))
        );

        Breadcrumbs::for('components.edit', fn (Trail $trail, Component $component) =>
        $trail->parent('components.index', route('components.index'))
            ->push(trans('general.breadcrumb_button_actions.edit_item', ['name' => $component->name]), route('home'))
        );


        /**
         * Consumables Breadcrumbs
         */
        Breadcrumbs::for('consumables.index', fn (Trail $trail) =>
        $trail->parent('home', route('home'))
            ->push(trans('general.consumables'), route('consumables.index'))
        );

        Breadcrumbs::for('consumables.create', fn (Trail $trail) =>
        $trail->parent('consumables.index', route('consumables.index'))
            ->push(trans('general.create'), route('home'))
        );

        Breadcrumbs::for('consumables.show', fn (Trail $trail, Consumable $consumable) =>
        $trail->parent('consumables.index', route('consumables.index'))
            ->push($consumable->name, route('home'))
        );

        Breadcrumbs::for('consumables.edit', fn (Trail $trail, Consumable $consumable) =>
        $trail->parent('consumables.index', route('consumables.index'))
            ->push(trans('general.breadcrumb_button_actions.edit_item', ['name' => $consumable->name]), route('home'))
        );

        /**
         * Custom fields Breadcrumbs
         */
        Breadcrumbs::for('fields.index', fn (Trail $trail) =>
        $trail->parent('models.index', route('models.index'))
            ->push(trans('admin/custom_fields/general.custom_fields'), route('fields.index'))
        );

        Breadcrumbs::for('fields.create', fn (Trail $trail) =>
        $trail->parent('fields.index', route('fields.index'))
            ->push(trans('general.create'), route('fields.create'))
        );

        Breadcrumbs::for('fields.edit', fn (Trail $trail, CustomField $field) =>
        $trail->parent('fields.index', route('fields.index'))
            ->push($field->name, route('fields.edit', $field))
        );

        /**
         * Department Breadcrumbs
         */
        Breadcrumbs::for('departments.index', fn (Trail $trail) =>
        $trail->parent('home', route('home'))
            ->push(trans('general.departments'), route('departments.index'))
        );

        Breadcrumbs::for('departments.create', fn (Trail $trail) =>
        $trail->parent('departments.index', route('departments.index'))
            ->push(trans('general.create'), route('home'))
        );

        Breadcrumbs::for('departments.show', fn (Trail $trail, Department $department) =>
        $trail->parent('departments.index', route('departments.index'))
            ->push($department->name, route('home'))
        );

        Breadcrumbs::for('departments.edit', fn (Trail $trail, Department $department) =>
        $trail->parent('departments.index', route('departments.index'))
            ->push(trans('general.breadcrumb_button_actions.edit_item', ['name' => $department->name]), route('home'))
        );


        /**
         * Department Breadcrumbs
         */
        Breadcrumbs::for('depreciations.index', fn (Trail $trail) =>
        $trail->parent('home', route('home'))
            ->push(trans('general.depreciations'), route('depreciations.index'))
        );

        Breadcrumbs::for('depreciations.create', fn (Trail $trail) =>
        $trail->parent('depreciations.index', route('depreciations.index'))
            ->push(trans('general.create'), route('home'))
        );

        Breadcrumbs::for('depreciations.show', fn (Trail $trail, Depreciation $depreciation) =>
        $trail->parent('depreciations.index', route('depreciations.index'))
            ->push($depreciation->name, route('home'))
        );

        Breadcrumbs::for('depreciations.edit', fn (Trail $trail, Depreciation $depreciation) =>
        $trail->parent('depreciations.index', route('depreciations.index'))
            ->push(trans('general.breadcrumb_button_actions.edit_item', ['name' => $depreciation->name]), route('home'))
        );

        /**
         * Groups Breadcrumbs
         */
        Breadcrumbs::for('groups.index', fn (Trail $trail) =>
        $trail->parent('home', route('home'))
            ->push(trans('general.groups'), route('groups.index'))
        );

        Breadcrumbs::for('groups.create', fn (Trail $trail) =>
        $trail->parent('groups.index', route('groups.index'))
            ->push(trans('general.create'), route('home'))
        );

        Breadcrumbs::for('groups.show', fn (Trail $trail, Group $group) =>
        $trail->parent('groups.index', route('groups.index'))
            ->push($group->name, route('home'))
        );

        Breadcrumbs::for('groups.edit', fn (Trail $trail, Group $group) =>
        $trail->parent('groups.index', route('groups.index'))
            ->push(trans('general.breadcrumb_button_actions.edit_item', ['name' => $group->name]), route('home'))
        );


        /**
         * Licenses Breadcrumbs
         */
        Breadcrumbs::for('licenses.index', fn (Trail $trail) =>
        $trail->parent('home', route('home'))
            ->push(trans('general.licenses'), route('licenses.index'))
        );

        Breadcrumbs::for('licenses.create', fn (Trail $trail) =>
        $trail->parent('licenses.index', route('licenses.index'))
            ->push(trans('general.create'), route('home'))
        );

        Breadcrumbs::for('licenses.show', fn (Trail $trail, License $license) =>
        $trail->parent('licenses.index', route('licenses.index'))
            ->push($license->name, route('licenses.show', $license))
        );

        Breadcrumbs::for('licenses.edit', fn (Trail $trail, License $license) =>
        $trail->parent('licenses.index', route('licenses.index'))
            ->push(trans('general.breadcrumb_button_actions.edit_item', ['name' => $license->name]), route('home'))
        );


        // Non-resource routes
        Breadcrumbs::for('licenses.checkout', fn(Trail $trail, License $license) => $trail
            ->parent('licenses.show', $license)
            ->push(trans('general.checkout'), null)
        );

        Breadcrumbs::for('licenses.checkin', fn(Trail $trail, LicenseSeat $licenseSeat) => $trail
            ->parent('licenses.show', $licenseSeat->license)
            ->push(trans('general.checkin'), null)
        );


        /**
         * Locations Breadcrumbs
         */
        Breadcrumbs::for('locations.index', fn (Trail $trail) =>
        $trail->parent('home', route('home'))
            ->push(trans('general.locations'), route('locations.index'))
        );

        Breadcrumbs::for('locations.create', fn (Trail $trail) =>
        $trail->parent('locations.index', route('locations.index'))
            ->push(trans('general.create'), route('home'))
        );

        Breadcrumbs::for('locations.show', fn (Trail $trail, Location $location) =>
        $trail->parent('locations.index', route('locations.index'))
            ->push($location->name, route('home'))
        );

        Breadcrumbs::for('locations.edit', fn (Trail $trail, Location $location) =>
        $trail->parent('locations.index', route('locations.index'))
            ->push(trans('general.breadcrumb_button_actions.edit_item', ['name' => $location->name]), route('home'))
        );

        /**
         * Maintenances Breadcrumbs
         */
        Breadcrumbs::for('maintenances.index', fn (Trail $trail) =>
        $trail->parent('hardware.index', route('hardware.index'))
            ->push(trans('general.maintenances'), route('maintenances.index'))
        );

        Breadcrumbs::for('maintenances.create', fn (Trail $trail) =>
        $trail->parent('maintenances.index', route('maintenances.index'))
            ->push(trans('general.create'), route('maintenances.create'))
        );

        Breadcrumbs::for('maintenances.show', fn (Trail $trail, AssetMaintenance $maintenance) =>
        $trail->parent('maintenances.index', route('locations.index'))
            ->push($maintenance->title, route('maintenances.show', $maintenance))
        );

        Breadcrumbs::for('manufacturers.edit', fn (Trail $trail, Manufacturer $manufacturer) =>
        $trail->parent('manufacturers.index', route('manufacturers.index'))
            ->push(trans('general.breadcrumb_button_actions.edit_item', ['name' => $manufacturer->name]), route('home'))
        );


        /**
         * Manufacturers Breadcrumbs
         */
        Breadcrumbs::for('manufacturers.index', fn (Trail $trail) =>
        $trail->parent('home', route('home'))
            ->push(trans('general.manufacturers'), route('manufacturers.index'))
        );

        Breadcrumbs::for('manufacturers.create', fn (Trail $trail) =>
        $trail->parent('manufacturers.index', route('manufacturers.index'))
            ->push(trans('general.create'), route('home'))
        );

        Breadcrumbs::for('manufacturers.show', fn (Trail $trail, Manufacturer $manufacturer) =>
        $trail->parent('manufacturers.index', route('manufacturers.index'))
            ->push($manufacturer->name, route('home'))
        );

        Breadcrumbs::for('manufacturers.edit', fn (Trail $trail, Manufacturer $manufacturer) =>
        $trail->parent('manufacturers.index', route('manufacturers.index'))
            ->push(trans('general.breadcrumb_button_actions.edit_item', ['name' => $manufacturer->name]), route('home'))
        );


        /**
         * Predefined Kits Breadcrumbs
         */
        Breadcrumbs::for('kits.index', fn (Trail $trail) =>
        $trail->parent('home', route('home'))
            ->push(trans('general.kits'), route('kits.index'))
        );

        Breadcrumbs::for('kits.create', fn (Trail $trail) =>
        $trail->parent('kits.index', route('kits.index'))
            ->push(trans('general.create'), route('kits.create'))
        );

        Breadcrumbs::for('kits.show', fn (Trail $trail, PredefinedKit $kit) =>
        $trail->parent('kits.index', route('kits.index'))
            ->push($kit->name, route('kits.show', $kit))
        );

        Breadcrumbs::for('kits.edit', fn (Trail $trail, PredefinedKit $kit) =>
        $trail->parent('kits.index', route('kits.index'))
            ->push(trans('general.breadcrumb_button_actions.edit_item', ['name' => $kit->name]), route('kits.edit', $kit))
        );


        /**
         * Status Labels Breadcrumbs
         */
        Breadcrumbs::for('statuslabels.index', fn (Trail $trail) =>
        $trail->parent('home', route('home'))
            ->push(trans('general.status_labels'), route('statuslabels.index'))
        );

        Breadcrumbs::for('statuslabels.create', fn (Trail $trail) =>
        $trail->parent('statuslabels.index', route('statuslabels.index'))
            ->push(trans('general.create'), route('home'))
        );

        Breadcrumbs::for('statuslabels.show', fn (Trail $trail, Statuslabel $statuslabel) =>
        $trail->parent('statuslabels.index', route('statuslabels.index'))
            ->push($statuslabel->name, route('home'))
        );

        Breadcrumbs::for('statuslabels.edit', fn (Trail $trail, Statuslabel $statuslabel) =>
        $trail->parent('statuslabels.index', route('statuslabels.index'))
            ->push(trans('general.breadcrumb_button_actions.edit_item', ['name' => $statuslabel->name]), route('home'))
        );


        /**
         * Suppliers Breadcrumbs
         */
        Breadcrumbs::for('suppliers.index', fn (Trail $trail) =>
        $trail->parent('home', route('home'))
            ->push(trans('general.suppliers'), route('suppliers.index'))
        );

        Breadcrumbs::for('suppliers.create', fn (Trail $trail) =>
        $trail->parent('suppliers.index', route('suppliers.index'))
            ->push(trans('general.create'), route('home'))
        );

        Breadcrumbs::for('suppliers.show', fn (Trail $trail, Supplier $supplier) =>
        $trail->parent('suppliers.index', route('suppliers.index'))
            ->push($supplier->name, route('home'))
        );

        Breadcrumbs::for('suppliers.edit', fn (Trail $trail, Supplier $supplier) =>
        $trail->parent('suppliers.index', route('suppliers.index'))
            ->push(trans('general.breadcrumb_button_actions.edit_item', ['name' => $supplier->name]), route('home'))
        );



        /**
         * Users Breadcrumbs
         */
        Breadcrumbs::for('users.index', fn (Trail $trail) =>
        $trail->parent('home', route('home'))
            ->push(trans('general.users'), route('users.index'))
        );

        Breadcrumbs::for('users.create', fn (Trail $trail) =>
        $trail->parent('users.index', route('users.index'))
            ->push(trans('general.create'), route('home'))
        );

        Breadcrumbs::for('users.show', fn (Trail $trail, User $user) =>
        $trail->parent('users.index', route('users.index'))
            ->push($user->username, route('home'))
        );

        Breadcrumbs::for('users.edit', fn (Trail $trail, User $user) =>
        $trail->parent('users.index', route('users.index'))
            ->push(trans('general.breadcrumb_button_actions.edit_item', ['name' => $user->name]), route('home'))
        );



    }


}