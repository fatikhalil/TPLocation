
# Projet de Localisation de Smartphone

## Description
Ce projet permet de suivre la localisation d'un smartphone en récupérant ses coordonnées GPS, son adresse IP, et son IMEI. Les données de localisation sont stockées dans une base de données MySQL et peuvent être affichées sur une carte Google Maps via une application mobile.

## Objectifs
- Récupérer les coordonnées GPS (latitude, longitude) du smartphone.
- Récupérer l'adresse IP et l'IMEI du smartphone.
- Enregistrer les données dans une base de données distante.
- Afficher les positions enregistrées sur une carte Google Maps.

## Structure du Projet
Le projet est divisé en trois parties :
1. **Base de Données** : Une table MySQL appelée `position` pour stocker les données de localisation.
2. **Services Web (PHP)** : Une API pour créer et récupérer des positions à partir de la base de données.
3. **Application Mobile** : Une application Android utilisant GPS pour la localisation, Volley pour la communication réseau, et Google Maps pour l'affichage.

## Partie 1 : Base de Données
Créer une table MySQL pour stocker les données de position :

```sql
CREATE TABLE `position` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `date` datetime NOT NULL,
  `imei` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```

## Partie 2 : Services Web (PHP)
Les fichiers PHP gèrent l'interaction avec la base de données :
- **PositionService** : Service pour ajouter et récupérer des positions.
- **IDao Interface** : Interface avec des méthodes CRUD pour manipuler les données.
- **Script d'insertion** : `createPosition.php` pour insérer une nouvelle position dans la base de données.
- **Script de récupération** : `showPositions.php` pour récupérer toutes les positions au format JSON.

## Partie 3 : Application Mobile (Android)
### Permissions
Ajouter les permissions suivantes dans le fichier `AndroidManifest.xml` :
```xml
<uses-permission android:name="android.permission.ACCESS_FINE_LOCATION" />
<uses-permission android:name="android.permission.INTERNET" />
<uses-permission android:name="android.permission.READ_PHONE_STATE"/>
<uses-permission android:name="android.permission.ACCESS_COARSE_LOCATION"/>
```

### Bibliothèques
- **Volley** : pour les requêtes HTTP.
- **Google Maps** : pour afficher les positions.

### Fonctionnalités
1. **Récupération de la position GPS** : Utilisation de `LocationManager` pour obtenir les coordonnées.
2. **Enregistrement de la position** : Envoi des données à la base via `createPosition.php`.
3. **Affichage des positions** : `showPositions.php` renvoie les données au format JSON pour les afficher sur une carte Google Maps.

## Installation
1. **Base de Données** : Importer la structure de la table dans MySQL.
2. **Services Web** : Héberger les fichiers PHP et mettre à jour l'URL du serveur dans l'application.
3. **Application Mobile** : Importer le projet Android et ajouter la clé Google Maps dans `google_maps_api.xml`.

## Utilisation
1. Lancer l'application pour obtenir les coordonnées actuelles.
2. Les coordonnées sont envoyées au serveur et stockées dans la base de données.
3. La carte Google Maps dans l'application affiche les positions enregistrées avec des marqueurs.
## Demonstration vedio
https://github.com/user-attachments/assets/a047aff5-506e-4d87-8b29-e3b3ead64992

## Auteur
- KHALIL Fatima

