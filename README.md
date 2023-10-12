# Projet UML

## TP1 
### Sujet : 

Dans un fichier index.php créer un formulaire contenant une zone de saisie pour le nom, le revenu et un bouton OK pour soumettre le formulaire.

Le but de ce formulaire est de permettre le calcul de l’impôt pour une personne. Le taux de l’impôt est de 15% pour des revenus inférieurs à 15 000 euros et de 20 % pour des revenus supérieurs à 15 000.

Une fois le formulaire envoyé grâce au bouton OK, une phrase s’affiche du style « Mr Durant votre impôt est de 600 euros ».

Le programme doit obligatoirement contenir une classe impot dans un fichier impot.php avec un constructeur, une méthode AfficheImpot() qui retourne une chaîne contenant le message à afficher (« Mr Durant votre impôt est de 600 euros » par exemple) et une méthode CalculImpôt() qui retourne le montant de l’impôt suivant le revenu.

Les taux de l’impôt (20% et 15%) devront être définis dans des constantes.

La création de l’objet et l’appel des méthodes doivent être réalisés dans un fichier resultatImpot.php. 

## TP2
### Sujet : 

Définissez une classe CompteBancaire, qui permette d'instancier des objets tels que compte1, compte2, etc. (Utilisez les règles d'encapsulation avec le contrôle d'accès.)
Le constructeur de cette classe initialisera deux attributs nom et solde, avec les valeurs par défaut 'Dupont' et 1000.
Trois autres méthodes seront définies :
* .depot(somme) permettra d'ajouter une certaine somme au solde
* .retrait(somme) permettra de retirer une certaine somme du solde
* .affiche() permettra d'afficher le nom du titulaire et le solde de son compte.
Exemples d'utilisation de cette classe :
* compte1 = CompteBancaire('Duchmol', 800)
* compte1.depot(350)
* compte1.retrait(200)
* compte1.affiche()
Le solde du compte bancaire de Duchmol est de 950 euros. 
* compte2 = CompteBancaire()
* compte2.depot(25)
* compte2.affiche()
Le solde du compte bancaire de Dupont est de 1025 euros.
