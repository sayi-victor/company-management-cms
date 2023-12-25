<!DOCTYPE html>
<html lang="en">
    <?= $this->include('components/head') ?>
    <body class="bg-gray-50 min-h-screen flex flex-col">
        <?= $this->include('components/header') ?>
        <main class="flex-1 relative py-4">
        <?= $this->include('components/side_navigation') ?>
            <?= $this->renderSection('content') ?>
        </main>
        <?= $this->include('components/footer') ?> 
    </body>
</html>