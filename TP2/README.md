# TP2 UML
 
## Sujet : 

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