# Énoncé : Conversion Hex2RGB

### 1ere partie de dojo : 
Écrire une fonction pour convertir une couleur en hexadécimal vers une couleur en RGB

Si la couleur est #FF44BB, il faut ignorer le “#’, les 2 premiers caractères correspondent au rouge, les deux suivant au vert et les deux derniers au bleu
Pour convertir de l’hexa vers le décimal, on peut utiliser la fonction php hexdec()
Vérifier également que le paramètre entré correspond bien à une couleur en hexa (c’est à dire 6 caractères entre 0-9 et A-F, précédé par un #)

### 2nde partie de dojo (S’il y a le temps) :
Écrire la fonction permettant de convertir le hexa vers le décimal, sans utiliser hexdec()
https://fr.wikipedia.org/wiki/Syst%C3%A8me_hexad%C3%A9cimal
Un entier est écrit comme la concaténation de ces chiffres, et sa lecture s'effectue de droite à gauche. Sa valeur vaut la somme des chiffres affectés de poids correspondant aux puissances successives du nombre 16. Par exemple, 4D5 vaut 
5 * 160 + 13 * 161 + 4 * 16 2 = 1237.

