import React from 'react';
import ReactDOM from 'react-dom';
import Categories from './components/Categories'
import Circles from './components/Circles'
import Years from './components/Years'

const App = () => (
    <div className="container">
        <Categories/>
        <Circles/>
        <Years/>
    </div>
)

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'))
}
