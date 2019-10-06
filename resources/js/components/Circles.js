import React, { Component } from "react";
import {Circle, Line} from "rc-progress";
import {COLOR} from "../constants/Colors";

export default class Circles extends Component {
    renderCircles() {
        return this.props.circles.map((circle, i) =>
            <li className="col-6" key={"circle_" + i}>
                <h4>Circle {i + 1}</h4>
                <div className="position-relative w-100">
                    <div className="circle__value">{circle.value}/100</div>
                    <Circle
                        percent={circle.value}
                        strokeColor={{
                            "0%": COLOR.START[i],
                            "100%": COLOR[i]
                        }}
                        strokeWidth="7"
                        strokeLinecap="square"
                        trailWidth="0"
                        trailColor={COLOR.trail}
                    />
                </div>

            </li>
        )
    }
    render() {
        return (
            <section className="col-3">
                <h3>Circles</h3>
                <ul className="list-unstyled row">
                    {this.renderCircles()}
                </ul>
            </section>
        )
    }
}
