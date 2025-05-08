<?php
define('TEXT', '0');
defined('TEXT') or die;

$rows = [
    [
        '#' => 1,
        'First Name' => 'Zahra',
        'Last Name' => 'Ghasemi',
        'Email' => 'ZahraGhasemi@email.com'
    ],
    [
        '#' => 2,
        'First Name' => 'Soheila',
        'Last Name' => 'Montazery',
        'Email' => 'SoheilaMontazery@email.com'
    ],
    [
      '#' => 3,
      'First Name' => 'Melika',
      'Last Name' => 'Rezvany',
      'Email' => 'MelikaRezvany@email.com'
  ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>برنامه نویسی وب</title>
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
  <div class="bg-white p-10 rounded-2xl shadow-lg w-full max-w-4xl space-y-6 border border-blue-100">
    <h1 class="text-3xl font-semibold text-center text-gray-700">برنامه نویسی وب</h1>

    <div class="overflow-x-auto">
      <table class="min-w-full text-sm text-left text-gray-700 border border-gray-200 rounded-lg">
        <thead class="text-xs uppercase bg-gray-100 text-gray-600">
          <tr>
            <th scope="col" class="px-6 py-3">#</th>
            <th scope="col" class="px-6 py-3">First Name</th>
            <th scope="col" class="px-6 py-3">Last Name</th>
            <th scope="col" class="px-6 py-3">Email</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          <?php foreach ($rows as $value): ?>
            <tr class="hover:bg-gray-50 transition">
              <?php foreach ($value as $k => $v): ?>
                <td class="px-6 py-4">
                  <span class="font-medium text-gray-700"><?= htmlspecialchars($v) ?></span>
                </td>
              <?php endforeach ?>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

</body>
</html>
