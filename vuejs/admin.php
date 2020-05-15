<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
section.active {
    position:fixed;
    top:0;
    left:0;
    z-index:999;
    width:100%;
    height:100%;
    background-color: rgba(0,0,0,0.8);
    padding:10vh;
}        
    </style>
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
                <section v-show="todoUpdate" :class="{ active : todoUpdate }">
                    <h3>UPDATE</h3>
                    <form v-if="todoUpdate">
                        <input type="text" name="titre" v-model="todoUpdate.titre">
                        <!-- POUR FERMER LA POPUP, ON AGIT SUR LA PROPRIETE VUEJS todoUpdate -->
                        <button @click="todoUpdate=null">fermer la popup</button>
                    </form>
                </section>
                <section>
                    <h3>READ</h3>
                    <div class="listeArticle">
                        <article v-for="todo in todos">
                            <h3>{{ todo.titre }}</h3>
                            <button @click="modifier(todo)">modifier</button>
                        </article>
                    </div>
                </section>
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
    todoUpdate: null,
    todos: 
        // JSON ;-p
        [
            { titre: 'Apprendre JavaScript' },
            { titre: 'Apprendre Vue' },
            { titre: 'Créer quelque chose de génial' }
        ],
    page: 'a',  
    message: 'Hello Vue !'
  },
  methods: {
      modifier: function(todo)
      {
        this.todoUpdate = todo;
        console.log(this.todoUpdate);
      }
  }
})        
    </script>

</body>
</html>