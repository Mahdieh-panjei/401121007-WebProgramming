<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">

<header class="w-full py-4 bg-gray-100 shadow-md">
  <nav class="max-w-6xl mx-auto flex justify-center items-center px-4">
    <ul class="flex space-x-6">
      <li><a href="index.php" class="text-gray-600 hover:text-gray-900 font-medium">Home</a></li>
      <li><a href="infs.php" class="text-gray-600 hover:text-gray-900 font-medium">Information</a></li>
      <li><a href="contact-us.php" class="text-gray-600 hover:text-gray-900 font-medium">Contact</a></li>
    </ul>
  </nav>
</header>


<main class="flex-grow flex justify-center items-center">
  <div class="bg-white p-10 rounded-2xl shadow-lg w-full max-w-md border border-blue-100 text-center space-y-6">

    <h1 class="text-3xl font-semibold text-gray-700">Your Profile</h1>

    <?php
    $name = $_POST['name'] ?? 'Unknown';
    $lastname = $_POST['last_name'] ?? 'Unknown';
    ?>

    <div class="bg-gray-50 p-4 rounded-lg shadow-sm border border-gray-200">
      <p class="text-gray-500">First Name</p>
      <p class="text-lg font-medium text-gray-800 mt-1"><?php echo htmlspecialchars($name); ?></p>
    </div>

    <div class="bg-gray-50 p-4 rounded-lg shadow-sm border border-gray-200">
      <p class="text-gray-500">Last Name</p>
      <p class="text-lg font-medium text-gray-800 mt-1"><?php echo htmlspecialchars($lastname); ?></p>
    </div>

  </div>
</main>

</body>
</html>
