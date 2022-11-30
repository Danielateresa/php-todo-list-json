<!doctype html>
<html lang="en">

<head>
    <title>PHP ToDo List JSON</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- my style -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div id="app">
        <div class="container w-25">
            <header>
                <h1>Todo List</h1>
            </header>
            <!-- /header -->

            <main class="site_main">
                <!-- Some borders are removed -->
                <ul class="list-group list-group-flush rounded">
                    <li class="list-group-item" v-for="element in elements">{{element}}</li>

                </ul>

                <form action="index.php" method="get" class="mt-3 d-flex">
                    <input type="text" class="p-2" name="element" id="element" aria-describedby="helpId"
                        placeholder="inserisci un elemento...">
                    <button type="button" class=" btn-dark py-2 px-3 bg-black text-white">Inserisci</button>
                </form>
            </main>
            <!-- /.site_main -->
        </div>
    </div>



    <!-- axios script -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- vue script -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="app.js"></script>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>