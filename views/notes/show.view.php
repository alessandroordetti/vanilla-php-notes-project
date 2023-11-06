<?php view('partials/head.php') ?>
<?php view('partials/nav.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="my-4 ">Nota</h1>

        <?php echo htmlspecialchars($note['body']) ?>
    </div>
</main>

<?php view('partials/footer.php') ?>