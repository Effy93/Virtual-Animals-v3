# Virtual Animals v-3
 - Virtual Animals v-1 : simple site avec inscription - connexion - deconnexion d'utilisateurs. PHP procédural
 - Virtual Animals v-2 : re conceptualisation en une plateforme de mini-jeux et collection de monstre. PHP orienté objet
 - Virtual Animals v-3 : Développement final sous Symfony v4

<img class="logo" src="https://user-images.githubusercontent.com/40206938/67709580-84e1be00-f9be-11e9-950d-6a3142da4635.png" alt="Espace personnel du compte admin" width="100%" height="100%">

## Présentation du projet
Virtual Animals est un projet de plateforme de mini-jeux dans lesquels l’utilisateur peut gagner de la monnaie virtuelle, des ruby. Ainsi le joueur aura la possibilité d’acheter des monstres ou de nouveaux mini-jeux pour gagner encore plus d’argent !

A terme l'idée est de faire un système de combat entre les monstres...

## Fonctionnalités
### Espace personnel
Dans l'espace personnel, propre à chaque utilisateur, on trouve :
- Les informations personnelles de l'utilisateur connecté : Pseudo, date d'inscription, nombre de ruby ect ...
- Les jeux possédés par l'utilisateur connecté
- Les monstres, quant à eux, sont accessibles depuis l'onglet 'bestiaire'
- Les accessoires seront disponibles depuis l'onglet 'inventaire'

<img class="logo" src="https://user-images.githubusercontent.com/40206938/67709616-94f99d80-f9be-11e9-942b-ed378fc15e4a.png" alt="Espace personnel du compte admin" width="100%" height="100%">

### Jeux
3 jeux sont actuellement disponibles :
- Pierre Papier Ciseaux : Mythique jeu du pierre feuille ciseaux. Disponible gratuitement dans la boutique !
- Tic Tac Toe : le classique jeu du morpion. A l'origine codé en JavaScript, j'ai choisi de le passer en simple formulaire sous la version 3. Disponible à l'achat dans la boutique
- Broken Brick : un jeu de casse brique codé en CANVA. Disponible à l'achat dans la boutique

<img class="logo" src="https://user-images.githubusercontent.com/40206938/67712081-924d7700-f9c3-11e9-83af-1bc328c2b0b1.png" alt="Espace personnel du compte admin" width="100%" height="100%">

### Boutique
Une boutique personnelle à chaque utilisateur est disponbile et propose les monstres et jeux non encore possédés par l'utilisateur connecté.
<img class="logo" src="https://user-images.githubusercontent.com/40206938/67712574-8a420700-f9c4-11e9-8d4d-4aca0da3d5ef.png" alt="Espace personnel du compte admin" width="100%" height="100%">


### Fonctionnalités d'adminastration : les news 
Afin d'avertir les utilisateurs des nouveautés de la plateforme, un sytème d'articles 'news' à été mis en place. L'écriture, la modification et la suppression de ses articles sont reservés aux administrateurs.
Seule la lecture des ses news est disponible pour tout ulisateurs (connectés ou non) dans l'accueil.

<img class="logo" src="https://user-images.githubusercontent.com/40206938/67713283-d0e43100-f9c5-11e9-87fd-489462a36f6c.png" alt="Espace personnel du compte admin" width="100%" height="100%">


## Mise en route
### Base de donnée à prévoir
Configuration du fichier .env 

### Pour demarrez l'appli il suffit de lancer le serveur dans le terminal de commande

Tapez : ```php bin/console server:run```

### Pour acceder a l'appli depuis mon mobile
Tapez : `php bin/console server:run 192.XXXX`
remplacez les XX par votre IP


