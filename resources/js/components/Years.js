import React, { Component } from "react";

export default class Years extends Component {
    years = JSON.parse(document.getElementById('years').dataset.years)

    getYears() {
        return this.years.map((item, i) =>
            <li className="my-2" key={"year_" + i}>
                <a href="#" role="button" className={"btn btn-outline-secondary"} onClick={(e) => this.getYearData(e, item.year)}>
                    {item.year}
                </a>
            </li>
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

    getYearData(e, year) {
        e.preventDefault()
        console.log(year)
    }
}
