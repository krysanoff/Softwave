import React, { Component } from 'react';

export default class Years extends Component {
    years = JSON.parse(document.getElementById('years').dataset.years)

    getYears() {
        return this.years.map((item, i) =>
            <li key={'year_' + i}>{item.year}</li>
        )
    }

    render() {
        return (
            <ul>
                {this.getYears()}
            </ul>
        )
    }
}
