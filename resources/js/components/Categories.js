import React, { Component } from "react"
import { Line } from "rc-progress"
import { COLOR } from "../constants/Colors"

export default class Categories extends Component {
    renderCategories() {
        return this.props.categories.map((cat, i) =>
            <li key={"cat_" + i} className="col-6 row my-4">
                <div className="col-1 mr-4 text-capitalize">{cat.title}</div>
                <div className="col-9">
                    <div className="category__value">
                        {cat.value}
                    </div>
                    <Line
                        percent={cat.value/cat.maxValue*100}
                        strokeColor={COLOR[i]}
                        strokeWidth="7"
                        trailWidth="7"
                        trailColor={COLOR.trail}
                    />
                </div>
            </li>
        )
    }

    render() {
        return (
            <section className="col-6">
                <h3>Categories</h3>
                <ul className="row list-unstyled">
                    {this.renderCategories()}
                </ul>
            </section>
        )
    }
}
