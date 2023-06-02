import React, { Component } from 'react';

class Board extends Component {
    render() {
        const { cities } = this.props;
        return (
            <div className="board">
                {cities.map(city => (
                    <City key={city.id} {...city} />
                ))}
            </div>
        );
    }
}

class City extends Component {
    render() {
        const { name, diseases } = this.props;
        return (
            <div className="city">
                <h2>{name}</h2>
                {diseases.map(disease => (
                    <Disease key={disease.id} {...disease} />
                ))}
            </div>
        );
    }
}

class Disease extends Component {
    render() {
        const { type, count } = this.props;
        return (
            <div className="disease">
                <p>Type: {type}</p>
                <p>Count: {count}</p>
            </div>
        );
    }
}

export default Board;
