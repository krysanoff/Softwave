import React, { Component } from "react";
import { getYear } from "../actions";

export default class Years extends Component {
    years = JSON.parse(document.getElementById('years').dataset.years)

    state = {
        activeYear: this.years[0].year
    }

    getYears() {
        return this.years.map((item, i) => {
                let active = ""
                if (item.year == this.state.activeYear) {
                    active = "active";
                }

                return(
                    <li className="col-4 col-md-12 my-md-2" key={"year_" + i}>
                        <a href="#"
                           role="button"
                           className={"btn btn-outline-secondary " + active}
                           onClick={(e) => this.handleYearClick(e, item.year)}>
                            {item.year}
                        </a>
                    </li>
                )
            }
        )
    }

    render() {
        return (
            <div className="col-12 col-md-3 order-md-3">
                <h3>Years</h3>
                <ul className="row list-unstyled">
                    {this.getYears()}
                </ul>
            </div>
        )
    }

    handleYearClick(e, year) {
        e.preventDefault()
        getYear(year)
        this.setState({
            activeYear: year
        })
    }
}
