## JOUR 12

## LIEN LIVE SHARE LUNDI

    NOUVEAU LIEN POUR AUJOURD'HUI :

## RESUME EPISODE PRECEDENT

1. Comment s'articulent les différents langages du web
2. La réusabilité
3. Les niveaux de validation des données
4. Introduction aux classes en POO
5. Les principes d'un routing en PHP

## JAVASCRIPT BASICS

Comme on l'a déjà vu lors de l'épisode précédent, Javascript est un langage de programmation utilisé côté **client** pour gérer des inteactions entre l'utilisateur et une page ou application web.

On y retrouve les 4 concepts de base de la programmation :

- les variables
- les boucles
- les conditions
- les fonctions

Il est lu et interprété par le navigateur avant d'être exécuté.

> NB : depuis 2009, javascript est aussi utilisé comme langage backend suite à la création par **Ryan Dahl** de Node.js, un environnement de développement basé sur javascript.
>
> Plus d'infos ici : [https://fr.wikipedia.org/wiki/Node.js](https://fr.wikipedia.org/wiki/Node.js)

### COMMENT L'UTILISER ?

- de la même manière que vous liez une feuille de style à un document HTML, vous pouvez aussi lier un ou plusieurs scripts en utilisant la balise **script**

- vous pouvez aussi écrire et exécuter un script js directement dans la console (outils de développement) de votre navigateur

La balise **script** peut s'uttiliser de 2 manières :

- en écrivant votre script directement entre les balises ouvrantes et fermantes :

```
<script>
    console.log("Hello bros !");
</script>
```

- en lui passant le **chemin** d'un script externe grâce à l'attribut **src**

```
<script type="text/javascript" src="chemin_vers_le_script"></script>
```

> NB : à noter que dans le cas d'un script externe, le corps de la balise est vide. L'attribut **type** peut être omis car le navigateur est capable de déduire le type du script

### OU POSITIONNER LES BALISES SCRIPT ?

- entre les balises **\<head>\</head>**
- entre les balises **\<body>\</body>**

> Rappel : Lorsqu'un utilisateur visite une page web, le navigateur lit le code source y compris les ressources externes nécessaires à l'affichage (on dit qu'il le **parse**) de manière séquentielle (de haut en bas).
>
> Le fait d'insérer une balise script dans le head du document peut donc augmenter considérablement le temps de chargement d'une page

Une bonne pratique est de positionner vos balises script juste avant la balise fermante **\</body>**

Autre possibilité, positionner vos scripts dans le **\<head>\</head>** et utiliser les attributs **defer** et/ou **async**

Plus d'infos ici sur ces attributs : [https://developer.mozilla.org/fr/docs/Web/HTML/Element/script](https://developer.mozilla.org/fr/docs/Web/HTML/Element/script)

### 2 PRINCIPES DE BASE

- Javascript est basé sur des événements qui ont lieu à l'intérieur du navigateur :

  1. l'utilisateur interagit avec la page web (click, scroll, survol d'un élément HTML, ...)
  2. le navigateur génère un événement
  3. on intercepte l'événement en js et on fait une action

- En js, tout est **objet**
  , et les objets ont des propriétés et méthodes auxquelles on peut accéder

## LET'S DIVE IN !

### LES VARIABLES

Les variables permettent de stocker différents types de données : chaînes de caractères, nombres, booléens, tableaux, objets, ...

En savoir plus sur les types de données ici : [https://developer.mozilla.org/fr/docs/Web/JavaScript/Structures_de_donn%C3%A9es#Les_valeurs_primitives](https://developer.mozilla.org/fr/docs/Web/JavaScript/Structures_de_donn%C3%A9es#Les_valeurs_primitives)

Comme en PHP, il existe 2 types de variables :

- celles dont le contenu peut être modifié

Pour déclarer ce type de variable on fait précéder son nom du mot clé **var**

`var name = "Brian";`

A noter que vous pouvez déclarer une variable et lui affecter une valeur plus tard

```
var name;
name = "Brian";
```

> depuis l'évolution **ES6** de js on peut aussi utiliser **let**

`let name = "Brian";`

- celles dont le contenu ne peut pas être modifié (les constantes)

`const DOMAIN = "example.com";`

### LES BOUCLES

On retrouve en js les boucles que vous connaissez en PHP :

- `for(){}`

```
    for(var i = 0; i < 100; i++) {
        // code à exécuter
    }
```

- `forEach(){}`

```
    myArray.forEach(function(element) {
        // code à exécuter
    })
```

- `while()`

```
    while(var i < 100) {
        // code à exécuter

        i++;
    }
```

- d'autres encore moins utilisées et qui ont des applications plus spécifiques

### LES CONDITIONS

On retrouve là aussi les mêmes conditions qu'en PHP.

A noter qu'il est possible d'imbriquer les conditions.

- `if()`

```
    if(condition === true) {
        // code à exécuter si la condition est vraie
    }
```

- `if() ... else()`

```
    if(condition === true) {
        // code à exécuter si la condition est vraie
    } else {
        // code à exécuter si la condition est fausse
    }
```

- `if() ... else if() ... else()`

```
    if(condition1 === true) {
        // code à exécuter si la condition 1 est vraie
    } else if (condition2 === true){
        // sinon code à exécuter si la condition 2 est vraie
    } else {
        // code à exécuter sinon
    }
```

- `switch()`

```
    switch (expression) {
        case choix1:
            exécuter ce code
            break;

        case choix2:
            exécuter ce code à la place
            break;

        // incorporez autant de case que vous le souhaitez

        default:
            sinon, exécutez juste ce code
}
```

### LES FONCTIONS

On déclare une fonction en utilisant le mot clé **function**

Une fonction peut être :

- nommée

```
    function myFunction() {
        // code à exécuter
    }
```

- anonyme

```
var myFunction = function() {
    // code à exécuter
}

```

Comme en PHP, une fonction peut accepter plusieurs paramètres qui seront passés entre les **()**

```
    function myFunction(param1, param2) {
        // code à exécuter
    }

    // paramètre avec valeur par défaut
    function myFunction(name, place = "Hello") {
        // code à exécuter
        console.log(name + " is in the " + place);
    }
```

Pour invoquer une fonction il suffit de l'appeler

```
    myFunction();

    // avec paramètres
    myFunction("Brian", "kitchen");
```

### DEBUG

Pour debugger des variables en js, vous pouvez utiliser l'objet **console**

`console.log(myVar);` affichera le type et la valeur de la variable dans la console de votre navigateur

En savoir plus sur la console : [https://developer.mozilla.org/fr/docs/Web/API/Console](https://developer.mozilla.org/fr/docs/Web/API/Console)

## PROJETS JS

### POPUP

#### ZE PITCH

Créer un script JS qui provoque l'affichage d'un popup lorsque l'utilisateur quitte la fenêtre active

Vous aurez besoin :

- de capter un événement lié à la souris (mouse)
- de modifier les propriétés css d'un élément HTML (votre popup) pour en modifier le display

Contraintes :

- votre balise script doit être correctement placée dans votre code HTML
- votre script doit faire appel à une ressource externe (un fichier)
- votre code JS doit être correctement indenté et commenté

### MENU SLIDER

#### ZE PITCH

Créer un menu qui va s'afficher en glissant horizontalement quand l'utilisateur va cliquer sur un bouton

Vous aurez besoin :

- de capter un événement lié au click
- de modifier les propriétés css d'un élément HTML (votre popup) pour en modifier le display

Contraintes :

- votre balise script doit être correctement placée dans votre code HTML
- votre script doit faire appel à une ressource externe (un fichier)
- votre code JS doit être correctement indenté et commenté

# Enjoy
