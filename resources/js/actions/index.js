import * as action from "../constants/ActionTypes"
import dispatcher from "../utils/Dispatcher"

export function getYear(year) {
    fetch("api/years/" + year)
        .then(response => response.json())
        .then(responseObject => {
            dispatcher.dispatch({
                type: action.YEAR.GET,
                response: responseObject
            })
        })
        .catch(error => {
            console.error("YEAR.GET Problem: " + error.message)
        })
}
