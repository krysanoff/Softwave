import React, { Component } from 'react';

export default class Years extends Component {
    years = JSON.parse(document.getElementById('years').dataset.years)

    getYears() {
        return this.years.map((item) =>
            <li>{item.year}</li>
        )
    }

    render() {
        return (
            <section>
                {console.log(this.years)}
                {this.getYears()}
            </section>
        )
    }
}
