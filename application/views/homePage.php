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
    <link href="../assets/style/tailwind.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/style/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <title>Pulse</title>
</head>

<body class="h-screen tracking-normal text-gray-900">
    <div class="h-screen pb-14 bg-right bg-cover">
        <div class="container pt-24 md:pt-20 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <!-- Left Col -->
            <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
                <h1 class="my-4 text-3xl md:text-5xl text-blue-700 font-bold leading-tight text-center md:text-left">
                    Pulse
                </h1>
                <p class="leading-normal text-base md:text-2xl mb-6 text-center md:text-left">
                    Keep connect, don't disconnect
                </p>
                <div class="flex w-full space-x-10 justify-center md:justify-start pb-2 lg:pb-0">
                    <a href="<?= base_url('Pulsa/login');?>" class="bg-blue-600 text-white font-bold text-lg hover:bg-blue-700 p-2 mt-8 rounded-full px-4">
                        Signin</a>
                    <a href="<?= base_url('Pulsa/transaksi');?>" class="bg-gray-200 font-bold text-lg hover:bg-gray-300 p-2 mt-8 rounded-full px-4">
                        Transaction</a>
                </div>
            </div>

            <!-- Right Col -->
            <div class="w-full xl:w-3/5 overflow-y-hidden">
                <!-- <a href="https://storyset.com/communication"><img class="w-5/6 mx-auto lg:mr-0" src="assets/image/Call center-amico.svg"></a> -->
                <a href="https://storyset.com/communication"><img class="w-5/6 mx-auto lg:mr-0" src="<?= base_url('assets/image/Call center-amico.svg'); ?>"></a>
            </div>

            <!-- Leaderboard -->
            <div class="w-full flex flex-col h-screen overflow-y-hidden">
                <div class="w-full overflow-x-hidden border-t flex flex-col">
                    <main class="w-full flex-grow p-6">
                        <div class="w-full mt-12">
                            <p class="text-xl pb-3 flex items-center">
                                <i class="fas fa-list mr-3"></i>Most bought operators
                            </p>
                            <div class="bg-white overflow-auto">
                                <table class="min-w-full bg-white">
                                    <thead class="bg-gray-800 text-white">
                                        <tr>
                                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Operator</th>
                                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nominal</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-700">
                                    <?php foreach($transaksi as $row) { ?>
                                        <tr>
                                            <td class="text-left py-3 px-4"><?=$row['operator']?></td>
                                            <td class="text-left py-3 px-4"><?=$row['nominal']?></td>
                                        </tr>                                        
                                    <?php }; ?>   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
