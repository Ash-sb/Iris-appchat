# Iris-appchat

L'application Iris permet à des utilisateurs de discuter via messages sur un chat avec d'autres membres de l'application et via video par le biais d'un appel vidéo.

Nous avons utilisé : 
- CSS pour le style UX-UI
- HTML pour la structure
- SQL : pour le lien avec la base de données
- PHP et Javascript: pour les fonctions et les interactions
- Ajax : pour des interactions


Les problèmes que nous avons rencontré lors du développement de cette application sont: 

- manque de connaissances par rapport à la grandeur du projet 
- un temps trop juste par rapport à nos acquis

Il a donc fallu qu'on s'adapte et qu'on s'aide de tutoriels sur Youtube dont on s'est inspiré.

L'un des problèmes majeurs qu'on a rencontré est de créer un serveur et d'implémanter un lien entre deux personnes, il serait donc intéressant de pouvoir l'implémanter dans le futur.

COMMENT INSTALER NOTRE PROJET ?

Il faut cloner le repository en copiant/collant le lien dans le champ prévu à cet effet dans votre éditeur de code et le placer au niveau du dossier htdocs dans l'application MAMP/WAMP/XAMP ou dans une application similaire pour PHP.

Vous trouverez le fichier tchat.sql. Sur votre ordinateur, vous devez accéder à votre compte PhpmyAdmin en local où vous pourrez créer une base de données nécessaires au bon fonctionnement du site Iris.

Pour cela, une fois sur votre page PhpmyAdmin, vous créez une nouvelle base de données que vous appelerez "tchat" (Attention le nom est important !). Ensuite, il faudra importer le fichier tchat.sql dans cette base de données.
Pour finaliser l'installation, il faudra également changer quelques éléments se trouvant dans le fichier main-functions.php . Les lignes 3,4,5, 6 sont les éléments qui vous permettront de vous connecter à la base de données.
Normalement, vous aurez à modifier que la ligne en fonction de si votre mot de passe est 'root' ou '(vide)'.

Vous pourrez alors accéder au site en ouvrant le serveur local depuis votre application et puis en accédant depuis votre navigateur à ce serveur et au dossier Iris-appchat dans htdocs.


COMMENT UTILISER NOTRE PROJET ?

Lorsque vous serez sur notre site, vous aurez l'oppurnité soit de vous connecter soit de vous inscrire. Nous vous conseillons de vous inscrire si c'est votre première venue sur le site. 

Après votre inscription, vous aurez accès à la liste des membres déjà inscrit sur le site et avec qui vous pouvez discuter. Par exemple, vous appuyez sur l'icône avec un + pour lancer une conversation avec la personne concernée. Vous pourrez donc lui envoyer un message en appuyant sur le bouton avec une icone d'avion en papier. Vous pourrez faire le test en vous connectant sur le site avec un autre compte sur un navigateur privé. Les messages sont reçus instantanément et sont stockés dans la base de données.

Vous pourrez donc revenir plus tard dans la conversation et les messages seront toujours là.

Vous pouvez aussi commencer une conversation vidéo avec une personne en cliquant sur l'icône caméra ou rejoindre une personne en cliquant sur l'icône téléphone.

Vous arrivez sur une page avec les deux encadrés où seront affichés les vidéos de chacun. Pour lancer votre vidéo, vous devez appuyer sur le bouton jaune lancer un appel. 

Vous avez quatre options possibles de couper la caméra ou le son ou l'inverse également.

Malheureusement, la liaison pour avoir les deux vidéos ne fonctionne pas actuellement.









