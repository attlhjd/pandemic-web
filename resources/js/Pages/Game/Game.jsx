import React from 'react';
import {Head} from "@inertiajs/react";

function Game({ roles, joueurs, villes, cartes }) {

    return (

        <div>
            <Head title="Game" />
            <h1>Plateau de jeu</h1>

            <h2>Villes</h2>
            {villes.map(ville => (
                <div key={ville.id}>
                    <h3>{ville.nom}</h3>
                    <p>Cubes de maladie : {ville.maladie_cubes}</p>
                    <p>Couleur de la maladie : {ville.couleur_maladie}</p>
                </div>
            ))}

            <h2>Rôles</h2>
            {roles.map(role => (
                <div key={role.id}>
                    <h3>{role.nom}</h3>
                    <p>Capacité : {role.description}</p>
                </div>
            ))}


            <h2>Joueurs</h2>
            {joueurs.map(joueur => (
                <div key={joueur.id}>
                    <h3>{joueur.nom}</h3>
                    <p>Rôle : {roles.find(role => role.id === joueur.role_id)?.nom}</p>
                    <p>Position : {villes.find(ville => ville.id === joueur.position_id)?.nom}</p>
                    <p>Cartes :</p>
                    <ul>
                        {joueur.cartes.map(carte => (
                            <li key={carte.id}>{cartes.find(c => c.id === carte)?.title}</li>
                        ))}
                    </ul>
                </div>
            ))}

            <h2>Cartes</h2>
            {cartes.map(carte => (
                <div key={carte.id}>
                    <h3>{carte.titre}</h3>
                    <p>Type : {carte.type}</p>
                    <p>Couleur : {carte.couleur}</p>
                    <p>Description : {carte.description}</p>
                </div>
            ))}
        </div>
    );
}

export default Game;
