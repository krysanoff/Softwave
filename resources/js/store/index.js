import dispatcher from "../utils/Dispatcher"
import { EventEmitter } from "events"
import * as Action from "../constants/ActionTypes"

let storeData = JSON.parse(document.getElementById("store").dataset.store)

class Store extends EventEmitter {
    getState() {
        return storeData
    }

    handleActions(action) {
        switch(action.type) {
            case Action.YEAR.GET:
                storeData = action.response
                console.log(action.response)
                this.emit("updateState")
                break

            default:
                console.log("There isn't the action type - " + action.type)
                break
        }
    }
}

const store = new Store()
dispatcher.register(store.handleActions.bind(store))
export default store
