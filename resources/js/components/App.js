import React, { Component } from 'react'
import Categories from './Categories'
import Circles from './Circles'
import Years from './Years'
import Store from "../store";

export default class App extends Component {
    state = Store.getState()

    render() {
        return (
            <div className="container">
                {console.log(this.state)}
                <Categories categories={this.state.categories}/>
                <Circles circles={this.state.circles}/>
                <Years/>
            </div>
        )
    }
}
