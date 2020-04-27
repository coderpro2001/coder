<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- ETAPE2: DELIMITER LA ZONE D'ACTION DE VUEJS -->
    <div id="app">
        <header>
            <h1>MON BACK OFFICE ({{ page }})</h1>
            <nav>
                <a href="#page1" @click="page = 'a'">page1</a>
                <a href="#page2" @click="page = 'b'">page2</a>
                <a href="#page3" @click="page = 'c'">page3</a>
            </nav>
        </header>
        <main>
            <section v-if="page == 'a'">
                <h2>CRUD SUR LES TODOS</h2>
            </section>
            <section v-if="page == 'b'">
                <h2>CRUD SUR LES USERS</h2>
            </section>
            <section v-if="page == 'c'">
                <h2>CRUD SUR LES CONTACTS</h2>
            </section>
        </main>
        <footer>
            <p>{{ message }}</p>
            <p>tous droits réservés</p>
        </footer>
    </div><!-- FIN DE #app -->

    <!-- ETAPE 1 -->
    <!-- ON CHARGE LE CODE DE VUEJS -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <!-- ETAPE 3 : RELIER MA PAGE AVEC VUEJS -->
    <script>
var app = new Vue({
  el: '#app',
  data: {
    page: 'a',  
    message: 'Hello Vue !'
  }
})        
    </script>

</body>
</html>