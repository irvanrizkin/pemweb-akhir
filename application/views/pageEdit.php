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
    <link href="/style/tailwind.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="/style/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <title>Form Transaksi</title>
</head>

<body class="body-bg min-h-screen pt-9 md:pt-20 pb-4 md:px-0">
    <main class="bg-white max-w-lg mx-auto p-4 md:p-9 my-10 rounded-lg shadow-2xl">
        <section class="w-full lg:w-1/2 mt-6 pl-0 lg:pl-2">
            <p class="text-xl pb-6 items-center">
                <i class="fas fa-list mr-3"></i>Edit Transaction
            </p>
        </section>

        <section class="mt-6">
            <form class="bg-transparent" action="<?= base_url('Pulsa/edit_process') ?>" method="post" autocomplete="off" name="operator" id="transaksi">
                <input type="hidden" name="id" value="<?= $id?>">
                <div class="block mt-2 rounded">
                    <label class="block text-sm text-gray-600">Name</label>
                    <input class="bg-gray-200 pt-2 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-2 pb-2" id="cus_name" name="cus_name" type="text" required="" placeholder="Your Name">
                </div>
                <div class="block mt-2 rounded">
                    <label class="block text-sm text-gray-600">Phone Number</label>
                    <input class="bg-gray-200 pt-2 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-2 pb-2" id="phoneNumber" name="phoneNumber" type="text" required="" placeholder="0822xxxxxxxx" onkeyup="cekNomorHP()">
                </div>
                <div class="inline-block mt-2 w-1/2 pr-1">
                    <label class="block text-sm text-gray-600">Operator</label>
                    <!-- <p class="bg-gray-200 pt-2 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-2 pb-2"
                        id="myInput">-</p> -->
                    <input type="text" class="bg-gray-200 pt-2 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-2 pb-2" id="myInput" name="operator">
                </div>
                <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                    <label class="block text-sm text-gray-600">Nominal</label>
                    <select class="bg-gray-200 pt-2 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-2 pb-2" name="nominal" id="Nominal" form="transaksi">
                        <option value="5000">Rp 5,000</option>
                        <option value="10000">Rp 10,000</option>
                        <option value="20000">Rp 20,000</option>
                        <option value="25000">Rp 25,000</option>
                        <option value="50000">Rp 50,000</option>
                        <option value="100000">Rp 100,000</option>
                    </select>
                </div>
                <div class="flex w-full space-x-10 justify-center md:justify-start pb-2 lg:pb-0">
                    <div class="block mt-4 rounded">
                        <a href="<?=base_url('Pulsa/admin')?>">
                            <button class="bg-gray-200 font-bold text-lg hover:bg-gray-300 p-2 mt-8 rounded-full px-4">Close</button>
                        </a>
                    </div>
                    <div class="block mt-4 rounded">
                        <input type="submit" class="bg-blue-600 text-white font-bold text-lg hover:bg-blue-700 p-2 mt-8 rounded-full px-4" value="Submit">
                    </div>
                </div>
            </form>
        </section>
    </main>

    <!--Modal-->
    <?php if ($this->session->flashdata('edit_status') !== null) { ?>
    <div class="modal fixed w-full h-full top-0 left-0 flex items-center justify-center">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

        <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

            <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                    </path>
                </svg>
                <span class="text-sm">(Esc)</span>
            </div>

            <!-- Add margin if you want to see some of the overlay behind the modal-->
            <div class="modal-content py-4 text-left px-6">
                <!--Title-->
                <div class="flex justify-between items-center pb-3">
                    <p class="text-2xl font-bold">Successfull!</p>
                    <div class="modal-close cursor-pointer z-50">
                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                            </path>
                        </svg>
                    </div>
                </div>

                <!--Footer-->
                <div class="flex justify-end pt-2">
                    <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
                </div>

            </div>
        </div>
    </div>
    <?php } ?>

    <script>
        var openmodal = document.querySelectorAll('.modal-open')
        for (var i = 0; i < openmodal.length; i++) {
            openmodal[i].addEventListener('click', function(event) {
                event.preventDefault()
                toggleModal()
            })
        }

        const overlay = document.querySelector('.modal-overlay')
        overlay.addEventListener('click', toggleModal)

        var closemodal = document.querySelectorAll('.modal-close')
        for (var i = 0; i < closemodal.length; i++) {
            closemodal[i].addEventListener('click', toggleModal)
        }

        document.onkeydown = function(evt) {
            evt = evt || window.event
            var isEscape = false
            if ("key" in evt) {
                isEscape = (evt.key === "Escape" || evt.key === "Esc")
            } else {
                isEscape = (evt.keyCode === 27)
            }
            if (isEscape && document.body.classList.contains('modal-active')) {
                toggleModal()
            }
        };


        function toggleModal() {
            const body = document.querySelector('body')
            const modal = document.querySelector('.modal')
            modal.classList.toggle('opacity-0')
            modal.classList.toggle('pointer-events-none')
            body.classList.toggle('modal-active')
        }
    </script>

    <script>
        function cekNomorHP() {
            var x = document.forms["operator"]["phoneNumber"].value;

            const operators = {
                "operators": [{
                        "prefix": 0811,
                        "operator": "Halo"
                    },
                    {
                        "prefix": 0812,
                        "operator": "Simpati"
                    },
                    {
                        "prefix": 0813,
                        "operator": "Simpati"
                    },
                    {
                        "prefix": 0821,
                        "operator": "Simpati"
                    },
                    {
                        "prefix": 0822,
                        "operator": "Simpati"
                    },
                    {
                        "prefix": 0852,
                        "operator": "AS"
                    },
                    {
                        "prefix": 0853,
                        "operator": "AS"
                    },
                    {
                        "prefix": 0823,
                        "operator": "AS"
                    },
                    {
                        "prefix": 0851,
                        "operator": "AS"
                    },
                    {
                        "prefix": 0814,
                        "operator": "Indosat M2 Broadband"
                    },
                    {
                        "prefix": 0815,
                        "operator": "Matrix"
                    },
                    {
                        "prefix": 0816,
                        "operator": "Matrix"
                    },
                    {
                        "prefix": 0855,
                        "operator": "Matrix"
                    },
                    {
                        "prefix": 0856,
                        "operator": "IM3"
                    },
                    {
                        "prefix": 0857,
                        "operator": "IM3"
                    },
                    {
                        "prefix": 0858,
                        "operator": "Mentari"
                    },
                    {
                        "prefix": 0817,
                        "operator": "XL"
                    },
                    {
                        "prefix": 0818,
                        "operator": "XL"
                    },
                    {
                        "prefix": 0819,
                        "operator": "XL"
                    },
                    {
                        "prefix": 0859,
                        "operator": "XL"
                    },
                    {
                        "prefix": 0877,
                        "operator": "XL"
                    },
                    {
                        "prefix": 0878,
                        "operator": "XL"
                    },
                    {
                        "prefix": 0838,
                        "operator": "Axis"
                    },
                    {
                        "prefix": 0831,
                        "operator": "Axis"
                    },
                    {
                        "prefix": 0832,
                        "operator": "Axis"
                    },
                ]
            };

            const nohpElem = document.querySelector("#phoneNumber");
            const opElem = document.querySelector("#myInput");
            nohpElem.addEventListener('keyup', (event) => {
                let prefix = nohpElem.value;
                let substr = prefix.substring(0, 4);
                operators.operators.forEach((operator) => {
                    if (substr == operator.prefix) {
                        opElem.value = operator.operator;
                    }
                })
            });
        }
    </script>
</body>

</html>
