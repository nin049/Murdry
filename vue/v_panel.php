<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="">
    <div class="lg:flex ml-10 mt-10">
        <img src="/images/logo 2.png" class="w-20 h-auto mr-8">
        <h1 class="md:text-4xl text-2xl flex-grow">
            Bienvenue dans votre panel $nom
        </h1>
        <a href="">
            <button class="flex border-2 border-red-500 rounded-xl px-2 py-1 hover:bg-red-500 duration-150 lg:mt-0 mt-3 mr-10">
                Se déconnecter
            </button>
        </a>
    </div>
    <div class="gap-10 grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 py-32 px-20 lg:px-30 xl:px-40 justify-center items-center duration-300">
        <a href="./?uc=personel">
            <div class="border-2 rounded-lg text-center hover:scale-110 hover:border-blue-300 duration-300">
                <img src="/images/personne.png" class="w-32 rounded-lg mx-auto mb-10 mt-10">
                <h1 class="text-xl mb-10">Personnel</h1>
            </div>
        </a>
        <a href="./?uc=avion">
            <div id="personel" class="border-2 rounded-lg text-center hover:scale-110 hover:border-blue-300 duration-300">
                <img src="/images/avion.png" class="w-32 rounded-lg mx-auto mb-10 mt-10">
                <h1 class="text-xl mb-10">Avion</h1>
            </div>
        </a>
        <a href="./?uc=aeroport">
            <div id="personel" class="border-2 rounded-lg text-center hover:scale-110 hover:border-blue-300 duration-300">
                <img src="/images/aeroport.png" class="w-32 rounded-lg mx-auto mb-10 mt-10">
                <h1 class="text-xl mb-10">Aéroport</h1>
            </div>
        </a>
        <a href="./?uc=mouvement">
            <div id="personel" class="border-2 rounded-lg text-center hover:scale-110 hover:border-blue-300 duration-300">
                <img src="/images/vol.png" class="w-32 rounded-lg mx-auto mb-10 mt-10">
                <h1 class="text-xl mb-10">Vol</h1>
            </div>
        </a>
    </div>
</body>

</html>