import React, { useState } from 'react';
import axios from 'axios';

function JoinGame({ roles }) {
    const [playerName, setPlayerName] = useState('');
    const [roleId, setRoleId] = useState('');

    const handleSubmit = async (event) => {
        event.preventDefault();

        try {
            const response = await axios.post('/game/join', {
                player_name: playerName,
                role_id: roleId,
            });

            // handle the response, e.g. by updating the state of your game component
        } catch (error) {
            // handle the error, e.g. by displaying an error message to the user
        }
    };

    return (
        <form onSubmit={handleSubmit}>
            <input type="text" value={playerName} onChange={(e) => setPlayerName(e.target.value)} placeholder="Enter your player name" required />
            <select value={roleId} onChange={(e) => setRoleId(e.target.value)} required>
                <option value="">Select a role</option>
                {roles.map((role) => (
                    <option key={role.id} value={role.id}>{role.name}</option>
                ))}
            </select>
            <button type="submit">Join game</button>
        </form>
    );
}

export default JoinGame;
