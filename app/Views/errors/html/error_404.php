<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Content management system">
    <title><?= $_ENV['app.name'] ?> | 404 - Page Not Found</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link  rel="stylesheet" type="text/css" href="<?=base_url('assets/css/style.css')?>">
</head>
<body class="flex flex-col justify-center items-center min-h-screen">
    <div class="text-center">
        <h1 class="text-6xl font-bold text-gray-800">404</h1>
        <p class="text-2xl text-gray-600 mb-4">Oops! Page not found</p>
        <p class="text-gray-500 mb-8">The page you are looking for might have been removed or is temporarily unavailable.</p>
        <a href="/" class="px-6 py-3 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition duration-300"><i class="fas fa-house"></i>Take me home</a>
    </div>
</body>
</html>
