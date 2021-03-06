## Migration du plugin Vignette vers la solution native de PluXml 5.5
##
## Compatibillité : PluXml 5.5 et supérieur
## Auteur : P3ter (http://p3ter.fr)
## Licence : GPL
## Version : 1.1
## 
## Aide : 
## le fichier doit être exécuter à la racine du dossier /data/articles/
## attribution des droits : chmod u+x vignetteToThumbnail.sh
## exécution du script : ./vignetteToThumbnail.sh
##
## ATTENTION : faites une sauvegarde de tous vos articles (data/articles/) avant de lancer le script
##
#!/bin/bash

# début de la chaine à remplacer
chaineVignette="<vignette><!\[CDATA\["
chaineThumbnail="<thumbnail><!\[CDATA\[data\/medias\/"

# fin de la chaine à remplacer
chaineVignette1="<\/vignette>"
chaineThumbnail1="<\/thumbnail>"

# Thumbnail vide pour les articles ayant été créés après PluXml 5.5
chaineThumbnailVide="<thumbnail><!\[CDATA\[\]\]><\/thumbnail>"

for file in *.xml
do
    echo "Traitement de $file ..."
    # remplacement du début de la chaine
    sed -i -e "s/$chaineVignette/$chaineThumbnail/g" "$file"
    #remplacement de la fin de la chaine
    sed -i -e "s/$chaineVignette1/$chaineThumbnail1/g" "$file"
    # suppression du Thumbnail vide si il existe
    sed -i -e "/$chaineThumbnailVide/d" "$file"
done 
