import React, { Component } from 'react'
import { Line } from "rc-progress"
import { COLOR } from '../constants/Colors'

export default class Categories extends Component {
    renderCategories() {
        return this.props.categories.map((cat, i) =>
            <li key={'cat_' + i} className="col-6 row">
                <div className="col-1 px-1">{cat.title}</div>
                <div className="col-11">
                    <Line percent={cat.value/cat.maxValue*100} strokeColor={COLOR[i]}/>
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
