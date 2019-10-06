import React, { Component } from 'react'
import { Line } from "rc-progress"
import { COLOR } from '../constants/Colors'

export default class Categories extends Component {
    renderCategories() {
        return this.props.categories.map((cat, i) =>
            <li key={'cat_' + i}>
                {cat.title}
                <Line percent={cat.value/cat.maxValue*100} strokeColor={COLOR[i]}/>
                {console.log(COLOR[i])}
            </li>
        )
    }

    render() {
        return (
            <section>
                <h3>Categories</h3>
                <ul>
                    {this.renderCategories()}
                </ul>
            </section>
        )
    }
}
