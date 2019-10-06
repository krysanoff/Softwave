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
            <div className="col-3">
                <h3>Years</h3>
                <ul className="list-unstyled">
                    {this.getYears()}
                </ul>
            </div>
        )
    }
}
