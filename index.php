<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Site</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
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
  <form action="process-form.php" method="POST" class="bg-white p-10 rounded-2xl shadow-lg w-full max-w-md space-y-6">
    <h2 class="text-3xl font-semibold text-center text-gray-700">Sign In</h2>

    <div class="flex flex-col space-y-1">
      <label for="name" class="text-gray-700 font-medium">First Name</label>
      <input id="name" name="name" type="text" placeholder="Your first name" class="border border-gray-300 rounded-md py-2 px-4 focus:ring-2 focus:ring-gray-400 outline-none">
    </div>

    <div class="flex flex-col space-y-1">
      <label for="last_name" class="text-gray-700 font-medium">Last Name</label>
      <input id="last_name" name="last_name" type="text" placeholder="Your last name" class="border border-gray-300 rounded-md py-2 px-4 focus:ring-2 focus:ring-gray-400 outline-none">
    </div>


    <button type="submit" class="w-full bg-gray-700 hover:bg-gray-800 text-white font-medium py-2 rounded-lg transition duration-300">Submit</button>
  </form>
</main>

</body>
</html>