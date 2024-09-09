<?php

loadPartials(path: "header", loadFromPublic: false);

/**
 * @var $users
 */

?>

<div class="page-wrapper toggled">
    <?php loadPartials(path: "sidebar", loadFromPublic: false); ?>

    <main class="page-content bg-gray-50 dark:bg-slate-800">
        <?php loadPartials(path: "top-header", loadFromPublic: false); ?>

        <div class="container-fluid relative px-3">
            <div class="layout-specing">
                <!-- Header section -->
                <div class="md:flex justify-between items-center">
                    <h5 class="text-lg font-semibold">Foydalanuvchilar</h5>

                    <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                        <li class="inline-block capitalize text-[16px] font-medium duration-500 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                            <a href="index.html">Hously</a>
                        </li>
                        <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180">
                            <i class="mdi mdi-chevron-right"></i>
                        </li>
                        <li class="inline-block capitalize text-[16px] font-medium text-green-600 dark:text-white" aria-current="page">
                            Review
                        </li>
                    </ul>
                </div>

                <!-- Users List -->
                <div class="grid md:grid-cols-3 gap-5 mt-5">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                        <?php foreach ($users as $user): ?>
                            <div class="bg-white dark:bg-slate-900 rounded-lg shadow dark:shadow-gray-800 p-6">
                                <!-- User Information -->
                                <div class="flex items-center pb-6 border-b border-gray-100 dark:border-gray-800">
                                    <img src="/assets/images/client/01.jpg" class="size-16 rounded-full shadow dark:shadow-gray-800" alt="User Image">
                                    <div class="ps-4">
                                        <a href="#" class="text-lg hover:text-green-600 duration-500 ease-in-out">
                                            <?= htmlspecialchars($user->username); ?>
                                        </a>
                                        <p class="text-slate-400"><?= htmlspecialchars($user->position); ?></p>
                                    </div>
                                </div>

                                <!-- User Details -->
                                <div class="mt-4 space-y-2">
                                    <div>
                                        <p class="text-slate-400">Email</p>
                                        <p class="text-lg font-medium"><?= htmlspecialchars($user->email); ?></p>
                                    </div>
                                    <div>
                                        <p class="text-slate-400">Phone</p>
                                        <p class="text-lg font-medium"><?= htmlspecialchars($user->phone); ?></p>
                                    </div>
                                    <div>
                                        <p class="text-slate-400">Gender</p>
                                        <p class="text-lg font-medium"><?= htmlspecialchars($user->gender); ?></p>
                                    </div>
                                    <div>
                                        <p class="text-slate-400">Ro'yxatdan o'tgan vaqti</p>
                                        <p class="text-lg font-medium"><?= htmlspecialchars($user->created_at); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php
loadPartials(path: 'footer', loadFromPublic: false);
?>
