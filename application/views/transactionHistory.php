<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,400;0,500;0,700;1,500&family=Source+Sans+Pro:ital,wght@0,400;0,600;0,700;1,600&family=Ubuntu:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">

    <!-- Tailwinds -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="/assets/style/tailwind.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/style/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <title>Admin Panel</title>
</head>

<body class="bg-gray-100 flex">
    <aside class="bg-blue-700 relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="#" class="text-white text-3xl font-semibold uppercase hovertext-gray-300">Admin</a>
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <a href="admin" class="flex items-center opacity-75 hover:opacity-100 text-white py-4 pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>Dashboard
            </a>
            <a href="history" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
                <i class="fas fa-table mr-3"></i>Transaction
            </a>
        </nav>
    </aside>

    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <div class="w-full overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="text-3xl text-black pb-6">Transaction</h1>

                <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i>History
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nama</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nomor HP</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Operator</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nominal</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <?php foreach($transaksi as $row) { ?>
                                <tr>
                                    <td class="text-left py-3 px-4"><?=$row['id_transaksi']?></td>
                                    <td class="text-left py-3 px-4"><?=$row['nama']?></td>
                                    <td class="text-left py-3 px-4"><?=$row['nomorhp']?></td>
                                    <td class="text-left py-3 px-4"><?=$row['operator']?></td>
                                    <td class="text-left py-3 px-4"><?=$row['nominal']?></td>
                                    <td class="text-left py-3 px-4">
                                    <button class="relative bg-green-200 rounded-full button" style="width: 5rem;">Edit</button>
                                    <button class="relative bg-red-200 rounded-full button" style="width: 5rem;">Delete</button>
                                    </td>
                                </tr>
                                <? }; ?>                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>