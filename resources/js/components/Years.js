import React, { Component } from "react";
import { getYear } from "../actions";

export default class Years extends Component {
    years = JSON.parse(document.getElementById('years').dataset.years)

    getYears() {
        return this.years.map((item, i) =>
            <li className="my-2" key={"year_" + i}>
                <a href="#"
                   role="button"
                   className={"btn btn-outline-secondary"}
                   onClick={(e) => this.handleYearClick(e, item.year)}>
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

    handleYearClick(e, year) {
        e.preventDefault()
        getYear(year)
    }
}
