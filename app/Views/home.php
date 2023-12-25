<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3  gap-5 p-4">
        <div class="bg-white rounded-md border p-5"> 
            <h2 class="text-xl mb-2 font-semibold"> Company Management</h2> 
            <div class="border rounded-md  p-4 flex flex-col">
                <a href="/add-company" class="hover:underline"> <i class="fas mr-1 fa-plus"></i> Add new company</a>
                <a href="/companies" class="hover:underline"> <i class="fas mr-1 fa-list"></i> View Companies</a>
            </div>
        </div>
        <div class="bg-white rounded-md border p-5"> 
            <h2 class="text-xl mb-2 font-semibold"> Funding Management</h2> 
            <div class="border rounded-md  p-4 flex flex-col">
                <a href="/add-funding" class="hover:underline"> <i class="fas mr-1 fa-plus"></i> Add new funding</a>
                <a href="/fundings" class="hover:underline"> <i class="fas mr-1 fa-list"></i> View Fundings</a>
            </div>
        </div>
        <div class="bg-white rounded-md border p-5"> 
        <h2 class="text-xl mb-2 font-semibold"> Contract Management</h2> 
            <div class="border rounded-md  p-4 flex flex-col">
                <a href="/add-contract" class="hover:underline"> <i class="fas fa-plus"></i> Add new contract</a>
                <a href="/contracts" class="hover:underline"> <i class="fas mr-1 fa-list"></i> View Contracts</a>
            </div>     
        </div>
        <div class="bg-white rounded-md border p-5"> 
            <h2 class="text-xl mb-2 font-semibold"> Payment Management</h2> 
            <div class="border rounded-md  p-4 flex flex-col">
                <a href="/add-payment" class="hover:underline"> <i class="fas fa-plus"></i> Add new Payment</a>
                <a href="/payments" class="hover:underline"> <i class="fas mr-1 fa-list"></i> View Payments</a>
            </div>     
         </div>
         <?php $session = session();
         if ($session->has('role')) {
            $role = $session->get('role');

            if ($role == 'admin') { ?>
            <div class="bg-white rounded-md border p-5"> 
                <h2 class="text-xl mb-2 font-semibold"> User Management</h2> 
                <div class="border rounded-md  p-4 flex flex-col">
                    <a href="/add-user" class="hover:underline"> <i class="fas mr-1 fa-user-plus"></i> Add user</a>
                    <a href="/users" class="hover:underline"> <i class="fas mr-1 fa-users"></i> View users </a>
                </div>
            </div>
         <?php
            }
         } ?>
    </div>
<?= $this->endSection() ?>

