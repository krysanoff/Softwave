import React, { Component } from 'react';

export default class Circles extends Component {
    renderCircles() {
        return this.props.circles.map((circle, i) =>
            <li key={'circle_' + i}>Circle {i + 1} - {circle.value}</li>
        )
    }
    render() {
        return (
            <section className="col-3">
                <h3>Circles</h3>
                <ul className="list-unstyled">
                    {this.renderCircles()}
                </ul>
            </section>
        )
    }
}
