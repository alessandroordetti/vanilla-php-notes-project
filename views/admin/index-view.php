
<?php view('partials/head.php') ?>
<?php view('partials/nav.php') ?>

<main class="bg-slate-900">
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <div class="text-slate-200 text-xl font-bold">
            <h1>Admin Panel</h1>
            <p>Welcome back, <?php echo $_SESSION['admin'] ?? 'Admin' ?></p>
        </div>

        <div class="relative font-inter antialiased">
            <main class="relative min-h-screen flex flex-col justify-center bg-slate-900 overflow-hidden">
                <div class="w-full max-w-6xl mx-auto px-4 md:px-6 py-24">
            
                    <!-- Cards container -->
                    <div class="max-w-sm mx-auto grid gap-6 lg:grid-cols-3 items-start lg:max-w-none group" data-spotlight>
                
                        <!-- Card 1 -->
                        <div class="relative h-full bg-slate-800 rounded-3xl p-px before:absolute before:w-80 before:h-80 before:-left-40 before:-top-40 before:bg-slate-400 before:rounded-full before:opacity-0 before:pointer-events-none before:transition-opacity before:duration-500 before:translate-x-[var(--mouse-x)] before:translate-y-[var(--mouse-y)] before:group-hover:opacity-100 before:z-10 before:blur-[100px] after:absolute after:w-96 after:h-96 after:-left-48 after:-top-48 after:bg-indigo-500 after:rounded-full after:opacity-0 after:pointer-events-none after:transition-opacity after:duration-500 after:translate-x-[var(--mouse-x)] after:translate-y-[var(--mouse-y)] after:hover:opacity-10 after:z-30 after:blur-[100px] overflow-hidden">
                            <div class="relative h-full bg-slate-900 p-6 pb-8 rounded-[inherit] z-20 overflow-hidden">
                                <!-- Radial gradient -->
                                <div class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/2 aspect-square" aria-hidden="true">
                                    <div class="absolute inset-0 translate-z-0 bg-slate-800 rounded-full blur-[80px]"></div>
                                </div>
                                <div class="flex flex-col items-center text-center text-slate-200 text-xl font-bold">
                                    <h1 class="mb-5">Latest logged users</h1>
                                </div>

                                <div>
                                    <ul>
                                        <?php foreach($latestUsers as $user): ?>
                                            <li class="text-sm text-slate-300 mb-5 font-bold">
                                                <?php echo "<p>" . ucfirst($user['email']) . "</p>"; ?> 
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="relative h-full bg-slate-800 rounded-3xl p-px before:absolute before:w-80 before:h-80 before:-left-40 before:-top-40 before:bg-slate-400 before:rounded-full before:opacity-0 before:pointer-events-none before:transition-opacity before:duration-500 before:translate-x-[var(--mouse-x)] before:translate-y-[var(--mouse-y)] before:group-hover:opacity-100 before:z-10 before:blur-[100px] after:absolute after:w-96 after:h-96 after:-left-48 after:-top-48 after:bg-indigo-500 after:rounded-full after:opacity-0 after:pointer-events-none after:transition-opacity after:duration-500 after:translate-x-[var(--mouse-x)] after:translate-y-[var(--mouse-y)] after:hover:opacity-10 after:z-30 after:blur-[100px] overflow-hidden">
                            <div class="relative h-full bg-slate-900 p-6 pb-8 rounded-[inherit] z-20 overflow-hidden">
                                <!-- Radial gradient -->
                                <div class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/2 aspect-square" aria-hidden="true">
                                    <div class="absolute inset-0 translate-z-0 bg-slate-800 rounded-full blur-[80px]"></div>
                                </div>
                                <div class="flex flex-col h-full items-center text-center">
                                    <!-- Image -->
                                    <div class="relative inline-flex">
                                        <div class="w-[40%] h-[40%] absolute inset-0 m-auto -translate-y-[10%] blur-3xl -z-10 rounded-full bg-indigo-600" aria-hidden="true"></div>
                                        <img class="inline-flex" src="https://cruip-tutorials.vercel.app/spotlight-effect/card-02.png" width="200" height="200" alt="Card 02" />
                                    </div>
                                    <!-- Text -->
                                    <div class="grow h-100 mb-5 flex flex-col-reverse">
                                        <p class="text-sm text-slate-300">Quickly handle users' profiles</p>
                                        <h2 class="text-xl text-pink-600 font-bold mb-1">Handle users</h2>
                                    </div>
                                    <a class="inline-flex justify-center items-center whitespace-nowrap rounded-lg bg-slate-800 hover:bg-slate-900 border border-slate-700 px-3 py-1.5 text-sm font-medium text-slate-300 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 dark:focus-visible:ring-slate-600 transition-colors duration-150" href="#0">
                                        <svg class="fill-slate-500 mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="14">
                                            <path d="M12.82 8.116A.5.5 0 0 0 12 8.5V10h-.185a3 3 0 0 1-2.258-1.025l-.4-.457-1.328 1.519.223.255A5 5 0 0 0 11.815 12H12v1.5a.5.5 0 0 0 .82.384l3-2.5a.5.5 0 0 0 0-.768l-3-2.5ZM12.82.116A.5.5 0 0 0 12 .5V2h-.185a5 5 0 0 0-3.763 1.708L3.443 8.975A3 3 0 0 1 1.185 10H1a1 1 0 1 0 0 2h.185a5 5 0 0 0 3.763-1.708l4.609-5.267A3 3 0 0 1 11.815 4H12v1.5a.5.5 0 0 0 .82.384l3-2.5a.5.5 0 0 0 0-.768l-3-2.5ZM1 4h.185a3 3 0 0 1 2.258 1.025l.4.457 1.328-1.52-.223-.254A5 5 0 0 0 1.185 2H1a1 1 0 0 0 0 2Z" />
                                        </svg>
                                        <span>Action</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="relative h-full bg-slate-800 rounded-3xl p-px before:absolute before:w-80 before:h-80 before:-left-40 before:-top-40 before:bg-slate-400 before:rounded-full before:opacity-0 before:pointer-events-none before:transition-opacity before:duration-500 before:translate-x-[var(--mouse-x)] before:translate-y-[var(--mouse-y)] before:group-hover:opacity-100 before:z-10 before:blur-[100px] after:absolute after:w-96 after:h-96 after:-left-48 after:-top-48 after:bg-indigo-500 after:rounded-full after:opacity-0 after:pointer-events-none after:transition-opacity after:duration-500 after:translate-x-[var(--mouse-x)] after:translate-y-[var(--mouse-y)] after:hover:opacity-10 after:z-30 after:blur-[100px] overflow-hidden">
                            <div class="relative h-full bg-slate-900 p-6 pb-8 rounded-[inherit] z-20 overflow-hidden">
                                <!-- Radial gradient -->
                                <div class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/2 aspect-square" aria-hidden="true">
                                    <div class="absolute inset-0 translate-z-0 bg-slate-800 rounded-full blur-[80px]"></div>
                                </div>
                                <div class="flex flex-col h-full items-center text-center">
                                    <ul>
                                        <?php foreach ($latest5Posts as $post) { ?>
                                            <li class="text-sm text-slate-300 mb-5 font-bold"><?php echo $post['body'] ?></li>
                                        <?php } ?>
                                    </ul>
                                    
                                    <!-- Text -->
                                    <div class="grow mb-5">
                                        <h2 class="text-xl text-pink-600 font-bold mb-1">Handle notes</h2>
                                        <p class="text-sm text-slate-300">Quickly handle users' notes</p>
                                    </div>
                                    <a class="inline-flex justify-center items-center whitespace-nowrap rounded-lg bg-slate-800 hover:bg-slate-900 border border-slate-700 px-3 py-1.5 text-sm font-medium text-slate-300 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 dark:focus-visible:ring-slate-600 transition-colors duration-150" href="#0">
                                        <svg class="fill-slate-500 mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="14">
                                            <path d="M12.82 8.116A.5.5 0 0 0 12 8.5V10h-.185a3 3 0 0 1-2.258-1.025l-.4-.457-1.328 1.519.223.255A5 5 0 0 0 11.815 12H12v1.5a.5.5 0 0 0 .82.384l3-2.5a.5.5 0 0 0 0-.768l-3-2.5ZM12.82.116A.5.5 0 0 0 12 .5V2h-.185a5 5 0 0 0-3.763 1.708L3.443 8.975A3 3 0 0 1 1.185 10H1a1 1 0 1 0 0 2h.185a5 5 0 0 0 3.763-1.708l4.609-5.267A3 3 0 0 1 11.815 4H12v1.5a.5.5 0 0 0 .82.384l3-2.5a.5.5 0 0 0 0-.768l-3-2.5ZM1 4h.185a3 3 0 0 1 2.258 1.025l.4.457 1.328-1.52-.223-.254A5 5 0 0 0 1.185 2H1a1 1 0 0 0 0 2Z" />
                                        </svg>
                                        <span>Action</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                
                    </div>
                    <!-- End: Cards container -->
            
                </div>
            </main>
        </div>
    </div>
</main>

<?php view('partials/footer.php') ?>

<script src="js/admin-panel.js"></script>