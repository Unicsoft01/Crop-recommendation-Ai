<div class="ec-left-sidebar ec-bg-sidebar">
    <div id="sidebar" class="sidebar ec-sidebar-footer">
        <div class="ec-brand">
            <a href="index" title="Ekka">
                <img class="ec-brand-icon" src="assets/img/logo/ec-site-logo.png" alt="" />
                <span class="ec-brand-name text-truncate">Ai Admin</span>
            </a>
        </div>

        <!-- begin sidebar scrollbar -->
        <div class="ec-navigation" data-simplebar>
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <!-- Dashboard -->
                <x-comp.sidenav-item :icon="'mdi-view-dashboard-outline'" :text="'Dashboard'" :hr="true" />

                <x-comp.sidenav-item :icon="'mdi-view-dashboard-outline'" :text="'Recommendations'" :hr="true"  :routeName="'recommendations.index'" />

                <x-comp.sidenav-item :icon="'mdi-view-dashboard-outline'" :text="'Crops '" :hr="true"  :routeName="'crops.index'" />

                {{-- <!-- Users -->
                <x-comp.sidenav-haschild :icon="'mdi-account-group'" :text="'users'" :hr="true">
                    <x-comp.sidenav-item :noChild="false" :text="'User List'" :routeName="'profile.edit'" />
                    <x-comp.sidenav-item :noChild="false" :text="'staffs'" :routeName="'profile.edit'" />
                </x-comp.sidenav-haschild>

                <!-- Category -->
                <x-comp.sidenav-haschild :icon="'mdi-dns-outline'" :text="'Categories'">
                    <x-comp.sidenav-item :noChild="false" :text="'Create Category'" :routeName="'categories.create'" />
                    <x-comp.sidenav-item :noChild="false" :text="'Main Category'" :routeName="'categories.index'" />
                </x-comp.sidenav-haschild>

                <!-- Products -->
                <x-comp.sidenav-haschild :icon="'mdi-cow'" :text="'Livestocks'">
                    <x-comp.sidenav-item :noChild="false" :text="'Add Livestocks'" :routeName="'categories.index'" />
                    <x-comp.sidenav-item :noChild="false" :text="'List Livestocks'" :routeName="'categories.index'" />
                </x-comp.sidenav-haschild>

                <!-- Orders -->
                <x-comp.sidenav-haschild :icon="'mdi-cart'" :text="'Orders'">
                    <x-comp.sidenav-item :noChild="false" :text="'order list'" :routeName="'categories.index'" />
                    <x-comp.sidenav-item :noChild="false" :text="'Order Reports'" :routeName="'categories.index'" />
                </x-comp.sidenav-haschild>

                <!-- Brands -->
                <x-comp.sidenav-item :icon="'mdi-book-multiple'" :text="'sales Report'" :hr="true" />

                <x-comp.sidenav-haschild :icon="'mdi-cart-plus'" :text="'Farm Inventory'">
                    <x-comp.sidenav-item :noChild="false" :text="'Add new'" :routeName="'categories.index'" />
                    <x-comp.sidenav-item :noChild="false" :text="'Medications Records'" :routeName="'categories.index'" />
                </x-comp.sidenav-haschild>

                <small class="text-center" style="margin-left: 10px">Inventory management</small>
                <hr>
                <x-comp.sidenav-haschild :icon="'mdi-cart-plus'" :text="'Feeding Inventory'">
                    <x-comp.sidenav-item :noChild="false" :text="'inventory List'" :routeName="'feeding_inv.index'" />
                    <x-comp.sidenav-item :noChild="false" :text="'Add New feeds'" :routeName="'feeding_inv.create'" />
                </x-comp.sidenav-haschild>

                <x-comp.sidenav-haschild :icon="'mdi-cart-plus'" :text="'Vaccines and Meds'">
                    <x-comp.sidenav-item :noChild="false" :text="'Vaccines List'" :routeName="'vaccines.index'" />
                    <x-comp.sidenav-item :noChild="false" :text="'Add New Vaccine'" :routeName="'vaccines.create'" />
                </x-comp.sidenav-haschild>

                <x-comp.sidenav-item :icon="'mdi-book-multiple'" :text="'Invent. Reports'" :hr="true" />--}}
            </ul>
        </div>
    </div>
</div>
{{-- Livestock Inventory --}}
